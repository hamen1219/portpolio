<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
	Board Controller : 게시물의 CRUD 및 Paging 담당.

*/


class Board extends CI_Controller {

	/***********************************
		생성자 >> 라이브러리 및 모델 로드
	***********************************/

	public function __construct()
	{
		parent::__construct(); //오버라이드 
		$this->load->model('user_m', 'user',TRUE);
		$this->load->model('reply_m', 'reply',TRUE);	
	}

	/***********************************
		header footer 사이 들어온 메서드 넣기	
	***********************************/
	public function _remap($method)
	{	
		$this->load->library('paging');
		$this->load->model('user_m', 'user',TRUE);
		$this->load->model('board_m', 'board','TRUE');

		//들어온 메서드 명
		$len = strlen($method); 
		$url = urldecode($this->uri->uri_string());
		$num = strpos($url, $method)+$len+1;
		$param = substr($url, $num);
		$url_arr = explode('/',$param);
		$cnt = count($url_arr);
		if(empty($url_arr[0])) $cnt = 0;	

		//세션 정보를 담아 보낸다
		$user = $this->sess->get_sess();
      
		$data['user'] = $user;
		$this->load->view('homepage/base/header', $data);	
		if(method_exists($this, $method)) 
		{			
			//매개변수 3개까지 받아보기
			switch ($cnt) {
				case 0:
					$this->$method();
					break;
				case 1:
					$this->$method($url_arr[0]);
					break;	

				default :
					$this->$method();
					break;
			}
		}
		else
		{
			//없다면 에러페이지.
			$this->load->view('homepage/alert/error');
		}
		$this->load->view('homepage/base/footer');	
	}

	/***********************************
		=== 게시물 페이지 종류 ===
		read   : 게시물 상세 페이지
		update : 게시물 수정 페이지
		list   : 자유게시판
		notice : 공지사항
		help   : 건의사항
		dept   : 부서별
	***********************************/

	//게시물 상세보기
	public function read($mode = "")
	{
		
		//1. url 검사
		$page = $this->paging->get_segment('page');
		if(!$page)
		{
			$this->sess->get_access('alert', '', '잘못된 접근입니다.');
		}

		//2. 회원 로그인 검사
		$this->sess->get_access(0, "/main/login");

		//3. 게시물 불러오기
		$user = $this->sess->get_sess();	
		$data['user'] = $user['id'];

		if(!$board=$this->board->getBoard($page, $user['id']))
		{
			//var_dump($this->db->last_query());
			$data['msg'] = "해당 페이지가 존재하지 않습니다";
			$this->load->view('homepage/alert/error', $data);	
			return;
		}

		//4. 유저 권한 확인
		if($user['perm'] !== "관리자" && $user['perm'] != "부관리자")
		{
			//게시물 작성자 정보
			$board_user = $this->user->getUser($board['user']);

			//블라인드 게시판
			if($board['perm'] == "블라인드")
			{
				$this->sess->get_access('alert', '', '관리자에 의해 제한된 게시물입니다');
			}			
		}
	
		//5. 페이지 조회수 증가
		$this->board->setView($page);
		$data['board'] = $board;		
		$data['side'] = $this->board->getSideBoards();		
		
		$rs = $this->reply->getReply($page,$user['id']);
		$data['reply'] = isset($rs['rs']) ? $rs['rs'] : 0;
		$data['reply_cnt'] = isset($rs['num']) ? $rs['num'] : 0;

		$this->load->view('homepage/board/crud/read', $data);	
		
	}

	public function write()
	{
		$this->sess->get_access(0, "/main/login");
		//페이지 정보 필요 없음.
		$arr = explode('/',$this->uri->uri_string());
		
		//최근게시물 side 값 구해서 넘기기
		$data['side'] = $this->board->getSideBoards();	
		$data['user'] = $this->sess->get_sess();
		$data['cat'] = $this->paging->get_segment('cat');		
		$this->load->view('homepage/board/crud/write', $data);	
	}

	//업데이트 페이지 
	public function update()
	{
		//로그인 하지 않은 경우
		$this->sess->get_access(0, "/main/login");

		//로그인 확인 된 경우
		$user = $this->sess->get_sess();
		$page = $this->paging->get_segment('page');

		if(!$page)
		{
			$this->sess->get_access('alert', '', '잘못된 페이지 정보입니다');
		}

		//해당 페이지 번호의 게시물
		$rs = $this->board->getBoard($page);

		if(!$rs)
		{
			$this->sess->get_access('alert', '', '해당 게시물이 없습니다');
		}

		//게시물 작성자가 아닌 사람이 접근했을 때
		if($rs['user'] !== $user['id'])
		{
			//관리자, 부관리자만 허용
			if($user['perm'] != "관리자" && $user['perm'] != "부관리자")
			{
				$this->sess->get_access('alert', '', '수정 권한이 없습니다');
			}			
		}

		//현 게시물 정보, 최근 게시물 정보 불러오기
		$data['board'] = $rs;
		$data['side'] = $this->board->getSideBoards();	


		$this->load->view('homepage/board/crud/update', $data);	
	}

	/****************************************
		카테고리별 게시물 리스트 페이지 이동 
	****************************************/

	//전체 결과 검색시 (메인페이지)
	public function total()
	{
		$data = $this->paging->list($this->input->post() ,'board/total');

		$data['title'] = '전체게시물';
		$data['cat_link'] = $this->getCatLink();  
		$data['url'] = "board/total";
		$this->load->view('homepage/board/list', $data);
	}

	//자유게시판 
	public function list()
	{		
		$data = $this->paging->list($this->input->post() ,'board/list', 'list');
		
		$data['title'] = '자유게시판';
		$data['cat_link'] = $this->getCatLink($data['title']);  
		$data['url'] = "board/list";
		$this->load->view('homepage/board/list', $data);

	}

	//공지사항 게시판 
	public function notice()
	{	
		$data = $this->paging->list($this->input->post() ,'board/notice', 'notice');
		$data['title'] = '공지사항';		
		$data['cat_link'] = $this->getCatLink($data['title']);  
		$data['url'] = "board/notice";
		$this->load->view('homepage/board/list', $data);
	}

	//건의사항 게시판
	public function help()
	{	
		$data = $this->paging->list($this->input->post() ,'board/help', 'help');
		$data['title'] = '건의사항';
		$data['cat_link'] = $this->getCatLink($data['title']);   
		$data['url'] = "board/help";
		$this->load->view('homepage/board/list', $data);
	}

	//qna 게시판 
	public function qna()
	{	
		$data = $this->paging->list($this->input->post() ,'board/qna', 'qna');
		$data['title'] = 'Q&A';
		$data['cat_link'] = $this->getCatLink($data['title']);  
		$data['url'] = "board/qna";
		$this->load->view('homepage/board/list', $data);
	}

	//부서별 게시판 
	public function dept()
	{			
		$this->sess->get_access(0);	
		$user = $this->sess->get_sess();

		$data = $this->paging->list($this->input->post() ,'board/dept', 'dept', $user['dept']);
		$data['title'] = '부서별';
		$data['sub_title'] = "(".$user['dept'].")";
		$data['cat_link'] = $this->getCatLink($data['title']);   
		$data['url'] = "board/dept";
		$this->load->view('homepage/board/list', $data);
	}

	//자기소개 게시판 
	public function intro()
	{	
		$data = $this->paging->list($this->input->post() ,'board/intro', 'intro', '', 6);
		//var_dump($data);
		$data['title'] = '자기소개';
		$data['cat_link'] = $this->getCatLink($data['title']);  
		$data['url'] = "board/intro";
		$this->load->view('homepage/board/intro_list', $data);
	}

	//임원진 게시판
	public function admin()
	{	
		$data = $this->paging->list($this->input->post() ,'board/admin', 'admin');
		$data['title'] = '임원진 커뮤니티';
		$data['cat_link'] = $this->getCatLink($data['title']);  
		$data['url'] = "board/intro";
		$this->load->view('homepage/board/list', $data);
	}

	public function myboard()
	{
		$rs = $this->paging->get_segment('myboard');
		if($rs)
		{
			$data = $this->paging->list($this->input->post() ,'board/myboard/'.$rs, 'myboard', $rs);
			$title = "사용자 게시물";
			$data['cat_link'] = $this->getCatLink($title);  
			$data['title'] = $rs."님의 게시물";
			$data['url'] = "board/intro";
			$this->load->view('homepage/board/list', $data);
		}		
	}

	//카테고리 링크 만드는 함수
	public function getCatLink($title = "")
	{		
		//링크 목록 
		$link_arr = ['공지사항', '자유게시판', '건의사항', 'Q&A', '자기소개', '부서별'];
		$url_arr = ['board/notice', 'board/list', 'board/help', 'board/qna', 'board/intro', 'board/dept'];

		if($title == "임원진 커뮤니티" || $title == "전체" || $title == "사용자 게시물")
		{
			//link 전체 사용, 현재 title은 넣지 않는다.
			$link_arr = $link_arr;
		}
		else
		{
			//현재 카테고리명에 해당하는 배열 탐색 후 원소 빼준다.
			$cnt = 0;
			foreach($link_arr as $val)
			{
				if($title == "")
				{
					break;
				}
				else if($val == $title)
				{
					unset($link_arr[$cnt]);
					$link_arr = array_values($link_arr);

					unset($url_arr[$cnt]);
					$url_arr = array_values($url_arr);
				}
				//다음 배열 탐색 위해 cnt 증가
				$cnt++;			
			}
		}	
		
		//링크 만들기 코드 시작 
		$str = "<div id = \"a_group\">";
		$len = count($link_arr);		
		$cnt = 0;

		//링크만들기
		foreach($link_arr as $val)
		{
			//var_dump($url_arr);
			$str .= "<a href='/".$url_arr[$cnt]."'>".$link_arr[$cnt]."</a>";

			//마지막 제외한 게시판 문자열 뒤에는 |을 붙여준다.
			if($cnt < $len-1)
			{
				$str .= " | ";
			}
			else
			{
				$str .= "</div>";	
			}			
			$cnt++;
		}			
		return $str;
	}
}

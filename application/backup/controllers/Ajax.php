<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AjAX extends CI_Controller {	
	//AJAX 통신 담당하는 컨트롤러
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_m', 'user', TRUE);
		$this->load->model('board_m', 'board', TRUE);
		$this->load->model('reply_m', 'reply', TRUE);
		$this->load->library('upfile');	
		$this->load->library('comp');		
	}

	public function get_ajax($mode)
	{
		//var_dump($mode); exit;

		$this->checkForm();

		//폼데이터가 있다면
		$form = $this->input->post();

		if($mode == "id")
		{
			$id = $form['tid'];
			$rs = $this->user->checkUser($id);
			if(!$rs)
			{
				$data["msg"] = "이미 사용중인 아이디입니다";
				$data["code"] = 0;
			}
			else
			{
				$data["msg"] = "사용 가능한 아이디입니다";
				$data["code"] = 1;
			}
		}

		//로그인 모드
		else if($mode == "login")
		{
			$id = $form['tid'];
			$pw = $form['tpw'];

			$rs = $this->user->checkUser($id, $pw);
			if($rs === 1)
			{
				//유저 정보 세션에 등록
				$user =$this->user->getUser($id);
				$us['user'] = $user;				
				$this->session->set_userdata($us);

				//사용자 id 등록
				$this->user->setVisit($user['id']);
				$data["msg"] = "로그인 성공";
				$data["code"] = 1;
			}
			else if(!$rs)
			{
				$data["msg"] = "존재하지 않는 아이디입니다";
				$data["code"] = 0;
			}
			else if($rs === -1)
			{
				$data["msg"] = "비밀번호가 일치하지 않습니다";
				$data["code"] = -1;
			}
		}

		else if($mode == "join")
		{
			//아이디 중복확인
			$id = $form['tid'];
			$rs = $this->user->checkUser($id);

			if($rs) //사용중
			{
				$data["msg"] = "사용중인 아이디입니다";
				$data["code"] = -1;
			}
			else
			{
				//파일 업로드 시도 (실패해도 메세지 x)
				$user = $this->sess->get_id();
				$url = "./img/users/".$user."/profile/";
				$do_upload = $this->upfile->do_upload("img_file", $url);
				$form['img'] = $do_upload; 
			}	

			//사용자 정보 쿼리 배열화
			$form = $this->comp->user($form);
			$rs = $this->user->joinUser($form);

			if(!$rs)
			{
				$data["msg"] = "회원가입에 실패하였습니다";
				$data["code"] = 0;
			}
			else
			{
				$data["msg"] = "회원가입에 성공하였습니다";
				$data["code"] = 1;
				//방금 가입된 사용자 아이디에 해당하는 유저 정보를 찾아 세션 flash에 저장
				$id = $this->db->insert_id();
				$rs = $this->user->getUser($id);
				$this->session->set_flashdata($rs);
			}			
		}
		print json_encode($data);
	}

	//AJAX로 게시판 정보 반환. (게시판 위치 - 메인페이지)
	public function mini_board()
	{
		//$this->ajaxPerm();	
		//$this->checkForm();

		$mode = $this->input->post('board');
	
		$rs = $this->board->getAjaxBoard($mode);		

		$data = $this->get_html($rs);

		//ajax 반환
		print $data;
	}

	public function get_html($data)
    {    
    	if($data['num'] == 0)
        {
        	$msg = "등록된 게시물이 없습니다";
        }
        else if(is_array($data))
        {            
        	$msg = "<table id = 'mini_table'><tr><th>작성자</th><th>글제목</th><th>작성일</th></tr>";

        	foreach ($data['rs'] as $val) {      			
        		$msg .= "<tr><td>".$val['user']."</td><td><a href = '/board/read/page/".$val['num']."'>".$val['title']."</a></td><td>".substr($val['created'], 0,10)."</td></tr>";
        	}
        	$cat = '';
        	if($val['cat'] == "자유게시판") $cat = "list";
        	else if($val['cat'] == "공지사항") $cat = "notice";
        	else if($val['cat'] == "건의사항") $cat = "help";
        	$msg .= "<tr><td colspan = '3'><a id = 'mini_table_a' href = '/board/".$cat."'><b>";
        	$msg .= "<svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-arrow-right-circle-fill\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
					  <path fill-rule=\"evenodd\" d=\"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-11.5.5a.5.5 0 0 1 0-1h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5z\"/>
					</svg>&nbsp;";

        	$msg .= "게시판 더보기</b></tr></a></table>";
        }
    	return $msg;
    }

	/*
		$mode : good 또는 poor
		$reply_num : 좋아요 또는 싫어요 할 댓글 번호
	*/


	//유저 perm 바꾸기
	public function ctrl_user()
	{
		$this->ajaxPerm(99);	
		$this->checkForm();

		$id = $this->input->post("id");
		$mode =$this->input->post("mode");

		$where = ['id' => $id];

		//가입대기
		if($mode == "empty")
		{			
			$query = ["perm" => "가입대기"];
			$rs = $this->user->update($where, $query);
		}
		//일반
		else if($mode == "common")
		{
			$query = ["perm" => "일반"];
			$rs = $this->user->update($where, $query);
		}
		//부관리자
		else if($mode == "sub_admin")
		{
			$query = ["perm" => "부관리자"];
			$rs = $this->user->update($where, $query);
		}
		//사용자 삭제
		else if($mode == "delete")
		{
			$rs = $this->user->delete($where);
		}

		if(!$rs)
		{
			if($mode == "delete")
			{
				$data['code'] = 0;
				$data['msg'] = "사용자 삭제에 실패하였습니다"; 
			}
			else
			{
				$data['code'] = 0;
				$data['msg'] = "회원정보 수정에 실패하였습니다"; 
			}
		}
		else
		{
			if($mode == "delete")
			{
				$data['code'] = 1;
				$data['msg'] = "사용자 삭제에 성공하였습니다"; 
			}
			else
			{
				$data['code'] = 1;
				$data['msg'] = "회원정보 수정에 성공하였습니다"; 
			}
		}
		print json_encode($data);
	}


	//게시물 좋아요
	public function like_b()
	{
		$this->ajaxPerm();	
		$this->checkForm();
		
		$post = $this->input->post();
		$user = $this->sess->get_id();	

		$mode = $post['mode'];

		//좋아요, 싫어요, 보관하기에 필요한 조건은?
		$query = [
			'user' => $user,
			'board_num' => $post['board_num']			
		];

		if($mode == "good")
		{
			$from = "like_b";
			$query['good'] = 1;
		}
		else if($mode == "poor")
		{
			$from = "like_b";
			$query['poor'] = 1;
		}
		else if ($mode == "save")
		{
			$from = "save_b";
			$query['save'] = 1;
		}

		//중복된 좋아요 또는 싫어요
		if(!$this->board->insertLike($from, $query))
		{
			$data['code'] = 0;
			$data['msg'] = "board like error";
		}
		
		//좋아요 성공
		else
		{
			$data['code'] = 1;
			$data['rs'] = $this->board->getBoard($query['board_num'], $user);
			//var_dump($this->db->last_query()); 
		}

		print json_encode($data);
	}

	/*******************************
		댓글 좋아요 Ajax
	*******************************/
	public function like_r()
	{
		$this->ajaxPerm();	
		$this->checkForm();

		$post = $this->input->post();
		$mode = $post['mode'];
		$user = $this->sess->get_id();

		$query = [
			'user'      => $user,
			'reply_num' => $post['reply_num']
		];	
		if($mode == "good")
		{
			$query['good'] = 1;
		}
		else if($mode == "poor")
		{
			$query['poor'] = 1;
		}

		//좋아요, 싫어요, 찜하기 눌
		$rs = $this->reply->insertLike($query);

		if(!$rs)
		{
			$data['code'] = 0;
			$data['msg'] =  "ajax like 통신 오류";
		}
		else
		{
			$data['code'] = 1;
			$data['rs'] = $this->reply->getReply($post['board_num'], $user);
		}
		//var_dump($data); exit;

		print json_encode($data);	

	}	

	/*******************************
		댓글 쓰기 Ajax
	*******************************/
	public function reply_write()
	{
		$this->ajaxPerm();	
		$this->checkForm();

		//로그인 확인 되면 유저 데이터 및 폼데이터 가져온다.
		$user =$this->sess->get_id();
		$post = $this->input->post();

		//댓글 좋아요 입력하기 위해 필요한 것.
		//유저, 댓글번호, 좋아요 싫어요
		$query = [
			'user' => $user,
			'contents' => $post['contents'],
			'board_num' => $post['board_num']
		];

		//대댓글일때
		if(isset($post['reply_group']) && isset($post['parent_num']))
		{
			$query['reply_group'] = $post['reply_group'];
			$query['parent_num']  = $post['parent_num'];
			$rs = $this->reply->insertReply($query);	
		}
		//일반 댓글일때
		else
		{
			$rs = $this->reply->insertReply($query, "reply");	
		}

		//insert 에 실패하여 rs를 도출하지 못한다면
		if(!$rs)
		{
			$data['code'] = 0;
			$data['msg'] = "댓글 작성에 실패하였습니다";
		}		
		else
		{
			$data['code'] = 1;
			$data['msg'] = "댓글이 작성되었습니다";
			$data['rs'] = $this->reply->getReply($query['board_num'], $user);
		}							
		print json_encode($data);			
	}

	/*******************************
		댓글 지우기 Ajax
	*******************************/
	public function reply_delete()
	{
				
		$this->ajaxPerm();	
		$this->checkForm();

		$post = $this->input->post();
		//로그인 되어있는 상태에서만 작동됨.
		$user =$this->sess->get_id();

		//댓글 좋아요 입력하기 위해 필요한 것.
		//유저, 댓글번호, 좋아요 싫어요

		$query = [
			'board_num' => $post['board_num'],
			'reply_num' => $post['reply_num'],
			'user'      => $user	
		];	

		//rs : rs, num 또는 error
		$rs = $this->reply->deleteReply($query);	

		if(!$rs)
		{
			$data['code'] = 0;
			$data['msg'] = "댓글 삭제에 실패하였습니다";
		}
		else
		{
			$data['code'] = 1;
			$data['msg'] = "댓글이 삭제되었습니다";
			$data['rs'] = $this->reply->getReply($query['board_num'], $user);
		}		
		print json_encode($data);
	}


	/*******************************
		유저 권한 확인, 수정 및 탈퇴
	*******************************/
	public function check_perm()
	{
		$this->ajaxPerm();	
		$this->checkForm();

		$id = $this->sess->get_id();   
		$form = $this->input->post();
 
    	$query = [
    		'from'   => 'user',
    		'where'  => [
        		'id' => $id,
        		'pw' => $form['pw']
        	]
    	];
    	$rs = $this->user->checkPerm($query);

    	if(!$rs)
    	{
			$data['code'] = 1;
			$data['msg'] = "회원 인증에 성공하였습니다";
		}
		else
		{
			$data['code'] = 0;
			$data['msg'] = "회원 인증에 실패하였습니다";
		}
		print json_encode($data);
	}

	public function update_user()
	{
		//post로 폼데이터 전체 옴.
		$this->ajaxPerm();	
		$this->checkForm();
		//세션 유효 확인
		$user = $this->sess->get_sess();
		$form = $this->input->post();

		//패스워드 수정을 입력하지 않은 경우 pw 수정 x
		if($form['tpw'] == "")
    	{    		
    		unset($form['tpw']);
    	}

		// 폼데이터 쿼리 배열화
    	$form = $this->comp->user($form);

    	//upload 함수에 성공하면 업로드 된 파일명 반환된다
    	$url = "./img/users/".$form['id']."/profile/";
    	$do_upload = $this->upfile->do_upload('img_file', $url);
    	if($do_upload)
    	{
    		$form['img'] = $do_upload;
    	}
    	$where = ['id' => $form['id']];	
    	$rs = $this->user->update($where, $form);

    	
    	if(!$rs)
    	{    		
    		$data['code'] = 0;
    		$data['msg'] = "정보를 수정하세요 ";
    	}
    	else
    	{
    		//로그인 사용자 정보와 현재 마이페이지 사용자가 같지 않을 경우 세션 셋팅 x
    		

    		$data['user'] = $this->user->getUser($form['id']); 
    		if($user['id'] == $form['id'])
    		{
    			$this->session->set_userdata($data);    			
    		}

    		$data['code'] = 1;
    		$data['msg'] = "회원 정보를 성공적으로 수정하였습니다";			
    	}
    	print json_encode($data);
	}

	public function delete_user()
	{
		$this->ajaxPerm();	
		$this->checkForm();

		$form = $this->input->post();

		$rs = $this->user->delete($form);
		if(!$rs)
		{
			$data['code'] = 1;
			$data['msg'] = "정상적으로 탈퇴처리 되었습니다";
		}
		else
		{			
			$data['code'] = 0;
			$data['msg'] = "탈퇴에 실패하였습니다";
 	  	}
		print json_encode($result);
	}

	//게시물 관리
	public function ctrl_board()
	{
		$this->ajaxPerm();	
		$this->checkForm();

		//mode와 page 들어옴 (mode : blind 또는 delete, page : 블라인드 또는 삭제할 페이지 배열)

		$id = $this->sess->get_id();
		$page = $this->input->post('page');
		$mode = $this->input->post('mode');


		if($mode == "delete")
		{
			$rs = $this->board->deletes($page);   
			if(!$rs)
			{
				$data['code'] = 0;
			    $data['msg'] = $this->db->last_query();
			}
			else
			{
				$data['code'] = 1;
			    $data['msg'] = "게시물이 성공적으로 삭제되었습니다";
			}
   		}

		if($mode == "blind")
		{	 
			$query = ['perm' => '블라인드'];
			$rs = $this->board->updates($page, $query, "blind");

			if(!$rs)
			{
				$data['code'] = 0;
			    $data['msg'] = "블라인드 처리에 실패하였습니다".$this->db->last_query();
			}
			else
			{
				$data['code'] = 1;
			    $data['msg'] = "블라인드 처리가 완료되었습니다";
			}
		}
		print json_encode($data);	
	}

	public function intro_write()
	{
		$this->ajaxPerm();	
		$this->checkForm();
		$user = $this->sess->get_sess();

		$area = $this->input->post("contents");
		$query = [
			'user' => $user['id'],
			'perm' => $user['perm'],
			'contents' => $area
		];
		$rs = $this->board->setIntroBoard($query);
		if($rs)
		{
			$data['code'] = 1;
			$data['msg'] = "대문이 작성되었습니다";
		}
		else
		{
			$data['code'] = 0;
			$data['msg'] = "대문 작성에 실패하였습니다";
		}
		print json_encode($data);
	}

	public function email()
	{
		$this->ajaxPerm();	
		$this->checkForm();

		//이메일 작업 후 msg, code 보내주면 된다!!
	}
    public function checkForm()
	{
		$post = $this->input->post();
		if($post === null)
		{
			$result['code'] = -1;
			$result['msg'] = "폼데이터 오류";			
			print json_encode($rs);//없음...\
			exit;
		}
	}

	function ajaxPerm($mode = "")
	{
		if($this->sess->get_id() == "")
		{
			$rs['code'] = -1;
			$rs['msg'] = "사용 불가";			
			print json_encode($rs);//없음...
			exit;
		}

		$user = $this->sess->get_sess();
		$perm = $user['perm'];


		if($mode === 100)
		{
			if($perm != "관리자")
			{
				$rs['code'] = -1;
				$rs['msg'] = "권한이 없습니다";			
				print json_encode($rs);//없음...
				exit;	
			}
		}
		else if($mode === 99)
		{
			if($perm != "관리자" && $perm != "부관리자")
			{
				$rs['code'] = -1;
				$rs['msg'] = "권한이 없습니다";			
				print json_encode($rs);//없음...
				exit;	
			}

		}
	}

	public function delete_board()
	{
		$this->ajaxPerm();	
		$this->checkForm();
		$page = $this->input->post('page');
		$rs = $this->board->delete($page);
		if(!$rs)
		{
			$data['code'] = 0;
			$data['msg'] = "게시물 삭제에 실패하였습니다";
		}
		else
		{
			$data['code'] = 1;
			$data['msg'] = "게시물이 삭제되었습니다";
		}
		print json_encode($data);
	}
}
	
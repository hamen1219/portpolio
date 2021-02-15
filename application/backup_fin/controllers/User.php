<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
	Main Controller : 메인 페이지를 비롯한 홈페이지의 각 페이지 이동을 담당.
*/
class User extends CI_Controller {	
	public function __construcct()   
	{
		//CI Controller 상속
		parent::__construct();		
	}

	public function _remap($method)
	{	
		$this->load->library('paging');
		$this->load->model('user_m', 'user',TRUE);
		$this->load->model('board_m', 'board',TRUE);
		$this->load->model('baby_m', 'baby',TRUE);
		$this->load->model('message_m', 'msg',TRUE);

		//비로그인 사용자 접근 제한
		$this->sess->get_access(0, '/main/login');

		//들어온 메서드 명
		$len = strlen($method); 
		$url = urldecode($this->uri->uri_string());
		$num = strpos($url, $method)+$len+1;
		$param = substr($url, $num);
		$url_arr = explode('/',$param);
		$cnt = count($url_arr);
		if(empty($url_arr[0])) $cnt = 0;	

		$data['user'] = $this->sess->get_sess();
		if($data['user'] != "" && $data['user']['dept'] = "학부모" )
		{
			$data['unread_msg_cnt'] = $this->msg->getTotalComment($this->sess->get_id(), 'unread');
		}

		if(method_exists($this, $method)) 
		{		
			//아동 메세지의 경우 header, footer 제외
			if($method != "msg")
			{
				$this->load->view('homepage/base/header', $data);
			}					

			
			//매개변수 3개까지 받아보기
			switch ($cnt) {
				
				case 1:
					$this->$method($url_arr[0]);
					break;
				case 2:
					$this->$method($url_arr[0], $url_arr[1]);
					break;
				case 3:
					$this->$method($url_arr[0], $url_arr[1],$url_arr[2]);
					break;

				default:
					$this->$method();
					break;
			}					
		}		
		else
		{							
			$this->sess->get_access('alert', '/main', '잘못된 경로입니다');
		}

		if($method != "msg")
		{
			$this->load->view('homepage/base/footer');	
		}	
	}	

	//관리자 또는 본인만 수정가능
	//일반 유저 상세보기도 가능.

	public function myroom()
	{
		//세그먼트 분석하여 사용자 이름 가져오기 
		$seg = $this->paging->get_segment('myroom');

		//로그인 된 사용자 정보
		$login_user = $this->sess->get_sess();

		//세그먼트(사용자 ID) 있으면 
		if($seg)
		{
			//세그먼트로 들어온 유저 ID에 대한 유저 정보 가져오기
			$user = $this->user->getUser($seg);

			//유저 데이터가 존재하지 읺을 경우
			if(!$user)
			{
				$this->sess->get_access('alert', '', '유효하지 않은 사용자입니다');
			}

			//유저 데이터가 존재할 경우
			else
			{	
				//본인 또는 운영진 접속시 해당 사용자에 대한 아동 및 저장 게시물 보여주기.
				if($user['id'] == $this->sess->get_id() || $login_user['perm'] == "관리자" || $login_user['perm'] == "부관리자")
				{
					$perm = 1;
				}	
				//본인이 아닐 경우 아동 및 저장 게시물 전송 x
			}
		}
		//세그먼트로 사용자 ID가 들어오지 않은 경우 현재 세션 사용자 정보.
		else
		{
			//user : 로그인 한 유저
			//login_user : 로그인 한 유저
			$user = $login_user;
			$perm = 1;
		}

		//본인 페이지일 경우 보여지는 메뉴들
		if(isset($perm))
		{
			//아동 정보 
			$data['baby'] = $this->baby->getBaby($user['id']);

			//아동 메세지 정보
			$data['unread_msg_cnt'] = $this->msg->getTotalComment($user['id'], 'unread');				
			$data['msg_cnt'] = $this->msg->getTotalComment($user['id'], 'unread');							

			//찜하기 한 게시물 목록
			$data['mysave'] = $this->board->getMySave($user['id']);			
		}

		//user : 해당 페이지에 뿌려질 유저의 정보 (들어온 세그먼트 있을 경우 해당 사용자 정보, 없을 경우 현재 로그인 한 세션 정보)
		$data['us'] = $user;

		//사용자 작성 총 게시물....
		$rs = $this->user->getUsersBoard($user);

		//마이룸 사용자 정보
		$data['us2'] = $rs;

		//그래프 정보
		$data['us2_div'] = [			
			'total_my_b'   => $rs['total_b'] == '0' ? 0 : (150 * $rs['total_my_b'])/$rs['total_b'],
			'total_my_r'   => $rs['total_r'] == '0' ? 0 : (150 * $rs['total_my_r'])/$rs['total_r'],
			'total_good'   => $rs['total_my_b'] == '0' ? 0 : (150 * $rs['total_good'])/$rs['total_my_b'],
			'total_poor'   => $rs['total_my_b'] == '0' ? 0 : (150 * $rs['total_poor'])/$rs['total_my_b'],
			'total_save'   => $rs['total_my_b'] == '0' ? 0 : (150 * $rs['total_save'])/$rs['total_my_b'],
			'total_good_r' => $rs['total_my_r'] == '0' ? 0 : (150 * $rs['total_good_r'])/$rs['total_my_r'],
			'total_poor_r' => $rs['total_my_r'] == '0' ? 0 : (150 * $rs['total_poor_r'])/$rs['total_my_r']
		];

		$rs = $this->user->getVisitLatest($user['id']);	
		$data['visit_latest'] = $rs;		
		
		$this->load->view('homepage/user/myroom', $data);
	}


	//마이룸 내 아동 버튼 누르면 열리는 메세지 새창
	public function msg($baby, $class="")
	{
	
		if($class == "")
		{
			$this->sess->get_access('alert', 'close', '해당 아동의 반이 설정되어 있지 않습니다');
		}
		//로그인 사용자 정보
		$user = $this->sess->get_id();

		//사용자의 아동 불러오기
		$rs = $this->baby->getBaby($user, $baby);

		//아동정보 없는 경우 out
		if(!$rs)
		{
			$this->sess->get_access('alert', 'close', '아동 정보를 찾을 수 없습니다');
		}

		//학급 및 아동 정보 
		$data['class'] = $class;
		$data['baby'] = $baby;

		//학급 메세지 정보
		$data['comment'] = $this->msg->getComment($class, $user, $baby);
		$data['class_msg'] = $this->msg->getClassNotice($class,);
		$data['all_class_msg'] = $this->msg->getAllClassNotice();
		
		//게시물 읽음 표시 해주기!
		$this->msg->setCommentRead($class, $user, $baby);

		//메세지 페이지
		$this->load->view('homepage/user/message/baby_msg', $data);	
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/main');
	}	
}

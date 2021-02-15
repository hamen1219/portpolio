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
		$this->load->model('board_m', 'board','TRUE');

		//들어온 메서드 명
		$len = strlen($method); 
		$url = urldecode($this->uri->uri_string());
		$num = strpos($url, $method)+$len+1;
		$param = substr($url, $num);
		$url_arr = explode('/',$param);
		$cnt = count($url_arr);
		if(empty($url_arr[0])) $cnt = 0;	

		//로그인 된 사용자의 세션 정보를 담아 보낸다
		$data['user'] = $this->sess->get_sess();
		$this->load->view('homepage/base/header', $data);	
		if(method_exists($this, $method)) 
		{	
			//로그인 되지 않았을 경우 거절
			$this->sess->get_access(0, '/main/login');
			
			//매개변수 3개까지 받아보기
			switch ($cnt) {
				case 0:
					$this->$method();
					break;
				case 1:
					$this->$method($url_arr[0]);
					break;	
				default:
					$this->$method($url_arr[0], $url_arr[1], $url_arr[2]);
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

	//관리자 또는 본인만 수정가능
	//일반 유저 상세보기도 가능.

	public function myroom()
	{
		//1. 비로그인 사용자 접근 제한
		$this->sess->get_access(0, '/main/login');

		//2. 사용자 정보 저장 (특정 사용자 세그먼트로 들어오지 않았을 경우 세션 사용자 사용)
		$seg = $this->paging->get_segment('myroom');
		if(!$seg)
		{
			$user = $this->sess->get_sess();
		}
		else
		{
			$user = $this->user->getUser($seg);
			if(!$user)
			{
				$this->load->view("homepage/alert/error");
				return;
			}
		}
		$data['us'] = $user;

		$rs = $this->user->getUsersBoard($user);
		//var_dump($rs['total_b']);

		//$data['us2'] = $rs;

		$data['us2'] = $rs;

		$data['us2_div'] = [			
			'total_my_b'   => $rs['total_b'] == '0' ? 0 : (130 * $rs['total_my_b'])/$rs['total_b'],
			'total_my_r'   => $rs['total_r'] == '0' ? 0 : (130 * $rs['total_my_r'])/$rs['total_r'],
			'total_good'   => $rs['total_my_b'] == '0' ? 0 : (130 * $rs['total_good'])/$rs['total_my_b'],
			'total_poor'   => $rs['total_my_b'] == '0' ? 0 : (130 * $rs['total_poor'])/$rs['total_my_b'],
			'total_save'   => $rs['total_my_b'] == '0' ? 0 : (130 * $rs['total_save'])/$rs['total_my_b'],
			'total_good_r' => $rs['total_my_r'] == '0' ? 0 : (130 * $rs['total_good_r'])/$rs['total_my_r'],
			'total_poor_r' => $rs['total_my_r'] == '0' ? 0 : (130 * $rs['total_poor_r'])/$rs['total_my_r']
		];

		$rs = $this->user->getVisitLatest($user['id']);

		if($rs)
		{
			$data['visit_latest'] = $rs['visited'];
		}
		
			//들어온 아이디에 대한 결과 뽑은 후

		$code = 0;

		if(($user['perm'] == "관리자" || $user['perm'] == "부관리자") || $user['id'] == $seg)
		{
			$code = 1;
		}		
	
		$data['code'] = $code;


		$this->load->view('homepage/user/myroom', $data);
	}


	//사용자 확인 후 사용자 작성 게시물 불러오기.
	public function my_board()
	{
		// 0또는 value
		$user = $this->paging->get_segment('my_board');

		if(!$user)
		{
			$this->sess->get_access('alert', '', '올바르지 않은 경로입니다');
		}
		//else
		$url = "user/my_board/".$user;
		$data = $this->paging->list("", $url, 'user_board', $user);
		$data['user'] = $user;

		$this->load->view('homepage/board/user_board_list', $data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/main');
	}
}

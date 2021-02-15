<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
	Main Controller : 메인 페이지를 비롯한 홈페이지의 각 페이지 이동을 담당.
*/
class Main extends CI_Controller {	
	public function __construcct()   
	{
		//CI Controller 상속
		parent::__construct();
		//user, board 모델 불러오기 (DB 셋팅상태)
		$this->load->model('board_m', 'board', TRUE);
		$this->load->model('user_m', 'user', TRUE);  
	}

	/************************************************************
		remap 함수를 이용하여 header, footer 사이에 메서드 삽입
	*************************************************************/
	public function _remap($method) 
	{	
		$this->load->model('board_m', 'board', TRUE);
		$this->load->model('user_m', 'user', TRUE);  
		//현재 세션 값 헤더 페이지에 넘겨주기.
		$data['user'] = $this->sess->get_sess();
		$this->load->view('homepage/base/header', $data);	

		//메서드 확인되면 
		if(method_exists($this, $method)) 
		{
			//메서드 실행
			$this->$method();			
		}
		else
		{
			//메서드가 존재하지 않는다면 에러페이지
			$this->load->view('homepage/alert/error');
		}
		//footer
		$this->load->view('homepage/base/footer');	
	}

	
	/***********************************
		index == 메인페이지
	***********************************/
	public function index()
	{
			
		$data['lb_max']  = $this->user->getLikeBoardMax();		
		$data['sb_max']  = $this->user->getSaveBoardMax();	
		$data['lr_max']  = $this->user->getLikeReplyMax();	
		$data['b_max']   = $this->user->getBoardMax();	
		$data['r_max']   = $this->user->getReplyMax();		
		$data['v_max']   = $this->user->getVisitMax();	

		$data['intro']   = $this->board->getIntroBoard();	
		$data['gallary'] = $this->board->getGallaryBoard();	
		$data['meeting'] = $this->board->getMeeting();

		$data['v_today'] = $this->user->getVisitToday();
		$data['v_total'] = $this->user->getVisitTotal();
	


		$this->load->view('homepage/home', $data);
	}

	/***********************************
		=== 회원 관련 페이지 ===
		join_index : 약관동의 페이지
	***********************************/

	public function login()
	{
		$this->sess->get_access(1);		
		$this->load->view('homepage/user/login');
	}

	//회원가입 페이지
	public function join()
	{
		$this->sess->get_access(1, '/main');
		$this->load->view('homepage/user/join');
	}

	/*********************************************************
		=== 1번 메뉴 페이지 ===
	**********************************************************/

	public function greeting()
	{
		$this->load->view('homepage/about/hp/greeting');
	}

	public function intro()
	{
		$this->load->view('homepage/about/hp/intro');
	}

	public function map()
	{
		$this->load->view('homepage/about/hp/map');
	}


	/*********************************************************
		=== 2번 메뉴 페이지 ===
	**********************************************************/

	public function intro_me()
	{
		$this->load->view('homepage/about/dev/intro');
	}

	public function language()
	{
		$this->load->view('homepage/about/dev/language');
	}

	public function library()
	{
		$this->load->view('homepage/about/dev/library');
	}

	public function timeline()
	{
		$this->load->view('homepage/about/dev/timeline');
	}

	
	/*********************************************************
		=== 알림 페이지 ===
		error        : 에러 페이지 (에러메세지 넣어 보낼 수 있음)
		success_join : 회원가입 성공 페이지 (flashdata 사용)
	**********************************************************/

	public function error($msg = "", $error = "")
	{
		//기본 에러 메세지
		$data['msg'] = "오류가 발생하였습니다";

		//사용자 에러 메세지 받아오기
		if($msg !== "")
		{
			$data['msg'] = $msg;
		}
		if($error !== "")
		{
			$data['error'] = $error;
		}

		$this->load->view('homepage/alert/error', $data);
	}

	public function success_join()
	{
		//flash 데이터 넘겨주기
		$data['user'] = $this->session->flashdata();
		$this->load->view('homepage/alert/success_join', $data);
	}

	public function test()
	{
		$data['user'] = $this->sess->get_sess();
		$this->load->view('homepage/alert/success_join', $data);
	}
}
	    
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {	
	//관리자 모드 컨트롤러
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_m', 'user', TRUE);
		$this->load->model('board_m', 'board', TRUE);		
	}

	//remap을 이용한 header, method, footer 합치기 ========
	public function _remap($method) 
	{	
		//로그인 되지 않은 경우 거절	
		$this->sess->get_access(0, '/main/login');

		//현재 로그인 사용자가 관리자, 부관리자가 아닐 경우 거절
		$user = $this->sess->get_sess();
		if($user['perm'] !== '관리자' && $user['perm'] !== '부관리자')
		{
			$this->sess->get_access('alert', '/main', '관리자 권한이 아닙니다.');
		}

		//헤더 (사용자 정보 넘겨준다)
		$data['user'] = $user;
		$this->load->view('homepage/base/header', $data);	

		//메서드 확인되면 실행
		if(method_exists($this, $method)) 
		{
			$this->$method();			
		}
		//해당 메서드 없다면 에러페이지
		else
		{
			$this->load->view('homepage/alert/error');
		}
		//footer
		$this->load->view('homepage/base/footer');	
	}

	//관리자 페이지 초기화면
	public function index()
	{
		$user = $this->sess->get_sess();

		//1. 현재 사용자의 데이터
		$data['user'] = $user;

		//2. 대문 데이터 가져오기
		$data['intro'] = $this->board->getIntroBoard();

		//2. 전체 사용자 목록 가져오기 (return : 0 또는 rs, num)
		$data['user_empty'] = $this->user->getUserEmpty();
		$data['user_common'] = $this->user->getUserCommon();
		$data['sub_admin'] = $this->user->getUserSubAdmin();
		$data['visit'] = $this->user->getVisit();

		//3. 전체 게시물 목록 가져오기
		$data['board'] = $this->board->getBoards();

		//4. 전체 방문자 목록 가져오기		

		//관리자 페이지로 데이터 넘겨주기
		$this->load->view('homepage/admin/main', $data);	
	}	
}



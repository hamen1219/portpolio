<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function __construct()
	{
		parent::__construct(); //오버라이드 
		$this->load->model('user_m', 'user',TRUE);
		$this->load->library('result','TRUE');
	}

	//remap을 이용한 header, method, footer 합치기 ========
	public function index()
	{	
		$this->load->library('paging');
		$this->load->library('comp');
		$arr = ['tnase' => 'ddd'];
		$data['msg'] = $this->comp->user($arr);
		//$data = $this->paging->list($this->input->post() ,'test/test2', 'notice');
		$this->load->view('test', $data);
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//세션 라이브러리
class Sess
{
	protected $CI; 

	public function __construct() //라이브러리 로드시 사용될 데이터
	{		
		$this->CI = & get_instance(); //생성자 실행시 ci의 this 객체 얻어오기.
	}

	/****************************
		=== get_sess ===
		사용자 세션 값 얻어오는 함수
		유저 세션 데이터인 $user 를 반환한다.
	****************************/
	public function get_id()
	{
		if($this->CI->session->has_userdata('user') === false)
		{	
			return 0;
		}	
		//로그인 세션 값이 있다면
		else
		{
			$user = $this->CI->session->userdata('user')['id'];
			return $user;

		}

	}	
	public function get_sess()
	{
		//로그인 세션 값이 없다면
		if($this->CI->session->has_userdata('user') === false)
		{	
			return 0;
		}
		//로그인 세션 값이 있다면
		else
		{
			$user = $this->CI->session->userdata('user');
			return $user;
		}
	}

	/*****************************************************
		=== get_access  ===
		mode : 0 => 비로그인 접근시, 1 => 로그인 접근시 
		url : redirect 주소
		msg : alert 메세지
	*****************************************************/
	public function get_access($mode='', $url='', $msg = '')
	{
		//rs에 세션 유무 확인 : true, false

		 $rs = $this->CI->session->has_userdata('user'); 
	
		//mode : 0 => 로그인 안한 사용자 거부, 1 => 로그인 한 사용자 거부

		if($mode === 0)
		{
			if(!$rs) //세션이 업다면 
			{
				print "<script>alert('로그인이 필요합니다');</script>";	
				if($url != '') //입력 url 있으면
				{
					print "<script>location.href = '".$url."'</script>";	
				} //입력 값 없으면 이동 x					
				else
				{
					print "<script>history.back()</script>";							
				}			
				exit;
			}
		}
		else if($mode === 1)
		{
			$str = "로그아웃이 필요합니다";
			if($rs === true) //세션이 업다면 
			{
				print "<script>alert('로그아웃이 필요합니다');</script>";	
				if($url != '') //입력 url 있으면
				{
					print "<script>location.href = '".$url."'</script>";	
				} //입력 값 없으면 이동 x					
				else
				{
					print "<script>history.back()</script>";							
				}						
				
			}
		}
		else if($mode === 'alert')
		{
			if($msg != '')
			{					
				print "<script>alert('".$msg."');</script>";	
			}				
			if($url != '')
			{
				print "<script>location.href = '".$url."'</script>";	
			}
			else
			{
				print "<script>history.back()</script>";
										
			}			
		}
	}



	//==================================================================================

	/*
		== get_perm 함수 ==
		mode : admin, dept, perm, my (관리자인지, 동부서인지, 권한되는지, 내권한인지)
		url : redirect 주소
		msg : alert 메세지
	*/

	//게시물 관련하여 세션 확인
	public function get_perm($mode, $where, $url, $msg='') 
	{
		//mode 에는 perm,dept,my 있다. where은 조건문이 아닌 하나의 데이터
		if ($this->session->has_userdata('user') === false)
		{
			$this->get_access(0, '/main'); //로그인부터 확인
			return;
		}
		//else라면
		$user = $this->session->userdata('user');
		if($mode == 'admin') //관리자 외 출입금지
		{
			if($user['perm'] != 100 ) $str = "관리자만 접근 가능합니다";
		}
		else if($mode == 'dept') //부서 외 출입금지
		{
			if($user['dept'] != $where)  $str = "같은 부서만 접근 가능합니다";
		}
		else if($mode == 'perm') //등급 외 출입금지
		{
			if($user['perm'] != $where)  $str = "권한이 부족합니다";
		}
		else if($mode == 'my') //내 게시물 접근
		{
			if($user['id'] != $where)  $str = "작성자만 접근 가능합니다";
		}
		else{
			$str = "알수없음";
		}
		print "<script>alert(".$str.")</script>";
	}
}

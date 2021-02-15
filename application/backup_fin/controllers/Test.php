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

	}

	public function snoopy()
	{
		 require('./static/lib/snoopy/Snoopy.class.php');

	    //스누피를 생성해줍시다
	    $snoopy = new Snoopy;

	    
	    //스누피의 fetch함수로 제 웹페이지를 긁어볼까요? :)
	    $snoopy->fetch('https://search.naver.com/search.naver?where=nexearch&sm=top_hty&fbm=1&ie=utf8&query=%EC%9E%A5%EB%82%9C%EA%B0%90%EC%88%9C%EC%9C%84');

	    $ori ='/<a href="([^"]+)" class="elss keyword" onclick="([^"]+)">(.*?)<\/a>/is';


	    //    $ori='/<a href="([^"]+)">.+/';

	    //$ori_a = '/<a href="([^"]+)" class="link_detail">.+/';


	    //정규식으로 가져오기 : 순위 가져오기
	    preg_match_all($ori, $snoopy->results, $text);

	    //text[0][x] : 제목
	    //text[1][x] : 링크
	    print "<h3>실시간 장난감 순위</h3>";
	    for($i=0; $i<10; $i++)
	    {
	    	$url = "https://search.naver.com/search.naver".$text[1][$i];

	    	$str_url = "<a href = ".$url." >";
	    	$str_url .= ($i+1)."위 : {$text[0][$i]}</a>"; 	

	    	print "<a target='_blank' href = ".$url.">클릭</a>";

	    	$snoopy->fetch($url);

	    	$ori_sub ="/<img[^>]*src=[\"']?([^>\"']+)[\"']?[^>]*>/i";

	     	preg_match_all($ori_sub, $snoopy->results, $text_sub);

	     	$str_url .= "<br/>{$text_sub[0][5]}<hr/>"; 
	     	print $str_url;

	    }
	}
}

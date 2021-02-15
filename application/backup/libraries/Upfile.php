<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//세션 라이브러리
class Upfile
{
  protected $CI; 

  public function __construct() //라이브러리 로드시 사용될 데이터
  {   
    $this->CI = & get_instance(); 
  }


  public function do_upload($file_name, $url, $config = "") 
  {  	
    //해당 경로가 유효하지 않으면 생성한다

      if(!file_exists($url))
      {          
          mkdir($url, 0777, TRUE); 
      }
      //기본 설정 값
      if($config == "")
      {
          $config =[];
          $config['upload_path']          = $url;
          $config['allowed_types']        = 'gif|jpg|png|jpeg';
          $config['max_size']             = 100000000;
          $config['max_width']            = 100000000;
          $config['max_height']           = 100000000;   
      }             

      $this->CI->load->library('upload', $config); //설정내용을 적용한 upload library 불러오기.

      //file 태그에서 받아온 파일 업로드 실패시...
       if(!$this->CI->upload->do_upload($file_name))
       {  
          return 0;
       }
       else
       {
          //var_dump($url.$file_name);  
          $rs = $this->CI->upload->data();
          return $rs['file_name'];
       }
    }

      
    public function ck_upload($url, $config= "") 
    {

      if(!file_exists($url))
      {          
          mkdir($url, 0777, TRUE); 
      }
      
            
      //업로드에 실패하더라도 유저 정보 유효성 확인 이후 작업이므로 폴더 삭제 x

      //mkdir($url, 0777, TRUE); //폴더 생성.

        if($config == "")
        {
            $config = [];
            $config['upload_path']          = $url;
            $config['allowed_types']        = 'gif|jpg|png|jpeg|txt|hwp|ppt|pptx|php|exe|zip|css|js';
            $config['max_size']             = 100000000;
            $config['max_width']            = 100000000;
            $config['max_height']           = 100000000;   
        }               

        $this->CI->load->library('upload', $config); //설정내용을 적용한 upload library 불러오기.

       if(! $this->CI->upload->do_upload("upload")) //업로드 불러오기에 실패한다면
       {              
          var_dump("<p>".$this->CI->upload->display_errors()."</p>");
       }
       else
       {              
          $func_num = $this->CI->input->get('CKEditorFuncNum');
          $data = $this->CI->upload->data();
          $filename= $data['file_name'];
          $url = '/img/temp/'.$filename;
          print "<script type = 'text/javascript'>window.parent.CKEDITOR.tools.callFunction('".$func_num."', '".$url."', '전송에 성공했습니다')</script>";                                                           //이미지번호 , 연결 url
      }
       exit;     
    }
  } 
    

 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

//페이지네이션 라이브러리
class Paging
{
	//CI $this 기능 담을 변수
	protected $CI;

	//생성자 메서드
	public function __construct()
	{		
		//$this->CI : $this
		$this->CI = & get_instance();
	}

	/*
		form : search, cat, type, sort
		custom_uri : 페이징 기본 주소(컨트롤러 및 메서드에 따라 달라짐)
		cat :게시판 종류
		num : 페이징 링크 개수
		list : 한 페이지에 보일 게시물 개수
	*/

	

	public function list($form = "", $custom_url, $cat="", $user="", $list=10, $num=5)
	{

		//라이브러리 로드
		$this->CI->load->helper('url');
		$this->CI->load->library('result');

		//페이징 기본 주소 (index.php 전)
		$base_url = base_url().$custom_url;

		/*
			페이지네이션시 전달할 데이터
			search : 검색 
			cat    : 게시판 종류
			type   : like 검색
			sort   : 정렬
		*/

		/*
			===========================================
				1. 폼데이터 가져오기 (작업 거져 2로 다시 시작)
			===========================================
		*/				
		if(isset($form['type']) )
		{
			//세그먼트로 폼 데이터 보낸다. 없을 경우 uri로 보내지지 않는다.
			$search = isset($form['search']) && $form['search'] === "" ? "" : "/search/".$form['search'] ;			
			$type = isset($form['type']) ? "/type/".$form['type'] : "";
			$sort = isset($form['sort']) ? "/sort/".$form['sort'] : "";		
			$page_url = urldecode($base_url.$search.$type.$sort."/page/1");				

			//폼 데이터를 url에 넣어 다시 페이지 로드한다.		
			header("Location: ".$page_url." ");
		}

		/*
			===========================================
				2. uri segment에서 데이터 추출
			===========================================
		*/		
		else
		{	
			/*
				uri_str : 현재 uri (index.php 이후)
				uri_arr : 현재 uri 배열
				search  : 검색어
				type    : 검색방식 
				sort    : 정렬방식 
				page    : 페이지번호
			*/	
			$uri_str = urldecode($this->CI->uri->uri_string());
			$uri_arr = $this->segment_explode($uri_str);
	
			$search = $this->url_explode($uri_arr, 'search');	
			$type = $this->url_explode($uri_arr, 'type');	
			$sort = $this->url_explode($uri_arr, 'sort');		
			$page = $this->url_explode($uri_arr, 'page');	

			/*
				uri_explode : 배열에 특정 문자열이 있는지 확인
				(있으면 해당하는  key의 value 값을 반환, 없으면 "" 반환)
			*/
		}			

		/*
			===========================================
				3. 검색 조건 데이터베이스 적용
			===========================================
		*/	
		
		/*
			page  : 현재 페이지 파악 (페이지 정보 없을 시 default : 1)
			start : 현재 페이지를 통해 게시물 시작 번호 파악
			arr   : 쿼리 조건 
 		*/
		$page = $page == "" ? 1 : $page; 	
		$start = ($page-1)*$list ; 

		//query 함수에 전달할 값.
		$arr = [
				'cat'    => $cat,
				'search' => $search,				
				'type'   => $type,
				'sort'   => $sort,
				'start'	 => $start,
				'limit'  => $list
		];

		//카테고리가 '게시판'에 해당한다면 

		$rs = $this->board_query($arr, $user);					


		//result : 반환될 데이터
		$result =[];
		$result['search'] = ($search == "") ? 0 : $search;
		
		if(!$rs)
		{		
			$result['error'] = '조건에 해당하는 자료가 없습니다';
			$result['code'] = 0;
			$result['total_board'] =  0;
			$result['total'] =  0;	
			$result['total_limit'] =  0;
	
			return $result;
		}
		else if($rs == -1)
		{
			$result['error'] = '데이터베이스 오류';
			$result['code'] = -1;

			$result['total_board'] =  0;
			$result['total'] =  0;	
			$result['total_limit'] =  0;	
			
			//var_dump($this->CI->db->error()['message']);
			return $result;
		}
		//이외 정상적인 데이터 추출 완료시..

		/*
			===========================================
				4. 결과에 따른 페이징 처리 시작
			===========================================
		*/	
		$total = $rs['total']; //총 게시물 수 
		$total_link = ceil($total/$list); //총 링크 개수
		$block = ceil($page/$num); //권역 블록
		
		$first = (($block-1) * $num) + 1;
		$last = $block * $num ; 

		//한 페이지에 보여지는 페이지 링크 끝 번호
		$last = $last < $total_link ? $last : $total_link;

		//이전, 다음 버튼 href 에 들어갈 페이지 번호
		$next = $last+1;
		$prev = $first-1 ;			


		//페이징 링크 만들기

		//페이징 링크 문자열 초기화
		$link = ""; 
		$url = "";

		//1 페이지 초과 시 
		if($page > 1)
		{
			$url = $base_url."/page/1";
			$link_first= "<a class='paging' id = 'paging_first' href = '".$url."'>처음</a>";
			$link .= $link_first;
		}
		
		//1 권역 페이지 초과 시 
		if($block > 1)
		{
			$url = $base_url."/page/".$prev;
			$link_prev= "<a class='paging' id = 'paging_prev' href = '".$url."'>◁</a>";
			$link .= $link_prev;
		}
		
		//한 페이지에 보일 처음 ~ 마지막 페이지 번호 및 링크
		for($i = $first; $i <= $last; $i++)
		{
		 	$link_url = $base_url."/page/".$i;
		 	if($page == $i)
		 	{
		 		$link_paging = "<a class='paging now_page' href = '".$link_url."' ><b>{$i}</b></a>";	
		 	}
		 	else
		 	{
		 		$link_paging = "<a class='paging' href = '".$link_url."' >{$i}</a>";
		 	}
			
			$link .= $link_paging;
		}

		//마지막 권역 페이지 미만이면
		if($block < ceil($total_link/$num))
		{
			$url = $base_url."/page/".$next;
			$link_next= "<a class='paging' id = 'paging_next' href = '".$url."'>▷</a>";
			$link .= $link_next;
		}

		//마지막 페이지 미만이면
		if($page < $last)
		{
			$url = $base_url."/page/".$total_link;
			$link_last = "<a class='paging' id = 'paging_last' href = '".$url."'>끝</a>";
			$link .= $link_last;
		}

		$result = $rs;
		$result['paging_link'] = $link;
		$result['search'] = ($search == "") ? 0 : $search;
		$result['code'] = 1;

		
		return $result;
		/*
			rs : 페이지에 보여질 결과물
			paging_link : 하단 페이징 링크
			search : 검색어
			
			// ▼ style
			처음버튼   : paging, paging_first(id)
			이전버튼   : paging, paging_prev(id)	
			번호버튼   : paging
			다음버튼   : paging, paging_next(id)
			마지막버튼 : paging, paging_last(id)

		*/	
	}

	//==========================================

	//들어온 url를 배열로 변환하는 함수
	public function segment_explode($uri_str) //분리하여 배열로 만들기
	{
		//주소 길이 구하기
		$len = strlen($uri_str);
		$uri = $uri_str;
		//순수 주소 만들기 (필요없는 문자 지우기)
		if(substr($uri, -1) == "/")
		{
			$uri = substr($uri_str, 0, $len-1); 
		}
		//explode 함수를 통해 주소를 배열로 분리
		$seg_arr = explode('/', $uri);
		//배열화 된 주소 반환
		return $seg_arr;		
	}

	//배열 내 key의 value 값을 구하는 함수
	public function url_explode($arr, $key) //찾고자하는 
	{
		//uri 배열의 요소(전체 세그먼트 key, value) 개수 구하기
		$cnt = count($arr); 
		//요소 숫자만큼 검사
		for ($i = 0; $i < $cnt; $i++) { 
		
			if($arr[$i] == $key)
			{
				//key 뒤에 위치한 value 값 구하기
				$rs = $arr[$i+1]; 

				//해당 key의 'value 반환'
				return $rs;
			} 			
		}
		return ""; //없으면 ""
	}

	//==========================================

	//들어온 cat, search 가 있을때 실행된다.
	public function board_query($arr, $user)
	{

		/*
			$arr는 url로 부터 받아온 쿼리조건. 없으면 내용 ""
			====== $arr ======
			search : like
			type   : like attr
			cat    : board
			sort
			start
			limit
		*/		

		//게시물 정보 기본 쿼리
		$select  = 'b.*, u.dept dept, count(r.num) reply_cnt, ifnull(sum(lb.good), 0) good,';
		$select .= "substr(b.contents, instr(b.contents, 'img alt=')+16, instr(substr(b.contents, instr(b.contents, 'img alt=')+16), '\"')-1) board_img";
		$from    = 'board b';
		$join    = [
			['user u', 'u.id = b.user', 'left'],
			['reply r', 'b.num = r.board_num', 'left'],
			['like_b lb', 'b.num = lb.board_num', 'left']
		];
		$group = 'b.num';	


		/*
			===========================================
				1. 총 결과 개수 도출 (cat)
			===========================================
		*/	

		$data = [
			'select' => $select,
			'from'   => $from,
			'join'   => $join,
			'group'  => $group,
		];

		//지정 게시판 있을 경우 where절 추가
		if($arr['cat'] !== "")
		{		
			if($arr['cat'] == "list")
			{
				$data['where'] = ['cat' => '자유게시판'];
			}
			else if($arr['cat'] == "notice")
			{
				$data['where'] = ['cat' => '공지사항'];
			}
			else if($arr['cat'] == "help")
			{
				$data['where'] = ['cat' => '건의사항'];
			}  
			else if($arr['cat'] == "myboard" && $user !== "")
			{
				$data['where'] = ['b.user' => $user];
			}
			else if($arr['cat'] == "intro")
			{
				$data['where'] = ['cat' => '자기소개'];
			}
			else if($arr['cat'] == "qna")
			{
				$data['where'] = ['cat' => "Q&A"];
			}

			//dept의 경우 user 파라메터 값은 dept 이름.
			else if($arr['cat'] == "dept" && $user != "")
			{
				$data['where'] = [
					'b.cat' => '부서별',
					'u.dept' => $user
				];
			}

			else
			{
				print "<script>history.back();</script>"; exit;
			}
		}

		//없을 경우 where 없음. (전체게시판)

		//rs : query 실행 결과 (rs, num, error)
		$rs = $this->CI->result->get_list($data);
		//var_dump($this->CI->db->last_query());

		//error : -1, none : 0
		if($rs == -1)
		{
			return -1;
		}
		else if(!$rs)
		{
			return 0;
		} 
		$result['total_board'] = $rs['num'];
		//문제 없으면 전체 갯수  

		/*
			===========================================
				2. 조건 적용된 개수 도출
			===========================================
		*/	

		//검색 조건 있을 때
		//var_dump($arr['type']);
		if($arr['type'] !== "")
		{
			if($arr['type'] == '내용')
			{
				$data['like'] = "(b.contents like '%".$arr['search']."%')";
			}
			else if($arr['type'] == "제목")
			{
				$data['like'] = "(b.title like '%".$arr['search']."%')";
			}
			else if($arr['type'] == "작성자")
			{
				$data['like'] = "(b.user like '%".$arr['search']."%')";
			}
			//위 조건에 해당하지 않는 모든 범위에서 검색. (type = '전체' 의 경우도 해당)
			else  
			{
				$str = "(b.contents like '%".$arr['search']."%'";
				$str .= "or b.title like '%".$arr['search']."%'";
				$str .= "or b.user like '%".$arr['search']."%')";

				$data['like'] = $str;
			}
		}
		else
		{
			$data['like'] = "(b.title like '%".$arr['search']."%')";
		}

		//검색 조건 없을 경우 검색어 검색기능 x    
		
		/*
			===========================================
				3. 페이징 조건 적용된 개수 및 데이터 도출 (limit, sort등 눈에 보여지는 것) 
			===========================================
		*/	

		if($arr['sort'] == '과거순')
		{
			$data['sort'] = ['b.created', 'asc'];
		}
		//최신순이거나 sort 들어온 것이 없다면
		else
		{
			$data['sort'] = ['b.created', 'desc'];
		}

		$rs = $this->CI->result->get_list($data);	

		if($this->CI->db->error()['message'] != "")
		{
			return -1;
		}
		else if(!$rs)
		{
			return 0;
		}  
		//문제 없으면 전체 갯수  
		$result['total'] = $rs['num'];

		/*
			===========================================
				3. 데이터 반환
			===========================================
		*/	
		$data['start'] = $arr['start'];
		$data['limit'] = $arr['limit'];

		
		$rs = $this->CI->result->get_list($data);


		if($rs == -1)
		{
			//에러//////////////////////////////////////////
			return -1;
		}
		else if(!$rs)
		{
			return 0;
		} 

		$result['total_limit'] = $rs['num'];
		$result['rs'] = $rs['rs'];
		//문제 없으면 전체 갯수  

		return $result;
	}

	public function get_segment($str)
	{
		$arr = explode('/',$this->CI->uri->uri_string());	

		$cnt = count($arr);	
		//var_dump($arr); exit;

		$result = 0;

		for($i=0; $i<$cnt; $i++)
		{
			//페이지 세그먼트 찾기
			if($arr[$i] == $str)
			{
				if(isset($arr[$i+1]))
				{
					$result = $arr[$i+1];
				}						
			}
		}
		//0또는 val 반환
		return $result;
	}
}

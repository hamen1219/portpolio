<?php 
	class Board_m extends CI_Model{

		public function __construct()
		{
			parent::__construct();			
		}

		public function test()
		{
			//var_dump($this->db->last_query());
		}

		//게시판 좋아요 관련 
		public function insertLike($from, $query)
		{	
			$this->db->insert($from, $query);	
	
			if($this->db->affected_rows() < 1)
			{
				///var_dump($this->db->error()); exit;
				$query = [
					'user' => $query['user'],
					'board_num' => $query['board_num']
				];
				$this->db->delete($from, $query);
				if($this->db->affected_rows() < 1)
				{
					return 0;
				}
			}
			return 1;						
		}

		//1개 게시물에 대한 상세 페이지
		public function getBoard($page, $user = "")
		{
			//user는 로그인한 사용자가 체크한 것 표시..
	
					//게시물 테이블 기본 정보 
			$select = "b.*,";
			$select .= "(u.img) user_img, (u.created) user_created, u.name,"; 

			//현재 게시물 좋아요 현황
			$select .= "(ifnull(sum(lb.good),0)) good,";
			$select .= "(ifnull(sum(lb.poor),0)) poor,";
			$select .= "(ifnull(sum(sb.save),0)) save";

			if($user != "")
			{
				$select .= ",ifnull((select good from like_b where board_num = b.num and user = u.id),0) mygood,";
				$select .= "ifnull((select poor from like_b where board_num = b.num and user = u.id),0) mypoor,";
				$select .= "ifnull((select save from save_b where board_num = b.num and user = u.id),0) mysave";
			}		

			$from = "board b";

			$join = [
				['user u', 'u.id = b.user', 'left'],
				['like_b lb', 'b.num = lb.board_num', 'left'],
				['save_b sb', 'b.num = sb.board_num', 'left']
			];
			$where = ['b.num' => $page];
			$group = "b.num";

			$query = [
				'select' => $select,
				'from'   => $from,
				'where'  => $where,
				'join'   => $join,
				'group'  => $group
			];
			$rs = $this->result->get_list($query ,1);		
			//var_dump($this->db->last_query());
			return $rs;
		}

		//게시물 수정
		public function update($where, $query)
		{		
			if(!is_array($where))
			{
				$where = ['num' => $where];
			}
			$this->db->where($where);
			$this->db->update('board', $query);
			if($this->db->affected_rows() < 1)
			{
				return 0;
			}
			return 1;
		}
		public function delete($where)
		{
			if(!is_array($where))
			{
				$where = ['num' => $where];
			}
			$this->db->delete('board', $where);
			if($this->db->affected_rows() < 1)
			{
				return 0;
			}
			return 1;		
		}
		public function updates($pages, $query, $mode = "")
		{
			if($mode == "blind")
			{
				$this->db->update('board', ['perm' => "일반"]);
			}
			if($pages !== null)
			{
				foreach($pages as $page)
				{
					$this->db->where("num", $page);
					$this->db->update('board', $query);
					if($this->db->affected_rows() < 1)
					{
						//var_dump($this->db->last_query()); exit;
						return 0;
					}			
				}
				return 1;
			}
			//pages : 수정할 페이지 들의 배열
			
			return 1;
		}
		public function deletes($pages, $mode = "")
		{
			foreach($pages as $page)
			{
				$this->db->delete('board', ['num' => $page]);
				if($this->db->affected_rows() < 1)
				{
					return 0;
				}			
			}
			return 1;
		}


		//조회수 늘리기
		public function setView($page)
		{
			//현재 board view + 1 로 수정하기		
			$query =  "update board set view = view+1 where num = ".$page;
			$this->db->query($query);
			if($this->db->affected_rows() < 1)
			{
				return 0;
			}
			else
			{
				return 1;
			}			
		}

		public function getAjaxBoard($cat)
		{
			$query = [
				'from'  => 'board',
				'where' => ['cat' => $cat],
				'start' => 0,
				'limit' => 5,
				'sort'  => ['created', 'desc']
			];
			$rs = $this->result->get_list($query);
			return $rs;
		}

		//전체 게시물 불러오기
		public function getBoards()
		{
			$query = [
				'from'  => 'board',
				'sort'  => ['created', 'desc']
			];
			$rs = $this->result->get_list($query);
			return $rs;
		}

		public function getSideBoards()
		{			
        	$query = [
				'from'   => 'board b',
				'start'  => 0,
				'limit'  => 5,
				'sort'   => ['b.created', 'desc'],
				'where'  => ['b.cat!=' => '대문']
			];
			$side = $this->result->get_list($query);	
			return $side;
		}

		//CRUD
		public function write($query) //작성된 정보 가져오기
		{
			$this->db->from('board');
			$rs = $this->db->insert('board', $query);

			if(!$rs)
			{
				//var_dump($this->db->error());
				return 0;
				//실패
			}
			else
			{
				//등록된 페이지 번호 얻어오기
				$page = $this->db->insert_id();
				return $page;
			} 		
		}

		public function getIntroBoard()
		{
			//대문 글귀 가져오는 query 
			$query = [
				'from' => 'intro_board',
				'sort' => ['created', 'desc']
			];
			$rs = $this->result->get_list($query, 1);

			return $rs;
		}

		public function setIntroBoard($query)
		{
			$this->db->insert('intro_board', $query);
			if($this->db->affected_rows() < 1)
			{
				return 0;
			}
			return 1;
		}

		public function getGallaryBoard()
		{
			$query = [
				'select' => 'bb.num, bb.img',
				'from' => 'board b',
				'join' => [
					["(select num, substr(contents, instr(contents, 'img alt=')+17, instr(substr(contents, instr(contents, 'img alt')+17), '\"')-1) img from board) bb", 'b.num = bb.num', 'left']
				],
				'where' => [
					'b.cat' => '자기소개',
					'bb.img !=' => "" 
				],
				'start' => 0,
				'limit' => 8
			];
			$rs = $this->result->get_list($query);
			//var_dump($this->db->last_query());
			if(!$rs)
			{
				return 0;
			}
			return $rs;
		}
	}



	

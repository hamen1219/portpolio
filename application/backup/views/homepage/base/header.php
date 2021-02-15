<!DOCTYPE html>
<html>
<head>
	<title>
	</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	

	<!--jquery-->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 

	<!--bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap" rel="stylesheet">


	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> 

	<!--slick js-->
	<script type="text/javascript" src="/static/lib/slick/slick/slick.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/static/lib/slick/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="/static/lib/slick/slick/slick-theme.css"/>

	<!--modal-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />



	<link rel="stylesheet" type="text/css" href="/css/base/header.css">

	<!--header & footer-->	


</head>

<body>
	<div id="ex1" class="modal">
		<h4><b>사용자 정보</b></h4><hr>
		<table id = "user_info_table">
			<tr>
				<td colspan="2">
					<img class = "user_info_img" src="/img/users/<?=$user['id']?>/profile/<?=$user['img']?>" onerror="this.src='/img/error/no_img.png'">
				</td>
			</tr>
			<tr>
				<td><p><b>ID</b></p></td>
				<td><?= $user['id']?></td>					
			</tr>
			<tr>
				<td><p><b>이름</b></p></td>
				<td><?= $user['name']?></td>
			</tr>
			
			<tr>
				<td><p><b>부서</b></p></td>
				<td><?= $user['dept']?></td>
			</tr>
			<tr>
				<td><p><b>등급</b></p></td>
				<td><?= $user['perm']?></td>					
			</tr>
			<tr>
				 <td><p><b>소개</b></p></td>
				 <td><?= $user['intro']?></td>
			</tr>
				
							
		</table>
		<hr>
		<div id = "btn_group_modal" class="btn-group btn-group-sm" role="group" aria-label="...">
			<a class = "btn btn-secondary" href="/user/myroom/<?=$user['id']?>">마이룸</a>
			<a class = "btn btn-secondary" href="/user/logout/1">로그아웃</a> 
			<a class = "btn btn-secondary" href="/board/write">글쓰기</a>
		</div>	
	</div>



<!-- 웹 모드 메뉴바 -->
<!-- ========================================================================= -->


	<header>
	<!--1. 헤더 BI 이미지 부분-->
	<div id = "header_d1">
		<a href="/main">
			<img src="/img/header/ci1.png" style="height: 100%; width: auto;">
		</a>
		
	</div>	

	<!--2. 헤더 상단 사용자 정보 부분-->
	<div id = "header_d2">	
		<div id = "top_user">

			<?php if(!isset($user['id'])): ?>
				<a id = "modal_img_cut" href="/main/login">									
					<img class = "user_info_img" src='/img/error/no_img.png'>
				</a>				

				<div id = 'user_states'>							
					<a href="/main/login">로그인 </a><p>/&nbsp;</p><a href="	/main/join">회원가입</a><hr>
					<h5>로그인이 필요합니다</h5>
				</div>

			<?php else: ?>
				
				<a id = "modal_img_cut" href="#ex1" rel="modal:open">					
					<img src="/img/users/<?=$user['id']?>/profile/<?=$user['img']?>">		
				</a>
				<div id ="user_states">
					<p>로그인 상태입니다</p><hr>
					<h5><?= $user['id']?>님</h5>						
				</div>						
				<?php endif; ?>			
			</div>
		</div>		
	</div>

	<!--3. 슬라이드 및 내부 테이블 부분-->
	<nav>
		<ul id = "nav_ul">

			<li><a href="/main">Home</a></li>
			<li class = "btn_menu">
				<p>홈페이지 소개</p>
				<div class = "slide_menu" id = "slide1">
				<div class = "table_title_div" id = "table_title_div1">
					<h3>홈페이지 소개</h3>						
				</div>	
					<!--버튼 내 확장 메뉴 table-->
					<table>
						<tr>
							<th>소개</th>
							<th>회사경영</th>
						
						</tr>
						<tr>
							<td><a href="">대표인사</a></td>
							<td><a href="">채용</a></td>					
						</tr>
						<tr>
							<td><a href="">홈페이지 소개</a></td>
							<td><a href="">공개</a></td>
						</tr>
						<tr>
							<td><a href="">오시는 길</a></td>
							<td><a href="">예결산</a></td>
						
						</tr>

					</table>
				</div>
			</li>

			<li class = "btn_menu">
				<p>커뮤니티</p>
				<div class = "slide_menu" id = "slide2">
					<div class = "table_title_div" id = "table_title_div2">
						<h3>커뮤니티</h3>						
					</div>
					<table>							
						<tr>
							<th>게시판</th>
							<th>이벤트</th>
							<th>문의</th>
						</tr>
						<tr>
							<td><a href="/board/notice">공지사항</a></td>
							<td><a href="">진행중 이벤트</a></td>
							<td><a href="/board/help">건의사항</a></td>
						</tr>
						<tr>
							<td><a href="/board/list">자유게시판</a></td>
							<td><a href="">만료 이벤트</a></td>
							<td><a href="">1:1 문의</a></td>
						</tr>
						<tr>
							<td><a href="/board/intro">자기소개</a></td>
							<td><a href="">예정 이벤트</a></td>
						</tr>
						<tr>
							<td><a href="/board/qna">IT Q&A</a></td>
						</tr>
					

					</table>
				</div>
			</li>

			<li class = "btn_menu">
				<p>개발센터</p>
				<div class = "slide_menu" id = "slide3">
					<div class = "table_title_div" id = "table_title_div3">
						<h3>개발센터</h3>								
					</div>	
					<table>
						<tr>
							<th><a href="">개발자</a></th>
							<th><a href="">개발기술</a></th>
							<th><a href="">참고싸이트</a></th>
						</tr>
						<tr>
							<td><a href="">자기소개</a></td>								
							<td><a href="">개발언어</a></td>
							<td><a href="https://cikorea.net/">CI 사용자 포럼</a></td>
						</tr>
						<tr>
							<td><a href="">이력사항</a></td>								
							<td><a href="">라이브러리</a></td>
							<td><a href="http://www.ciboard.co.kr/user_guide/kr/">CI 3.0 가이드</a></td>
						</tr>
						<tr>								
							<td><a href="">포트폴리오</td>
							<td><a href=""></td>
							<td><a href="https://www.w3schools.com/">W3School</a></td>									
						</tr>
					</table>
				</div>
			</li>
			<li><a href="/main#company">협력업체</a></li>
			<div id = "wrap"></div>				
		</ul>		
	</nav>
</header>


<!--4. 전체 게시판 검색-->
<div id = "all_search_btn">
	<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
	  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
	</svg>
</div>

<div id = "all_search_wrap">
	<div id = "all_search_div">
		<h5>
			<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			  <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
			  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
			</svg>
			<b>전체 게시판 검색하기</b></h5>
		<div id = "all_search">
			<input type="text" name = "all_search" class = "form-control" placeholder="검색어을 입력하세요">
			<button onclick="all_search()">검색</button>
		</div>		
	</div>
</div>

<!--mobile-->
<div id = "m_header">
	<h3>이데아 커뮤니티</h3>
	<div id = "m_nav_btn">
		<svg viewBox="0 0 16 16" class="bi bi-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		  <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
		</svg>	
	</div>
</div>


<div id = "m_nav_wrap" class = "m_nav_wrap">

	<div id = "m_nav">
	
		<svg id = "m_nav_close_btn" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		  <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
		</svg>

		<?php if(!$user): ?>
			<div id= "m_user_info">
				<div id = "m_img_cut">
					<a href="/main/login">
						<img src="/img/error/no_img.png">
					</a>
					
				</div>
				<h4><b>로그인이 필요합니다</b></h4>
				<p><a href="/main/login">로그인</a> | <a href="/main/join">회원가입</a></p>
			</div>

		<?php else: ?>
			<div id= "m_user_info">
				<div id = "m_img_cut">
					<img src="/img/users/<?=$user['id']?>/profile/<?=$user['img']?>">
				</div>
				<h4><b><?=$user['id']?></b>님</h4>
				<div id = "m_btn_group">
					<a class = "btn btn-secondary" href="/user/myroom/">마이룸</a>
					<a class = "btn btn-secondary" href="/user/logout/1">로그아웃</a> 
					<a class = "btn btn-secondary" href="/board/write">글쓰기</a>				
				</div>
			</div>
		<?php endif; ?>
		
		

		<ul id = "m_nav_ul">
			<li><a href="/main"><h5>홈으로</h5></a></li>
			<li>
				<h5>홈페이지 소개</h5>
				<ul>
					<li><a href="/main/">대표인사</a></li>
					<li><a href="/main/">홈페이지 소개</a></li>
					<li><a href="/main/">오시는 길</a></li>
				</ul>
			</li>		

			<li>
				<h5>커뮤니티</h5>
				<ul>
					<li><a href="/main/">공지사항</a></li>
					<li><a href="/main/">자유게시판</a></li>
					<li><a href="/main/">자기소개</a></li>
					<li><a href="/main/">Q&A</a></li>
					<li><a href="/main/">이벤트</a></li>
					<li><a href="/main/">건의사항</a></li>
					<li><a href="/main/">문의하기</a></li>
				</ul>
			</li>

			<li>
				<h5>개발센터</h5>
				<ul>
					<li><a href="/main/">개발자소개</a></li>
					<li><a href="/main/">이력사항</a></li>
					<li><a href="/main/">개발도구</a></li>
				</ul>
			</li>	
		</ul>			
	</div>
</div>


<!--mobile-->


<!--fin. 맨 위로 가기 버튼-->
<a id = "topper" href="#">
	<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
	</svg>			
</a>

<script src = "/js/base/header.js"></script>

	

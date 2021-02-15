
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+KR&family=Open+Sans+Condensed:wght@300&display=swap&family=Do+Hyeon&display=swap&family=Anton" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/css/home.css">

<input type="hidden" id = "v_total" value="<?=$v_total?>">
<input type="hidden" id = "v_today" value="<?=$v_today?>">
<div id = "main_slide">	
	<div>	
		<img id = "slide_img1" src="/img/3.png">
		<div class  ="title_group">
			<h2>다양한 사람들과 함께하는 이데아입니다</h2>
			<p>Too many people with IDEA Community</p>
		</div>		
	</div>

	<div>	
		<img id = "slide_img2" src="/img/1.png">
		<div class  ="title_group">
			<h2>이데아는 IT 기술에 대한 다양한 정보를 제공합니다</h2>
			<p>We have Newest IT Technology and Variable Information</p>
		</div>		
	</div>

	<div>	
		<img id = "slide_img3" src="/img/2.png">
		<div class  ="title_group">
			<h2>지금, 이데아를 시작해보세요</h2>
			<p>Welcome to IDEA Community Site</p>
		</div>		
	</div>
</div>

<!--mobile slide-->
<div id = "m_slide_wrap">
	<div id = "m_slide_title">
		<p>이데아 커뮤니티에 오신 것을 환영합니다</p>
	</div>

	<div id = "m_slide">
		<div>		
			<img src="/img/1.png">
		</div>
		<div>
			<img src="/img/2.png">
		</div>
		<div>
			<img src="/img/3.png">
		</div>
	</div>

	
</div>

<!--mobile slide-->




<div id = "aa">
	<div>1</div>
</div>

<section>
	<div id = "notice">
		<h4>안내사항</h4>
		<?php if($intro): ?>
			<h5><b><?= $intro['contents']?></b></h5>
			<p>ㄴ 작성 : <?=$intro['perm']?> (<?= $intro['created']?>)</p>
		<?php else: ?>
			<style type="text/css">
				#notice h5{
					margin-top: 50px;
				}
			</style>
			<h5><b>현재 등록된 대문글이 없습니다 :)</b></h5>
		<?php endif; ?>
		
	</div>



	<div id = "rank_div">
		<div>
			<p>총 방문</p>		
			<div>
				<h1 id = "total_counter"></h1><p>명</p>
			</div>			
		</div>

		<div>
			<p>오늘의 로그인</p>		
			<div>
				<h1 id = "today_counter"></h1><p>명</p>
			</div>			
		</div>

		<div>
			<p>유저 랭킹</p>		
			<div id = "rank">
					<?php if($b_max): ?>
					<div>
						<div class = "slide_img_cut">
							<img src="/img/users/<?=$b_max['user']?>/profile/<?=$b_max['user_img']?>" onerror="this.src='/img/error/no_img.png'">
						</div>
						<div class = "slide_info">
							<div class = "slide_info_title">
								<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
								</svg>
								게시물 최다
							</div><br>
							<h4 class = "user_id"><?=$b_max['user']?></h4>
							<h5 class = "total_num"><?=$b_max['b_max']?>개</h5>
						</div>							
					</div>	
					<?php endif; ?>	
					<?php if($r_max): ?>
					<div>
						<div class = "slide_img_cut">
							<img src="/img/users/<?=$r_max['user']?>/profile/<?=$r_max['user_img']?>" onerror="this.src='/img/error/no_img.png'">
						</div>
						<div class = "slide_info">
							<div class = "slide_info_title">
								<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
								</svg>
								댓글 최다
							</div><br>
							<h4 class = "user_id"><?=$r_max['user']?></h4><h5 class = "total_num"><?=$r_max['r_max']?>개</h5>
						</div>							
					</div>	
					<?php endif; ?>	
					<?php if($v_max): ?>
					<div>
						<div class = "slide_img_cut">
							<img src="/img/users/<?=$v_max['user']?>/profile/<?=$v_max['user_img']?>" onerror="this.src='/img/error/no_img.png'">
						</div>
						<div class = "slide_info">
							<div class = "slide_info_title">
								<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
								</svg>
								방문 최다
							</div><br>
							<h4 class = "user_id"><?=$v_max['user']?></h4><h5 class = "total_num"><?=$v_max['v_max']?>회</h5>
						</div>							
					</div>	
					<?php endif; ?>	
					<?php if($lb_max): ?>
					<div>
						<div class = "slide_img_cut">
							<img src="/img/users/<?=$lb_max['user']?>/profile/<?=$lb_max['user_img']?>" onerror="this.src='/img/error/no_img.png'">
						</div>
						<div class = "slide_info">
							<div class = "slide_info_title">
								<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
								</svg>
								좋은 게시물 최다
							</div><br>
							<h4 class = "user_id"><?=$lb_max['user']?></h4><h5 class = "total_num"><?=$lb_max['lb_max']?>개</h5>
						</div>							
					</div>	
					<?php endif; ?>	
					<?php if($lr_max): ?>
					<div>
						<div class = "slide_img_cut">
							<img src="/img/users/<?=$lr_max['user']?>/profile/<?=$lr_max['user_img']?>" onerror="this.src='/img/error/no_img.png'">
						</div>
						<div class = "slide_info">
							<div class = "slide_info_title">
								<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
								</svg>
								선플 최다 작성
							</div><br>
							<h4 class = "user_id"><?=$lr_max['user']?></h4><h5 class = "total_num"><?=$lr_max['lr_max']?>개</h5>
						</div>							
					</div>	
					<?php endif; ?>	
					<?php if($sb_max): ?>
					<div>
						<div class = "slide_img_cut">
							<img src="/img/users/<?=$sb_max['user']?>/profile/<?=$sb_max['user_img']?>" onerror="this.src='/img/error/no_img.png'">
						</div>
						<div class = "slide_info">
							<div class = "slide_info_title">
								<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
								</svg>
								게시물 pick
							</div><br>
							<h4 class = "user_id"><?=$sb_max['user']?></h4><h5 class = "total_num"><?=$sb_max['sb_max']?>개</h5>
						</div>							
					</div>		
					<?php endif; ?>			
									
				</div>		
		</div>
	</div>
	<div id = "board_group">
		<div id = "board_ajax">
			<h3>게시판</h3><hr>
			<div id = "btn_group">
				<button onclick="get_ajax('공지사항')">공지사항</button>
				<button onclick="get_ajax('자유게시판')">자유게시판</button>
				<button onclick="get_ajax('건의사항')">건의사항</button>
			</div>
				

			<div id = "mini_board">
				<!--내부에 ajax를 통한 테이블 생성 예정-->
			</div>	
		</div>
		<div id = "board_alert">
			<h3>배너</h3><hr>
			<div id ="alert_slide">
				<img src="/img/mainpage/banner_section/1.png" href="/board/read/page/">
				<img src="/img/mainpage/banner_section/2.png" href="/board/read/page/">
				<img src="/img/mainpage/banner_section/3.png" href="/board/read/page/">
				<img src="/img/mainpage/banner_section/4.png" href="/board/read/page/">
				<img src="/img/mainpage/banner_section/5.png" href="/board/read/page/">		    									
			</div>
		</div>


		<div id = "board_gallary">
			<a href="/board/intro"><h3>회원 자기소개</h3></a><hr>

			<?php if(!$gallary): ?>		
				<h3 style="height: 120px; width: 100%; text-align: center; margin-top: 100px; color: brown;">현재 작성된 자기소개가 없습니다</h3>					
			<?php else: ?>
				<div id = "gallary_slide">		
					<?php foreach($gallary['rs'] as $val): ?>
						<a class = "gallary_img_cut" href="/board/read/page/<?=$val['num']?>" onerror = "this.src='img/error/no_img.png'">					
							<img src="/<?=$val['img']?>">
						</a>
					<?php endforeach; ?>
				</div>

			<?php endif; ?>		
			</div>
		</div>
	</div>

	<div id = "truck">
		
		<svg id = "truck_svg" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-truck" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		  <path fill-rule="evenodd" d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5v7h-1v-7a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .5.5v1A1.5 1.5 0 0 1 0 10.5v-7zM4.5 11h6v1h-6v-1z"/>
		  <path fill-rule="evenodd" d="M11 5h2.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5h-1v-1h1a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4.5h-1V5zm-8 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 1a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
		  <path fill-rule="evenodd" d="M12 13a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 1a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
		</svg>
	</div>

	<!-- learning contents -->
	<div id = "learn_div">	
		<div id = "learn_title"> <h1>실전 프로그래밍!!</h1><br><p>	MVC패턴 및 IT 지식을 학습해봅시다 :)</p></div>

		<div id = "mov">
			<iframe title="YouTube video player" class="youtube-player" type="text/html"    src="//www.youtube.com/embed/dy9yQIx38u8?autoplay=1&showinfo=1&fs=1" frameborder="0" allowfullscreen></iframe>
			<div id = "text">
				<h1>Front-End</h1>
				<h1>Back-End</h1>
				<h1>Full-Stack</h1>
			</div>
		</div>
		<h5><b>관련동영상 모음</b></h5>		
 		<div id = "mov_group">
			<iframe src="https://www.youtube.com/embed/JlwUoHeICvw?list=PLrCCNh6y7w2hh4UxxzFJYTqAP01SQdB7T" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

			<iframe src="https://www.youtube.com/embed/LYTaNX7-m2E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

			<iframe src="https://www.youtube.com/embed/AERY1ZGoYc8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

			<iframe src="https://www.youtube.com/embed/AERY1ZGoYc8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div> 
	</div>

	<div id = "company">
		<h3>협력업체 및 기관</h3><hr>
		<div id = "company_slide">
			<a href="http://www.hanshinc.com/">
				<img src="/img/company/apt.png">
			</a>
			<a href="http://www.woori.cc/">
				<img src="/img/company/woori.png">
			</a>
			<a href="https://www.bible.ac.kr/">
				<img src="/img/company/kbu.png">
			</a>
			<a href="https://www.gg.go.kr/">
				<img src="/img/company/gg.png">
			</a>
		</div>
	</div>

</section>

<script src="/js/home.js"></script>>

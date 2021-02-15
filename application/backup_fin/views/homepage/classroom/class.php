<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poor+Story&display=swap" rel="stylesheet">
<style type="text/css">
	section{
		width: 80%;
		margin-left: 10%;
		border: 1px solid lightgray;
		margin-top: 30px;
		margin-bottom: 30px;
		padding: 10px;
	}
	section input, section textarea, section button{
		border-radius: 0;
	}
	#title_wrap{
		width: 100% !important;
		height : 200px !important;
		background-color: rgba(255,255,255,0.3);
		z-index: 3;
		padding-top: 20px;
		padding-left: 20px;
	}
	#title_wrap h1{
		font-weight: 600;
		background-color: rgba(255,255,255,0.6);
		width: 100%;
		padding-top: 5px;
		padding-right: 10px;
		padding-left: 5px;
		font-family: 'Poor Story', cursive;


	}
	#class_title{
		margin-bottom: 10px;
		background-image: url('/img/0.png');
		background-size: cover;
		height: 200px;
		width: 100%:;
	}
	#class_title * {
		display: inline-block;
	}
	#class_title svg{
		width: 50px;
		height: 50px;
		position: relative;
		bottom: 11px;
		margin-right: 5px;
		margin-top: 12px;
	}
	#teacher_img_cut{
		width: 150px;
		height: 150px;
		text-align: center;
		border-radius: 50px;
		overflow: hidden;
		float: left;
		display: inline-block;
		margin-left: 10px;
		box-shadow: 0 8px 38px rgba(133, 133, 133, 0.3), 0 5px 12px rgba(133, 133, 133, 0.22);
	}
	.baby_img_cut{
		width: 100px;
		height: 100px;
		overflow: hidden;
		border-radius: 100px;
		margin-top: 10px;
		text-align: center;
		display: inline-block;
		box-shadow: 0 8px 38px rgba(133, 133, 133, 0.3), 0 5px 12px rgba(133, 133, 133, 0.22);
	}
	.baby_wrap{
		display: inline-block;
		border-radius: 10px;
		text-align: center;
		margin-right: 10px;
		margin-top: 5px;
		border-bottom: 10px solid transparent;
		transition: all 0.1s;
		width: 130px;
	}
	.baby_wrap .teacher:hover{
		border-bottom: 10px solid purple;
		cursor: pointer;
	}
	#teacher_img_cut img, .baby_img_cut img{
		height: 100%;
		width: auto;
		display: inline-block;
	}
	#teacher_div{
		min-height: 250px;
		height: auto;
		width: 100%;
		background-color: rgba(20,20,20,0.1);
		margin-top: 30px;
		margin-bottom: 20px;
		padding: 10px;
		float: left;
		border: 1px solid lightgray;
	}

	#baby_div{
		overflow-x: auto;
		overflow-y: hidden;
		height: auto;
		width: 100%;
		padding: 15px;
		border : 1px solid lightgray;
		margin-bottom: 10px;
	}
	#comment{
		background-color: skyblue;
		border-radius: 30px;
		border-top-left-radius: 0;
		display: inline-block;
		float: left;
		margin-left: 20px;
		margin-top: 20px;
		width: 50%;
		height: 140px;
		padding: 15px;
		box-shadow: 0 8px 38px rgba(133, 133, 133, 0.3), 0 5px 12px rgba(133, 133, 133, 0.22);
	}
	#class_board{
		margin-bottom: 50px;
	}
	#class_board table{
		width: 100%;
		margin-bottom: 10px;
		text-align: center;
	}
	#class_board th{
		background-color: lightgray;
	}
	#class_board th:first-child{
		width: 60px;
	}
	#class_board th:nth-child(2){
		width: 400px;
	}
	#class_board th:last-child{
		width: 400px;
	}
	#notice{
		width: 90%;
		margin-left: 5%;
		height: 200px;
		background-color: lightblue;
		margin-bottom: 10px;
		padding: 10px;
	}
	#notice h5{
		background-color: rgba(255,255,255,0.5);
		padding: 2px;
	}
	#teacher_div h3{
		padding: 5px;
		padding-left: 10px;
		margin-bottom: 10px;
	}
	#class_notice_write{
		width: 100%;
		padding: 10px;
		height: auto;
		margin-bottom: 30px;
		box-shadow: 0 8px 38px rgba(133, 133, 133, 0.3), 0 5px 12px rgba(133, 133, 133, 0.22);
		background-color: rgba(20,20,20,0.1);
	}

	#class_notice_write textarea{
		width: 400px;
		height: 100px;
		resize: none;
		float: left;
		
	}
	#class_notice_write button{
		width: 60px;
		height: 100px;
		float: left;
		margin-left: 10px;
		border: 1px solid gray;
		transition: all 0.2s;
		box-shadow: 0 8px 38px rgba(133, 133, 133, 0.3), 0 5px 12px rgba(133, 133, 133, 0.22);
		font-size: 18px;
	}

	#class_write{
		width: 100%;
		background-color: white;
		box-shadow: 0 8px 38px rgba(133, 133, 133, 0.3), 0 5px 12px rgba(133, 133, 133, 0.22);
		padding: 10px;
		margin-bottom: 30px;
	}
	#class_write h5{
		margin-bottom: 5px;
	}
	#class_write textarea{
		width: 600px;
		height: 100px;
		resize: none;
	}
	#class_write button, #baby_alert button,#class_notice_write button{
		width: 100px;
		height: 100px;
		margin-left: 10px;
		background-color: #4a94e1;
		border: 0;
		transition: all 0.2s;
		box-shadow: 0 8px 38px rgba(133, 133, 133, 0.3), 0 5px 12px rgba(133, 133, 133, 0.22);		
		color: white;
		font-size: 18px;
	}
	#class_write button:hover, #baby_alert button:hover,#class_notice_write button:hover{
		background-color: #0147b5;
	}
 	#class_write textarea, #class_write button{ 	
 		float: left;
 	}
 	#class_write_bottom{
 		clear: both;
 	}

 	#comment_write{
 		width: 100%;
 		height: 180px;
 		padding: 10px;
 		border: 3px solid white;
 		background-color: rgba(20,20,20,0.12);
 		margin-top: 10px;
 		box-shadow: 0 8px 38px rgba(133, 133, 133, 0.3), 0 5px 12px rgba(133, 133, 133, 0.22);

 	}
 	section hr{
 		margin-top: 7px;
 		margin-bottom: 10px;
 	}

 	#comment_write textarea{
 		width: 400px;
 		height: 100px;
 		float: left;
 		resize: none;
 	}
 	#comment_write button{
 		width: 60px;
 		height: 100px;
 		float: left;
 		margin-left: 10px;
 		border: 1px solid gray;
 		transition: all 0.2s;
 		font-size: 18px;
 	}
 	#comment_write button:hover{
 		background-color: rgba(20,20,20,0.1);
 	}

 	.bottom{
 		clear: both;
 	}

 	#paging_link{
 		width: 100%;
 		text-align: center;
 		padding-top: 10px;
 		margin-top: 10px;
 		border-top: 1px solid lightgray;
 	}
 	.paging{
 		border: 1px solid lightgray;
 		margin: 5px;
 		padding: 5px;
 		padding-left: 7px;
 		padding-right: 7px;
 	}
 	.now_page{
 		background-color: gray;
 		color: white;
 	}
 	#class_community{
 		background-color: rgba(20,20,20,0.1);
 		padding: 10px;
 	}
 	#board_cnt p{
 		display: inline-block;
 		margin-right: 20px;
 	}
</style>

<section>
	<div id = "class_title">
		<div id = "title_wrap">
			
			<h1>
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
				  <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
				</svg>
				<?=$class['name']?>
			</h1>
		</div>
		
	</div>
	

	<div id = "teacher_div">
		<?php if($teacher): ?>
			<h3>
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
				  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
				</svg>
				담임교사 <?=$teacher['name']?>
			</h3>
			<hr>

			<div>
				<a href="/user/myroom/<?=$teacher['id']?>">
					<div id = "teacher_img_cut">
						<img src="/img/users/<?=$teacher['id']?>/profile/<?=$teacher['img']?>" onerror="this.src='/img/error/no_img.png'">
					</div>					
				</a>
				
				<div id = "comment">
					<p>
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-quote-fill" viewBox="0 0 16 16">
						  <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM7.194 6.766a1.688 1.688 0 0 0-.227-.272 1.467 1.467 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 5.734 6C4.776 6 4 6.746 4 7.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.461 2.461 0 0 0-.227-.4zM11 9.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.466 2.466 0 0 0-.228-.4 1.686 1.686 0 0 0-.227-.273 1.466 1.466 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 10.07 6c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z"/>
						</svg>
						<b>우리반 한마디</b>
					</p><hr>
					<p id = "class_comment">
						<?=$class['comment']?>
					</p>
				</div>
				<div class = "bottom"></div>

			</div>
			
			<?php if($user['dept'] == "교사" || $user['perm'] == "관리자"):?>
				<div id = "comment_write">
					<div id = "comment_write_div">
						<h5>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
							  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
							</svg>
							<b>우리반 소개 문구 수정</b>
						</h5><hr>
						<textarea name = "comment_area" placeholder="우리반 소개글을 입력하세요"></textarea>
						<button onclick="insertClassComment()">적용</button>
						<div class = "bottom"></div>
					</div>				
				</div>
			<?php endif; ?>

		<?php else: ?>
			<h3>교사 미배정</h3>
			<div class = "teacher_img_cut">
				<img src="/img/error/no_img.png">					
			</div>			
		<?php endif; ?>
		</div>
	</div>

	<div id = "baby_div">
		<?php if($baby): ?>
			<?php if($user['dept'] == "교사" || $user['perm'] == "관리자"):?>
				<h5>
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
					  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
					</svg>
					학급 인원 (<?=$baby['num']?>)
				</h5>
				<?php foreach($baby['rs'] as $row): ?>
					<div class = "baby_wrap teacher">
						<div class = "baby_img_cut">
							<img src="/img/users/<?=$row['parent']?>/baby/<?=$row['img']?>" onerror = "this.src='/img/error/no_img.png'">					
						</div>
						<p>										
							<?php $name = mb_strlen($row['name']) > 6 ? mb_substr($row['name'],0, 6)."··" : $row['name']; ?>
							<?=$name?>		
						</p>	

						<input type="hidden" name="parent" value = "<?=$row['parent']?>">
						<input type="hidden" name="baby" value = "<?=$row['name']?>">		
					</div>				
				<?php endforeach; ?>

			<?php else: ?>
				<h5>
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
					  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
					</svg>
					학급 인원 (<?=$baby['num']?>)
				</h5>
				<?php foreach($baby['rs'] as $row): ?>
					<div class = "baby_wrap parent">
						<div class = "baby_img_cut">
							<img src="/img/users/<?=$row['parent']?>/baby/<?=$row['img']?>" onerror = "this.src='/img/error/no_img.png'">					
						</div>
						
						<?php if($row['parent'] == $user['id']): ?>
							<p class = "my_baby">
								
						<?php else: ?>
							<p>
						<?php endif; ?>
							<?php $name = mb_strlen($row['name']) > 6 ? mb_substr($row['name'],0, 6)."··" : $row['name']; ?>
							<?=$name?>		
						</p>	

						<input type="hidden" name="parent" value = "<?=$row['parent']?>">
						<input type="hidden" name="baby" value = "<?=$row['name']?>">		
					</div>				
				<?php endforeach; ?>

			<?php endif; ?>
		<?php else: ?>
			<h5>학급에 등록된 아동이 없습니다</h5>
		<?php endif; ?>
	</div>

	<!--담임교사일 경우 알림장 작성 가능-->
	<?php if($user['dept'] == "교사" || $user['perm'] == "관리자"):?>
		<div id = "class_notice_write">
			<h5>
				<b>
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
				  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
				  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
				</svg>
				우리반 알림장 전체 발송
				</b>
			</h5><hr>
			<div>
				<textarea name = "notice_area" placeholder="알림장 내용을 작성하세요"></textarea>
				<button onclick="insertNotice();">작성</button>
				<div class = "bottom"></div>
			</div>			
		</div>
	<?php endif; ?>	

	<div id = "class_community">
		<h3>학급 커뮤니티</h3><hr>
		<div id = "class_write">
			<h5>글 작성</h5>			
			<input type="hidden" name="user" value = "<?=$user['id']?>">
			<input type="hidden" name="class_name" value = "<?=$class['name']?>">
			<textarea name = "class_contents" placeholder="게시물 내용을 입력하세요"></textarea>
			<button onclick="insertBoard();">등록</button>	
			<div id = "class_write_bottom"></div>
		</div>

		<style type="text/css">
			.class_board{
				width: 100%;				
				border-top: 1px solid lightgray;
				padding: 5px;
			}
			.board_img_cut{
				width: 45px;
				height: 45px;
				overflow: hidden;
				border-radius: 100px;
				text-align: center;
				background-color: white;
				float: left;
			}
			.board_img_cut img{
				height: 100%;
				width: auto;
			}
			.list_title>div{
				display: inline-block;		
				margin-bottom: 5px;
				margin-left: 10px;
			}

			.contents{
				width: 100%;
				clear: both;
				overflow: hidden;
				margin-left: 20px;
			}
			.created{
				font-size: 12px;
			}
			.class_board svg{
				float: right;
				width: 25px;
				height: 25px;
			}
			.class_board svg:hover{
				columns: blue;
				cursor: pointer;
			}
			.my_baby{
				color: white;
				background-color: purple;
				border-radius: 5px;
			}
		</style>

		<div id = "class_board">
			<div id = "board_cnt">
				<p>전체 게시물 : <?=$total_board?>개</p>
				<p>현재 페이지 게시물 : <?=$board?>개</p>

			</div>

			<!--게시물 결과 값 있으면-->
			<?php if($rs): ?>
				<!--하나씩 뽑아내기-->
				<?php foreach($rs['rs'] as $row): ?>
					<div class = "class_board">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
						  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
						</svg>
						<div class = "list_title">
							<div class = "board_img_cut">
								<img src="/img/users/<?=$row['user']?>/profile/<?=$row['user_img']?>" onerror = "this.src='/img/error/no_img.png'">
							</div>		
							<div>
								<h5><b><?=$row['user']?></b></h5>		
								<p class = "created"><?=$row['created']?> 작성</p>								
							</div>					
																	
						</div>
						<div class = "contents">
							<?=$row['contents']?>
						</div>
						
						<div class = "bottom"></div>
					</div>

					

				<?php endforeach; ?>
		
			<!--게시물 결과 값 없으면-->
			<?php else: ?>
				<div class = "class_board" style="text-align: center;">
					<h5><b>게시물 없음</b></h5>					
				</div>

			<?php endif; ?>

			<div id = "paging_link">
				<?=$paging_link?>	
			</div>
			
		</div>
		
	</div>
	
</section>
<style type="text/css">
	#baby_alert{
		width: 100%;
		height: 230px;
		clear: both;
		background-color: rgb(199, 226, 255);
		padding: 10px;
		border : 1px solid lightblue;
		margin-top: 10px;
		box-shadow: 0 8px 38px rgba(133, 133, 133, 0.3), 0 5px 12px rgba(133, 133, 133, 0.22);

	}
	#baby_alert hr{
		margin-top: 5px;
		margin-bottom: 5px;
	}
	#baby_alert>div{
		width: 500px;
		height: auto;
	}

	#baby_alert textarea{
		width: 400px;
		height: 150px;
		resize: none;
		float: left;
	}
	#baby_alert button{
		height: 150px;
		width: 80px;
		margin-left: 10px;
		float: left;
		transition: all 0.2s;
	}
	#baby_bottom{
		clear: both;
	}
	.selected_baby{
		background-color: rgb(255, 212, 206);
	}


</style>
<script type="text/javascript">

	$(function(){
		var cnt = 0;
		//알림장 작성은 teacher 모드일 때만 작동된다.
		$('.teacher').click(function(){
			$('.teacher').removeClass('selected_baby');
			$(this).addClass('selected_baby');

			var parent = $(this).find('input[name = parent]').val();
			var baby = $(this).find('input[name = baby]').val();
			if(cnt)
			{
				$('#baby_alert').remove();
			}
			var str = "<div id = 'baby_alert'><h5><b>아동 특이사항 전달</b></h5><hr/>";
			str += "학부모 : "+parent+", 자녀 : "+baby;
			str += "<br/><div><textarea name = 'baby_area' placeholder = '전달 내용을 입력하세요'></textarea>";
			str += "<button onclick = 'insertNotice(\"baby\");'>전달</button><div id = 'baby_bottom'></div></div>";
			str += "<input type = 'hidden' value = '"+parent+"' name = 'parent'>";
			str += "<input type = 'hidden' value = '"+baby+"' name = 'baby'></div>";

			$('#baby_div').append(str);

			cnt++;
		});
	});

	//소개글 입력하기
	function insertClassComment()
	{
		var comment = $('textarea[name = comment_area]').val();
		var class_name = $('input[name = class_name]').val();
		var user = $('textarea[name = user]').val();

		if(comment == "")
		{
			alert('학급 소개글을 입력하세요');
			return false;
		}
		var data = {
			name : class_name,
			comment : comment,
			user : user
		};
		var url = "/ajax/insert_class_comment";
		getAjax(url, data);
		setTimeout(1);
		location.reload();
	}


	function insertBoard()
	{
		var contents = $('textarea[name = class_contents]').val();
		var user = $('input[name = user]').val();
		var class_name = $('input[name = class_name]').val();

		if(contents == "")
		{
			alert("내용을 입력하세요");
			return false;
		}
		var url = "/ajax/insert_class_board";

		var data = {
			user : user,
			contents :  contents,
			class : class_name
		};
		getAjax(url, data);
		setTimeout(1);
		location.reload();
	}
	function deleteBoard()
	{
		var url = "/ajax/delete_class_board";		
		getAjax(url, data);
	}

	//알림장 작성
	function insertNotice(mode)
	{
		//user, class, msg
		var contents = $('textarea[name = notice_area]').val();
		var user = $('input[name = user]').val();
		var class_name = $('input[name = class_name]').val();
		var url = "/ajax/insert_class_notice";		

		if(mode == "baby")
		{
			url = "/ajax/insert_class_notice/baby";
			contents = $('textarea[name = baby_area]').val();
		}

		if(contents == "")
		{
			alert("내용을 입력하세요");
			return false;
		}		

		var data = {
			user : user,
			msg :  contents,
			class : class_name
		};


		if(mode == "baby")
		{
			data.parent = $('#baby_alert').find('input[name = parent]').val();
			data.baby = $('#baby_alert').find('input[name = baby]').val();
		}

		getAjax(url, data);
	}

	function getAjax(url,data){

		$.ajax({

			type : 'post',
			dataType : 'json',
			url : url,
			data : data,

			success : function(result)
			{
				alert(result['msg']);
			},
			error : function()
			{
				alert('error');
			}

		});
	};



</script>



	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	<style type="text/css">

	@font-face{
	    font-family: 'ModernHMedium';
	    src : url('/font/ModernHMedium.ttf');
	}
	body *{
	    font-family: 'ModernHMedium';
	}

	*{
		margin: 0;
	}
	section{
		text-align: center;
		background-color: rgba(20,20,20,0.1);
	}
	#msg_title{
		background-color: #333;
		color: white;
		height: 100px;
		text-align: center;
		font-size: 30px;
		padding-top: 40px;
		margin-bottom: 20px;
	}
	#msg_title svg{
		width: 30px;
		height: 30px;
		position: relative;
		top: 2px;
		margin-right: 5px;
	}
	.teacher_img_cut{
		width: 55px;
		height: 55px;
		border-radius: 100px;
		overflow: hidden;
		float: left;
		margin-left: 10px;
		text-align: center;
	}
	.teacher_img_cut img{
		height: 100%;
		width: auto;
		display: inline-block;
	}
	.msg_list{
		min-height: 100px;
		margin-top: 15px;
		padding-bottom: 10px;
		padding-top: 10px;
	}
	.unread{
		background-color: lightgray;
	}
	.teacher_info{
		width: 100%;
		height: 60px;
	}
	.teacher_info>div{
		float: left;		
	}
	.teacher_info>div *{
		padding: 0;
		margin: 0;
	}

	.teacher_info>div h3{
		margin-top: 5px;
	}

	.created{
		font-size: 12px;
	}

	.bottom{
		clear: both;
	}
	.contents{
		width: 88%;
		min-height: 100px;
		border: 2px solid gray;
		border-radius: 20px;
		border-top-left-radius: 0;
		margin-left: 6%;
		background-color: ghostwhite;
		overflow: hidden;
		padding: 8px;
		margin-bottom: 20px;
		text-align: left;
	}

	.sub_title{
		margin-bottom: 10px;
	}

	#btn_group{
		width: 100%;
		height: auto;
	}
	.top_btn{
		width: 33.33%;
		height: 30px;
		margin-bottom: 15px;
		padding-top: 5px;
		display: inline-block;
		float: left;
		background-color: rgba(20,20,20,0.1);
		transition: all 0.2s;
	}

	.top_btn:hover{
		background-color: rgba(20,20,20,0.3);
		cursor: pointer;
	}

	.btn_click{
		background-color: rgba(20,20,20,0.3);
		color: white;
		font-weight: 600;
	}
	.msg_wrap{
		display: none;
		height: 538px;
	}
	.list_wrap{
		background-color: white;
		height: 450px;
		overflow-y: auto;
	}
	.msg_show{
		display: block;
	}
	.empty_msg{
		margin-top: 200px;
	}
	hr{
		border: 1px solid lightgray;
	}
	.read{
		background-color: lightyellow;
		border: 2px solid orange;
	}
	.teacher_sub_info{
		text-align: left;
		margin-left: 10px;
	}

</style>
	</head>
	<body>
		<section>

			<div id = "msg_title">
				<h3>
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
					  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
					</svg>
					메세지함
				</h3>
			</div>

			<div id = "btn_group">
				<div class = "top_btn">전체알림(<?=$num = $all_class_msg ? $all_class_msg['num'] : 0?>)</div>
				<div class = "top_btn">우리반알림(<?=$num = $class_msg ? $all_class_msg['num'] : 0?>)</div>
				<div class = "top_btn">우리아이(<?=$num = $comment ? $comment['num'] : 0?>)</div>
			</div>

			<!--1. 전체알림 클릭시 컨텐츠-->			
			<div class = "msg_wrap" id = "all_class_msg_wrap">		
				<h3 class = "sub_title">				
					커뮤니티 전체 알림
				</h3>
				<hr>		
				<div class = "list_wrap">
						<?php if($all_class_msg): ?>
						<?php foreach($all_class_msg['rs'] as $row): ?>
							<div class = "msg_list">
								<div class ="teacher_info">
									<div class = "teacher_img_cut">
										<img src="/img/users/<?=$row['user']?>/profile/<?=$row['img']?>" onerror = "this.src = '/img/error/no_img.png'">
									</div>
									<div class = "teacher_sub_info">
										<h3><b><?=$row['user']?> (<?=$row['perm']?>)</b></h3>
										<p class = "created"><?=$row['created']?> 전달
						
										</p>

									</div>		
									<div class ="bottom"></div>				
								</div>

								<div class = "contents">
									<p><?=$row['msg']?></p>
								</div>									
							</div>
								
						<?php endforeach; ?>
					<?php else: ?>
						<p class = "empty_msg">도착한 메세지가 없습니다</p>
					<?php endif; ?>						
				</div>	
			</div>	

			<!--2. 우리반알림 클릭시 컨텐츠-->			
			<div class = "msg_wrap" id = "class_msg_wrap">
				<h3 class = "sub_title" class = "msg_wrap">				
					학급 알림장
				</h3><hr>				
				<div class = "list_wrap">
						<?php if($class_msg): ?>
						<?php foreach($class_msg['rs'] as $row): ?>
							<div class = "msg_list">
								<div class ="teacher_info">
									<div class = "teacher_img_cut">
										<img src="/img/users/<?=$row['teacher_id']?>/profile/<?=$row['teacher_img']?>" onerror = "this.src = '/img/error/no_img.png'">
									</div>
									<div class = "teacher_sub_info">
										<h3><b><?=$row['teacher_id']?> (담임)</b></h3>
										<p class = "created"><?=$row['created']?> 전달</p>							
									</div>		
									<div class ="bottom"></div>				
								</div>

								<div class = "contents">
									<p><?=$row['msg']?></p>
								</div>									
							</div>
								
						<?php endforeach; ?>
					<?php else: ?>
						<p class = "empty_msg">도착한 메세지가 없습니다</p>
					<?php endif; ?>						
				</div>				
			</div>	

			<!--3. 우리아이 클릭시 컨텐츠-->
			<div class = "msg_wrap" id = "comment_wrap">
				<h3 class = "sub_title" class = "msg_wrap">				
					아동 특이사항 (<?=$baby?> - <?=$class?>)
				</h3>
				<hr>				
				<div class = "list_wrap">
					<?php if($comment): ?>
						<?php foreach($comment['rs'] as $row): ?>
							<?php if($row['view'] == "읽음"): ?>
								<div class = "msg_list">
							<?php else: ?>
								<div class = "msg_list unread">
							<?php endif; ?>
							
								<div class ="teacher_info">
									<div class = "teacher_img_cut">
										<img src="/img/users/<?=$row['teacher_id']?>/profile/<?=$row['teacher_img']?>" onerror = "this.src = '/img/error/no_img.png'">
									</div>
									<div class = "teacher_sub_info">
										<h3><b><?=$row['teacher_id']?> (담임)</b></h3>
										<p class = "created"><?=$row['created']?> 전달
										<?php if($row['view'] != "읽음"): ?>
											| 읽지않음
										<?php else: ?>
											| 읽음
										<?php endif; ?>	
										</p>

									</div>		
									<div class ="bottom"></div>				
								</div>

								<?php if($row['view'] != "읽음"): ?>
									<div class = "contents read">
								<?php else: ?>
									<div class = "contents">
								<?php endif; ?>
								
									<p><?=$row['msg']?></p>
								</div>									
							</div>
								
						<?php endforeach; ?>
					<?php else: ?>
						<p class = "empty_msg">도착한 메세지가 없습니다</p>
					<?php endif; ?>						
				</div>	
			</div>	


		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script type="text/javascript">

		$(function(){
			$(function(){
				$('.top_btn').eq(2).addClass('btn_click');
				$('.msg_wrap').eq(2).addClass('msg_show');
			});
			$('.top_btn').click(function(){
				$('.top_btn').removeClass('btn_click');
				$(this).addClass('btn_click');
				var num = $(this).index();
				//alert(num);
				$('.msg_wrap').removeClass('msg_show');
				$('.msg_wrap').eq(num).addClass('msg_show');
			});
		});
	</script>

</section>
	
	</body>
	</html>

	
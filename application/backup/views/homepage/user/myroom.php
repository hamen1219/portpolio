<link href="https://fonts.googleapis.com/css2?family=Song+Myung&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/css/user/myroom.css">
<section>
		<!-- 1. 사용자 정보 머릿글 -->
		<div id = "s_top" class = "s_base">
			<div id = "my_img_cut">
				<?php if($us['img'] !== '') :?>
					<img src="/img/users/<?=$us['id']?>/profile/<?=$us['img']?>">
				<?php else: ?>
					<img src="/img/error/no_img.png">
				<?php endif; ?>
				
			</div>
			<div id = "my_title">
				<h1><?=$us['id']?>님의 마이룸입니다</h1>
				<p>가입일 : <?=$us['created']?></p>
				<?php if($visit_latest): ?>
					<p>최근 로그인 한 시각 : <?=$visit_latest?></p>
				<?php endif; ?>
				<p>현재 접속 아이피 : <?= $_SERVER["REMOTE_ADDR"] ?></p>
			</div>
		</div>

		<!-- 관리자의 경우 관리자 페이지 이동 버튼 보여준다 -->	
		<?php if(($us['perm'] == "관리자" || $us['perm'] == "부관리자" ) && $us['id'] == $user['id']): ?>			
			<a id = "admin_page" href="/admin">
				<h4>관리자 페이지 접속하기</h4>
			</a>					
		<?php endif; ?>

		<!-- 2. 가운데 메뉴 묶음 -->
		<div id = "s_center">
			<!--1번째 메뉴 : 사용자 수정 메뉴-->
			<div id = "us1">
				<h4 class = "s_title">정보 수정</h4>
					<!--form data 통해 update 진행 -->
					<form id = "f1">
						<input type="hidden" name="tid" value = "<?=$us['id']?>">

						<table id = "us1_info">
							<tr>
								<td><b>이름</b></td>
								<td><p name = "tname"><?=$us['name']?></p></td>
							</tr>
							<tr>
								<td><b>비밀번호</b></td>
								<td><p name = "tpw">********</p></td>
							</tr>
							<tr>
								<td><b>프로필</b></td>
								<td><p name = "img"><?=$us['img']?></p></td>
							</tr>
							<tr>
								<td><b>주소</b></td>
								<td><p name = "addr"><?=$us['addr']?></p></td>
							</tr>
							<tr>
								<td><b>이메일</b></td>
								<td><p name = "email"><?=$us['email']?></p></td>
							</tr>
							<tr>
								<td><b>한줄소개</b></td>
								<td><p name = "intro"><?=$us['intro']?></p></td>
							</tr>
						</table>			
					</form>	

					<!--정보 수정하기 버튼 -->
					<?php if($code === 1): ?>
						<?php if($user['perm'] == "관리자" || $user['perm'] == "부관리자"): ?>
							<button id = "update_btn" onclick="update_form('admin')"><p>정보 수정하기</p></button>
						<?php else: ?>
							<button id = "update_btn" onclick="update_form()"><p>정보 수정하기</p></button>
						<?php endif; ?>
					<?php endif; ?>


				
			</div>

			<!--2번째 메뉴 : 메세지 함 메뉴-->
			<div id = "us2">
				<h4 class = "s_title">나의 알림</h4>
				<div id = "msg">				
				</div>					
			</div>		
		</div>		

		<!--3번째 메뉴 : -->
		<div id = "us3">
			<h4 class = "s_title">게시물 현황</h4>
			<a href="/board/myboard/<?=$us['id']?>"><h4>작성한 게시물 보기</h4></a>

			<!--그래프 정보 테이블-->
			<table id = "graph">
				<!--1번째 줄 : 그래프 모형-->
				<tr>
					<td>					
						<div id = "total1" style="background-color: lightblue;">
							<div id = "my1" style="height: <?= $us2_div['total_my_b'] ?>px;">									
								<div class = "graph_num">										
									<h4><?= $us2['total_my_b']?></h4>
									<p>/<?= $us2['total_b'] ?></p>
								</div>
							</div>
						</div>
					</td>
					<td>						
						<div id = "total2"  style="background-color: orange;">
							<div id = "my2" style="height: <?= $us2_div['total_my_r'] ?>px;">
								
								<div class = "graph_num">										
									<h4><?= $us2['total_my_r']?></h4>
									<p>/<?= $us2['total_r'] ?></p>
								</div>
							</div>
						</div>
					</td>
					<td>
					
						<div id = "total3"  style="background-color: skyblue;">
							<div id = "my3" style="height: <?= $us2_div['total_good'] ?>px;">
								<div class = "graph_num">										
									<h4><?= $us2['total_good']?></h4>
									<p>/<?= $us2['total_my_b'] ?></p>
								</div>							
							</div>
						</div>
					</td>
					<td>
						<div id = "total4"  style="background-color: red;">
							<div id = "my4" style="height: <?=$us2_div['total_poor'] ?>px;">
								<div class = "graph_num">										
									<h4><?= $us2['total_poor'] ?></h4>
									<p>/<?= $us2['total_my_b'] ?></p>
								</div>
								
							</div>
						</div>
					</td>
					<td>
						<div id = "total5"  style="background-color: lightgreen;">
							<div id = "my5"  style="height: <?= $us2_div['total_save'] ?>px;">
								
								<div class = "graph_num">										
									<h4><?= $us2['total_save'] ?></h4>
									<p>/<?= $us2['total_my_b'] ?></p>
								</div>
							</div>
						</div>
					</td>					
					<td>				
						<div id = "total6" style="background-color: skyblue;">
							<div id = "my6" style="height: <?= $us2_div['total_good_r'] ?>px;">
								
								<div class = "graph_num">										
									<h4><?= $us2['total_good_r'] ?></h4>
									<p>/<?= $us2['total_my_r'] ?></p>
								</div>
							</div>
						</div>						
					</td>
					<td>
						<div id = "total7"  style="background-color:red;">
							<div id = "my7"  style="height: <?= $us2_div['total_poor_r'] ?>px;">
				
								
								<div class = "graph_num">										
									<h4><?= $us2['total_poor_r'] ?></h4>
									<p>/<?= $us2['total_my_r'] ?></p>
								</div>
							</div>
						</div>
					</td>										
				</tr>

				<!--2번째 메뉴 : 그래프 명-->
				<tr>
					<td>게시물 수</td>
					<td>댓글 수</td>
					<td>받은 좋아요</td>
					<td>받은 싫어요</td>
					<td>받은 찜하기</td>	
					<td>받은 좋아요</td>
					<td>받은 싫어요</td>		
				</tr>

				<!--3번째 메뉴 : 그래프 카테고리 명-->
				<tr>
					<td colspan="2">
						<div class = "graph_banner">활동률</div>
					</td>					
					<td colspan="3">
						<div class = "graph_banner">게시물 호감도</div>
					</td>			
					<td colspan="2">
						<div class = "graph_banner">댓글 호감도</div>
					</td>						
				</tr>
			</table>
		</div>	
	</div>


	<?php if($code === 1): ?>
		<div id = "s_bottom" class = "s_base">
			<h4 class="s_title">회원 탈퇴</h4>
			<button id = "delete" onclick="delete_user()">
				<h3><b>회원 탈퇴하기</b></h3> 
			</button>
		</div>
	<?php endif; ?>
	<button id = "aa">ㅇㅇ</button>
	
</section>
<script src="https://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>

<script src = "/js/user/myroom.js"></script>


</body>
</html>
<link rel="stylesheet" type="text/css" href="/css/alert/success_join.css">

<section>	
	<?php if(!isset($user['id'])): ?>
		<div id = "join_title" class = "join_error">				
			<h3>만료된 페이지 :(</h3>
			<p>invalid page</p>	
		</div>
		<div id = "btn_group">
			<button id = "btn_error" onclick="location.href='/main'">홈으로</button>
		</div>
	<?php else: ?>
		<div id ="join_title">
			<img id = "apeach" src="/img/join/1.gif">
			<div id = "join_title">		
					<h3><?=$user['id']?>님!! 가입을 축하합니다 :)</h3>
					<p>Congratuation</p>	
			</div>
		</div>	
	<hr>
	<h5><b>사용자 정보</b></h5>
	<div id = "join_user_info">
		<div>
			<div id = "join_user_img_div">
				<img id ="join_user_img" src="/img/users/<?=$user['id']?>/profile/<?=$user['img']?>">
			</div>
			
			<table>		
				<tr>
					<td><p>ID</p></td>
					<td><p><?=$user['id']?></p></td>
				</tr>
				<tr>
					<td><p>이름</p></td>
					<td><p><?=$user['name']?></p></td>
				</tr>
				<tr>
					<td><p>성별</p></td>
					<td><p><?=$user['sex']?></p></td>
				</tr>
				<tr>
					<td><p>부서</p></td>
					<td><p><?=$user['dept']?></p></td>
				</tr>
				<tr>
					<td><p>이메일</p></td>
					<td><p><?=$user['email']?></p></td>
				</tr>
				<tr>
					<td><p>주소</p></td>
					<td><p><?=$user['addr']?></p></td>
				</tr>
				<tr>
					<td><p>상태</p></td>
					<td><p><?=$user['perm']?></p></td>
				</tr>
			</table>				
		</div>
		<div id = "btn_group">
			<button id = "btn_home" onclick="location.href='/main'"><p>홈으로</p></button>
			<button id = "btn_login" onclick="location.href='/main/login'"><p>로그인</p></button>
		</div>		
	</div>
	<?php endif; ?>
	
	
	
</section>
</body>
</html>
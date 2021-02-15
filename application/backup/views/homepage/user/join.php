<link rel="stylesheet" type="text/css" href="/css/user/join.css">



<section>
	<form action="" method="POST" id = "f1" enctype="multipart/form-data" name="f1">	

		<h2>회원가입</h2><hr>
		<div id = "input_wrap">
			<div class = "input">
				<p>* 아이디</p>
				<input type="text" class = "form-control" id = "tid" name="tid" placeholder="아이디를 입력하세요">
			</div>
			<p id = "alert_tid" class = "input_alert_msg"></p>

			<div class = "input">
				<p>* 비밀번호</p>
				<input type="password" class = "form-control" id = "tpw" name="tpw" placeholder="비밀번호를 입력하세요" >
			</div>
			<p id = "alert_tpw" class = "input_alert_msg"></p>

			<div class = "input">
				<p>* 비밀번호확인</p>
				<input type="password" class = "form-control" id = "rpw" name="rpw" placeholder="비밀번호 확인">
			</div>	
			<p id = "alert_rpw" class = "input_alert_msg"></p>

			<div class = "input">
				<p>* 이름</p>
				<input type="text" class = "form-control" id = "tname" name="tname" placeholder="이름을 입력하세요">
			</div>
			<p id = "alert_tname" class = "input_alert_msg"></p>

			<div class = "input">
				<p>* 주소</p>
				<div id = "addr_wrap">
					<input type="text" class = "form-control" id = "addr_api" name="addr_api" placeholder="클릭하여 주소 찾기" onclick="addrClick()" readonly>
					<input type="text" class = "form-control" id = "addr" name="addr" readonly>
				</div>
				
			</div>	
			<p id = "alert_addr" class = "input_alert_msg"></p>

			<div class = "input">
				<p>* 이메일</p>
				<input type="text" class = "form-control" id = "email" name="email" placeholder="이메일 주소를 입력하세요">		
			</div>

			<div class = "input">
				<p>상세</p>
				<div>
					<select name = "sex">
						<option selected>남자</option>
						<option>여자</option>
					</select>

					<select name = "dept">
						<option selected>일반</option>
						<option>취준생</option>
						<option>직장인</option>
						<option>학생</option>
					</select>
				</div>			
			</div>	

			<div class = "input">
				<p>프로필</p>
				<input type="file"  name="img_file" id = "file">
			</div>
			<div id = "input_bottom"></div>
		</div>		

		<div id = btn_group>
			<button id = "submit" value = "회원가입"><p>가입</p></button>
			<button onclick="location.href = '/main'"><p>홈으로</p></button>
		</div>		
	</form>
</section>

<script src = "/js/user/join.js"></script>
<script src="https://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>


</body>
</html>
<link rel="stylesheet" type="text/css" href="/css/user/join_index.css">

<body>
	

	<div id="s1">
		<h2>회원가입 약관</h2>
		<hr>
		<textarea id = "area" readonly>
			<!--회원가입 약관 불러오기-->
			<?php readfile("./text/join.txt"); ?>			
		</textarea>
		<label id = "join_label" for = "check"><b>상기 약관에 동의합니다</b> &nbsp; </label>
		 <input type="checkbox" id = "id_check">
	</div>
	<script src = "/js/user/join_index.js"></script>

</body>
</html>
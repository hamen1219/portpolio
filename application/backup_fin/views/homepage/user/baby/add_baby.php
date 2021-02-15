<link rel="stylesheet" type="text/css" href="/css/user/baby/baby.css">
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<section>
		<form enctype="multipart/form-data" action="/baby/insert" method="post" onsubmit="false">
			<div id = "baby_wrap">
				
				<div>
					<h2>아동정보등록</h2>
				</div>
				<hr>
				<div id = "baby_img_cut">
					<img src="/img/error/no_img.png">
				</div>
				<p>사진</p>
				<input type="file" name="baby_img">
				<p>이름</p>
				<input type="text" name="name" value = "" placeholder = "이름을 입력하세요">
				<p>학급</p>
				<select name = "class">
					<?php if($class): ?>
						<?php foreach($class['rs'] as $row): ?>
							<option value="<?=$row['name']?>"><?=$row['name']?></option>
						<?php endforeach; ?>

					<?php else: ?>
						<p><b>등록된 학급 없음</b></p>
					<?php endif; ?>
					
				</select>

				<p>나이</p>
				<select name = "old">
					<option value="3세">3세</option>
					<option value="4세">4세</option>
					<option value="5세">5세</option>
					<option value="6세">6세</option>
					<option value="7세">7세</option>
				</select>
			</div>
			<button type = "submit" id = "submit">등록하기</button>			
		</form>	
	</section>
</body>
</html>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
<script src = "/js/user/baby/add_baby.js"></script>




	

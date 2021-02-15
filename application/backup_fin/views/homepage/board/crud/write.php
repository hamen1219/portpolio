
<link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree&family=Fjalla+One&family=Fredericka+the+Great&family=Sansita+Swashed&family=Shrikhand&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/css/board/crud/update_api.css">
<link rel="stylesheet" type="text/css" href="/css/board/crud/update.css">
<link rel="stylesheet" type="text/css" href="/css/board/crud/write.css">
<link rel="stylesheet" type="text/css" href="/css/board/crud/right.css">

<section>

	<script>

		var user = <?=json_encode($this->sess->get_sess())?>,
		    base_url = <?=json_encode(base_url())?>;
		    board = "";
	</script>

	<form id = "left" action = "/board_crud/write" enctype="multipart/form-data" method="post" onsubmit="return form_submit();">

		<!--클릭한 주소를 저장할 hidden. 이후 form 데이터 전달 시 사용-->
		<input type="hidden" name = "addr" value="">
		<input type="hidden" name = "addr_api" value="">

		<div id = "form_title">
			<h2>게시물 작성</h2>
			<p>게시물을 작성할 수 있습니다</p>
		</div>
		<table id = "board_info_table">
			<tr>
				<td><p><b>제목</b></p></td>
				<td>
					<input type="text" id = "title" name="title">
				</td>
			</tr>

			<tr>
				<td><p><b>옵션</b></p></td>
				<td>
					<label><p>댓글 제한</p><input type="checkbox" id = "ck_reply" name="reply" value="제한"></label> &nbsp;
				</td>
			</tr>

			<tr>
				<td><p><b>카테고리</b></p></td>
				<td>
					<select name = "cat" id = "cat" onchange="changeArea()">
						<?php if($user['perm'] == "가입대기"): ?>
							<option value="등업" selected>등업신청</option>	
						<?php else: ?>	
							<?php if($user['perm'] == "관리자" || $user['perm'] == "부관리자"): ?>
								<option value ="채용">채용공고</option>
								<option value="공지사항">공지사항</option>
								<option value="운영진">운영진</option> 
								
							<?php endif; ?>

							<?php if($user['dept'] == "교사"):?>
								<option value="교사">교사 커뮤니티</option>
							<?php elseif($user['dept'] == "학부모"):?>
								<option value="학부모">학부모 커뮤니티</option>
							<?php endif;?>

							<option value="자유게시판" selected>자유게시판</option>
						    <option value="건의사항">건의사항</option>			
						    <option value="Q&A">Q&A</option>
						    <option value="자기소개">자기소개</option>
							<option value ="정모">정모</option>									
						<?php endif; ?>
					</select>
				</td>
			</tr>			
		</table>

		<div id = "contents">
			<textarea name = "contents" class="form-control" id="area" rows="20" ></textarea>
		</div>

		<table id = "file_table">
			<tr>
				<td>
					<p>파일첨부</p>
				</td>
				<td>
					<input type="file" name="file">					
				</td>
			</tr>			
		</table>


		<div id = "map_btn">

			<h3>지도 사용하기</h3>
		</div>

		<div>
			<div id = "map_slide">
				<div id = "map_tip">
					<p>원하는 장소를 검색 후 클릭하면 지정 및 변경 됩니다. x표시를 누르면 취소됩니다</p>
				</div>
				<div id="location_xy"></div>	
				<div class="map_wrap">
			    	<div id="map"></div>

				    <div class="hAddr">
				        <span><b>지도중심기준 행정동 주소정보</b></span>
				        <span id="centerAddr"></span>
				    </div>

				     <div id="menu_wrap" class="bg_white">
				        <div class="option">
				            <div>
				            	<!-- input button 으로 사용해야 form의 submit 강제 실행 방지 가능 -->			   
			                    키워드 : <input type="text" id="keyword" size="15"> 
			                    <input type = "button" onclick="searchPlaces()" value = "검색하기">			           
				            </div>
				        </div>
				        <hr>
			        	<ul id="placesList"></ul>
			        	<div id="pagination"></div>
		    		</div>		   
				</div>				

			</div>


			<div id = "btn_group">
				<button class="btn btn-primary" type = "submit">등록</button>
				<button class="btn btn-secondary" onclick="history.back()">뒤로</button>
			</div>			
		</div>			
	</form>	


	<div id = "right">
		<!--시계-->
		<div id = "clock">			
		</div>
		<!--최근 게시물-->
		<div id = "latest">
			<h4>최근게시물</h4>
			<?php $cnt = 1; ?>
			<?php foreach($side['rs'] as $row):?>
				<?php if($row['perm'] == "블라인드"): ?>
					<a class = "news">
						<h5 class = "title_num"><b><?= $cnt++ ?></b></h5>
						<div >						
							<h5><b>제한된 게시물</b></h5>
							<p><?=$row['cat']?> | <?=$row['user']?> | <?=substr($row['created'], 2, 8)?> </p>						
						</div>					
					</a>
				<?php else: ?>
					<a class = "news" href = "/board/read/page/<?=$row['num']?>">
						<h5 class = "title_num"><b><?= $cnt++ ?></b></h5>
						<div>						
							<h5><?=$title = mb_strlen($row['title']) > 20 ? mb_substr($row['title'], 0,15)." ··" : $row['title'] ?></h5>
							<p><?=$row['cat']?> | <?=$row['user']?> | <?=substr($row['created'], 2, 8)?> </p>						
						</div>					
					</a>
					<?php endif; ?>

			<?php endforeach; ?>
		</div>	
	</div>

	<div id = "bottom"></div>
</section>


<script src="/static/lib/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=f8f356e5f51fd9166b0fc4b453f121b8&libraries=services"></script>

<script src = "/js/board/crud/clock.js"></script>
<script src = "/js/board/crud/write.js"></script>
<script src = "/js/board/crud/write_api.js"></script>



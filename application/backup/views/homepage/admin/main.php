<script src="/static/lib/ckeditor/ckeditor.js"></script>
<link rel="stylesheet" type="text/css" href="/css/admin/main.css">
<?php $this->load->library('userip');  ?>

<body>
	<section>
		<div id = "title">
			<h2>관리자 페이지</h2>
			<p>유저, 게시물 관리 등 다양한 제어가 가능합니다.</p>
			<button id = "btn_notice">공지사항 쓰러가기</button>
		</div>	

		<div class= "btn_slide" id = "intro_write">
			<h4>대문 작성</h4>
		</div>

		<div class = "slide_contents" id = "intro_slide">
			<div id = "intro_rs">
				<b><p>					
					<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-square-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h2.5a2 2 0 0 1 1.6.8L8 14.333 9.9 11.8a2 2 0 0 1 1.6-.8H14a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
					  <path fill-rule="evenodd" d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
					</svg>
					현재 작성된 대문글 현황
				</p></b><hr>
				<?php if(!$intro): ?>
					<h4>등록된 대문 글이 없습니다</h4>
				<?php else : ?>
					<b><p><?=$intro['contents']?></p></b><p> ㄴ작성 : <?=$intro['perm']?>(<?=substr($intro['created'],0,10)?>)</p>
				<?php endif; ?>
			</div>
			<textarea id = "intro_area" placeholder="대문글을 작성하세요"></textarea>			
			<button onclick="intro_write()">작성</button>
		</div>

		<div class = "btn_slide" id = "email">
			<h4>Email 발송</h4>
		</div>


		<div class = "slide_contents" id = "email_slide">
			<textarea name = "contents" class="form-control" id="email_area" rows="20" ></textarea>
			<button id = "btn_email" onclick="send_email()">전송하기</button>
		</div>



		<div id = "sub_admin">
			<div class = "list_title">
				<h4><b>부관리자</b></h4>
				<?php if($sub_admin): ?>
					<h5 class = "list_cnt_num"><?=$sub_admin['num']?></h5>
				<?php endif; ?>			
			</div>

			<div class = "list sub_admin_list">
				<?php if($sub_admin): ?>
					<?php $cnt = 1; ?>
					<?php foreach($sub_admin['rs'] as $row): ?>
						<div class = "user">
						<div class = "user_num"><h3><?=$cnt?></h3></div>
						<div class = "user_img_cut">
							<img src="/img/users/<?=$row['id']?>/profile/<?=$row['img']?>" onerror = "this.src='/img/error/no_img.png'">
						</div>					
						
						<table>
							<tr>
								<td colspan="2">
									<a href="/user/myroom/<?=$row['id']?>"><h4><?=$row['id']?></h4></a>									
								</td>
							</tr>
							<tr>
								<td><p>이름 : <?=$row['name']?></p></td>
								<td><p>부서 : <?=$row['dept']?></p> </td>								
							</tr>
							<tr>
								<td><p>등급 : <?=$row['perm']?></p></td>
								<td><p>가입 : <?=substr($row['created'], 0, 10)?></p> </td>
							</tr>
						</table>	
						<?php if($user['perm'] == '관리자'): ?>
							<div class = "btn_update">
								<div>
									<a onclick="ctrl_user('<?=$row['id']?>', 'delete')">
										<h3>x</h3>
									</a>
								</div>
								<div>
									<a onclick="ctrl_user('<?=$row['id']?>', 'common')">
										<h3><</h3>
									</a>									
								</div>							
							</div>		
						<?php endif; ?>							
					</div>
					<?php $cnt++; ?>
				<?php endforeach; ?>
				<?php else: ?>
				데이터 없음
				<?php endif; ?>					
			</div>			
		</div>

		<div id = "list_group">
			<div id = "view1">
				<div class = "list_title">
					<h4><b>가입대기 회원</b></h4>
					<?php if($user_empty): ?>
						<h5 class = "list_cnt_num"><?=$user_empty['num']?></h5>
					<?php endif; ?>			
				</div>
				
				<div class = "list">
					<?php if($user_empty): ?>
						<?php $cnt = 1; ?>
						<?php foreach($user_empty['rs'] as $row): ?>
							<div class = "user">
							<div class = "user_num"><h3><?=$cnt?></h3></div>
							<div class = "user_img_cut">
								<img src="/img/users/<?=$row['id']?>/profile/<?=$row['img']?>" onerror = "this.src='/img/error/no_img.png'">
							</div>					
							
							<table>
								<tr>
									<td colspan="2">
										<a href="/user/myroom/<?=$row['id']?>"><h4><?=$row['id']?></h4></a>	
									</td>
								</tr>
								<tr>
									<td><p>이름 : <?=$row['name']?></p></td>
									<td><p>부서 : <?=$row['dept']?></p> </td>								
								</tr>
								<tr>
									<td><p>등급 : <?=$row['perm']?></p></td>
									<td><p>가입 : <?=substr($row['created'], 0, 10)?></p> </td>
								</tr>
							</table>
							<div class = "btn_update">
								<div>
									<a onclick="ctrl_user('<?=$row['id']?>', 'common')">
										<h3>></h3>
									</a>									
								</div>
														
								<div>
									<a onclick="ctrl_user('<?=$row['id']?>', 'delete')">
										<h3>x</h3>
									</a>
								</div>
							</div>							
						</div>
						<?php $cnt++; ?>
						<?php endforeach; ?>
						<?php else: ?>
							데이터 없음
						<?php endif; ?>					
				</div>
			</div>
			<div id = "view2">
				<div class = "list_title">
					<h4><b>일반회원</b></h4>
					<?php if($user_common): ?>
						<h5 class = "list_cnt_num"><?=$user_common['num']?></h5>
					<?php endif; ?>			
				</div>
				<div class ="list">

					<?php if($user_common): ?>
						<?php $cnt = 1; ?>
						<?php foreach($user_common['rs'] as $row): ?>
							<div class = "user">
							<div class = "user_num"><h3><?=$cnt?></h3></div>
							<div class = "user_img_cut">
								<img src="/img/users/<?=$row['id']?>/profile/<?=$row['img']?>" onerror = "this.src='/img/error/no_img.png'">
							</div>		
							<table>
								<tr>
									<td colspan="2">
										<a href="/user/myroom/<?=$row['id']?>"><h4><?=$row['id']?></h4></a>	
									</td>
								</tr>
								<tr>
									<td><p>이름 : <?=$row['name']?></p></td>
									<td><p>부서 : <?=$row['dept']?></p> </td>								
								</tr>
								<tr>
									<td><p>등급 : <?=$row['perm']?></p></td>
									<td><p>가입 : <?=substr($row['created'], 0, 10)?></p> </td>
								</tr>
							</table>			

							<div class = "btn_update">
								<div>
									<a onclick="ctrl_user('<?=$row['id']?>', 'delete')">
										<h3>x</h3>
									</a>
								</div>
								<div>
									<a onclick="ctrl_user('<?=$row['id']?>', 'sub_admin')">
										<h3>★</h3>
									</a>									
								</div>
								<div>
									<a onclick="ctrl_user('<?=$row['id']?>', 'empty')">
										<h3><</h3>
									</a>									
								</div>							
							</div>	
		
											
						</div>
						<?php $cnt++; ?>
						<?php endforeach; ?>
						<?php else: ?>
							데이터 없음
						<?php endif; ?>		
				</div>
			</div>
		</div>
		<div id = "ctrl_board">
			<div class = "list_title">
				<h4><b>게시물 관리</b></h4>
				<?php if($board): ?>
					<h5 class = "list_cnt_num"><?=$board['num']?></h5>
				<?php endif; ?>			
			</div>
			<div id = "btn_ctrl_board">
				<a onclick="ctrl_board('blind')">블라인드</a>
				<a onclick="ctrl_board('delete')">삭제</a>				
			</div>
			<div>
				<div id="board_list">
					<table>	
						<tr>
							<th>순번</td>
							<th>카테고리</td>
							<th>제목</td>
							<th>ID</td>
							<th>작성일</td>
							<th>수정하기</th>
							<th><input type="checkbox" id = "btn_blind"></th>
							<th><input type="checkbox" id = "btn_delete"></th>
						</tr>
						<?php if($board): ?>
							<?php $cnt=1; ?>
							<?php foreach($board['rs'] as $row): ?>
								<tr>
									<td><?=$cnt?></td>
									<td><?=$row['cat']?></td>
									<td>
										<a href="/board/read/page/<?=$row['num']?>">
											<?=$row['title']?>
										</a>
									</td>
									<td><?=$row['user']?></td>
									<td><?=$row['created']?></td>	
									<td>
										<a class = "btn_user_update" onclick="update_board('<?=$row['num']?>')">수정</a>
									</td>
									<?php if($row['perm'] == '블라인드'): ?>
										<td><input type="checkbox" name="board_list_blind" value = "<?=$row['num']?>" checked></td>	
									<?php else: ?>
										<td><input type="checkbox" name="board_list_blind" value = "<?=$row['num']?>"></td>	
									<?php endif; ?>									
									<td><input type="checkbox" name="board_list_delete" value = "<?=$row['num']?>"></td>	
														
								</tr>
								<?php $cnt++; ?>
							<?php endforeach; ?>
						<?php else: ?>
							데이터 없음
						<?php endif; ?>
					</table>
				</div>
			</div>
		</div>

		<div id = "visit">
			<div class = "list_title">
				<h4><b>로그인 기록</b></h4>
				<?php if($visit): ?>
					<h5 class = "list_cnt_num"><?=$visit['num']?></h5>
				<?php endif; ?>			
			</div>
			<div>
				<div id="visit_list">
					<table>
						<tr>
							<th>순번</td>
							<th>ID</td>
							<th>IP</td>
							<th>시간</td>
						</tr>
						<?php if($visit): ?>
							<?php $cnt=1; ?>
							<?php date_default_timezone_set('Asia/Seoul'); ?>
							<?php foreach($visit['rs'] as $row): ?>												
								<?php if(substr($row['visited'], 0, 10) === substr(date("Y-m-d"), 0, 10) ) : ?>
								<tr style = "background-color: silver;">
									<td><b><?=$cnt?></b></td>	
									<td><b><?=$row['user']?></b></td>
									<td><b><?=$row['ip']?></b></td>		
									<td><b><?=$row['visited']." (오늘)"?></b></td>	
								</tr>
								<?php else: ?>
								<tr>
									<td><?=$cnt?></td>	
									<td><?=$row['user']?></td>
									<td><?=$row['ip']?></td>		
									<td><?=$row['visited']?></td>	
								</tr>
								<?php endif; ?>
							<?php $cnt++; ?>
						<?php endforeach; ?>
						<?php else: ?>
							데이터 없음
						<?php endif; ?>
					</table>
				</div>
			</div>
		</div>
	</section>

	<script src = "/js/admin/main.js"></script>

</body>
</html>
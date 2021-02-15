<style type="text/css">
	section{
		width: 80%;
		margin-left: 10%;
		margin-top: 50px;
		margin-bottom: 50px;
		border: 1px solid lightgray;
		padding: 10px;
		padding-bottom: 30px;
		min-height: 450px;
		height: auto;
		
	}
	.class_div{
		width: 100%;
		height: auto;		
		background-color: lightgray;
		text-align: center;				
	}
	.class_div h3{
		margin-bottom: 10px;
	}
	.class_div>div{
		display: inline-block;
		width: 100%;
		height: 200px;
		background-color: #17a2b8;
		transition: all 0.2s;
		padding-top: 20px;
		border-bottom: 1px solid lightgray;
	}
	.class_div:hover>div{
		width: 80%;		
		color: white;
	}

	#class_bottom{
		clear: both;
	}
	#class_group{
		width: 100%;
		padding: 20px;
	}
	.teacher_img_cut{
		width: 100px;
		height: 100px;
		overflow: hidden;
		border-radius: 20px !important;
		text-align: center;
		display: inline-block;
	}
	.teacher_img_cut img{
		height: 100%;
		display: inline-block;
	}

</style>

<section>
	
	<h1>학급별 커뮤니티</h1>

	<div id = "class_group">
		<?php if($class): ?>
			<?php foreach($class['rs'] as $row): ?>
				
				<a href="/classroom/class/<?=$row['name']?>">
					<div class = "class_div">
						<div>
							<h3><?=$row['name']?></h3>
					
								<div class = "teacher_img_cut">
									<img src="/img/users/<?=$row['teacher_id']?>/profile/<?=$row['teacher_img']?>" onerror = "this.src = '/img/error/no_img.png'">
								</div>								
					
							<p>교사 | <?=$row['teacher']?></p>
							
						</div>						
					</div>				
				</a>		
					
			<?php endforeach; ?>
			<div id = "class_bottom"></div>

		<?php else: ?>
			<?php if(isset($mode)): ?>
				<div class = "class_div">
					<h3>아동이 소속된 학급이 없습니다</h3>
				</div>	
			<?php else: ?>
				<div class = "class_div">
					<h3>등록된 학급이 없습니다</h3>
				</div>
			<?php endif; ?>			
		<?php endif; ?>		
	</div>	
</section>
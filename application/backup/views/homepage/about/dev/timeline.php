





<style type="text/css">
	section{
		width: 70%;
		margin-left: 15%;
		background-color: white;
		transition: all 0.5s;
		padding: 10px;
		border: 1px solid lightgray;
	}
	#title{
		width: 100%;
		height: 150px;
		padding: 20px;
		border: 1px solid lightgray;
	}
	#contents{
		width: 100%;
		border: 1px solid lightgray;
		margin-top: 30px;
		padding: 20px;
		background-color: white;
	}

	.word_title{
		margin-top: 20px;
	}

	.img_wrap h3{
		padding: 5px;
		background-color : skyblue; 
		border-radius: 5px;
		margin-bottom: 10px;
		margin-top: 30px;
		width: 80%;
	}
	.img_wrap img{
		max-height: 400px;
		margin-bottom: 20px;
		margin-right: 20px;
	}
	section table{
		width: 100%;
	}
	section table td{
		padding-left: 20px;
	}
	.div{
		border: 1px solid lightgray;
		margin-bottom: 10px;
		padding: 10px;
		padding-left: 20px;
	}



	@media(max-width: 1800px){
		section{
			width: 80%;
			margin-left: 10%;
		}
	}
	@media(max-width: 1500px){
		section{
			width: 90%;
			margin-left: 5%;
		}
	}
	
	@media(max-width: 1250px){
		section{
			width: 100%;
			margin-left: 0;
		}
		content{
			padding: 0;
		}

		.div{
			padding:0;
			text-align: center;
		}
		section table img{
			margin:0;
			margin:auto;
			height: 300px;
			display: inline-block;			
			margin-bottom: 20px;
		}
		section{
			padding: 0;
		}
		.img_wrap h3{
			width: 100%;
		}
		section table td{
			padding: 0;
		}

	}
	@media(max-width: 750px){
		section{
			border: 0;
		}

		#title{
			text-align: center;
			padding: 0;
			padding-top: 40px;
		}
		#contents{
			padding: 0;
			text-align: center;
		}
		#time_img{
			width: 100%;
		
		}
		section table img{
			height: 100%;
			max-width: 100%;
		}

		#contents h3{
			font-size: 20px;
		}
	}



</style>







<section>
	<div id = "title">
		<h2>이력사항</h2>
		<p>History</p>
	</div>

	<div id = "contents">

		<div class = "div">		
			<h2 class = "word_title"><b> 이력</b></h2>	
			<img id = "time_img" src="/img/about/timeline.png">

		</div>

		<div class = "div">
			<h2 class = "word_title"><b> 활동자료</b></h2>		
			
			<table>
				<tr>
					<td>
						<div class = "img_wrap">
							<h3>졸업작품 출품 (`18.12 - `19.10)</h3>
							<img src="/img/about/img.png">	
							<img src="/img/about/iot.png">	

						</div>
													
					</td>
				</tr>

				<tr>
					<td>
						<div class = "img_wrap">
							<h3>PHP 유치원 싸이트 제작 (`20.4 -`20.5)</h3>
							<img src="/img/about/img1.png">	
							<img src="/img/about/img3.png">	
						</div>
													
					</td>
				</tr>

				<tr>
					<td>
						<div class = "img_wrap">
							<h3>이데아 커뮤니티 제작 (`20.9 - `20.12)</h3>
							<img src="/img/about/img2.png">	
						</div>
													
					</td>
				</tr>

			
			</table>
			
		</div>
	</div>



		

		

		
		
	</div>
</section>








<style type="text/css">
	section{
		width: 70%;
		margin-left: 15%;
		background-color: white;
		transition: all 0.5s;
		padding: 10px;
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
		text-align: center;
	}
	#img_wrap{
		width: 100%;
		height: auto;
	}
	#img_wrap img{
		display: inline-block;
		height: 200px;
		border-radius: 30px;
		box-shadow: 0 8px 38px rgba(133, 133, 133, 0.3), 0 5px 12px rgba(133, 133, 133, 0.22);
	}
	#word_title{
		margin-bottom: 40px;
		margin-top: 20px;
		font-family: 'East Sea Dokdo', cursive;
		font-size: 50px;
	}
	#word_wrap{
		display: inline-block;
		text-align: left;
		width: 80%;
	}

	
	section	table{
		width: 80%;
		height: 100px;
		margin-left: 10%;
	}
	section hr{
		background-color: lightgray;
	}
	section table td{
		border: 1px solid black;
	}
	.title_p{
		width: 80%;
		background-color: #17a2b8;
		height: 40px;	
		padding-top: 5px;
		margin-left: 10%;
		margin-top: 50px;
		margin-bottom: 5px;
		font-size: 20px;
		font-weight: 700;
		box-shadow: 0 8px 38px rgba(133, 133, 133, 0.3), 0 5px 12px rgba(133, 133, 133, 0.22);
		transition: all 0.2s;

	}
	.title_p:hover{
		background-color: purple;
		color: white;
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
	}
	@media(max-width: 600px){
		section{
			padding: 0;
		}

		#title{
			text-align: center;
			padding: 0;
			padding-top: 40px;
		}
		#contents{
			padding: 0;
			padding-top: 30px;
		}
		.title_p{
			margin-left: 0;
			width: 100%;
		}
		section table, #word_wrap{
			margin-left: 0;
			width: 100%;
		}
	}
	



</style>







<section>
	<div id = "title">
		<h2>개발자 소개</h2>
		<p>introduce develeper</p>
	</div>

	<div id = "contents">
		<div id = "img_wrap">
			<img src="/img/about/me.png">
		</div>
		<h2 id = "word_title"><b>개발자 안형모</b></h2><hr>

		<p class = "title_p">기본사항</p>
		<table>
			<tr>
				<td>거주</td>
				<td>서울특별시 도봉구</td>
								
			</tr>

			<tr>
				<td>병역</td>
				<td>52사단</td>				
			</tr>

			<tr>
				<td>학력</td>
				<td>한국성서대 졸업</td>
			</tr>
		</table>

		<p class = "title_p">자기소개</p>
		<div id = "word_wrap">	
			
			
			<p>개발자 안형모입니다.</p>
			<p>평소 다양한 취미를 가지고 있던 저는 초등학교 때부터 배운 컴퓨터를 전공으로 선택하게 되었습니다.</p><br>

			<p>재미있었던 대학생활이었지만, 진로고민과 부족한 모습이 많았던 저는 군대를 다녀온 후 아르바이트와 대학 생활을 통해 한층 성장하게 되었고,</p>
			<p>전공 분야에서도 다양한 프로젝트를 경험하면서 개발자로서 성장할 수 있었습니다.</p><br>

			<p>이후 졸업작품 출품을 마치고 올해 졸업하게 되었고, IT 공부와 자격증 취득, 취업준비를 병행하고 있습니다.</p>
			<p>앞으로도 다양한 것에 도전하며 발전하는 개발자가 되겠습니다.</p><br>
			<p>감사합니다.</p>

			
		</div>

		
		
	</div>
</section>


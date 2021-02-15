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
	#map_wrap{
		box-shadow: 0 8px 38px rgba(133, 133, 133, 0.3), 0 5px 12px rgba(133, 133, 133, 0.22);
	}
	#word_title{
		margin-bottom: 10px;
	}
	#word_title+p{
		margin-bottom: 10px;
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
		#word_title{
			padding: 5px;
			background-color: rgba(20,20,20,0.2);
			border-radius: 5px;
			width: 90%;
			margin-left: 5%;
			margin-top: 10px;
			font-size: 21px;
		}
		#contents{
			border-top: 0;
			padding: 0;
			margin: 0;
		}
		#contents img{
			width: 70%;
			margin-left: 15%;
		}
		section hr{
			display: none;
		}
	}

</style>


<section>
	<div id = "title">
		<h2>오시는 길</h2>
		<p>Site map</p>
	</div>

	<div id = "contents">		

		<h2 id = "word_title"><b>본사는 도봉산역 도보 5분 거리입니다</b></h2>				

		<p>자세한 사항은 관리자에게 개별적으로 문의하시기 바랍니다.</p>
		<hr><br>


		<div id = "map_wrap">		
			<div id="map" style="width:100%;height:350px;"></div>
		</div>

		

		
		
	</div>

<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=f8f356e5f51fd9166b0fc4b453f121b8&libraries=services"></script>
<script type="text/javascript">
	var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
    mapOption = {
        center: new kakao.maps.LatLng(33.450701, 126.570667), // 지도의 중심좌표
        level: 2 // 지도의 확대 레벨
    };  

// 지도를 생성합니다    
var map = new kakao.maps.Map(mapContainer, mapOption); 

// 주소-좌표 변환 객체를 생성합니다
var geocoder = new kakao.maps.services.Geocoder();

// 주소로 좌표를 검색합니다
geocoder.addressSearch('도봉동 30-1', function(result, status) {

    // 정상적으로 검색이 완료됐으면 
     if (status === kakao.maps.services.Status.OK) {

        var coords = new kakao.maps.LatLng(result[0].y, result[0].x);

        // 결과값으로 받은 위치를 마커로 표시합니다
        var marker = new kakao.maps.Marker({
            map: map,
            position: coords
        });
        var arr_str  = "37.68668380372864, 127.04759376340415";
        // 인포윈도우로 장소에 대한 설명을 표시합니다
        var infowindow = new kakao.maps.InfoWindow({
            content: '<div style="width:150px;text-align:center;padding:6px 0;"><a href= "http://map.daum.net/link/to/본사,'+arr_str+'">본사 길찾기</a></div>'
        });
        infowindow.open(map, marker);

        // 지도의 중심을 결과값으로 받은 위치로 이동시킵니다
        map.setCenter(coords);
    } 
});   
</script>
</section>


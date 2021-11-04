<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/header.css">
		<script type="text/javascript" src="js/jquery.js"></script>
		<title>우리집 상황 확인하기</title>
	</head>
	<body>
		<header id="line1">
		 <?php 
        include "header.php";
     	 ?>
		</header>
		<section>
			<div class="main_box">
				<div id="box1">
					<a href="">
						<div class="content_box1">
							<img class="content" src="img/window.png" alt="button" title="window">
							<p>창문 상태</p>
						</div>
					</a>
					<a href="">
						<div class="content_box2">
							<img class="content" src="img/temperature.png" alt="button" title="temperature"
							><p>온도 / 습도</p>
						</div>
					</a>
					<a href="">
						<div class="content_box3">
							<img class="content" src="img/rain.png" alt="button" title="rain">
							<p>빗물 감지</p>
						</div>
					</a>
				</div>
				<div id="box2">
					<a href="">
						<div class="content_box4">
							<img class="content" src="img/film.png" alt="button" title="film">
							<p>PDLC 필름</p>
						</div>
					</a>
					<a href="">
						<div class="content_box5">
							<img class="content" src="img/siren.png" alt="button" title="siren">
							<p>경보 OFF</p>
						</div>
					</a>
					<a href="">
						<div class="content_box6">
							<img class="content" src="img/run.png" alt="button" title="run">
							<p>대피 경로</p>
						</div>
					</a>
				</div>
			</div>
		</section>
		<footer id="line2"></footer>
	</body>
</html>
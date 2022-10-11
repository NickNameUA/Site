<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
	include "Details/Links.php";
	include "Details/NavBar.php";
	?>
	<title>For Students</title>
</head>
<body>
	<div class="body">
		<div>
			<p>Хай гьорл</p></br>
		</div>
		<div>
			<p>Я фром Украйн</p>
		</div>
		<div class="btnSwpP">
			<button class="swapBtn" id="btnSwpPM" onclick="Swap(-1)">
				Попередня сторінка
			</button>
			<button class="swapBtn" id="btnSwpPP" onclick="Swap(1)">
				Наступна сторінка
			</button>
		</div>
	</div>
		<div>
			<button id="scrlBtnTop" onclick="bScrollTop()">
				<img
				id="scrlBtnImg"
				src="Img/Button/Dark/BtnScrlTopDark.png"
				width="60px"
				height="60px"
				alt="Scroll Top"
				/>
			</button>
	</div>
	<?php include "Details/Footer.php";?>
	</body>
	</html>
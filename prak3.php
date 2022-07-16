<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tugas Proyek PWEB</title>
	<link rel="stylesheet" type="text/css" href="pweb3.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
	<!-- loader -->
	<div class="bg-loader">
		<div class="loader"></div>
	</div>

	<!--header-->
	<div class="medsos">
		<div class="container">
			<ul>
				<li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a></li>
				<li><a href="https://www.youtube.com/?gl=DE"><i class="fa-brands fa-youtube"></i></i></a></li>
				<li><a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></i></a></li>
				<li><a href="https://twitter.com/?lang=en-id"><i class="fa-brands fa-twitter"></i></i></a></li>
			</ul>
		</div>
	</div>

	<header>
		<div class="container">
		<h1><a href="prak1.php">MY WORLD </a></h1>
		<ul>
			<li><a href="prak1.php">HOME</a></li>
			<li><a href="prak2.php">ABOUT</a></li>
			<li class="active"><a href="prak3.php">SERVICE</a></li>
			<li><a href="prak4.php">CONTACT</a></li>
		</ul>
		</div>
	</header>

	<!-- label -->
	<section class="label">
		<div class="container">
			<p>Home/Service</p>
		</div>
	</section>

	<!-- service -->
	<section  class="service">
		<div class="container">
			<h3>SERVICE</h3>
			<div class="box">
				<div class="col-4">
					<div class="icon"><i><i class="fa-brands fa-facebook"></i></div>
					<h4>FACEBOOK</h4>
				</div>
				<div class="col-4">
					<div class="icon"><i><i class="fa-brands fa-youtube"></i></i></div>
					<h4>YOUTUBE</h4>
				</div>
				<div class="col-4">
					<div class="icon"><i><i class="fa-brands fa-instagram"></i></div>
					<h4>INSTAGRAM</h4>
				</div>
				<div class="col-4">
					<div class="icon"><i><i class="fa-brands fa-twitter"></i></div>
					<h4>TWITTER</h4>
				</div>
			</div>
		</div>
	</section>

	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &vopy; 2022 - Prasetyo. All Rights Reserved.</small>
		</div>
	</footer>

	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
	</script>

</body>
</html>
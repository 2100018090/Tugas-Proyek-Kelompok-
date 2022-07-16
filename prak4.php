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
		<h1><a href="prak1.html">MY WORLD </a></h1>
		<ul>
			<li><a href="prak1.php">HOME</a></li>
			<li><a href="prak2.php">ABOUT</a></li>
			<li><a href="prak3.php">SERVICE</a></li>
			<li class="active"><a href="prak4.php">CONTACT</a></li>
		</ul>
		</div>
	</header>

	<!-- label -->
	<section class="label">
		<div class="container">
			<p>Home/Contact</p>
		</div>
	</section>

	<!-- service -->
	<section  class="service">
		<div class="container">
			<h3>CONTACT INFO</h3>
			<div class="box">
				<div class="col-4">
					<h4>Address</h4>
					<p>JL. Parantritis, Km. 16, Gerselo Patalan, Jetis, Patalan, Bantul, Ketandan, Patalan, Kec. Jetis, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55781</p>
				</div>
				<div class="col-4">
					<h4>Gmail</h4>
					<p>muhammadkusprasetyo@gmail.com</p>
				</div>
				<div class="col-4">
					<h4>Telp.</h4>
					<p>(021) 5643735039</p>
				</div>
				<div class="col-4">
					<h4>Hp</h4>
					<p>085643735039</p>
				</div>
			</div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15806.559746834779!2d110.3287006078125!3d-7.932622000000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57afd139a927%3A0x90e326d6bacd8e27!2sRSU%20Rachma%20Husada!5e0!3m2!1sid!2sid!4v1650633509520!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tugas Proyek PWEB 3</title>
	<link rel="stylesheet" type="text/css" href="pweb3.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script language="javascript">
		function select(pilihan) {
			alert("Masuk Ke Menu " + pilihan);
			document.select=pilihan;
		}
	</script>
	
	
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
			<li class="active"><a href="prak1.php">HOME</a></li>
			<li><a href="prak2.php">ABOUT</a></li>
			<li><a href="prak3.php">SERVICE</a></li>
			<li><a href="prak4.php">CONTACT</a></li>
		</ul>
		</div>
	</header>

	<!-- banner -->
	<section class="banner">
		<h2>WELCOME TO MY WEBSITE</h2>
	</section>

	<!-- about -->
	<section class="about">
		<div class="container">
			<h3>ABOUT</h3>
			<p>Selamat datang bulan suci Ramadan 1443 H. Semoga kita selalu mendapat keberkahan yang melimpah dan dijauhkan dari wabah Covid-19. Mari kita jaga kesehatan demi kelancaran ibadah puasa di tengah pandemi ini.Dengan berpuasa, kita mengatakan: Ya Allah, aku menyukai makan dan minum. Aku suka memenuhi hasratku akan makanan dan minuman. Namun, aku lebih mencintaimu daripada makanan dan minuman. Oleh karenannya, aku berhenti melakukan apa yang aku cintai untuk mengikuti perintah-Mu.Selamat menunaikan ibadah puasa pada bulan suci Ramadan 1443 H.
			</p>
			<p></p>
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
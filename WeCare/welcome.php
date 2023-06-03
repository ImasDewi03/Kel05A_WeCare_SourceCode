<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>WeCare</title>
	<link rel="stylesheet" type="text/css" href="styleWeCare.css">
</head>
<body>
	<header>
        <div class="logo">
			<img src="LogoWeCare.png" alt="Logo">
		</div>
		<div class="website-name">
			<h1>WeCare</h1>
		</div>
	</header>

	<nav>
		<ul>
            <li><a href="#">Halaman Utama</a></li>
			<li><a href="TentangKami.php">Tentang Kami</a></li>
			<li><a href="#Boarding">Boarding & DayCare</a></li>
			<li><a href="#pilihan-layanan">Layanan</a></li>
			<li><a href="Hubungikami.php">Kontak Kami</a></li>
            <li><a href="logout.php">Log out</a></li>
		</ul>
	</nav>

    <div class="wrapper">
        <!-- Untuk Home -->
        <section id="home">
           <img src="https://img.freepik.com/free-vector/flat-illustration-people-with-pets_52683-65392.jpg?w=740&t=st=1684325971~exp=1684326571~hmac=b0905d3eba6dac68fa2128e5bd41ace96862e61f2da7933550085e1cc92b9527"/>
           <div class="kolom">
               <h2>Bawalah hewan peliharaan kesayangan anda ke WeCare dan bebas bekerja tanpa perlu khawatir.</h2>
               <h2>Because Loving is Caring💜</h2>
               <p><a href="" class="tbl-pink">Pelajari Lebih Lanjut</a></p>
           </div>
       </section>
   </div>
    
	<main>
        <section id="#Boarding"></section>
		<h2>Boarding & Daycare </h2>
		<p>Jika anda berlibur atau ingin pergi dari rumah tetapi bingung tidak ada orang yang menjaga dan juga tidak ada tempat untuk meninggalkan hewan peliharaan anda. WeCare menyediakan fasilitas mulai dari tempat dan pelayanan dan tentu dengan harga terjangkau </p>
        <p>Keterangan : 

            Penitipan seminggu atau lebih bisa DP sebesar 50% dari lama-nya penitipan
            Sebelum anjing dan kucing masuk ke ruang penitipan, WeCare akan memeriksa kondisi hewan peliharaan Anda dan memberikan free grooming penghilang kutu pada awal penitipan, jadi hewan peliharaan kamu bebas kutu dan keluar pun akan bersih
            Penitipan lebih dari seminggu mendapatkan FREE Berenang Komplit atau Full Grooming bagi yang tidak mengambil renang
            </p>
		
	</main>

	<main>
		<section id="pilihan-layanan">
			<div class="layanan">
				<img src="2.png">
				<h3>PET CARE</h3>
				<button id="petcare">Buat Janji</button>
				<script>
				document.getElementById("petcare").addEventListener("click", function() {
				window.location.href = "form.php";
			});</script>
			</div>
			<div class="layanan">
				<img src="1.png">
				<h3>GROOMING</h3>
				<button id="grooming">Buat Janji</button>
				<script>
				document.getElementById("grooming").addEventListener("click", function() {
				window.location.href = "formgrooming.php";
			});</script>
			</div>
			<div class="layanan">
				<img src="4.png">
				<h3>MEDICAL CHECK UP</h3>
				<button id="checkup">Buat Janji</button>
				<script>
				document.getElementById("checkup").addEventListener("click", function() {
				window.location.href = "formcheckup.php";
			});</script>
			</div>
		</section>
	</main>

	<footer>
		<p>Hak Cipta © 2023 WeCare</p>
	</footer>

</body>
</html>

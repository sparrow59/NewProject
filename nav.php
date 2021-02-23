	<!-- ======= Header ======= -->
	<?php

	//Open a new connection to the MySQL server

	include 'config.php';
	//Initialize Session
	session_start();


	if (isset($_SESSION['login'])) {

		$fname = $_SESSION['fname'];
		$lname = $_SESSION['lname'];
	?>
		<header id="header" class="header fixed-top">
			<div class="container-fluid container-xl d-flex align-items-center justify-content-between">
				<img src="assets/img/fixlogo.png" height="50" width="21" alt="">
				<a href="index.php" class="logo d-flex align-items-center">
					<span style="color : #FBDE44FF">Baca </span> <span style="color: #F65058FF;">Buku</span>
				</a>

				<nav id="navbar" class="navbar">
					<ul>
						<li><a class="nav-link " href="index.php">Home</a></li>
						<li><a class="nav-link  active" href="index.php">Services</a></li>
						<li><a class="nav-link scrollto" href="index.php">About</a></li>
						<li><a href="index.php">Blog</a></li>
						<li><a class="getstarted scrollto" href="logout.php">Keluar</a></li>
					</ul>
					<i class="bi bi-list mobile-nav-toggle"></i>
				</nav><!-- .navbar -->

			</div>
		</header><!-- End Header -->
	<?php
	} else { ?>
		<header id="header" class="header fixed-top">
			<div class="container-fluid container-xl d-flex align-items-center justify-content-between">
				<img src="assets/img/fixlogo.png" height="50" width="21" alt="">
				<a href="index.php" class="logo d-flex align-items-center">
					<span style="color : #FBDE44FF">Baca </span> <span style="color: #F65058FF;">Buku</span>
				</a>

				<nav id="navbar" class="navbar">
					<ul>
						<li><a class="nav-link " href="index.php">Home</a></li>
						<li><a class="nav-link  active" href="index.php">Services</a></li>
						<li><a class="nav-link scrollto" href="index.php">About</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a class="getstarted scrollto" href="login.php">Masuk</a></li>
					</ul>
					<i class="bi bi-list mobile-nav-toggle"></i>
				</nav><!-- .navbar -->

			</div>
		</header><!-- End Header -->


	<?php }
	?>
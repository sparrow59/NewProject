<?php

//Open a new connection to the MySQL server

include 'config.php';
//Initialize Session
session_start();


if (isset($_SESSION['login'])) {

	$fname = $_SESSION['fname'];
	$lname = $_SESSION['lname'];
?>

	<!DOCTYPE html>
	<html lang="en">

	<head>
		<?php require_once 'head_tag.php' ?>

		<!-- =======================================================
  * Template Name: FlexStart - v1.0.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
	</head>

	<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="100">

		<!-- ======= Header ======= -->
		<header id="header" class="header fixed-top">
			<div class="container-fluid container-xl d-flex align-items-center justify-content-between">
				<img src="assets/img/fixlogo.png" height="50" width="21" alt="">
				<a href="index.php" class="logo d-flex align-items-center">
					<span style="color : #FBDE44FF">Baca </span> <span style="color: #F65058FF;">Buku</span>
				</a>

				<nav id="navbar" class="navbar">
					<ul>
						<li><a class="nav-link active " href="#">Home</a></li>
						<li><a class="nav-link scrollto" href="#services">Services</a></li>
						<li><a class="nav-link scrollto" href="#about">About</a></li>
						<li><a class="nav-link scrollto" href="#blog">Blog</a></li>
						<li><a class="getstarted scrollto" href="logout.php">Keluar</a></li>
					</ul>
					<i class="bi bi-list mobile-nav-toggle"></i>
				</nav><!-- .navbar -->

			</div>
		</header><!-- End Header -->
		<!-- ======= Hero Section ======= -->
		<section id="hero" class="hero d-flex align-items-center">

			<div class="container">

				<div class="row">
					<div class="col-lg-7 d-flex flex-column justify-content-center">
						<h1 data-aos="fade-up" class="font_color">"Cuma perlu satu buku untuk jatuh cinta pada membaca. Cari buku itu. Mari jatuh cinta."<br> - Najwa Shihab <br></h1>
						<h2 data-aos="fade-up" data-aos-delay="400">Selamat datang kembali <?php echo $fname;
																							echo " ";
																							echo $lname; ?>.</h2>
						<!-- <div data-aos="fade-up" data-aos-delay="600">
							<div class="text-lg-start">
								<a href="register.php" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
									<span>Daftar</span>
									<i class="bi bi-arrow-right"></i>
								</a>
							</div>
						</div> -->
					</div>
					<div class="col-lg-5 hero-img" data-aos="zoom-out" data-aos-delay="200">
						<img src="assets/img/bacbuk.svg" class="img-fluid img-responsive" alt="">
					</div>
				</div>
			</div>

		</section><!-- End Hero -->


		<!-- ======= Values Section ======= -->
		<section id="values" class="values">

			<div class="container" data-aos="fade-up">

				<header class="section-header">
					<h2>Must Read</h2>
					<p>Buku Terbaik di Tahun 2020</p>
				</header>

				<div class="row">

					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
							<li data-target="#myCarousel" data-slide-to="3"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="img-responsive" src="assets/img/carousels/1.png" alt="Seni">
							</div>
							<div class="carousel-item">
								<img class="img-responsive" src="assets/img/carousels/2.png" alt="Bercanda">
							</div>
							<div class="carousel-item">
								<img class="img-responsive" src="assets/img/carousels/3.png" alt="Aini">
							</div>
							<div class="carousel-item">
								<img class="img-responsive" src="assets/img/carousels/4.png" alt="Teras">
							</div>
						</div>
						<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon"></span>
						</a>
						<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
							<span class="carousel-control-next-icon"></span>
						</a>
					</div>
				</div>

			</div>

		</section><!-- End Values Section -->

		<!-- ======= Services Section ======= -->
		<section id="services" class="services">

			<div class="container" data-aos="fade-up">

				<header class="section-header">
					<h2>Layanan</h2>
					<p>Temukan Buku Kamu, Mari Jatuh Cinta</p>
				</header>

				<div class="row justify-content-center">
					<div class="col-md-8 ">
						<form>
							<div class="input-group search-box">
								<input type="search" class="form-control" id="search_text" name="search_text" autocomplete="off" placeholder="Judul buku / Nama pegarang"><button class="btn btn-primary search-icon"><i class="fa fa-search"></i></button>
							</div>
						</form>

					</div>
				</div>

		</section><!-- End Services Section -->


		<!-- ======= Portfolio Section ======= -->
		<section id="portfolio" class="portfolio">

			<div class="container" data-aos="fade-up">
				<div class="row" data-aos="fade-up" data-aos-delay="100">
					<div class="col-md-3">
						<ul class="list-group checkbox-inline">
							<h5>Genre Buku</h5>
							<?php
							$sql = "SELECT DISTINCT kategori FROM books ORDER BY kategori";
							$result = $conn->query($sql);
							while ($row = $result->fetch_assoc()) {
							?>
								<li class="list-group-item filter-active ">
									<div class="form-check ">
										<label class="form-check-label"><input type="checkbox" class="form-check-input product_check" value="<?= $row['kategori']; ?>" id="kategori"><?= $row['kategori']; ?></label>
									</div>
								</li>
							<?php } ?>
						</ul>
					</div>
					<div class="col-lg-9 col-md-9">
						<h5 class="text-center" id="textChange">Semua Buku</h5>
						<hr>
						<div class="text-center">
							<img src="assets/img/loader.gif" id="loader" width="200" style="display: none;">
						</div>

						<div class="row" id="result">
							<?php
							$sql = "SELECT * FROM books ORDER BY judul";
							$result = $conn->query($sql);

							while ($row = $result->fetch_assoc()) {
							?>
								<div class="col-md-3 mb-2">
									<div class="portfolio-wrap">
										<img src="<?= $row['img']; ?>" class="img-fluid">
										<div class="portfolio-info">
											<h4><?= $row['judul']; ?></h4>
											<p><?= $row['kategori']; ?></p>
											<div class="portfolio-links">
												<a href="portfolio-details.php?books_id=<?= $row['books_id']; ?>" title="More Details"><i class="bi bi-link"></i></a>
											</div>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>

					</div>


				</div>

				<!-- ======= Team Section ======= -->
				<section id="about" class="team">

					<div class="container" data-aos="">

						<header class="section-header">
							<h2>Developer</h2>
							<p>Siapakah saya ?</p>
						</header>

						<div class="row gy-4 justify-content-center">

							<div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="" data-aos-delay="100">
								<div class="member ">
									<div class="member-img">
										<img src="assets/img/team/riski.jpg" class="img-fluid" alt="">
										<div class="social">
											<a href="https://web.facebook.com/drMaulana11/"><i class="bi bi-facebook"></i></a>
											<a href="https://www.instagram.com/drskiim_/"><i class="bi bi-instagram"></i></a>
											<a href="https://www.linkedin.com/in/d-riski-maulana-4a2179181/"><i class="bi bi-linkedin"></i></a>
										</div>
									</div>
									<div class="member-info">
										<h4>D'Riski Maulana</h4>
										<span>CEO, CTO, CFO, HRD, Manager, Content Creator, Karyawan, Office Boy</span>
										<p>Hanyalah seorang mahasiswa Ilmu Komputer yang memimpikan kedamaian. Pencinta Kucing, pecandu kopi dan kola, terlebih senyum si dia. </p>
									</div>
								</div>
							</div>


						</div>

					</div>

				</section><!-- End Team Section -->

				<!-- ======= Clients Section ======= -->
				<section id="clients" class="clients">

					<div class="container" data-aos="">

						<header class="section-header">
							<h2>Supported By</h2>
							<p>Special Thank's to </p>
						</header>

						<div class="container">
							<div class="row justify-content-center">
								<div class="col-md-3">
									<img src="assets/img/clients/alibaba.png" width="300" class="img-fluid" alt="">
								</div>
								<div class="col-md-3">
									<img src="assets/img/clients/codepolitan.png" width="300" class="img-fluid" alt="">
								</div>
								<div class="col-md-3">
									<img src="assets/img/clients/re-cloud.png" width="300" class="img-fluid" alt="">
								</div>
							</div>

						</div>
					</div>

				</section><!-- End Clients Section -->

				<!-- ======= Recent Blog Posts Section ======= -->
				<section id="recent-blog-posts" class="recent-blog-posts">

					<div class="container" data-aos="">

						<header id="blog" class=" section-header">
							<h2>Blog</h2>
							<p>Artikel Terbaru Kami</p>
						</header>

						<div class="row justify-content-center">

							<div class="col-lg-4">
								<div class="post-box">
									<div class="post-img"><img src="assets/img/billgates.jpg" class="img-fluid" alt=""></div>
									<span class="post-date">Minggu, Februari 21</span>
									<h3 class="post-title">Kenapa Kamu Harus Mulai Membaca Buku Dari Sekarang? Keajaiban Membaca</h3>
									<a href="blog-singel.php" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
								</div>
							</div>
						</div>

					</div>

				</section><!-- End Recent Blog Posts Section -->
				<!-- End Contact Section -->
				</main><!-- End #main -->

				<!-- ======= Footer ======= -->
				<?php

				require_once 'footer.php';

				?>
				<!-- End Footer -->

				<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

				<!-- Vendor JS Files -->
				<script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
				<script src="assets/vendor/aos/aos.js"></script>
				<script src="assets/vendor/php-email-form/validate.js"></script>
				<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
				<script src="assets/vendor/purecounter/purecounter.js"></script>
				<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
				<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

				<!-- Template Main JS File -->
				<script src="assets/js/main.js"></script>

				<!-- SCRIPT SEARCH BOX -->
				<script type="text/javascript">
					$(document).ready(function() {
						$('#search_text').keyup(function() {
							var txt = $(this).val();
							if (txt != '') {
								$.ajax({
									url: 'fetch.php',
									method: 'post',
									data: {
										search: txt
									},
									dataType: "text",
									success: function(data) {
										$('#result').html(data);
										$("#textChange").text("Hasil Pencarian")
									}
								});
							} else {
								$('#result').html('');
							}
						});
					})
				</script>
				<!-- SCRIPT SEARCH BOX -->

				<!-- AJAX UNTUK FILTER KATEGORI BUKU -->
				<script type="text/javascript">
					$(document).ready(function() {
						$(".product_check").click(function() {

							$("#loader").show();
							var action = 'data';
							var kategori = get_filter_text('kategori');

							$.ajax({
								method: 'POST',
								url: 'action.php',
								data: {
									action: action,
									kategori: kategori
								},
								success: function(response) {
									$("#result").html(response);
									$("#loader").hide();
									$("#textChange").text("Filtered Books");
								}

							});
						});

						function get_filter_text(text_id) {
							var filterData = [];
							$('#' + text_id + ':checked').each(function() {
								filterData.push($(this).val());
							});
							return filterData;
						}
					});
				</script>
				<!-- AJAX UNTUK FILTER KATEGORI BUKU -->

	</body>

	</html>



<?php

} else { ?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<?php require_once 'head_tag.php'; ?>



		<!-- =======================================================
  * Template Name: FlexStart - v1.0.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
	</head>

	<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="100">

		<!-- ======= Header ======= -->
		<header id="header" class="header fixed-top">
			<div class="container-fluid container-xl d-flex align-items-center justify-content-between">
				<img src="assets/img/fixlogo.png" height="50" width="21" alt="">
				<a href="index.php" class="logo d-flex align-items-center">
					<span style="color : #FBDE44FF">Baca </span> <span style="color: #F65058FF;">Buku</span>
				</a>

				<nav id="navbar" class="navbar">
					<ul>
						<li><a class="nav-link active " href="#">Home</a></li>
						<li><a class="nav-link scrollto" href="#services">Services</a></li>
						<li><a class="nav-link scrollto" href="#about">About</a></li>
						<li><a class="nav-link scrollto" href="#blog">Blog</a></li>
						<li><a class="getstarted scrollto" href="login.php">Masuk</a></li>
					</ul>
					<i class="bi bi-list mobile-nav-toggle"></i>
				</nav><!-- .navbar -->

			</div>
		</header><!-- End Header -->
		<!-- ======= Hero Section ======= -->
		<section id="hero" class="hero d-flex align-items-center">

			<div class="container">
				<?php

				if (isset($_GET["logout"])) {

					if ($_GET["logout"] == "true") { ?>

						<div class="alert alert-success">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>You have been logged out of the system.</strong>
						</div>

				<?php
					}
				}
				?>

				<div class="row">
					<div class="col-lg-7 d-flex flex-column justify-content-center">
						<h1 data-aos="fade-up" class="font_color">"Cuma perlu satu buku untuk jatuh cinta pada membaca. Cari buku itu. Mari jatuh cinta."<br> - Najwa Shihab <br></h1>
						<h2 data-aos="fade-up" data-aos-delay="400">Mari bergabung dengan Generasi Gemar Baca.</h2>
						<div data-aos="fade-up" data-aos-delay="600">
							<div class="text-lg-start">
								<a href="register.php" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
									<span>Daftar</span>
									<i class="bi bi-arrow-right"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-5 hero-img" data-aos="zoom-out" data-aos-delay="200">
						<img src="assets/img/bacbuk.svg" class="img-fluid img-responsive" alt="">
					</div>
				</div>
			</div>

		</section><!-- End Hero -->


		<!-- ======= Values Section ======= -->
		<section id="values" class="values">

			<div class="container" data-aos="fade-up">

				<header class="section-header">
					<h2>Must Read</h2>
					<p>Buku Terbaik di Tahun 2020</p>
				</header>

				<div class="row">

					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
							<li data-target="#myCarousel" data-slide-to="3"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="img-responsive" src="assets/img/carousels/1.png" alt="Seni">
							</div>
							<div class="carousel-item">
								<img class="img-responsive" src="assets/img/carousels/2.png" alt="Bercanda">
							</div>
							<div class="carousel-item">
								<img class="img-responsive" src="assets/img/carousels/3.png" alt="Aini">
							</div>
							<div class="carousel-item">
								<img class="img-responsive" src="assets/img/carousels/4.png" alt="Teras">
							</div>
						</div>
						<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon"></span>
						</a>
						<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
							<span class="carousel-control-next-icon"></span>
						</a>
					</div>
				</div>

			</div>

		</section><!-- End Values Section -->

		<!-- ======= Services Section ======= -->
		<section id="services" class="services">

			<div class="container" data-aos="fade-up">

				<header class="section-header">
					<h2>Layanan</h2>
					<p>Temukan Buku Kamu, Mari Jatuh Cinta</p>
				</header>

				<div class="row justify-content-center">
					<div class="col-md-8 ">
						<form>
							<div class="input-group search-box">
								<input type="search" class="form-control" id="search_text" name="search_text" autocomplete="off" placeholder="Judul buku / Nama pegarang"><button class="btn btn-primary search-icon"><i class="fa fa-search"></i></button>
							</div>
						</form>

					</div>
				</div>

		</section><!-- End Services Section -->


		<!-- ======= Portfolio Section ======= -->
		<section id="portfolio" class="portfolio">

			<div class="container" data-aos="fade-up">
				<div class="row" data-aos="fade-up" data-aos-delay="100">
					<div class="col-md-3">
						<ul class="list-group checkbox-inline">
							<h5>Genre Buku</h5>
							<?php
							$sql = "SELECT DISTINCT kategori FROM books ORDER BY kategori";
							$result = $conn->query($sql);
							while ($row = $result->fetch_assoc()) {
							?>
								<li class="list-group-item filter-active ">
									<div class="form-check ">
										<label class="form-check-label"><input type="checkbox" class="form-check-input product_check" value="<?= $row['kategori']; ?>" id="kategori"><?= $row['kategori']; ?></label>
									</div>
								</li>
							<?php } ?>
						</ul>
					</div>
					<div class="col-lg-9 col-md-9">
						<h5 class="text-center" id="textChange">Semua Buku</h5>
						<hr>
						<div class="text-center">
							<img src="assets/img/loader.gif" id="loader" width="200" style="display: none;">
						</div>

						<div class="row" id="result">
							<?php
							$sql = "SELECT * FROM books ORDER BY judul";
							$result = $conn->query($sql);

							while ($row = $result->fetch_assoc()) {
							?>
								<div class="col-md-3 mb-2">
									<div class="portfolio-wrap">
										<img src="<?= $row['img']; ?>" class="img-fluid">
										<div class="portfolio-info">
											<h4><?= $row['judul']; ?></h4>
											<p><?= $row['kategori']; ?></p>
											<div class="portfolio-links">
												<a href="portfolio-details.php?books_id=<?= $row['books_id']; ?>" title="More Details"><i class="bi bi-link"></i></a>
											</div>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>

					</div>


				</div>

				<!-- ======= Team Section ======= -->
				<section id="about" class="team">

					<div class="container" data-aos="">

						<header class="section-header">
							<h2>Developer</h2>
							<p>Siapakah saya ?</p>
						</header>

						<div class="row gy-4 justify-content-center">

							<div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="" data-aos-delay="100">
								<div class="member ">
									<div class="member-img">
										<img src="assets/img/team/riski.jpg" class="img-fluid" alt="">
										<div class="social">
											<a href="https://web.facebook.com/drMaulana11/"><i class="bi bi-facebook"></i></a>
											<a href="https://www.instagram.com/drskiim_/"><i class="bi bi-instagram"></i></a>
											<a href="https://www.linkedin.com/in/d-riski-maulana-4a2179181/"><i class="bi bi-linkedin"></i></a>
										</div>
									</div>
									<div class="member-info">
										<h4>D'Riski Maulana</h4>
										<span>CEO, CTO, CFO, HRD, Manager, Content Creator, Karyawan, Office Boy</span>
										<p>Hanyalah seorang mahasiswa Ilmu Komputer yang memimpikan kedamaian. Pencinta Kucing, pecandu kopi dan kola, terlebih senyum si dia. </p>
									</div>
								</div>
							</div>


						</div>

					</div>

				</section><!-- End Team Section -->

				<!-- ======= Clients Section ======= -->
				<section id="clients" class="clients">

					<div class="container" data-aos="">

						<header class="section-header">
							<h2>Supported By</h2>
							<p>Special Thank's to </p>
						</header>

						<div class="container">
							<div class="row justify-content-center">
								<div class="col-md-3">
									<img src="assets/img/clients/alibaba.png" width="300" class="img-fluid" alt="">
								</div>
								<div class="col-md-3">
									<img src="assets/img/clients/codepolitan.png" width="300" class="img-fluid" alt="">
								</div>
								<div class="col-md-3">
									<img src="assets/img/clients/re-cloud.png" width="300" class="img-fluid" alt="">
								</div>
							</div>

						</div>
					</div>

				</section><!-- End Clients Section -->

				<!-- ======= Recent Blog Posts Section ======= -->
				<section id="recent-blog-posts" class="recent-blog-posts">

					<div class="container" data-aos="">

						<header id="blog" class=" section-header">
							<h2>Blog</h2>
							<p>Artikel Terbaru Kami</p>
						</header>

						<div class="row justify-content-center">

							<div class="col-lg-4">
								<div class="post-box">
									<div class="post-img"><img src="assets/img/billgates.jpg" class="img-fluid" alt=""></div>
									<span class="post-date">Minggu, Februari 21</span>
									<h3 class="post-title">Kenapa Kamu Harus Mulai Membaca Buku Dari Sekarang? Keajaiban Membaca</h3>
									<a href="blog-singel.php" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
								</div>
							</div>
						</div>

					</div>

				</section><!-- End Recent Blog Posts Section -->

				</main><!-- End #main -->

				<!-- ======= Footer ======= -->
				<?php

				require_once 'footer.php';

				?>
				<!-- End Footer -->

				<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

				<!-- Vendor JS Files -->
				<script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
				<script src="assets/vendor/aos/aos.js"></script>
				<script src="assets/vendor/php-email-form/validate.js"></script>
				<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
				<script src="assets/vendor/purecounter/purecounter.js"></script>
				<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
				<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

				<!-- Template Main JS File -->
				<script src="assets/js/main.js"></script>

				<!-- SCRIPT SEARCH BOX -->
				<script type="text/javascript">
					$(document).ready(function() {
						$('#search_text').keyup(function() {
							var txt = $(this).val();
							if (txt != '') {
								$.ajax({
									url: 'fetch.php',
									method: 'post',
									data: {
										search: txt
									},
									dataType: "text",
									success: function(data) {
										$('#result').html(data);
										$("#textChange").text("Hasil Pencarian")
									}
								});
							} else {
								$('#result').html('');
							}
						});
					})
				</script>
				<!-- SCRIPT SEARCH BOX -->

				<!-- AJAX UNTUK FILTER KATEGORI BUKU -->
				<script type="text/javascript">
					$(document).ready(function() {
						$(".product_check").click(function() {

							$("#loader").show();
							var action = 'data';
							var kategori = get_filter_text('kategori');

							$.ajax({
								method: 'POST',
								url: 'action.php',
								data: {
									action: action,
									kategori: kategori
								},
								success: function(response) {
									$("#result").html(response);
									$("#loader").hide();
									$("#textChange").text("Filtered Books");
								}

							});
						});

						function get_filter_text(text_id) {
							var filterData = [];
							$('#' + text_id + ':checked').each(function() {
								filterData.push($(this).val());
							});
							return filterData;
						}
					});
				</script>
				<!-- AJAX UNTUK FILTER KATEGORI BUKU -->

	</body>

	</html>
<?php }

?>
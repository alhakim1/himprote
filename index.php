<?php
session_start();
?>

<!DOCTYPE html>

<html class="no-js">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="Meghna One page parallax responsive HTML Template ">

	<meta name="author" content="Kelompok 4">

	<title>Himprote</title>

	<!-- Mobile Specific Meta
		================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon -->
	<!-- <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" /> -->

	<!-- CSS
		================================================== -->
	<!-- Fontawesome Icon font -->
	<link rel="stylesheet" href="assets/plugins/themefisher-font/style.css">
	<!-- bootstrap.min css -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/dist/css/bootstrap.min.css">
	<!-- Animate.css -->
	<link rel="stylesheet" href="assets/plugins/animate-css/animate.css">
	<!-- Magnific popup css -->
	<link rel="stylesheet" href="assets/plugins/magnific-popup/dist/magnific-popup.css">
	<!-- Slick Carousel -->
	<link rel="stylesheet" href="assets/plugins/slick-carousel/slick/slick.css">
	<link rel="stylesheet" href="assets/plugins/slick-carousel/slick/slick-theme.css">
	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="assets/css/style.css">


</head>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="50">
	<!--
	    Start Preloader
	    ==================================== -->
	<div class="preloader">
		<div class="sk-cube-grid">
			<div class="sk-cube sk-cube1"></div>
			<div class="sk-cube sk-cube2"></div>
			<div class="sk-cube sk-cube3"></div>
			<div class="sk-cube sk-cube4"></div>
			<div class="sk-cube sk-cube5"></div>
			<div class="sk-cube sk-cube6"></div>
			<div class="sk-cube sk-cube7"></div>
			<div class="sk-cube sk-cube8"></div>
			<div class="sk-cube sk-cube9"></div>
		</div>
	</div>
	<!-- End Preloader
        ==================================== -->

	<!--
Welcome Slider
==================================== -->

	<section class="hero-area overlay" style="background-image: url('');">
		<video autoplay muted loop class="hero-video" muted="" loop="" width="100%" height="100%" id="vid">
			<source src="assets/img/vid1.mp4" type="video/mp4">
		</video>
		<!--<img src="assets/img/logo.png" width="40%" />-->
		<div class="block">
			<img src="assets/img/logo.png" width="30%" />
			<br><br><br><br><br><br><br><br><br><br><br><br>
			<!--<h1> HIMPROTE</h1>
			<p>Himpunan Mahasiswa Profesi Teknik Elektro</p>-->
			<a href="pilihanlogin.php" class="btn btn-transparent">MASUK</a>
			<a href="daftar.php" class="btn btn-transparent">DAFTAR</a>
		</div>
	</section>

	<!-- 
  Fixed Navigation
  ==================================== -->
	<header id="navigation" class="navbar navigation">
		<div class="container">
			<div class="navbar-header">
				<!-- responsive nav button -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- /responsive nav button -->
			</div>

			<!-- main nav -->
			<nav class="navbar-left" role="Navigation">
				<ul id="nav" class="nav navbar-nav navigation-menu">
					<li><a data-scroll href="#body">Home</a></li>
					<li><a data-scroll href="#about">Visi Misi</a></li>
					<li><a data-scroll href="#our-team">Pemimpin</a></li>
					<li><a data-scroll href="#services">Divisi</a></li>
					<li><a data-scroll href="#portfolio">Dokumentasi</a></li>
					<li><a data-scroll href="#blog">Kabar Elektro</a></li>
				</ul>
			</nav>
			<!-- /main nav -->

		</div>
	</header>
	<!--
  End Fixed Navigation
  ==================================== -->
	<!--
		Start About Section
		==================================== -->
	<section class="section about-2 padding-0 bg-dark" id="about">
		<div class="container-fluid">
			<div class="row">
				<!--<div class="col-md-6 padding-0 ">
					<img class="img-responsive" src="assets/img/logo.png" style="width: 200px; height: 200px;">
				</div>-->
				<div>
					<div class="content-block">
						<h1>Visi dan Misi Teknik Elektro</h1>
						<div class="row">
							<div class="col-md-6">
								<div class="media">
									<div class="pull-left">
										<i class="tf-circle-compass"></i>
									</div>
									<div class="media-body">
										<h4 class="media-heading">VISI</h4>
										<p>Menjadi Jurusan Teknik Elektro yang berwawasan konservasi dan bereputasi internasional</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="media">
									<div class="pull-left">
										<i class="tf-lifesaver"></i>
									</div>
									<div class="media-body">
										<h4 class="media-heading">MISI</h4>
										<p>Melaksanakan Tridharma Perguruan Tinggi dengan penuh tanggung jawab serta melibatkan seluruh civitas akademika Jurusan Teknik Elektro</p>
										<p>Melaksanakan tata kelola jurusan Teknik Elektro yang sehat dan transparan</p>
										<p>Menjalin dan mengembangkan kerjasama yang saling menguntungkan dengan semua pihak terkait di tingkat daerah, nasional, maupun internasional dalam rangka kemajuan Jurusan Teknik Elektro</p>
										<p>Menyelenggarakan pendidikan dan pengajaran di bidang Teknik Elektro yang berkualitas dan inovatif berbasis konservasi</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--
Start Call To Action
==================================== -->
	<section id="our-team" class="section">
		<div class="container">
			<div class="row">

				<!-- section title -->
				<div class="title text-center wow fadeInUp" data-wow-duration="500ms">
					<h2>Pemimpin <span class="color">Kami</span></h2>
					<div class="border"></div>
				</div>
				<!-- /section title -->

				<!-- team member -->
				<div class="col-md-3 col-sm-6 col-xs-12  wow fadeInDown" data-wow-duration="500ms">
					<div class="team-member">
						<div class="member-photo">
							<!-- member photo -->
							<img class="img-responsive" src="assets/images/team/ulfa.png" alt="Bu Ulfa">
							<!-- /member photo -->
							<div class="mask">
								<ul class="list-inline">
									<li><a href="https://staff.unnes.ac.id/dosen/ulfah-mediaty-arief.html/"><i class="tf-ion-social-google"></i></a></li>
								</ul>
							</div>
						</div>
						<!-- member name & designation -->
						<div class="member-meta">
							<h5>Ir. Ulfa Mediaty Arief, M.T., IPM</h5>
							<span>Ketua Jurusan</span>
						</div>
						<!-- /member name & designation -->
						<!-- /about member -->

					</div>
				</div>
				<!-- end team member -->

				<!-- team member -->
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="200ms">
					<div class="team-member">
						<div class="member-photo">
							<!-- member photo -->
							<img class="img-responsive" src="assets/images/team/salim.png" alt="Pak Azis">
							<!-- /member photo -->
							<!-- member social profile -->
							<div class="mask">
								<ul class="list-inline">
									<li><a href="https://staff.unnes.ac.id/dosen/nur-azis-salim.html/"><i class="tf-ion-social-google"></i></a></li>
								</ul>
							</div>
							<!-- /member social profile -->
						</div>
						<!-- member name & designation -->
						<div class="member-meta">
							<h5>Nur Azis Salim, S.T., M.Eng.</h5>
							<span>Pembina Himprote</span>
						</div>
						<!-- /member name & designation -->
						<!-- /about member -->
					</div>
				</div>
				<!-- end team member -->

				<!-- team member -->
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="400ms">
					<div class="team-member">
						<div class="member-photo">
							<!-- member photo -->
							<img class="img-responsive" src="assets/images/team/bima.jpg" alt="Bima">
							<!-- /member photo -->

							<!-- member social profile -->
							<div class="mask">
								<ul class="list-inline">
									<li><a href="https://instagram.com/bimadewantoro?utm_medium=copy_link"><i class="tf-ion-social-instagram"></i></a></li>
								</ul>
							</div>
							<!-- /member social profile -->
						</div>

						<!-- member name & designation -->
						<div class="member-meta">
							<h5>Bima Dewantoro</h5>
							<span>Ketua Himprote</span>
						</div>
						<!-- /member name & designation -->
						<!-- /about member -->
					</div>
				</div>
				<!-- end team member -->

				<!-- team member -->
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
					<div class="team-member">
						<div class="member-photo">
							<!-- member photo -->
							<img class="img-responsive" src="assets/images/team/wahyuu.jpg" alt="Wahyu">
							<!-- /member photo -->

							<!-- member social profile -->
							<div class="mask">
								<ul class="list-inline">
									<li><a href="https://Instagram.com/__yantt"><i class="tf-ion-social-instagram"></i></a></li>
								</ul>
							</div>
							<!-- /member social profile -->
						</div>

						<!-- member name & designation -->
						<div class="member-meta">
							<h5>Wahyu Ridho Muryanti</h5>
							<span>Wakil Ketua Himprote</span>
						</div>
						<!-- /member name & designation -->
						<!-- /about member -->
					</div>
				</div>
				<!-- end team member -->

			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- End section -->

	<!-- Start Services Section
==================================== -->

	<section id="services" class="bg-one section">
		<div class="container">
			<div class="row">

				<!-- section title -->
				<div class="title text-center wow fadeIn" data-wow-duration="500ms">
					<h2>Divisi<span class="color"> HIMPROTE</span></h2>
					<div class="border"></div>
				</div>
				<!-- /section title -->

				<!-- Single Service Item -->
				<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms">
					<div class="service-block text-center">
						<div class="service-icon text-center">
							<i class="tf-genius"></i>
						</div>
						<h3>Divisi A</h3>
						<p>Penelitian, Penalaran, dan Keilmuan</p>
					</div>
				</article>
				<!-- End Single Service Item -->

				<!-- Single Service Item -->
				<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
					<div class="service-block text-center">
						<div class="service-icon text-center">
							<i class="tf-dial"></i>
						</div>
						<h3>Divisi B</h3>
						<p>Minat dan Bakat</p>
					</div>
				</article>
				<!-- End Single Service Item -->

				<!-- Single Service Item -->
				<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
					<div class="service-block text-center">
						<div class="service-icon text-center">
							<i class="tf-lifesaver"></i>
						</div>
						<h3>Divisi C</h3>
						<p>Pengembangan Organisasi dan SDM</p>
					</div>
				</article>
				<!-- End Single Service Item -->

				<!-- Single Service Item -->
				<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
					<div class="service-block text-center">
						<div class="service-icon text-center">
							<i class="tf-ion-android-happy"></i>
						</div>
						<h3>Divisi D</h3>
						<p>Advokasi dan Hubungan Masyarakat</p>
					</div>
				</article>
				<!-- End Single Service Item -->

				<!-- Single Service Item -->
				<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
					<div class="service-block text-center">
						<div class="service-icon text-center">
							<i class="tf-map-pin"></i>
						</div>
						<h3>Divisi E</h3>
						<p>Anggaran Rumah Tangga dan Kewirausahaan</p>
					</div>
				</article>
				<!-- End Single Service Item -->

				<!-- Single Service Item -->
				<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="600ms">
					<div class="service-block text-center kill-margin-bottom">
						<div class="service-icon text-center">
							<i class="tf-ion-iphone"></i>
						</div>
						<h3>Divisi F</h3>
						<p>Teknologi dan Komunikasi</p>
					</div>
				</article>
				<!-- End Single Service Item -->

			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- End section -->


	<!-- Start Team Skills
		=========================================== -->

	<!-- Start Portfolio Section
		=========================================== -->

	<section class="portfolio section" id="portfolio">
		<div class="container">
			<div class="row ">
				<div class="col-lg-12">
					<!-- section title -->
					<div class="title text-center">
						<h2>Dokumentasi<span class="color"> Kegiatan</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
				</div> <!-- /end col-lg-12 -->
			</div> <!-- end row -->
			<div class="row">

			</div>
			<div class="row filtr-container">
				<div class="filtr-item col-md-4" data-category="design">
					<div class="portfolio-block">
						<img class="img-responsive" src="assets/images/portfolio/welcome1.jpg" alt="">
						<div class="caption">
							<a class="" data-effect="mfp-with-zoom" href="images/portfolio/welcome1.jpg" data-lightbox="image-1">
							</a>
							<h4><a href="#">Selamat Datang</a></h4>
							<p>Selamat datang mahasiswa baru Jurusan Teknik Elektro</p>
						</div>
					</div>
				</div>
				<div class="filtr-item col-md-4" data-category="design">
					<div class="portfolio-block">
						<img class="img-responsive" src="assets/images/portfolio/welcome2.jpg" alt="">
						<div class="caption">
							<a class="" data-effect="mfp-with-zoom" href="images/portfolio/welcome2.jpg" data-lightbox="image-1">
							</a>
							<h4><a href="#">Selamat Datang</a></h4>
							<p>Selamat datang mahasiswa baru Jurusan Teknik Elektro</p>
						</div>
					</div>
				</div>
				<div class="filtr-item col-md-4" data-category="design">
					<div class="portfolio-block">
						<img class="img-responsive" src="assets/images/portfolio/welcome3.jpg" alt="">
						<div class="caption">
							<a class="#" data-effect="mfp-with-zoom" href="images/portfolio/welcome3.jpg" data-lightbox="image-1">
							</a>
							<h4><a href="">Selamat Datang</a></h4>
							<p>Selamat datang mahasiswa baru Jurusan Teknik Elektro</p>
						</div>
					</div>
				</div>

				<div class="filtr-item col-md-4" data-category="design">
					<div class="portfolio-block">
						<img class="img-responsive" src="assets/images/portfolio/cs1.jpg" alt="">
						<div class="caption">
							<a class="" data-effect="mfp-with-zoom" href="images/portfolio/cs1.jpg" data-lightbox="image-1">
							</a>
							<h4><a href="#">Coming Soon Elco</a></h4>
							<p>Nantikan program orientasi kampus mahasiswa Teknik Elektro</p>
						</div>
					</div>
				</div>
				<div class="filtr-item col-md-4" data-category="design">
					<div class="portfolio-block">
						<img class="img-responsive" src="assets/images/portfolio/cs2.jpg" alt="">
						<div class="caption">
							<a class="" data-effect="mfp-with-zoom" href="images/portfolio/cs2.jpg" data-lightbox="image-1">
							</a>
							<h4><a href="#">Coming Soon Elco</a></h4>
							<p>Nantikan program orientasi kampus mahasiswa Teknik Elektro</p>
						</div>
					</div>
				</div>
				<div class="filtr-item col-md-4" data-category="design">
					<div class="portfolio-block">
						<img class="img-responsive" src="assets/images/portfolio/cs3.jpg" alt="">
						<div class="caption">
							<a class="" data-effect="mfp-with-zoom" href="images/portfolio/cs3.jpg" data-lightbox="image-1">
							</a>
							<h4><a href="#">Coming Soon Elco</a></h4>
							<p>Nantikan program orientasi kampus mahasiswa Teknik Elektro</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 filtr-item" data-category="design">
					<div class="portfolio-block">
						<img class="img-responsive" src="assets/images/portfolio/penutupan1.jpg" alt="">
						<div class="caption">
							<a class="" data-effect="mfp-with-zoom" href="images/portfolio/penutupan1.jpg" data-lightbox="image-1">
							</a>
							<h4><a href="#">Electrical Campus Orientation 2021</a></h4>
							<p>Mahasiswa baru jurusan Teknik Elektro wajb mengikuti penutupan ELCO 2021</p>
						</div>
					</div>
				</div>
				<div class="filtr-item col-md-4" data-category="design">
					<div class="portfolio-block">
						<img class="img-responsive" src="assets/images/portfolio/penutupan2.jpg" alt="">
						<div class="caption">
							<a class="" data-effect="mfp-with-zoom" href="images/portfolio/penutupan2.jpg" data-lightbox="image-1">
							</a>
							<h4><a href="#">Electrical ampus Orientation 2021</a></h4>
							<p>Mahasiswa baru jurusan Teknik Elektro wajb mengikuti penutupan ELCO 2021</p>
						</div>
					</div>
				</div>
				<div class="filtr-item col-md-4" data-category="design">
					<div class="portfolio-block">
						<img class="img-responsive" src="assets/images/portfolio/penutupan3.jpg" alt="">
						<div class="caption">
							<a class="" data-effect="mfp-with-zoom" href="images/portfolio/penutupan3.jpg" data-lightbox="image-1">
							</a>
							<h4><a href="#">Electrical Campus Orientation 2021</a></h4>
							<p>Mahasiswa baru jurusan Teknik Elektro wajb mengikuti penutupan ELCO 2021</p>
						</div>
					</div>
				</div>


			</div>
		</div> <!-- end container -->
	</section> <!-- End section -->

	<!--
Start Counter Section
==================================== -->
	<section id="blog" class="section">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="title text-center wow fadeInDown">
					<h2> Kabar <span class="color">Elektro</span></h2>
					<div class="border"></div>
				</div>
				<!-- /section title -->
				<div class="clearfix">
					<!-- single blog post -->
					<article class="col-md-4 col-sm-6 col-xs-12 clearfix wow fadeInUp" data-wow-duration="500ms">
						<div class="post-block">
							<div class="media-wrapper">
								<img src="assets/images/blog/dj.jpg" alt="amazing caves coverimage" class="img-responsive">
							</div>
							<div class="content">
								<h3><a href="">Dialog Jurusan</a></h3>
								<a class="btn btn-transparent" href="https://www.instagram.com/himproteunnes/p/CTe0YJklBjk/?utm_medium=copy_link">Baca Selengkapnya</a>
							</div>
						</div>
					</article>
					<!-- /single blog post -->

					<!-- single blog post -->
					<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
						<div class="post-block">
							<div id="gallery-post" class="media-wrapper">
								<div class="item">
									<img src="assets/images/blog/pmkte.jpg" alt="blog post" class="img-responsive">
								</div>
							</div>
							<div class="content">
								<h3><a href="">PMKTE</a></h3>
								<a class="btn btn-transparent" href="https://www.instagram.com/p/CTm2o15Jrwp/?utm_medium=copy_link">Baca Selengkapnya</a>
							</div>
						</div>
					</article>
					<!-- end single blog post -->

					<!-- single blog post -->
					<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
						<div class="post-block">
							<div class="media-wrapper">
								<img src="assets/images/blog/webinar.jpg" alt="amazing caves coverimage" class="img-responsive">
							</div>

							<div class="content">
								<h3><a href="">Webinar KTI</a></h3>
								<a class="btn btn-transparent" href="https://www.instagram.com/p/CTm2ZmzpwHb/?utm_medium=copy_link">Baca Selengkapnya</a>
							</div>
						</div>
					</article>
				</div> <!-- end row -->
			</div> <!-- end container -->
	</section> <!-- end section -->

	<!-- 
Start Our Team
=========================================== -->

	<!-- Start Testimonial
		=========================================== -->

	<section id="testimonial" class="testimonial overly section bg-2">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- testimonial wrapper -->
					<div id="testimonials" class="wow fadeInUp" data-wow-duration="500ms" data-wow-delay="100ms">

						<!-- testimonial single -->
						<div class="item text-center">

							<!-- client photo -->
							<div class="client-thumb">
								<img src="assets/images/team/bagas.jpg" class="img-responsive" alt="Meghna">
							</div>
							<!-- /client photo -->

							<!-- client info -->
							<div class="client-info">
								<div class="client-meta">
									<h3>Bagas Sukmawanto</h3>
									<span>Nov 10, 2021</span>
								</div>
								<div class="client-comment">
									<p>Himpunan Mahasiswa Profesi Teknik Elektro Sangat Paten</p>
								</div>
							</div>
							<!-- /client info -->
						</div>
						<!-- /testimonial single -->

						<!-- testimonial single -->
						<div class="item text-center">

							<!-- client photo -->
							<div class="client-thumb">
								<img src="assets/images/team/desi.jpg" class="img-responsive" alt="Meghna">
							</div>
							<!-- /client photo -->

							<!-- client info -->
							<div class="client-info">
								<div class="client-meta">
									<h3>Desi Rahmawati</h3>
									<span>Nov 16, 2021</span>
								</div>
								<div class="client-comment">
									<p>Mantaaap, kegiatannya memang kurang menarik tapi cukup bermanfaat bagi warga
										elektro
									</p>
								</div>
							</div>
							<!-- /client info -->
						</div>
						<!-- /testimonial single -->

						<!-- testimonial single -->
						<div class="item text-center">

							<!-- client photo -->
							<div class="client-thumb">
								<img src="assets/images/team/rahmat.jpg" class="img-responsive" alt="Meghna">
							</div>
							<!-- /client photo -->

							<!-- client info -->
							<div class="client-info">
								<div class="client-meta">
									<h3>Rahmatullah Al-Hakim</h3>
									<span>Dec 26, 2018</span>
								</div>
								<div class="client-comment">
									<p>Cukup Menarik</p>
								</div>
							</div>
							<!-- /client info -->
						</div>
						<!-- /testimonial single -->
						<div class="item text-center">

							<!-- client photo -->
							<div class="client-thumb">
								<img src="assets/images/team/suryana.jpg" class="img-responsive" alt="Meghna">
							</div>
							<!-- /client photo -->

							<!-- client info -->
							<div class="client-info">
								<div class="client-meta">
									<h3>Suryana</h3>
									<span>Nov 18, 2021</span>
								</div>
								<div class="client-comment">
									<p>Sangat memberikan manfaat</p>
								</div>
							</div>
							<!-- /client info -->
						</div>
					</div> <!-- end testimonial wrapper -->
				</div> <!-- end col lg 12 -->
			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- End Section -->

	<!-- Start Blog Section =========================================== -->
	<section class="bg-one about section">
		<div class="container">
			<div class="row">

				<!-- section title -->
				<div class="title text-center wow fadeIn" data-wow-duration="1500ms">
					<h2>Kunjungi <span class="color">Kami</span> </h2>
					<div class="border"></div>
				</div>
				<!-- /section title -->

				<!-- About item -->
				<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms">
					<div class="block">
						<div class="icon-box">
							<i class="tf-ion-social-instagram"></i>
						</div>
						<!-- Express About Yourself -->
						<div class="content text-center">
							<h3> <a href=https://www.instagram.com/himproteunnes/?hl=id>Instagram</a></h3>
							<p>@himproteunnes</p>
						</div>
					</div>
				</div>
				<!-- End About item -->

				<!-- About item -->
				<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="250ms">
					<div class="block">
						<div class="icon-box">

							<i class="tf-ion-social-facebook"></i>
						</div>
						<!-- Express About Yourself -->
						<div class="content text-center">
							<h3><a href=https://id-id.facebook.com/himproteunnes />Facebook</a></h3>
							<p>Himpro Teknik Elektro UNNES</p>
						</div>
					</div>
				</div>
				<!-- End About item -->

				<!-- About item -->
				<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
					<div class="block kill-margin-bottom">
						<div class="icon-box">
							<i class="tf-ion-social-youtube"></i>
						</div>
						<!-- Express About Yourself -->
						<div class="content text-center">
							<h3><a href=https://www.youtube.com/channel/UCRQkV2r9F0gVayqgiCZAeiA>Youtube</a></h3>
							<p>Himprote FT UNNES</p>
						</div>
					</div>
				</div>
				<!-- End About item -->

			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- End section -->

	<!-- end Contact Area
		========================================== -->

	<footer id="footer" class="bg-one">
		<div class="container">
			<div class="row wow fadeInUp" data-wow-duration="500ms">
				<div class="col-lg-12">
					<!--/. End Footer Social Links -->

					

				</div> <!-- end col lg 12 -->
			</div> <!-- end row -->
		</div> <!-- end container -->
	</footer> <!-- end footer -->










	<!-- 
		Essential Scripts
		=====================================-->

	<!-- Main jQuery -->
	<script type="text/javascript" src="assets/plugins/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap 3.1 -->
	<script type="text/javascript" src="assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- Slick Carousel -->
	<script type="text/javascript" src="assets/plugins/slick-carousel/slick/slick.min.js"></script>
	<!-- Portfolio Filtering -->
	<script type="text/javascript" src="assets/plugins/filterzr/jquery.filterizr.min.js"></script>
	<!-- Smooth Scroll -->
	<script type="text/javascript" src="assets/plugins/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
	<!-- Magnific popup -->
	<script type="text/javascript" src="assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
	<!-- Sticky Nav -->
	<script type="text/javascript" src="assets/plugins/Sticky/jquery.sticky.js"></script>
	<!-- Number Counter Script -->
	<script type="text/javascript" src="assets/plugins/count-to/jquery.countTo.js"></script>
	<!-- wow.min Script -->
	<script type="text/javascript" src="assets/plugins/wow/dist/wow.min.js"></script>
	<!-- Custom js -->
	<script type="text/javascript" src="assets/js/script.js"></script>

</body>

</html>
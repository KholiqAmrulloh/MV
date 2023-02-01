<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<!-- meta character set -->
	<meta charset="utf-8">
	<!-- Always force latest IE rendering engine or request Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
	<title>PT. MetaVision Inovasi Indonesia</title>

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSS ================================================== -->

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

	<!-- Fontawesome Icon font -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" type='text/css'>
	<!-- Fancybox -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.fancybox.css') ?>" type='text/css'>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" type='text/css'>
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.css') ?>" type='text/css'>
	<!-- Slider -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/slit-slider.css') ?>" type='text/css'>
	<!-- Animaete -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css') ?>" type='text/css'>
	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css') ?>" type='text/css'>
	<!-- buat login -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css') ?>" type='text/css'>

	<script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
	<!-- Modernizer Script for old Browsers -->
	<script src="<?php echo base_url('assets/js/modernizr-2.6.2.min.js'); ?>" text="text/javascript"></script>
</head>

<body id="body">
	<!--
        Fixed Navigation
        ==================================== -->
	<header id="navigation" class="navbar-inverse navbar-fixed-top animated-header">
		<div class="container">
			<div class="navbar-header">

				<!-- logo -->
				<a style="color: white"><img src="<?= base_url(); ?>assets/img/logopt.png" width="60px" height="60px">PT.METAVISION INOVASI INDONESIA</a>
				<!-- /logo -->
			</div>

			<!-- main nav -->
			<div class="geser">
				<nav class="collapse navbar-collapse navbar-right" role="navigation">
					<ul id="nav" class="nav navbar-nav">
						<li><a href="#body">Beranda</a></li>
						<li><a href="#about">Tentang</a></li>
						<li><a href="#service">Bidang Bisnis</a></li>
						<li><a href="#portofolio">Portofolio</a></li>
						<li><a href="#social">Ikuti Kami</a></li>
						<li><a href="#contact">Kontak</a></li>
					</ul>
				</nav>
			</div>
			<!-- /main nav -->

		</div>
		<p style="font-family: Lato"><a href="https://wa.me/+6289526412003" type="button" class="btn btn-success btn-rounded wa" target="_blank"><i class="fab fa-whatsapp fa-2x" style="margin-right: 5px;"></i>Chat dengan kami di whatsapp</a></p>
	</header>
	<!--End Fixed Navigation==================================== -->
	<main class="site-content" role="main">

		<!--
        Home Slider
        ==================================== -->

		<section id="home-slider">
			<div id="slider">
				<div>
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
						<div class="bg-img bg-img-1"></div>
						<div class="slide-caption">
							<div class="caption-content">
								<h2 class="animated fadeInDown">PT. MetaVision Inovasi Indonesia</h2>
							</div>
						</div>
					</div>
				</div>
			</div><!-- /slider-wrapper -->
		</section>

		<!--
        End Home SliderEnd
        ==================================== -->

		<!-- about section -->
		<section id="about">
			<div class="container">
				<div class="row">
					<div class="wow animated">
						<div class="sec-title text-center white">
							<h2 class="wow animated bounceInLeft">Tentang Kami</h2>
						</div>
						<div class="text-center">
							<div id="works">
								<?php foreach ($About as $ab) { ?>
									<div class="work-item">
										<div style="font-size: 25px; font-family:'Franklin Gothic Medium'">
											<td><span><?= $ab['judul'] ?></span></td>
										</div>
										<div style="font-size: 20px; margin-top: 50px;">
											<td><?= $ab['konten_text'] ?></td>
										</div>
										<div>
											<td>
												<?php if ($ab['konten_gambar']) { ?>
													<img src="<?php echo base_url('assets/img/upload/' . $ab['konten_gambar']); ?>">
												<?php } ?>
											</td>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end about section -->

		<!-- Service section -->
		<section id="service">
			<div class="container">
				<div class="row">
					<div class="sec-title text-center">
						<h2 class="wow animated bounceInLeft">Bidang Bisnis</h2>
					</div>

					<div class="col-md-4 col-sm-6 col-xs-12 text-center wow animated zoomIn">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-laptop fa-3x"></i>
							</div>
							<h3>Solusi teknologi on demand</h3>
						</div>
					</div>

					<div class="col-md-4 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.3s">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-clipboard fa-3x"></i>
							</div>
							<h3>Pengembangan produk berbasis riset</h3>
						</div>
					</div>

					<div class="col-md-4 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.6s">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-file-code-o fa-3x"></i>
							</div>
							<h3>Pengembangan software dan hardware</h3>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- end Service section -->

		<!-- Portofolio section -->
		<section id="portofolio" class="parallax">
			<div class="overlay">
				<div class="container">
					<div class="row">
						<div class="sec-title text-center white wow animated fadeInDown">
							<h2>portofolio</h2>
						</div>
						<div id="testimonial" class="wow animated fadeInUp">
							<?php foreach ($Port as $prt) { ?>
								<div class="testimonial-item text-center">
									<div class="clearfix">
										<td><span><?= $prt['judul'] ?></span></td>
										<div>
											<td>
												<?php if ($prt['img1']) { ?>
													<img src="<?php echo base_url('assets/img/upload/' . $prt['img1']); ?>">
												<?php } ?>
											</td>
											<td>
												<?php if ($prt['img2']) { ?>
													<img src="<?php echo base_url('assets/img/upload/' . $prt['img2']); ?>">
												<?php } ?>
											</td>
											<td>
												<?php if ($prt['img3']) { ?>
													<img src="<?php echo base_url('assets/img/upload/' . $prt['img3']); ?>">
												<?php } ?>
											</td>
										</div>
										<div>
											<td><?= $prt['capt1'] ?></td>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end Portofolio section -->

		<!-- Social section -->
		<section id="social" class="parallax">
			<div class="overlay">
				<div class="container">
					<div class="row">
						<div class="sec-title text-center white wow animated fadeInDown">
							<h2>Ikuti Kami</h2>
						</div>
						<ul class="social-button">
							<li class="wow animated zoomIn"><a href="https://www.youtube.com/c/MetaVisionStudio" target="_blank"><i class="fa fa-youtube-play fa-2x"></i></a></li>
							&ensp;&ensp;&ensp;&ensp;
							<li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="https://www.facebook.com/MetaVisionIndonesia/" target="_blank"><i class="fa fa-facebook fa-2x"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!-- end Social section -->

		<!-- Contact section -->
		<section id="contact">
			<div class="container">
				<div class="row">

					<div class="sec-title text-center wow animated fadeInDown">
						<h2>Kontak</h2>
						<p>Tinggalkan Pesan</p>
					</div>

					<div class="col-md-7 contact-form wow animated fadeInLeft">
						<form id="tambahContact" name="formInput" action="<?= base_url('Home/tambah') ?>" method="post">
							<input type="hidden" name="tanggal" value="<?php echo date("Y-m-d"); ?>">
							<div>
								<label class="required">Nama Lengkap</label>
								<div class="input-field">
									<input type="text" id="name" name="name" class="form-control" placeholder="Nama..." required>
								</div>
							</div>
							<div>
								<label class="required">Alamat Email</label>
								<div class="input-field">
									<input type="email" id="email" name="email" class="form-control" placeholder="Email..." required>
								</div>
							</div>
							<div>
								<label class="required">Subjek</label>
								<div class="input-field">
									<select class="form-control" id="subject" name="subject">
										<option value="">--Pilih Subjek--</option>
										<option value="Solusi Teknologi On Demand">Solusi Teknologi On Demand</option>
										<option value="Pengembangan Produk Berbasis Riset">Pengembangan Produk Berbasis Riset</option>
										<option value="Pengembangan Software dan Hardware">Pengembangan Software dan Hardware</option>
										<option value="Lowongan Kerja">Lowongan Kerja</option>
										<option value="Internship">Internship</option>
									</select>
								</div>
							</div>
							<div>
								<label class="required">Pesan</label>
								<div class="input-field">
									<textarea name="message" id="message" class="form-control" placeholder="Pesan..." required></textarea>
								</div>
							</div>
							<button type="button" id="submit" class="btn btn-blue btn-effect">Kirim</button>
						</form>
					</div>

					<div class="col-md-5 wow animated fadeInRight">
						<address class="contact-details">
							<h3>Hubungi Kami</h3>
							<p>
								<i class="fa fa-pencil"></i>
								<a href="https://goo.gl/maps/yot6qvHhftCybafK6" style="color: black;" target="_blank">Puri Cikoneng
									Indah, Jalan Puri 1 No 8,
									Bojongsoang,<span>&nbsp;Kec. Bojongsoang, Bandung,</span>
									<span>&nbsp;Jawa Barat 40288</span>
								</a>
							</p>
							<p><i class="fa fa-phone"></i><a href="https://wa.me/+6289526412003" target="_blank">&nbsp;0895 2641 2003</a>
							</p>
							<p><i class="fa fa-envelope"></i><a href="mailto:metanovasi@gmail.com" style="color: black;">metanovasi@gmail.com</a></p><br>
						</address>
					</div>
				</div>
			</div>
	</main>

	<footer id="footer">
		<div class="container">
			<div class="row text-center">
				<div class="footer-content">
					<p>PT. MetaVision Inovasi Indonesia &copy; Copyright 2021.</p>
				</div>
			</div>
		</div>
	</footer>

	<!-- Essential jQuery Plugins
		================================================== -->
	<!-- Main jQuery -->
	<script src="<?= base_url('assets/js/jquery-1.11.1.min.js'); ?>" text="text/javascript"></script>
	<!-- Twitter Bootstrap -->
	<script src="<?= base_url('assets/js/bootstrap.min.js'); ?>" text="text/javascript"></script>
	<!-- Single Page Nav -->
	<script src="<?= base_url('assets/js/jquery.singlePageNav.min.js'); ?>" text="text/javascript"></script>
	<!-- jquery.fancybox.pack -->
	<script src="<?= base_url('assets/js/jquery.fancybox.pack.js'); ?>" text="text/javascript"></script>
	<!-- Owl Carousel -->
	<script src="<?= base_url('assets/js/owl.carousel.min.js'); ?>" text="text/javascript"></script>
	<!-- jquery easing -->
	<script src="<?= base_url('assets/js/jquery.easing.min.js'); ?>" text="text/javascript"></script>
	<!-- Fullscreen slider -->
	<script src="<?= base_url('assets/js/jquery.slitslider.js'); ?>" text="text/javascript"></script>
	<script src="<?= base_url('assets/js/jquery.ba-cond.min.js'); ?>" text="text/javascript"></script>
	<!-- onscroll animation -->
	<script src="<?= base_url('assets/js/wow.min.js'); ?>" text="text/javascript"></script>
	<!-- Custom Functions -->
	<script src="<?= base_url('assets/js/main.js'); ?>" text="text/javascript"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<script>
		$("#submit").click(function() {
			function validasiEmail() {
				var rs = document.forms["formInput"]["email"].value;
				var reg = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
				var em = reg.test(rs);
				return em;
			}
			var name = $("#name").val();
			var email = $("#email").val();
			var subject = $("#subject").val();
			var message = $("#message").val();

			if (name == '') {
				swal({
					title: "Kolom Nama Kosong!!",
					text: "Silahkan periksa kembali kolom nama!!",
					icon: "warning",
					button: "Ok!",
				});
			} else if (email == '') {
				swal({
					title: "Kolom Email Kosong!!",
					text: "Silahkan periksa kembali kolom email!!",
					icon: "warning",
					button: "Ok!",
				});
			} else if (!validasiEmail()) {
				swal({
					title: "Format Email Salah!!",
					text: "Silahkan gunakan format email yang sesuai!!",
					icon: "warning",
					button: "Ok!",
				});
			} else if (subject == '') {
				swal({
					title: "Kolom Subjek Kosong!!",
					text: "Silahkan periksa kembali kolom subjek!!",
					icon: "warning",
					button: "Ok!",
				});
			} else if (message == '') {
				swal({
					title: "Kolom Pesan Kosong!!",
					text: "Silahkan periksa kembali kolom pesan!!",
					icon: "warning",
					button: "Ok!",
				});
			} else {
				$.ajax({
					type: "POST",
					url: "<?= base_url('Home/tambah'); ?>",
					data: $("#tambahContact").serialize(), // serializes the form's elements.
					success: function(data) {
						$("#name").val('');
						$("#email").val('');
						$("#subject").val('');
						$("#message").val('');
						swal({
							title: "Berhasil Terkirim!!",
							icon: "success",
							button: "Ok!",
						});
					}
				});
			}
		});
	</script>
</body>

</html>
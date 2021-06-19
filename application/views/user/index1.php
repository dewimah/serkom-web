<!DOCTYPE HTML>
<!--
	Traveler by freehtml5.co
	Twitter: http://twitter.com/fh5co
	URL: http://freehtml5.co
-->
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Traveler &mdash; Jalan Setapak</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?= base_url('assets/master/');?>css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?= base_url('assets/master/');?>css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="<?= base_url('assets/master/');?>css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?= base_url('assets/master/');?>css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?= base_url('assets/master/');?>css/magnific-popup.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?= base_url('assets/master/');?>css/bootstrap-datepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="<?= base_url('assets/master/');?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/master/');?>css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?= base_url('assets/master/');?>css/style.css">

	<!-- Modernizr JS -->
	<script src="<?= base_url('assets/master/');?>js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="<?= base_url('assets/master/');?>index.html">Jalan Setapak <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="<?= base_url('cart');?>">Paket Wisata</a></li>
						<li class="has-dropdown">
							<a href="#">Travel</a>
							<ul class="dropdown">
								<li><a href="#">Europe</a></li>
								<li><a href="#">Asia</a></li>
								<li><a href="#">America</a></li>
								<li><a href="#">Canada</a></li>
							</ul>
						</li>
						<li><a href="<?= base_url('assets/master/');?>pricing.html">Contact</a></li>
						<li><a href="<?= base_url('assets/master/');?>contact.html">Logout</a></li>
					</ul>	
				</div>
			</div>
		</div>
	</nav>
	
	

	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(<?= base_url('assets/');?>img/3.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
				<div class="row row-mt-15em">
				
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>Planing Your Trip with Jalan Setapak</h1>	
						</div>
						<div class="col-md-4 col-md-push-2 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3>Tulis Pesanan Disini</h3>
											<form action="<?php echo base_url('CUser/tambahpesanan')?>">
																					
												<div class="row form-group">
													<div class="col-md-12">
														<label for="date-start">Tanggal Pesan</label>
														<input type="date" class="form-control" name="pesen">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="fullname">Jumlah Penumpang</label>
														<input type="text" class="form-control" name="orang">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="date-start">Tanggal Berangkat</label>
														<input type="date"  class="form-control" name="mangkat">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="date-start">Tanggal Kembali</label>
														<input type="date"  class="form-control" name="bali">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary btn-block" value="Submit">
													</div>
												</div>
											</form>	
										</div>

										
									</div>
								</div>
							</div>
						</div>
					</div>
							
					
				</div>
			</div>
		</div>
	</header>
	
	
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Pariwisata di Indonesia</h2>
					<p>Indonesia, negara dengan ribuan pulaunya. Ada begitu banyak destinasi yang wajib Anda kunjungi. Mari keliling Nusantara bersama Jalan Setapak!</p>
				</div>
			</div>
			<div class="row">

				<div class="col-lg-4 col-md-4 col-sm-6" name="data1">
					<a href="CUser/tampilpesan">
						<figure>
							<div class="overlay"></div>
							<img src="<?= base_url('assets/img/');?>5.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Malioboro, Yogyakarta</h2>
							<p>Kota kebudayaan yang indah dan unik. Disebut juga sebagai pasar malamnya Jogja, karena Malioboro akan ramai ketika malam tiba.</p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="" >
						<figure>
							<div class="overlay"></div>
							<img src="<?= base_url('assets/img/');?>11.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Borobudur , Magelang</h2>
							<p>Candi yang menjadi salah satu keajaiban dunia ini selalu mempesona di mata dunia. Candi yang berdiri gagah dan sangat luas ini menyimpan banyak cerita sejarah.</p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="" >
						<figure>
							<div class="overlay"></div>
							<img src="<?= base_url('assets/img/');?>8.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Bromo , Jawa Timur</h2>
							<p>Bromo gunung yang tidak telalu tinggi, sehinga mudah untuk diakses dan dinikmati oleh siapa saja tanpa harus menjadi seorang pendakin handal. Bromo, terkenal dengan keindahan sunrise-nya</p>
						
						</div>
					</a>
				</div>


				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="" >
						<figure>
							<div class="overlay"></div>
							<img src="<?= base_url('assets/img/');?>9.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Merapi</h2>
							<p>Salah satu gunung berapi yang masih aktif di Indonesia. Merapi, dijadikan sebagai tempat wisata yang menarik dan wajib dikunjungi.</p>
							
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="">
						<figure>
							<div class="overlay"></div>
							<img src="<?= base_url('assets/img/');?>10.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Raja Ampat , Papua</h2>
							<p>Raja Ampat, adalah surga dunia. Keindahannya sangat mempesona, batu batu karang yang ada di laut menambah keindahan Raja Ampat.</p>
							
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="CPariwisata">
						<figure>
							<div class="overlay"></div>
							<img src="<?= base_url('assets/img/');?>12.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Lawang Sewu , Semarang</h2>
							<p>Salah satu situs peninggalan sejarah yang hingga kini keberadaannya sangat dinikmati masyarakat dan menjadi tempat wisata yang hits.</p>
							
						</div>
						
					</a>
				</div>

			</div>
		</div>
	</div>
	
	<div id="gtco-features">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2>How It Works</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>1</i>
						</span>
						<h3>Lorem ipsum dolor sit amet</h3>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>2</i>
						</span>
						<h3>Consectetur adipisicing elit</h3>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>3</i>
						</span>
						<h3>Dignissimos asperiores vitae</h3>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					</div>
				</div>
				

			</div>
		</div>
	</div>


	<div class="gtco-cover gtco-cover-sm" style="background-image: url(images/img_bg_1.jpg)"  data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container text-center">
			<div class="display-t">
				<div class="display-tc">
					<h1>We have high quality services that you will surely love!</h1>
				</div>	
			</div>
		</div>
	</div>

	<div id="gtco-counter" class="gtco-section">
		<div class="gtco-container">

			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2>Our Success</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>

			<div class="row">
				
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="196" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Destination</span>

					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="97" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Hotels</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="12402" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Travelers</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="12202" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Happy Customer</span>

					</div>
				</div>
					
			</div>
		</div>
	</div>

	

	<div id="gtco-subscribe">
		<div class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Subscribe</h2>
					<p>Be the first to know about the new templates.</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<form class="form-inline">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label for="email" class="sr-only">Email</label>
								<input type="email" class="form-control" id="email" placeholder="Your Email">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<button type="submit" class="btn btn-default btn-block">Subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row row-p	b-md">

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>About Us</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore eos molestias quod sint ipsum possimus temporibus officia iste perspiciatis consectetur in fugiat repudiandae cum. Totam cupiditate nostrum ut neque ab?</p>
					</div>
				</div>

				<div class="col-md-2 col-md-push-1">
					<div class="gtco-widget">
						<h3>Destination</h3>
						<ul class="gtco-footer-links">
							<li><a href="#">Europe</a></li>
							<li><a href="#">Australia</a></li>
							<li><a href="#">Asia</a></li>
							<li><a href="#">Canada</a></li>
							<li><a href="#">Dubai</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-2 col-md-push-1">
					<div class="gtco-widget">
						<h3>Hotels</h3>
						<ul class="gtco-footer-links">
							<li><a href="#">Luxe Hotel</a></li>
							<li><a href="#">Italy 5 Star hotel</a></li>
							<li><a href="#">Dubai Hotel</a></li>
							<li><a href="#">Deluxe Hotel</a></li>
							<li><a href="#">BoraBora Hotel</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-3 col-md-push-1">
					<div class="gtco-widget">
						<h3>Get In Touch</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i> +1 234 567 890</a></li>
							<li><a href="#"><i class="icon-mail2"></i> info@freehtml5.co</a></li>
							<li><a href="#"><i class="icon-chat"></i> Live Chat</a></li>
						</ul>
					</div>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="https://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a></small>
					</p>
					<p class="pull-right">
						<ul class="gtco-social-icons pull-right">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	<!-- </div> -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="<?= base_url('assets/master/');?>js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?= base_url('assets/master/');?>js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?= base_url('assets/master/');?>js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?= base_url('assets/master/');?>js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="<?= base_url('assets/master/');?>js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="<?= base_url('assets/master/');?>js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="<?= base_url('assets/master/');?>js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="<?= base_url('assets/master/');?>js/jquery.magnific-popup.min.js"></script>
	<script src="<?= base_url('assets/master/');?>js/magnific-popup-options.js"></script>
	
	<!-- Datepicker -->
	<script src="<?= base_url('assets/master/');?>js/bootstrap-datepicker.min.js"></script>
	

	<!-- Main -->
	<script src="<?= base_url('assets/master/');?>js/main.js"></script>

	</body>
</html>


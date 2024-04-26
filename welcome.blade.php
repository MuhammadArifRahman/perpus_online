<!DOCTYPE html>
<html lang="en">
<head>
<title>Perpus Online | SMK YPM 8 SDA</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link href="{{ asset('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/main_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/slides.css') }}">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo-img">
						<img src="{{ asset('images/logo.png') }}" alt="">
				</div>
				<div class="logo">
					<span>Perpus Online</span>
					<h6 class="pl-1">Umsida</h6>
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
						<li class="main_nav_item"><a href="#">home</a></li>
						<li class="main_nav_item"><a href="#">Informasi</a></li>
						<li class="main_nav_item"><a href="courses.html">Berita</a></li>
						<li class="main_nav_item"><a href="courses.html">Bantuan</a></li>
						<li class="main_nav_item"><a href="/login" class="btn btn-primary text-light" style="background:#3a3a3a;border:none;">Login</a></li>
					</ul>
				</div>
			</nav>
		</div>

		<!-- Hamburger -->
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
		</div>

	</header>
	
	<!-- Menu -->
	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<ul class="menu_list menu_mm">
					<li class="main_nav_item"><a href="#">home</a></li>
                    <li class="main_nav_item"><a href="#">Informasi</a></li>
                    <li class="main_nav_item"><a href="courses.html">Berita</a></li>
                    <li class="main_nav_item"><a href="courses.html">Bantuan</a></li>
                    <li class="main_nav_item"><a href="/login" class="btn btn-primary text-light" style="background:#3a3a3a; border:none;">Login</a></li>
				</ul>

				<!-- Menu Social -->
				
				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>

				<div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
			</div>

		</div>

	</div>
	
	<!-- Home -->

	<div class="home">

		<!-- Hero Slider -->
		<div class="hero_slider_container">
			<div class="hero_slider owl-carousel">
				
				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(images/slider_background.jpg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut" style="margin-top:-8vw">Selamat Datang</h1>
						</div>
					</div>
				</div>

			</div>
		</div>

	</div>

	<div class="hero_boxes">
		<div class="hero_boxes_inner">
			<div class="container">
				<div class="row">

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="{{ asset('images/books.svg') }}" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Koleksi Buku</h2>
								<h3 class="hero_box_title">120</h3>
							</div>
						</div>
					</div>

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="{{ asset('images/exam.svg') }}" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Jumlah Member</h2>
								<h3 class="hero_box_title">1609</h3>
							</div>
						</div>
					</div>

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="{{ asset('images/professor.svg') }}" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Jumlah Perpustakawan</h2>
								<h3 class="hero_box_title">50</h3>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Popular -->

	<div class="popular py-5">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Buku Terbaru</h1>
					</div>
				</div>
			</div>
            
            <div class="wrapper wrapper-bkbaru mt-3">
                <svg xmlns="http://www.w3.org/2000/svg" id="left" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle leftup" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                </svg>
                <ul class="carousel">
                  <li class="card">
                    <div class="img"><a href=""><img src="{{ asset('book/buku1.png') }}" alt="https://unsplash.com/@kellybrito"></a></div>
                    <h2><a href="">Ensiklopedia nusantara</a></h2>
                    <span>Igrea Siswanto, dkk</span>
                  </li>
                  <li class="card">
                    <div class="img"><a href=""><img src="{{ asset('book/buku1.png') }}" alt="https://unsplash.com/@kellybrito"></a></div>
                    <h2><a href="">Ensiklopedia nusantara</a></h2>
                    <span>Igrea Siswanto, dkk</span>
                  </li>
                  <li class="card">
                    <div class="img"><a href=""><img src="{{ asset('book/buku1.png') }}" alt="https://unsplash.com/@kellybrito"></a></div>
                    <h2><a href="">Ensiklopedia nusantara</a></h2>
                    <span>Igrea Siswanto, dkk</span>
                  </li>
                  <li class="card">
                    <div class="img"><a href=""><img src="{{ asset('book/buku1.png') }}" alt="https://unsplash.com/@kellybrito"></a></div>
                    <h2><a href="">Ensiklopedia nusantara</a></h2>
                    <span>Igrea Siswanto, dkk</span>
                  </li>
                  <li class="card">
                    <div class="img"><a href=""><img src="{{ asset('book/buku1.png') }}" alt="https://unsplash.com/@kellybrito"></a></div>
                    <h2><a href="">Ensiklopedia nusantara</a></h2>
                    <span>Igrea Siswanto, dkk</span>
                  </li>
                  <li class="card">
                    <div class="img"><a href=""><img src="{{ asset('book/buku1.png') }}" alt="https://unsplash.com/@kellybrito"></a></div>
                    <h2><a href="">Ensiklopedia nusantara</a></h2>
                    <span>Igrea Siswanto, dkk</span>
                  </li>
                </ul>
                <svg xmlns="http://www.w3.org/2000/svg" id="right" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle rightup" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                </svg>
            </div>
		</div>		
	</div>

	<div class="popular py-5">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Buku Yang Sering Di Baca</h1>
					</div>
				</div>
			</div>
            
			<div class="wrapper wrapper-populer mt-3">
					<svg xmlns="http://www.w3.org/2000/svg" id="left" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle leftdown" viewBox="0 0 16 16">
							<path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
					</svg>
					<ul class="carousel">
						<li class="card">
							<div class="img"><a href=""><img src="{{ asset('book/buku1.png') }}" alt="https://unsplash.com/@kellybrito"></a></div>
							<h2><a href="">Ensiklopedia nusantara</a></h2>
							<span>Igrea Siswanto, dkk</span>
						</li>
						<li class="card">
							<div class="img"><a href=""><img src="{{ asset('book/buku1.png') }}" alt="https://unsplash.com/@kellybrito"></a></div>
							<h2><a href="">Ensiklopedia nusantara</a></h2>
							<span>Igrea Siswanto, dkk</span>
						</li>
						<li class="card">
							<div class="img"><a href=""><img src="{{ asset('book/buku1.png') }}" alt="https://unsplash.com/@kellybrito"></a></div>
							<h2><a href="">Ensiklopedia nusantara</a></h2>
							<span>Igrea Siswanto, dkk</span>
						</li>
						<li class="card">
							<div class="img"><a href=""><img src="{{ asset('book/buku1.png') }}" alt="https://unsplash.com/@kellybrito"></a></div>
							<h2><a href="">Ensiklopedia nusantara</a></h2>
							<span>Igrea Siswanto, dkk</span>
						</li>
						<li class="card">
							<div class="img"><a href=""><img src="{{ asset('book/buku1.png') }}" alt="https://unsplash.com/@kellybrito"></a></div>
							<h2><a href="">Ensiklopedia nusantara</a></h2>
							<span>Igrea Siswanto, dkk</span>
						</li>
						<li class="card">
							<div class="img"><a href=""><img src="{{ asset('book/buku1.png') }}" alt="https://unsplash.com/@kellybrito"></a></div>
							<h2><a href="">Ensiklopedia nusantara</a></h2>
							<span>Igrea Siswanto, dkk</span>
						</li>
					</ul>
					<svg xmlns="http://www.w3.org/2000/svg" id="right" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle rightdown" viewBox="0 0 16 16">
							<path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
					</svg>
			</div>
			<div class="row ">
				<a href="" class="btn btn-primary mx-auto d-flex align-items-center">
					Selengkapnya
					<svg xmlns="http://www.w3.org/2000/svg" id="right" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle mx-2" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
					</svg>
				</a>
			</div>
		</div>		
	</div>

</div>

<script src="js/slides.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="css/bootstrap4/popper.js"></script>
<script src="css/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
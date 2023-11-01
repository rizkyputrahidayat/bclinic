<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
        
        <!-- title of site -->
        <title>B Clinic Slimming & Aesthetic</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="assets/logo/logo.png"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!--linear icon css-->
		<link rel="stylesheet" href="assets/css/linearicons.css">

		<!--animate.css-->
        <link rel="stylesheet" href="assets/css/animate.css">

        <!--owl.carousel.css-->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="assets/css/bootsnav.css" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="assets/css/responsive.css">
    </head>
	
	<body>
		<!--welcome-hero start -->
		<header id="home">
			<div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">

				<!-- Features Section Begin -->
                <div class="responsive">
                    <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                        @php
                            $i = 0;
                        @endphp
                        <ol class="carousel-indicators">
                            @foreach ($carousel as $item)
                                @php
                                    $i++;
                                @endphp
                                <li data-target="#header-carousel" data-slide-to="{{ $i - 1 }}"
                                    class="@if ($i == 1) active ?? '' @endif"><span class="small-circle"></span>
                                </li>
                            @endforeach
                        </ol>
                
                        @php
                            $a = 0;
                        @endphp
                        <div class="carousel-inner" role="listbox">
                            @foreach ($carousel as $item)
                                @php
                                    $a++;
                                @endphp
                                <div style="margin-top: 160px;" class="item @if ($a <= 1) active @endif">
                                    <div class="container">
                                        <div class="single-slide-item slide1">
                                            <div class="welcome-hero-img-slider">
                                                <div class="row">
                                                    <img src="{{ asset('image/carousel/' . $item->image) }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <br><section id="feature2" class="feature2">
                        <div class="col-lg-5">
                            <img width="100%" src="assets/images/slider/sideline.png">
                        </div>
                        <div class="col-lg-2 text-left text-lg-center">
                            <center>
                                <strong><p style="color:black; font-size:20px;">Treatment & Products</p></strong>
                            </center>
                        </div>
                        <div class="col-lg-5 right">
                            <img width="100%" src="assets/images/slider/sideline.png">
                        </div>
                    </section>

                    <!--populer-products start -->
                    <div class="container">
                        <div class="row">
                            <div class="col col-lg-3 col-sm-6">
                                <div class="card">
                                <img src="assets/images/populer-products/COVER.jpg">
                                <center>
                                <h2><a href="{{ route('p-slimming') }}"><strong>Slimmimg Treatments</strong></a></h2>
                                </center>
                                </div>
                            </div>
                            <div class="col col-lg-3 col-sm-6">
                                <div class="card">
                                <img src="assets/images/populer-products/3 IN 1 PICO LASER.jpg">
                                <center>
                                <h2><a href="{{ route('p-facebody') }}"><strong>Face Treatments</strong></a></h2>
                                </center>
                                </div>
                            </div>
                            <div class="col col-lg-3 col-sm-6">
                                <div class="card">
                                <img src="assets/images/populer-products/COVER1.jpg">
                                <center>
                                <h2><a href="{{ route('p-facial') }}"><strong>Facial Treatments</strong></a></h2>
                                </center>
                                </div>
                            </div>
                            <div class="col col-lg-3 col-sm-6">
                                <div class="card">
                                <img src="assets/images/populer-products/PRODUCT.png">
                                <center>
                                <h2><a href="{{ route('p-skincare') }}"><strong>Skin Care Prodicts</strong></a></h2>
                                </center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section id="feature" class="feature">
                        <div class="containerin">
                            <div class="section-header">
                                    <style>
                                        .containerin {
                                        display: flex;
                                        flex-wrap: wrap;
                                        justify-content: space-around;
                                        }

                                        .card {
                                        width: 280px;
                                        height: auto;
                                        justify-content: center;
                                        border: 1.5px solid #ccc;
                                        border-radius: 8px;
                                        padding: 10px;
                                        margin-top: 15px;
                                        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                                        transition: transform 0.3s ease;
                                        }

                                        .card img {
                                        margin-top: 10px;
                                        width: auto;
                                        border-radius: 8px;
                                        display: block;
                                        margin: 0 auto; 
                                        }

                                        .card h2 {
                                        margin-top: 20px;
                                        }

                                        .card p {
                                        font-size: 1rem;
                                        color: #666;
                                        }

                                        
                                        @media (max-width: 768px) {
                                        .containerin {
                                            flex-direction: column;
                                            align-items: center;
                                        }

                                        .card {
                                            margin-top: 10px;
                                            width: 80%;
                                            margin: 10% auto;
                                        }
                                        }
                                    </style>
                            </div>
                        </div>
                    </section>
                    <!-- Features Section End -->
                </div>
			</div><!--/#header-carousel-->

			<!-- top-area Start -->
			<div class="top-area">
				<div class="header-area">
					<!-- Start Navigation -->
				    <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">
				        <!-- Start Top Search -->
				        <div class="top-search">
				            <div class="container">
				                <div class="input-group">
				                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
				                    <input type="text" class="form-control" placeholder="Search">
				                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
				                </div>
				            </div>
				        </div>
				        <!-- End Top Search -->

				        <div class="container">      
				            <!-- Start Header Navigation -->
				            <div class="navbar-header">
				                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
				                    <i class="fa fa-bars"></i>
				                </button>
								<a href="{{ route('ABOUT') }}">
                                    <div class="navbar-brand">
                                        <img src="assets/logo/B CLINIC NEW.png" alt="logo" width="300px" height="170px">
                                    </div>
                                </a>
				            </div><!--/.navbar-header-->
				            <!-- End Header Navigation -->

				            <!-- Collect the nav links, forms, and other content for toggling -->
				            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
				                <ul class="nav navbar-nav" data-in="fadeInDown" data-out="fadeOutUp">
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="{{ route('p-services-products') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
											Services & Products
											<span class="lnr lnr-chevron-down"></span>
										</a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="{{ route('p-facial') }}">Facial & Face Treatments</a></li>
											<li><a class="dropdown-item" href="{{ route('p-facebody') }}">Ultimate Treatments</a></li>
											<li><a class="dropdown-item" href="{{ route('p-slimming') }}">Slimmimg Treatments</a></li>
											<li><a class="dropdown-item" href="{{ route('p-skincare') }}">Skin Care Products</a></li>
										</ul>
									</li>
				                    <li class=""><a href="p-special-offer">Special Offer</a></li>
				                    <li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
											News
											<span class="lnr lnr-chevron-down"></span>
										</a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="{{ route('p-bupdate') }}">B UPDATE</a></li>
											<li><a class="dropdown-item" href="{{ route('p-blog') }}">Blog</a></li>
											<li><a class="dropdown-item" href="{{ route('p-video') }}">Video</a></li>
											<li><a class="dropdown-item" href="{{ route('p-faq') }}">Faq</a></li>
										</ul>
									</li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
											About us
											<span class="lnr lnr-chevron-down"></span>
										</a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="p-story">Story</a></li> <!--belum bisa route-->
											<li><a class="dropdown-item" href="{{ route('p-location') }}">location</a></li>
										</ul>
									</li>
									<li class=""><a href="p-career">Careers</a></li> <!--belum bisa route-->
				                </ul><!--/.nav -->
				            </div><!-- /.navbar-collapse -->
				        </div><!--/.container-->
				    </nav><!--/nav--> <!-- End Navigation -->
				</div><!--/.header-area-->
			</div><!-- /.top-area-->
			<!-- top-area End -->
		</header>

		<!--footer start-->
		<!--start-footer-garis-->
        <hr color="gold" class="garis">
        <!--end-footer-garis-->
        
		<footer id="footer"  class="footer">
			<div class="container">
				<div class="hm-footer-copyright text-center">
					<div class="footer-social">	
						<a href="https://www.instagram.com/bclinicslimming?igshid=YmMyMTA2M2Y="><i><img src="assets/images/slider/instagram-image.png" alt="button" style="width: 17.5px;"></i></a>
						<a href="https://www.tiktok.com/@bclinic_official?_t=8YbGZNY1X2A&_r=1"><i><img src="assets/images/slider/tiktok-image.png" alt="button" style="width: 18px;"></i></a>
						<a href="https://www.youtube.com/channel/UCCeIK4GwXrM8M2ihZ_IO1QA"><i><img src="assets/images/slider/yt-image.png" alt="button" style="width: 20px;"></i></a>
					</div><br>
					<p>
                        &copy;copyright. {{ date('Y') }} B Clinic Slimming.
                        All rights reserved.
					</p><!--/p-->
				</div><!--/.text-center-->
			</div><!--/.container-->

			<div class="fab-wrapper">
                    <input id="fabCheckbox" type="checkbox" class="fab-checkbox">
                    <label class="fab" for="fabCheckbox">
                        <span class="fab-dots fab-dots-1"></span>
                        <span class="fab-dots fab-dots-2"></span>
                        <span class="fab-dots fab-dots-3"></span>
                    </label>
                    <div id="box" class="fab-wheel">
                        <ul>
                            <h4><a
                                    href="https://api.whatsapp.com/send/?phone=6281511351234&text&type=phone_number&app_absent=0">Kemang</a>
                            </h4>
                            <h4><a
                                    href="https://api.whatsapp.com/send/?phone=6281215152540&text&type=phone_number&app_absent=0">Surabaya</a>
                            </h4>
                            <h4><a
                                    href="https://api.whatsapp.com/send/?phone=6285838500000&text&type=phone_number&app_absent=0">Kelapa Gading</a></h4>
                            <h4><a
                                    href="https://api.whatsapp.com/send/?phone=62818834000&text&type=phone_number&app_absent=0">Bogor</a>
                            </h4>
                            <h4><a
                                    href="https://api.whatsapp.com/send/?phone=6285813800000&text&type=phone_number&app_absent=0">Bekasi</a>
                            </h4>
                            <h4><a
                                    href="https://api.whatsapp.com/send/?phone=6281389896485&text&type=phone_number&app_absent=0">Depok</a>
                            </h4>
                            <h4><a
                                    href="https://api.whatsapp.com/send/?phone=6285655800000&text&type=phone_number&app_absent=0">South City</a></h4>
                            <h4><a
                                    href="https://api.whatsapp.com/send/?phone=6285830800000&text&type=phone_number&app_absent=0">Bintaro</a>
                            </h4>
                            <h4><a
                                    href="https://api.whatsapp.com/send/?phone=6285792500000&text&type=phone_number&app_absent=0">BSD</a>
                            </h4>
                            <h4><a
                                    href="https://api.whatsapp.com/send/?phone=6285696011111&text&type=phone_number&app_absent=0">Gading Serpong</a></h4>
                            <h4><a
                                    href="https://api.whatsapp.com/send/?phone=6285792600000&text&type=phone_number&app_absent=0">Bandung</a>
                            </h4>
                            <h4><a
                                    href="https://api.whatsapp.com/send/?phone=628569998000&text&type=phone_number&app_absent=0">Puri</a>
                            </h4>
                            <h4><a
                                    href="https://api.whatsapp.com/send/?phone=6285789855555&text&type=phone_number&app_absent=0">Kudus</a>
                            </h4>
                            <h4><a
                                    href="https://api.whatsapp.com/send/?phone=6285840999999&text&type=phone_number&app_absent=0">Cibubur</a>
                            </h4>
                            <h4><a
                                    href="https://api.whatsapp.com/send/?phone=628552207666&text&type=phone_number&app_absent=0">Karawang</a>
                            </h4>
                            <h4><a
                                    href="https://api.whatsapp.com/send/?phone=628552208666&text&type=phone_number&app_absent=0">PIM</a>
                            </h4>
                            <h4><a
                                    href="https://api.whatsapp.com/send/?phone=6281511360000&text&type=phone_number&app_absent=0">Pontianak</a>
                            </h4>
                            <h4><a
                                    href="https://api.whatsapp.com/send/?phone=628551551899&text&type=phone_number&app_absent=0">PIK</a>
                            </h4>
                        </ul>
                    </div>
                </div>
        </footer><!--/.footer-->
		<!--footer end-->
		
		<!-- Include all js compiled plugins (below), or include individual files as needed -->

		<script src="assets/js/jquery.js"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!--bootstrap.min.js-->
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>

		<!--owl.carousel.js-->
        <script src="assets/js/owl.carousel.min.js"></script>


		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		
        
        <!--Custom JS-->
        <script src="assets/js/custom.js"></script>
        
    </body>
	
</html>
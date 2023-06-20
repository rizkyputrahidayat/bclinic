<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- meta data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!--font-family-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">

    <!-- title of site -->
    <title>B Clinic Slimming & Aesthetic</title>

    <!-- For favicon png -->
    <link rel="shortcut icon" type="image/icon" href="assets/logo/logo.png" />

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
    <link rel="stylesheet" href="assets/css/bootsnav.css">

    <!--style.css-->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--responsive.css-->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->



    <!--welcome-hero start -->
    <header id="home" class="welcome-hero">

        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <!--/.carousel-indicator -->
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"><span class="small-circle"></span>
                </li>
                <li data-target="#header-carousel" data-slide-to="1"><span class="small-circle"></span></li>
                <li data-target="#header-carousel" data-slide-to="2"><span class="small-circle"></span></li>
            </ol><!-- /ol-->
            <!--/.carousel-indicator -->

            <!--/.carousel-inner -->
            <div class="carousel-inner" role="listbox">
                <!-- .item -->
                @foreach ($sliders as $slider)
                    <div class="item active">
                        <div class="single-slide-item slide1">
                            <div class="container">
                                <div class="welcome-hero-content">
                                    <div class="row">
                                        <div class="single-welcome-hero">
                                            <div class="welcome-hero-img-slider">
                                                <a href="#">
                                                    {{-- <img src="assets/images/slider/1. Banner Slider - BA.jpg" alt="slider image" width="100%" height="500px"> --}}
                                                    <img src="{{ asset('images/' . $slider->image) }}"
                                                        alt="slider image" width="100%" height="500px" />
                                                </a>
                                            </div>
                                            <!--/.welcome-hero-txt-->
                                        </div>
                                        <!--/.single-welcome-hero-->
                                    </div>
                                    <!--/.row-->
                                </div>
                                <!--/.welcome-hero-content-->
                            </div><!-- /.container-->
                        </div><!-- /.single-slide-item-->

                    </div><!-- /.item .active-->
                @endforeach


                {{-- <div class="item">
						<div class="single-slide-item slide2">
							<div class="container">
								<div class="welcome-hero-content">
									<div class="row">
										<div class="single-welcome-hero">
											<div class="welcome-hero-txt">
												<div class="welcome-hero-img-slider">
													<a href="\home\landingpage">
														<img src="assets/images/slider/2. Banner Slider - RF SINESON.jpg" alt="slider image">
													</a>
												</div><!--/.welcome-hero-txt-->
											</div><!--/.welcome-hero-txt-->
										</div><!--/.col-->
									</div><!--/.row-->
								</div><!--/.welcome-hero-content-->
							</div><!-- /.container-->
						</div><!-- /.single-slide-item-->

					</div><!-- /.item .active--> --}}

                {{-- <div class="item">
						<div class="single-slide-item slide3">
							<div class="container">
								<div class="welcome-hero-content">
									<div class="row">
										<div class="single-welcome-hero">
											<div class="welcome-hero-txt">
												<div class="welcome-hero-img-slider">
													<a href="#">
														<img src="assets/images/slider/4. Banner Slider - BC SKIN Brings Clinic To Your Home.jpg" alt="slider image">
													</a>
												</div><!--/.welcome-hero-txt-->	
											</div><!--/.welcome-hero-txt-->
										</div><!--/.col-->
									</div><!--/.row-->
								</div><!--/.welcome-hero-content-->
							</div><!-- /.container-->
						</div><!-- /.single-slide-item-->
						
					</div><!-- /.item .active--> --}}
            </div><!-- /.carousel-inner-->

        </div>
        <!--/#header-carousel-->

        <!-- top-area Start -->
        <div class="top-area">
            <div class="header-area">
                <!-- Start Navigation -->
                <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"
                    data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

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
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#navbar-menu">
                                <i class="fa fa-bars"></i>
                            </button>
                            <div class="navbar-brand"><img src="assets/logo/B CLINIC NEW.png" alt="logo"
                                    width="300px" height="170px"></div>

                        </div>
                        <!--/.navbar-header-->
                        <!-- End Header Navigation -->

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
                            <ul class="nav navbar-nav" data-in="fadeInDown" data-out="fadeOutUp">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="Servicesproducts" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Services & Products
                                        <span class="lnr lnr-chevron-down"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="Slimming">Slimmimg & Shaping</a></li>
                                        <li><a class="dropdown-item" href="facebody">Face Treatment</a></li>
                                        <li><a class="dropdown-item" href="Facial">Facial Treatment</a></li>
                                        <li><a class="dropdown-item" href="Skincare">Skin Care Products</a></li>
                                    </ul>
                                </li>
                                <li class=""><a href="SpecialOffer">Special Offer</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        News
                                        <span class="lnr lnr-chevron-down"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="Bupdate">B UPDATE</a></li>
                                        <!--<li><a class="dropdown-item" href="Blog">Blog</a></li>-->
                                        <li><a class="dropdown-item" href="Video">Video</a></li>
                                        <li><a class="dropdown-item" href="Faq">Faq</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        About us
                                        <span class="lnr lnr-chevron-down"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="Story">Story</a></li>
                                        <li><a class="dropdown-item" href="Location">location</a></li>
                                    </ul>
                                <li class=""><a href="careers">Careers</a></li>
                            </ul>
                            <!--/.nav -->
                        </div><!-- /.navbar-collapse -->
                    </div>
                    <!--/.container-->
                </nav>
                <!--/nav-->
                <!-- End Navigation -->

                <!--popup-->
                <div class="popup" id="popup">
                    <div class="popup_content">
                        <div class="popup_img">
                            <img src="\assets\images\blog\Bglowing.jpg" alt="meja">
                        </div>
                        <div class="popup_header">
                            <h1>B Glowing</h1>
                            <div class="popup_text">
                                <h3>Merupakan kombinasi treatment <b>Micro Bubble</b> dan <b>Korean Peel</b> yang</h3>
                                <h3>mampu mengatasi kulit kusam, menurangi kadar minyak pada kulit,</h3>
                                <h3>membersihkan komedo dan menutrisi kulit wajah.</h3>
                                <h3>Sehingga kulit wajah menjadi <b>lebih bersih, sehat</b> dan <b>glowing</b>.</h3>
                            </div>
                            <p>
                            <div class="card2">
                                <div class="container1">
                                    <div class="box">
                                        <img src="assets/images/slider/BEFORE B MAGS.jpg">
                                    </div>
                                    <div class="box">
                                        <img src="assets/images/slider/AFTER B MAGS.jpg">
                                    </div>
                                </div>
                            </div>
                            <style>
                                .card2 {
                                    width: 40%;
                                    margin: auto;
                                    display: flex;
                                    justify-content: center;
                                    align-items: center;
                                }
                            </style>
                            <div>
                                <h3>Video Treatment</h3>
                                <iframe style="width:90%; height:auto;"
                                    src="https://www.youtube.com/embed/rdr4o1Ie4kM">
                                </iframe>
                            </div>
                            <a href="https://shopee.co.id/bclinic.official?smtt=0.331281872-1672375852.9"
                                class="btn popup_btn">add to cart</a><br><br>
                            <button style="color:red;" onclick="goBack()">Close</button><br><br>
                            <script>
                                function goBack() {
                                    window.history.back();
                                }
                            </script>
                        </div>
                    </div>
                </div>
                <div class="popup1" id="popup1">
                    <div class="popup1_content">
                        <div class="popup1_img">
                            <img src="\assets\images\blog\Bglowing.jpg" alt="meja">
                        </div>
                        <div class="popup1_header">
                            <h1>Facial Korean Peel</h1>
                            <div class="popup1_text">
                                <h3>Merupakan kombinasi treatment <b>Micro Bubble</b> dan <b>Korean Peel</b> yang</h3>
                                <h3>mampu mengatasi kulit kusam, menurangi kadar minyak pada kulit,</h3>
                                <h3>membersihkan komedo dan menutrisi kulit wajah.</h3>
                                <h3>Sehingga kulit wajah menjadi <b>lebih bersih, sehat</b> dan <b>glowing</b>.</h3>
                            </div>
                            <p>
                            <div class="card2">
                                <div class="container1">
                                    <div class="box">
                                        <img src="assets/images/slider/BEFORE B MAGS.jpg">
                                    </div>
                                    <div class="box">
                                        <img src="assets/images/slider/AFTER B MAGS.jpg">
                                    </div>
                                </div>
                            </div>
                            <style>
                                .card2 {
                                    width: 40%;
                                    margin: auto;
                                    display: flex;
                                    justify-content: center;
                                    align-items: center;
                                }
                            </style>
                            <div>
                                <h3>Video Treatment</h3>
                                <iframe style="width:90%; height:auto;"
                                    src="https://www.youtube.com/embed/rdr4o1Ie4kM">
                                </iframe>
                            </div>
                            <a href="https://shopee.co.id/bclinic.official?smtt=0.331281872-1672375852.9"
                                class="btn popup_btn">add to cart</a><br><br>
                            <button style="color:red;" onclick="goBack()">Close</button><br><br>
                            <script>
                                function goBack() {
                                    window.history.back();
                                }
                            </script>
                        </div>
                    </div>
                </div>
                <div class="popup2" id="popup2">
                    <div class="popup2_content">
                        <div class="popup2_img">
                            <img src="\assets\images\blog\Bglowing.jpg" alt="meja">
                        </div>
                        <div class="popup2_header">
                            <h1>Instant Brightening</h1>
                            <div class="popup2_text">
                                <h3>Merupakan kombinasi treatment <b>Micro Bubble</b> dan <b>Korean Peel</b> yang</h3>
                                <h3>mampu mengatasi kulit kusam, menurangi kadar minyak pada kulit,</h3>
                                <h3>membersihkan komedo dan menutrisi kulit wajah.</h3>
                                <h3>Sehingga kulit wajah menjadi <b>lebih bersih, sehat</b> dan <b>glowing</b>.</h3>
                            </div>
                            <p>
                            <div class="card2">
                                <div class="container1">
                                    <div class="box">
                                        <img src="assets/images/slider/BEFORE B MAGS.jpg">
                                    </div>
                                    <div class="box">
                                        <img src="assets/images/slider/AFTER B MAGS.jpg">
                                    </div>
                                </div>
                            </div>
                            <style>
                                .card2 {
                                    width: 40%;
                                    margin: auto;
                                    display: flex;
                                    justify-content: center;
                                    align-items: center;
                                }
                            </style>
                            <div>
                                <div>
                                    <h3>Video Treatment</h3>
                                    <iframe style="width:90%; height:auto;"
                                        src="https://www.youtube.com/embed/rdr4o1Ie4kM">
                                    </iframe>
                                </div>
                                <a href="https://shopee.co.id/bclinic.official?smtt=0.331281872-1672375852.9"
                                    class="btn popup_btn">add to cart</a><br><br>
                                <button style="color:red;" onclick="goBack()">Close</button>
                                <script>
                                    function goBack() {
                                        window.history.back();
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="popup3" id="popup3">
                        <div class="popup3_content">
                            <div class="popup3_img">
                                <img src="\assets\images\blog\xNqnziKQdU1GDcSfacial 6.png" alt="meja">
                            </div>
                            <div class="popup3_header">
                                <h1>Super Deep Nutrition</h1><br>
                                <div class="popup3_text">
                                    <h3>Merupakan kombinasi treatment <b>Micro Bubble</b> dan <b>Korean Peel</b> yang
                                    </h3>
                                    <h3>mampu mengatasi kulit kusam, menurangi kadar minyak pada kulit,</h3>
                                    <h3>membersihkan komedo dan menutrisi kulit wajah.</h3>
                                    <h3>Sehingga kulit wajah menjadi <b>lebih bersih, sehat</b> dan <b>glowing</b>.</h3>
                                    <br>
                                </div>
                                <p>
                                <div class="card2">
                                    <div class="container1">
                                        <div class="box">
                                            <img src="assets/images/slider/BEFORE B MAGS.jpg">
                                        </div>
                                        <div class="box">
                                            <img src="assets/images/slider/AFTER B MAGS.jpg">
                                        </div>
                                    </div>
                                </div>
                                <style>
                                    .card2 {
                                        width: 40%;
                                        margin: auto;
                                        display: flex;
                                        justify-content: center;
                                        align-items: center;
                                    }
                                </style>
                                <div>
                                    <div><br>
                                        <h3>Video Treatment</h3>
                                        <iframe style="width:90%; height:auto;"
                                            src="https://www.youtube.com/embed/rdr4o1Ie4kM">
                                        </iframe>
                                    </div>
                                    <a href="https://shopee.co.id/bclinic.official?smtt=0.331281872-1672375852.9"
                                        class="btn popup_btn">add to cart</a><br><br>
                                    <button style="color:red;" onclick="goBack()">Close</button>
                                    <script>
                                        function goBack() {
                                            window.history.back();
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="popup4" id="popup4">
                            <div class="popup4_content">
                                <div class="popup4_img">
                                    <img src="\assets\images\blog\2o6xtyDxO45RY5Zacne.jpg" alt="meja">
                                </div>
                                <div class="popup4_header">
                                    <h1>Facial Acne</h1><br>
                                    <div class="popup4_text">
                                        <h3>Merupakan kombinasi treatment <b>Micro Bubble</b> dan <b>Korean Peel</b>
                                            yang</h3>
                                        <h3>mampu mengatasi kulit kusam, menurangi kadar minyak pada kulit,</h3>
                                        <h3>membersihkan komedo dan menutrisi kulit wajah.</h3>
                                        <h3>Sehingga kulit wajah menjadi <b>lebih bersih, sehat</b> dan <b>glowing</b>.
                                        </h3><br>
                                    </div>
                                    <p>
                                    <div class="card2">
                                        <div class="container1">
                                            <div class="box">
                                                <img src="assets/images/slider/BEFORE B MAGS.jpg">
                                            </div>
                                            <div class="box">
                                                <img src="assets/images/slider/AFTER B MAGS.jpg">
                                            </div>
                                        </div>
                                    </div>
                                    <style>
                                        .card2 {
                                            width: 40%;
                                            margin: auto;
                                            display: flex;
                                            justify-content: center;
                                            align-items: center;
                                        }
                                    </style>
                                    <div>
                                        <div><br>
                                            <h3>Video Treatment</h3>
                                            <iframe style="width:90%; height:auto;"
                                                src="https://www.youtube.com/embed/rdr4o1Ie4kM">
                                            </iframe>
                                        </div>
                                        <a href="https://shopee.co.id/bclinic.official?smtt=0.331281872-1672375852.9"
                                            class="btn popup_btn">add to cart</a><br><br>
                                        <button style="color:red;" onclick="goBack()">Close</button>
                                        <script>
                                            function goBack() {
                                                window.history.back();
                                            }
                                        </script>
                                    </div>
                                </div>
                            </div>
                            <div class="popup5" id="popup5">
                                <div class="popup5_content">
                                    <div class="popup5_img">
                                        <img src="\assets\images\blog\oMDMAPRIVs32R3Vfacial 3.png" alt="meja">
                                    </div>
                                    <div class="popup5_header">
                                        <h1>Facial Micro Bubble</h1><br>
                                        <div class="popup5_text">
                                            <h3>Merupakan kombinasi treatment <b>Micro Bubble</b> dan <b>Korean Peel</b>
                                                yang</h3>
                                            <h3>mampu mengatasi kulit kusam, menurangi kadar minyak pada kulit,</h3>
                                            <h3>membersihkan komedo dan menutrisi kulit wajah.</h3>
                                            <h3>Sehingga kulit wajah menjadi <b>lebih bersih, sehat</b> dan
                                                <b>glowing</b>.
                                            </h3><br>
                                        </div>
                                        <p>
                                        <div class="card2">
                                            <div class="container1">
                                                <div class="box">
                                                    <img src="assets/images/slider/BEFORE B MAGS.jpg">
                                                </div>
                                                <div class="box">
                                                    <img src="assets/images/slider/AFTER B MAGS.jpg">
                                                </div>
                                            </div>
                                        </div>
                                        <style>
                                            .card2 {
                                                width: 40%;
                                                margin: auto;
                                                display: flex;
                                                justify-content: center;
                                                align-items: center;
                                            }
                                        </style>
                                        <div>
                                            <div><br>
                                                <h3>Video Treatment</h3>
                                                <iframe style="width:90%; height:auto;"
                                                    src="https://www.youtube.com/embed/rdr4o1Ie4kM">
                                                </iframe>
                                            </div>
                                            <a href="https://shopee.co.id/bclinic.official?smtt=0.331281872-1672375852.9"
                                                class="btn popup_btn">add to cart</a><br><br>
                                            <button style="color:red;" onclick="goBack()">Close</button>
                                            <script>
                                                function goBack() {
                                                    window.history.back();
                                                }
                                            </script>
                                        </div>
                                    </div>
                                </div>
                                <!--popup end-->
                            </div>
                            <!--/.header-area-->
                            <div class="clearfix"></div>

                        </div><!-- /.top-area-->
                        <!-- top-area End -->
    </header>
    <br><br><br>
    <!--Testimoni start -->
    <section id="feature" class="feature" style="margin-top: -2%;">
        <div class="container">
            <div class="section-header">
                <div class="col-lg-5">
                    <img width="100%" src="assets/images/slider/sideline.png" alt="">
                </div>
                <div class="col-lg-2 text-left text-lg-center">
                    <center>
                        <h2>Facial Treatment</h2>
                    </center>
                </div>
                <div class="col-lg-5 right">
                    <img max-width="100%" src="assets/images/slider/sideline.png" alt="">
                </div>
            </div>
            <!--/.section-header-->
    </section>

    <!--Testimoni End -->
    <!--populer-products start -->
    <section id="populer-products" class="populer-products" style="margin-top: 2%;">
        <div class="container">
            <div class="populer-products-content">
                <div class="row">
                    <div class="col-md-3">
                        <div class="single-populer-products">
                            <div class="single-populer-product-img">
                                <img src="assets/images/populer-products/B GLOWING.jpg"
                                    style="width: 100%; border-radius: 5% 5% 5% 5%;" alt="populer-products images">
                            </div>
                            <h2><a href="#popup">B Glowing</a></h2>
                            <div class="single-populer-products-para">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-populer-products">
                            <div class="single-populer-products">
                                <div class="single-populer-product-img">
                                    <img src="assets/images/populer-products/COVER2.jpg"
                                        style="width: 100%; border-radius: 5% 5% 5% 5%;"
                                        alt="populer-products images">
                                </div>
                                <h2><a href="#popup1">Facial Korean Peel</a></h2>
                                <div class="single-populer-products-para">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-populer-products">
                            <div class="single-populer-product-img">
                                <img src="assets/images/populer-products/INSTANT BRIGHTENING.jpg"
                                    style="width: 100%; border-radius: 5% 5% 5% 5%;" alt="populer-products images">
                            </div>
                            <h2><a href="#popup2">Instant Brightening</a></h2>
                            <div class="single-populer-products-para">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-populer-products">
                            <div class="single-populer-products">
                                <div class="single-populer-product-img">
                                    <img src="assets/images/populer-products/SUPER DEEP NUTRITION.jpg"
                                        style="width: 100%; border-radius: 5% 5% 5% 5%;"
                                        alt="populer-products images">
                                </div>
                                <h2><a href="#popup3">Super Deep Nutrition</a></h2>
                                <div class="single-populer-products-para">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="col-md-3">
                    <div class="">
                        <div class="">
                            <div class="">
                                <img src="" alt="">
                            </div>
                            <h2><a href="#"></a></h2>
                            <div class="">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="margin-top: -5%;">
                <div class="single-populer-products">
                    <div class="single-populer-product-img">
                        <img src="assets/images/populer-products/FACIAL ACNE.jpg"
                            style="width: 100%; border-radius: 5% 5% 5% 5%;" alt="populer-products images">
                    </div>
                    <h2><a href="#popup4">Facial Acne</a></h2>
                    <div class="single-populer-products-para">
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="margin-top: -5%;">
                <div class="single-populer-products">
                    <div class="single-populer-products">
                        <div class="single-populer-product-img">
                            <img src="assets/images/populer-products/MICROBUBBLE.jpg"
                                style="width: 100%; border-radius: 5% 5% 5% 5%;" alt="populer-products images">
                        </div>
                        <h2><a href="#popup5">Facial Micro Bubble</a></h2>
                        <div class="single-populer-products-para">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <section id="feature" class="feature">
            <div class="container">
                <div class="section-header">
                    <div class="col-lg-5">
                        <img width="100%" src="assets/images/slider/sideline.png" alt="">
                    </div>
                    <div class="col-lg-2 text-left text-lg-center">
                        <center>
                            <h2>Other Treatment</h2>
                        </center>
                    </div>
                    <div class="col-lg-5 right">
                        <img max-width="100%" src="assets/images/slider/sideline.png" alt="">
                    </div><br>

                    <br><br><br>
                    <div class="box">
                        <div class="kotak">
                            <h2><a href="#">Mesolipo Injection</a></h2>
                            <p>Injeksi slimming untuk membantu mengurangi lemak berlebih pada tubuh</p>
                        </div>
                    </div><br>
                    <div class="box">
                        <div class="kotak">
                            <h2><a href="#">Facial Micro Dermabrasi</a></h2>
                            <p>Injeksi slimming untuk membantu mengurangi lemak berlebih pada tubuh</p>
                        </div>
                    </div><br>
                    <div class="box">
                        <div class="kotak">
                            <h2><a href="#">Facial Oxy</a></h2>
                            <p>Injeksi slimming untuk membantu mengurangi lemak berlebih pada tubuh</p>
                        </div>
                    </div><br>
                    <div class="box">
                        <div class="kotak">
                            <h2><a href="#">Facial B Glowing + RF Wajah</a></h2>
                            <p>Injeksi slimming untuk membantu mengurangi lemak berlebih pada tubuh</p>
                        </div>
                    </div><br>
                    <style>
                        .box {

                            height: 50%;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                        }

                        .kotak {

                            text-align: left;
                            position: relative;
                            width: 500%;
                            height: 100%;
                            background: white;
                            box-shadow: 2px 4px 4px rgba(225, 215, 0, 0.8);
                            padding: 10px;
                            border: 1px dashed gold;
                            border-radius: 5px;
                        }
                    </style>
                </div>
                <!--/.section-header-->
        </section>
        </div>
        <!--/.container-->

        <!--footer start-->
        <hr color="gold" class="garis">
        <style>
            .garis {
                border-left: 1px gold solid;
                background-image: linear-gradient(to right, #000000, #c7b565, hsl(50.6, 100%, 56.5%), #c7b565, #000000);
                height: 3px;
                width: 100%;
            }
        </style>
        </hr>
        <footer id="footer" class="footer">
            <div class="container">
                <div class="hm-footer-copyright text-center">
                    <div class="footer-social">
                        <a href="https://www.instagram.com/bclinicslimming?igshid=YmMyMTA2M2Y="><i><img
                                    src="assets/images/slider/instagram-image.png" alt="button"
                                    style="width: 17.5px;"></i></a>
                        <a href="https://www.tiktok.com/@bclinic_official?_t=8YbGZNY1X2A&_r=1"><i><img
                                    src="assets/images/slider/tiktok-image.png" alt="button"
                                    style="width: 18px;"></i></a>
                        <a href="https://www.youtube.com/channel/UCCeIK4GwXrM8M2ihZ_IO1QA"><i><img
                                    src="assets/images/slider/yt-image.png" alt="button"
                                    style="width: 20px;"></i></a>
                    </div><br>
                    <p>
                        &copy;copyright. {{ date('Y') }} B Clinic Slimming.
                        All rights reserved.
                    </p>
                    <!--/p-->
                </div>
                <!--/.text-center-->
            </div>
            <!--/.container-->


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
                                href="https://api.whatsapp.com/send/?phone=6285838500000&text&type=phone_number&app_absent=0">Kelapa
                                Gading</a></h4>
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
                                href="https://api.whatsapp.com/send/?phone=6285655800000&text&type=phone_number&app_absent=0">South
                                City</a></h4>
                        <h4><a
                                href="https://api.whatsapp.com/send/?phone=6285830800000&text&type=phone_number&app_absent=0">Bintaro</a>
                        </h4>
                        <h4><a
                                href="https://api.whatsapp.com/send/?phone=6285792500000&text&type=phone_number&app_absent=0">BSD</a>
                        </h4>
                        <h4><a
                                href="https://api.whatsapp.com/send/?phone=6285696011111&text&type=phone_number&app_absent=0">Gading
                                Serpong</a></h4>
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

        </footer>
        <!--/.footer-->
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

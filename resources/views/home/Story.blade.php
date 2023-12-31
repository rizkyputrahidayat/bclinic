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
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
	
	<body>
		<!--welcome-hero start -->
		<header id="home">            
            <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div style="margin-top: 170px;">
                        <div class="welcome-hero-img-slider">
                            <div class="container">
                                <div class="row">
                                    <img src="assets/images/slider/desain-story.jpg"  width="100%" height="500px">
                                </div><!--/.row-->
                            </div>
                        </div><!-- /.container-->
                    </div><!-- /.single-slide-item-->
                </div><!-- /.item .active-->
                <!-- Page Add Section End -->
                <!-- Features Section End -->
            </div><!--/#header-carousel--><br>
                
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
                                        <li class=""><a href="{{ route('p-special-offer') }}">Special Offer</a></li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
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
                                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                About us
                                                <span class="lnr lnr-chevron-down"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{ route('p-Story') }}">Story</a></li>
                                                <li><a class="dropdown-item" href="{{ route('p-location') }}">location</a></li>
                                            </ul>
                                        <li class=""><a href="{{ route('p-career') }}">Careers</a></li>
                                    </ul><!--/.nav -->
                                </div><!-- /.navbar-collapse -->
                            </div><!--/.container-->
                        </nav><!--/nav-->
                        <!-- End Navigation -->
                    </div><!--/.header-area-->
                </div><!-- /.top-area-->
                <!-- top-area End -->
		</header>

        <section class="page-add">
            <div class="container">
                <div class="content1">
                    <button class="accordion">
                        <div class="header1">
                            Kemang
                        </div>
                    </button>
                        <div class="panel">
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" class="rounded float-start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>        
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" style=”float:left;” class="rounded float start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" class="rounded float-start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>
                            </div>
                        </div>

                    <button class="accordion">
                        <div class="header1">
                            Kelapa Gading
                        </div>
                    </button>
                        <div class="panel">
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" class="rounded float-start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>        
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" style=”float:left;” class="rounded float start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" class="rounded float-start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>
                            </div>
                        </div>

                    <button class="accordion">
                        <div class="header1">
                            Bogor
                        </div>
                    </button>
                        <div class="panel">
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" class="rounded float-start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>        
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" style=”float:left;” class="rounded float start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" class="rounded float-start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>
                            </div>
                        </div>

                    <button class="accordion">
                        <div class="header1">
                            Bekasi
                        </div>
                    </button>
                        <div class="panel">
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\IMG_0405.png" class="rounded float-start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1>DR YULI</h1><br>
                                    <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p>
                                </div>        
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\IMG_0420.png" style=”float:left;” class="rounded float start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1>DR PRITHA</h1><br>
                                    <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\dr Lizbeth Sylvia.png" class="rounded float-start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1>DR LIZABETH SYLVIA</h1><br>
                                    <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p>
                                </div>
                            </div>
                        </div>

                    <button class="accordion">
                        <div class="header1">
                            Depok
                        </div>
                    </button>
                        <div class="panel">
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" class="rounded float-start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>        
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" style=”float:left;” class="rounded float start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" class="rounded float-start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>
                            </div>
                        </div>

                    <button class="accordion">
                        <div class="header1">
                            South City
                        </div>
                    </button>
                        <div class="panel">
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" class="rounded float-start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>        
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" style=”float:left;” class="rounded float start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" class="rounded float-start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>
                            </div>
                        </div>

                    <button class="accordion">
                        <div class="header1">
                            Bintaro
                        </div>
                    </button>
                        <div class="panel">
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" class="rounded float-start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>        
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" style=”float:left;” class="rounded float start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" class="rounded float-start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>
                            </div>
                        </div>

                    <button class="accordion">
                        <div class="header1">
                            BSD
                        </div>
                    </button>
                        <div class="panel">
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" class="rounded float-start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>        
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" style=”float:left;” class="rounded float start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" class="rounded float-start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>
                            </div>
                        </div>

                    <button class="accordion">
                        <div class="header1">
                            Gading Serpong
                        </div>
                    </button>
                        <div class="panel">
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" class="rounded float-start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>        
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" style=”float:left;” class="rounded float start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" class="rounded float-start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>
                            </div>
                        </div>

                    <button class="accordion">
                        <div class="header1">
                            Bandung
                        </div>
                    </button>
                        <div class="panel">
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\IMG_4701.png" class="rounded float-start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1>DR MUTIA ULFA</h1><br>
                                    <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p>
                                </div>        
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\IMG_4690.png" style=”float:left;” class="rounded float start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1>DR ANINDITYA CHRISTA M</h1><br>
                                    <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p>
                                </div>
                            </div>
                            {{-- <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" class="rounded float-start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p>
                                </div>
                            </div> --}}
                        </div>

                    <button class="accordion">
                        <div class="header1">
                            Puri
                        </div>
                    </button>
                        <div class="panel">
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" class="rounded float-start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>        
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" style=”float:left;” class="rounded float start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" class="rounded float-start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>
                            </div>
                        </div>

                    <button class="accordion">
                        <div class="header1">
                            Kudus
                        </div>
                    </button>
                        <div class="panel">
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" class="rounded float-start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>        
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" style=”float:left;” class="rounded float start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" class="rounded float-start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>
                            </div>
                        </div>

                    <button class="accordion">
                        <div class="header1">
                            Cibubur
                        </div>
                    </button>
                        <div class="panel">
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" class="rounded float-start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>        
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" style=”float:left;” class="rounded float start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" class="rounded float-start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>
                            </div>
                        </div>

                    <button class="accordion">
                        <div class="header1">
                            Karawang
                        </div>
                    </button>
                        <div class="panel">
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" class="rounded float-start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>        
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" style=”float:left;” class="rounded float start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" class="rounded float-start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>
                            </div>
                        </div>

                    <button class="accordion">
                        <div class="header1">
                            Surabaya 
                        </div>
                    </button>
                        <div class="panel">
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" class="rounded float-start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>        
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" style=”float:left;” class="rounded float start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" class="rounded float-start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>
                            </div>
                        </div>

                    <button class="accordion">
                        <div class="header1">
                            Pondok Indah 
                        </div>
                    </button>
                        <div class="panel">
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" class="rounded float-start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>        
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" style=”float:left;” class="rounded float start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" class="rounded float-start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>
                            </div>
                        </div>

                    <button class="accordion">
                        <div class="header1">
                            Pontianak
                        </div>
                    </button>
                        <div class="panel">
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" class="rounded float-start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>        
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" style=”float:left;” class="rounded float start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" class="rounded float-start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>
                            </div>
                        </div>

                    <button class="accordion">
                        <div class="header1">
                            PIK
                        </div>
                    </button>
                        <div class="panel">
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" class="rounded float-start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>        
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" style=”float:left;” class="rounded float start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    <h1></h1><br>
                                    {{-- <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <img src="assets\logo\" class="rounded float-start" alt="img">
                                <div class="text" style="margin-left: 40%;">
                                    {{-- <h1></h1><br>
                                    <p>Senin    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Selasa   &nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Rabu     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Kamis    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Jumat    &nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Sabtu    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08.00 - 15.00</p>
                                    <p>Minggu   &nbsp;&nbsp;08.00 - 15.00</p> --}}
                                </div>
                            </div>
                        </div>

                    <script>
                        var acc = document.getElementsByClassName("accordion");
                        var i;

                        for (i = 0; i < acc.length; i++) {
                        acc[i].addEventListener("click", function() {
                            this.classList.toggle("active");
                            var panel = this.nextElementSibling;
                            if (panel.style.display === "block") {
                            panel.style.display = "none";
                            } else {
                            panel.style.display = "block";
                            }
                        });
                        }
                    </script>
                </div>
            </div>
        </section>

            <div class="container">
                <div class="feature1">
                    {{-- <div class="section-header"> --}}
                        <h2>
                            <a href="https://instagram.com/bclinicslimming?igshid=YmMyMTA2M2Y=" class="btn btn-warning" role="button" data-bs-toggle="button"><span>
                            <img src="assets/images/slider/ig-image.png"  style="width: 30px;"> Follow us on Instagram
                            </a>
                            <a href="https://www.tiktok.com/@bclinic.slimming?_t=8XQCRmVXm2U&_r=1" class="btn btn-warning" role="button" data-bs-toggle="button">
                            <img src="assets/images/slider/tiktok-image.png"  style="width: 30px"> Follow us on tiktok
                            </a>
                        </h2>
                    {{-- </div> --}}
                </div>
            </div>

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
                        <h4><a href="https://api.whatsapp.com/send/?phone=6281511351234&text&type=phone_number&app_absent=0">Kemang</a></h4>
						<h4><a href="https://api.whatsapp.com/send/?phone=6281215152540&text&type=phone_number&app_absent=0">Surabaya</a></h4>
						<h4><a href="https://api.whatsapp.com/send/?phone=6285838500000&text&type=phone_number&app_absent=0">Kelapa Gading</a></h4>
						<h4><a href="https://api.whatsapp.com/send/?phone=62818834000&text&type=phone_number&app_absent=0">Bogor</a></h4>
						<h4><a href="https://api.whatsapp.com/send/?phone=6285813800000&text&type=phone_number&app_absent=0">Bekasi</a></h4>
						<h4><a href="https://api.whatsapp.com/send/?phone=6281389896485&text&type=phone_number&app_absent=0">Depok</a></h4>
						<h4><a href="https://api.whatsapp.com/send/?phone=6285655800000&text&type=phone_number&app_absent=0">South City</a></h4>
						<h4><a href="https://api.whatsapp.com/send/?phone=6285830800000&text&type=phone_number&app_absent=0">Bintaro</a></h4>
						<h4><a href="https://api.whatsapp.com/send/?phone=6285792500000&text&type=phone_number&app_absent=0">BSD</a></h4>
						<h4><a href="https://api.whatsapp.com/send/?phone=6285696011111&text&type=phone_number&app_absent=0">Gading Serpong</a></h4>
						<h4><a href="https://api.whatsapp.com/send/?phone=6285792600000&text&type=phone_number&app_absent=0">Bandung</a></h4>
						<h4><a href="https://api.whatsapp.com/send/?phone=628569998000&text&type=phone_number&app_absent=0">Puri</a></h4>
						<h4><a href="https://api.whatsapp.com/send/?phone=6285789855555&text&type=phone_number&app_absent=0">Kudus</a></h4>
						<h4><a href="https://api.whatsapp.com/send/?phone=6285840999999&text&type=phone_number&app_absent=0">Cibubur</a></h4>
						<h4><a href="https://api.whatsapp.com/send/?phone=628552207666&text&type=phone_number&app_absent=0">Karawang</a></h4>
						<h4><a href="https://api.whatsapp.com/send/?phone=628552208666&text&type=phone_number&app_absent=0">PIM</a></h4>
						<h4><a href="https://api.whatsapp.com/send/?phone=6281511360000&text&type=phone_number&app_absent=0">Pontianak</a></h4>
						<h4><a href="https://api.whatsapp.com/send/?phone=628551551899&text&type=phone_number&app_absent=0">PIK</a></h4>
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
			<script>
				const ItemHeaders = document.querySectorAll(".header1");

				ItemHeaders.forEach(ItemHeader1 => {
					ItemHeader1.addEventListenner("click", event => {
						ItemHeader1.classList.toggle("active");

						const ItemBody1 = ItemHeader1.nextElementSibling;

						if(ItemHeader1.classList.contains("active"))
						{
							ItemBody1.style.maxHeight = ItemBody1.scrollHeight + "px"
						} else {

						}
					})
				})
			</script>
                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            <script>
                                $(document).ready(function() {
                                    $('.slider').slick({
                                    autoplay: true,
                                    autoplaySpeed: 2000,
                                    dots: true,
                                    arrows: false
                                    });
                                });
                            </script>
    </body>
	
</html>
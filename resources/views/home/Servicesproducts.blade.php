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
</head>

<body>
    <header id="home" class="welcome-hero">
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
                    <div style="padding-top: 150px;" class="item @if ($a <= 1) active @endif">
                        <div class="single-slide-item slide1">
                            <div class="container">
                                <div class="row">
                                    <div class="welcome-hero-img-slider">
                                        <a href="#">
                                            <img src="{{ asset('image/carousel/' . $item->image) }}" 
                                                width="100%" height="500px">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

        <div class="top-area">
            <div class="header-area">
                <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"
                    data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

                    <div class="top-search">
                        <div class="container">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                            </div>
                        </div>
                    </div>

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


                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
                            <ul class="nav navbar-nav" data-in="fadeInDown" data-out="fadeOutUp">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="p-services-products" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Services & Products
                                        <span class="lnr lnr-chevron-down"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="p-slimming">Slimmimg & Shaping</a></li>
                                        <li><a class="dropdown-item" href="p-facebody">Face Treatment</a></li>
                                        <li><a class="dropdown-item" href="p-facial">Facial Treatment</a></li>
                                        <li><a class="dropdown-item" href="p-skincare">Skin Care Products</a></li>
                                    </ul>
                                </li>
                                <li class=""><a href="p-special-offer">Special Offer</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        News
                                        <span class="lnr lnr-chevron-down"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="p-bupdate">B UPDATE</a></li>
                                        <!--<li><a class="dropdown-item" href="p-blog">Blog</a></li>-->
                                        <li><a class="dropdown-item" href="p-video">Video</a></li>
                                        <li><a class="dropdown-item" href="p-faq">Faq</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        About us
                                        <span class="lnr lnr-chevron-down"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="p-story">Story</a></li>
                                        <li><a class="dropdown-item" href="p-location">location</a></li>
                                    </ul>
                                <li class=""><a href="p-careers">Careers</a></li>
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
                        <div class="">
                            <img src="" alt="">
                        </div><br>

                        <div class="popup_header">
                            <h1>Slimming & Body Treatment</h1><br>
                            <div class="popup_text">

                            </div>
                            <p>
                                <img src="\assets\images\blog\Uz1nYSmgqHQmXMfslimming 1.png" alt="Snow"
                                    style="width:20%">
                                <img src="\assets\images\blog\t9RMKMddcDgqWfqslimming 2.png" alt="Snow"
                                    style="width:20%">
                                <img src="\assets\images\blog\zsfZHVAuqbIIp9bslimming 3.png" alt="Snow"
                                    style="width:20%">
                                <img src="\assets\images\blog\xdexvAQoKwZRZh9slimming 4.png" alt="Snow"
                                    style="width:20%">
                            <div>
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
                            <img src="" alt="">
                        </div>
                        <div class="popup1_header">
                            <h1>Facial Treatment</h1><br>
                            <div class="popup1_text">
                            </div>
                            <p>
                                <img src="\assets\images\blog\B GLOWING.jpg" alt="Snow" style="width:20%">
                                <img src="\assets\images\blog\HIFU.jpg" alt="Snow" style="width:20%">
                                <img src="\assets\images\blog\IPL TONING.jpg" alt="Snow" style="width:20%">
                                <img src="\assets\images\blog\PDT.jpg" alt="Snow" style="width:20%">
                                <br><img src="\assets\images\blog\RF SINESON.jpg" alt="Snow" style="width:20%">
                                <img src="\assets\images\blog\SDN.jpg" alt="Snow" style="width:20%">
                            <div>
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
                            <img src="" alt="">
                        </div>
                        <div class="popup2_header">
                            <h1>Ultimate Treatment</h1><br>
                            <div class="popup2_text">

                            </div>
                            <p>
                                <img src="\assets\images\blog\xdexvAQoKwZRZh9slimming 4.png" alt="Snow"
                                    style="width:20%">
                                <img src="\assets\images\blog\JheCVQGrGclAgW8facial 4.png" alt="Snow"
                                    style="width:20%">
                                <img src="\assets\images\blog\lf8DYfLs9LushPAslimming 1.png" alt="Snow"
                                    style="width:20%">
                                <img src="\assets\images\blog\xNqnziKQdU1GDcSfacial 6.png" alt="Snow"
                                    style="width:20%">
                            <div>
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
                <div class="popup3" id="popup3">
                    <div class="popup3_content">
                        <div class="popup3_img">
                            <img src="" alt="">
                        </div>
                        <div class="popup3_header">
                            <h1>Products</h1><br>
                            <div class="popup3_text">

                            </div>
                            <p>
                                <img src="\assets\images\blog\produk1.png" alt="Snow" style="width:20%">
                                <img src="\assets\images\blog\produk2.png" alt="Snow" style="width:20%">
                                <img src="\assets\images\blog\produk3.png" alt="Snow" style="width:20%">
                                <img src="\assets\images\blog\produk4.png" alt="Snow" style="width:20%">
                            <div>
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
                <!--popup end-->
            </div>
            <!--/.header-area-->
            <div class="clearfix"></div>

        </div><!-- /.top-area-->
        <!-- top-area End -->
    </header>

    <!--Testimoni start -->
    <section id="feature" class="feature" style="margin-top: -5%;">
        <div class="container">
            <div class="col-lg-5">
                <img max-width="100%" src="assets/images/slider/sideline.png" alt="">
            </div>
            <div class="col-lg-2 text-left text-lg-center">
                <center>
                    <h2>Treatment & Products</h2>
                    <h2></h2><br>
                </center>
            </div>
            <div class="col-lg-5 right">
                <img max-width="100%" src="assets/images/slider/sideline.png" alt="">
            </div>
    </section>
    <!--Testimoni End -->
    <!--populer-products start -->
    <section id="populer-products" class="populer-products">
        <div class="container">
            <div class="populer-products-content">
                <div class="row">
                    <div class="col-md-3">
                        <div class="single-populer-products">
                            <div class="single-populer-product-img">
                                <img src="assets/images/populer-products/COVER.jpg" alt="populer-products images"
                                    style="border-radius: 5% 5% 5% 5%;">
                            </div>
                            <h2><a href="#popup">Slimming & Shaping Treatment </a></h2>
                            <div class="single-populer-products-para">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-populer-products">
                            <div class="single-populer-products">
                                <div class="single-populer-product-img">
                                    <img src="assets/images/populer-products/3 IN 1 PICO LASER.jpg"
                                        alt="populer-products images" style="border-radius: 5% 5% 5% 5%;">
                                </div>
                                <h2><a href="#popup1">Face Treatment</a></h2>
                                <div class="single-populer-products-para">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-populer-products">
                            <div class="single-populer-product-img">
                                <img src="assets/images/populer-products/COVER1.jpg" alt="populer-products images"
                                    style="border-radius: 5% 5% 5% 5%;">
                            </div>
                            <h2><a href="#popup2">Facial Treatment </a></h2>
                            <div class="single-populer-products-para">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-populer-products">
                            <div class="single-populer-products">
                                <div class="single-populer-product-img">
                                    <img src="assets/images/populer-products/PRODUCT.png"
                                        alt="populer-products images" style="border-radius: 5% 5% 5% 5%;">
                                </div>
                                <h2><a href="#popup3">Skin Care Prodicts</a></h2>
                                <div class="single-populer-products-para">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.container--><br>

        <!--footer start-->
        <hr color="gold" class="garis">
        <style>
            .garis {
                border-left: 1px gold solid;
                background-image: linear-gradient(to right, #000000, #c7b565, hsl(50.6, 100%, 56.5%), #c7b565, #000000);
                height: 3px;
                width: 100%;
                margin-top: -7%;
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

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">

    <title>B Clinic Slimming & Aesthetic</title>

    <link rel="shortcut icon" type="image/icon" href="assets/logo/logo.png" />

    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/linearicons.css">

    <link rel="stylesheet" href="assets/css/animate.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/bootsnav.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/responsive.css">
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}

.card {
    width: 250px;
    margin-top:10px;
    height:300px;
    border: 1.5px solid #ccc;
    border-radius: 8px;
    padding: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.card img {
    width: 100%;
    border-radius: 8px;
}

.card h2 {
    margin-top: 20px;
    font-size: 1.5rem;
}

.card p {
    font-size: 1rem;
    color: #666;
}

/* Responsiveness for smaller screens */
@media (max-width: 768px) {
    .container {
        flex-direction: column;
        align-items: center;
    }
    
    .card {
        width: 80%;
    }
}

</style>
</head>

<body>

    <header id="home" class="welcome-hero">
    <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
    @php
        $i = 0;
    @endphp
    <ol class="carousel-indicators">
        @foreach ($facial as $item)
            @php
                $i++;
            @endphp
            <li data-target="#header-carousel" data-slide-to="{{ $i - 1 }}"
                class="@if ($i == 1) active @endif"><span class="small-circle"></span>
            </li>
        @endforeach
    </ol>

    @php
        $a = 0;
    @endphp
    <div class="carousel-inner" role="listbox">
        @foreach ($facial as $item)
            @php
                $a++;
            @endphp
            <div style="padding-top: 150px;" class="carousel-item @if ($a == 1) active @endif">
                <div class="single-slide-item slide1">
                    <div class="container">
                        <div class="row">
                            <div class="welcome-hero-img-slider">
                                <a href="#">
                                    <img src="{{ asset('image/facial/' . $item->image) }}" width="100%"
                                        height="500px" alt="Facial Image" />
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
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#navbar-menu">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a href="{{ route('ABOUT') }}">
                                <div class="navbar-brand">
                                    <img src="assets/logo/B CLINIC NEW.png" alt="logo" width="300px" height="170px">
                                </div>
                            </a>
                        </div>
                        <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
                            <ul class="nav navbar-nav" data-in="fadeInDown" data-out="fadeOutUp">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="{{ route('p-services-products') }}" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
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
                                        <!--<li><a class="dropdown-item" href="p-blog">Blog</a></li>-->
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
                            </ul>
                        </div>
                    </div>
                </nav>


                <!--popup-->
                <div class="popup" id="popup">
                    <div class="popup_content">
                        <div class="popup_img">
                        <br><br><img src="\assets\images\blog\Bglowing.jpg" alt="meja">
                        </div><br><br><br><br>
                        <div class="popup_header">
                            <h1>2 in 1 Pico Laser Lip Pink</h1>
                            <div class="popup_text">
                                <h3>Merupakan kombinasi treatment <b>Micro Bubble</b> dan <b>Korean Peel</b></h3>
                                <h3>yang mampu mengatasi kulit kusam, menurangi kadar minyak,</h3>
                                <h3>membersihkan komedo dan menutrisi kulit.</h3>
                                <h3>Sehingga kulit wajah menjadi lebih bersih, sehat dan glowing.</h3>
                            </div><p>
                            <h3>Before After</h3>
                            <div class="card2">
                                <!-- <div class="container1"> -->
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
                                    margin-top: 60%;
                                    width: 40%;
                                    margin: auto;
                                    display: flex;
                                    justify-content: center;
                                    align-items: center;
                                }
                            </style>
                            <div><p><p>
                                <h3>Video Treatment</h3>
                                <iframe style="width:100%; height:auto;"
                                    src="https://www.youtube.com/embed/rdr4o1Ie4kM">
                                </iframe>
                            </div>
                            <a href="https://shopee.co.id/bclinic.official?smtt=0.331281872-1672375852.9"
                                class="btn popup_btn"><strong>BUY NOW</strong></a>
                            <button
                                style="position: absolute;
                                            top: 10px;
                                            right: 10px;
                                            color: 	#696969;"
                                onclick="goBack()">X
                            </button>
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
                            <br><img src="\assets\images\blog\Bglowing.jpg" alt="meja">
                        </div><br><br><br><br>
                        <div class="popup1_header">
                            <h1>Acne Injection</h1>
                            <div class="popup1_text">
                                <h3>Prosedur laser pada wajah yang bermanfaat untuk menstimulasi</h3>
                                <h3>Pembentukan kolagen, dan meratakan warna kulit, sehingga</h3>
                                <h3>kulit tampak lebih muda, sehat, berih, cerah dan halus</h3>
                            </div><p>
                            <h3>Before After</h3>
                            <div class="card2">
                                <!-- <div class="container1"> -->
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
                            <div><p><p>
                                <h3>Video Treatment</h3>
                                <iframe style="width:100%; height:auto;"
                                    src="https://www.youtube.com/embed/rdr4o1Ie4kM">
                                </iframe>
                            </div>
                            <a href="https://shopee.co.id/bclinic.official?smtt=0.331281872-1672375852.9"
                                class="btn popup_btn"><strong>BUY NOW</strong></a>
                            <button
                                style="position: absolute;
													top: 10px;
													right: 10px;
													color: 	#696969;"
                                onclick="goBack()">X
                            </button>
                        </div>
                    </div>
                </div>
                <div class="popup2" id="popup2">
                    <div class="popup2_content">
                        <div class="popup2_img">
                            <br><img src="\assets\images\blog\Bglowing.jpg" alt="meja">
                        </div><br><br><br><br>
                        <div class="popup2_header">
                            <h1>B Eye Treatment</h1>
                            <div class="popup2_text">
                                <h3>Menggunakan art injector, PDRN DNA Salmon dapat memberikan</h3>
                                <h3>manfaaat untuk meratakan warna kulit., memperbaiki tekstur kulit</h3>
                                <h3>& bekasd luka , meningkatkan elastisitas, mengurangi kerutan</h3>
                                <h3>secara alami dan meregenerasi sel kulit serta kolagen baru</h3>
                            </div><p>
                                <h3> Before After</h3>
                            <div class="card2">
                                <!-- <div class="container1"> -->
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
                                    <iframe style="width:100%; height:auto;"
                                        src="https://www.youtube.com/embed/rdr4o1Ie4kM">
                                    </iframe>
                                </div>
                                <a href="https://shopee.co.id/bclinic.official?smtt=0.331281872-1672375852.9"
                                    class="btn popup_btn"><strong>BUY NOW</strong></a>
                                <button
                                    style="position: absolute;
													top: 10px;
													right: 10px;
													color: 	#696969;"
                                    onclick="goBack()">X
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popup3" id="popup3">
                    <div class="popup3_content">
                        <div class="popup3_img">
                            <br><img src="\assets\images\blog\Bglowing.jpg" alt="meja">
                        </div><br><br><br><br>
                        <div class="popup3_header">
                            <h1>B Glowing</h1>
                            <div class="popup3_text">
                                <h3>(facial + oxy + acne serum + PDT)</h3>
                                <h3>mengatasi masalah acnnen dengan mematikan bakteri</h3>
                                <h3>jerawat dan mengontrol sebum pada kulit wajah</h3>
                            </div>
                            <p>
                                <h3>Before After</h3>
                            <div class="card2">
                                <!-- <div class="container1"> -->
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
                                <iframe style="width:100%; height:auto;"
                                    src="https://www.youtube.com/embed/rdr4o1Ie4kM">
                                </iframe>
                            </div>
                            <a href="https://shopee.co.id/bclinic.official?smtt=0.331281872-1672375852.9"
                                class="btn popup_btn"><strong>BUY NOW</strong></a>
                            <button
                                style="position: absolute;
													top: 10px;
													right: 10px;
													color: 	#696969;"
                                onclick="goBack()">X
                            </button>
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
                            <br><img src="\assets\images\blog\Bglowing.jpg" alt="meja">
                        </div><br><br><br><br>
                        <div class="popup4_header">
                            <h1>B Glowing Advance</h1>
                            <div class="popup4_text">
                                <h3>(Facial + oxy + brightening serum + PDT)</h3>
                                <h3>dengan serum brightening dan oxygem spray</h3>
                                <h3>menutrisi dan mencerahkan warna kulit</h3>
                            </div>
                            <p>
                            <h3>Before Aftert</h3>
                            <div class="card2">
                                <!-- <div class="container1"> -->
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
                                    <iframe style="width:100%; height:auto;"
                                        src="https://www.youtube.com/embed/rdr4o1Ie4kM">
                                    </iframe>
                                </div>
                                <a href="https://shopee.co.id/bclinic.official?smtt=0.331281872-1672375852.9"
                                    class="btn popup_btn"><strong>BUY NOW</strong></a>
                                <button
                                    style="position: absolute;
                                                        top: 10px;
                                                        right: 10px;
                                                        color: 	#696969;"
                                    onclick="goBack()">X
                                </button>
                                <script>
                                    function goBack() {
                                        window.history.back();
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popup5" id="popup5">
                    <div class="popup5_content">
                        <div class="popup5_img">
                            <br><img src="\assets\images\blog\Bglowing.jpg" alt="meja">
                        </div><br><br><br><br>
                        <div class="popup5_header">
                            <h1>B Snow Peeling</h1>
                            <div class="popup5_text">
                                <h3>mengangkat sel kulit mati, komedo, meratakan</h3>
                                <h3>warna kulit dan mengatasi kulit kusam</h3>
                                </h3>
                            </div>
                            <p>
                            <h3>Before After</h3>
                            <div class="card2">
                                <!-- <div class="container1"> -->
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
                                    <iframe style="width:100%; height:auto;"
                                        src="https://www.youtube.com/embed/rdr4o1Ie4kM">
                                    </iframe>
                                </div>
                                <a href="https://shopee.co.id/bclinic.official?smtt=0.331281872-1672375852.9"
                                    class="btn popup_btn"><strong>BUY NOW</strong></a>
                                <button
                                    style="position: absolute;
                                                        top: 10px;
                                                        right: 10px;
                                                        color: 	#696969;"
                                    onclick="goBack()">X
                                </button>
                                <script>
                                    function goBack() {
                                        window.history.back();
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popup6" id="popup6">
                    <div class="popup6_content">
                        <div class="popup6_img">
                            <br><img src="\assets\images\blog\Bglowing.jpg" alt="meja">
                        </div><br><br><br><br>
                        <div class="popup6_header">
                            <h1>Biisspen</h1>
                            <div class="popup6_text">
                                <h3>Membersihkan pori pori, mengurangi penumpukan sel</h3>
                                <h3>kulit mati, menjaga kelembapan kulit dan membantu </h3>
                                <h3>mencerahkan wajah</h3>
                            </div>
                            <p>
                            <h3>Before After</h3>
                            <div class="card2">
                                <!-- <div class="container1"> -->
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
                                    <iframe style="width:100%; height:auto;"
                                        src="https://www.youtube.com/embed/rdr4o1Ie4kM">
                                    </iframe>
                                </div>
                                <a href="https://shopee.co.id/bclinic.official?smtt=0.331281872-1672375852.9"
                                    class="btn popup_btn"><strong>BUY NOW</strong></a>
                                <button
                                    style="position: absolute;
                                                        top: 10px;
                                                        right: 10px;
                                                        color: 	#696969;"
                                    onclick="goBack()">X
                                </button>
                                <script>
                                    function goBack() {
                                        window.history.back();
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popup7" id="popup7">
                    <div class="popup7_content">
                        <div class="popup7_img">
                            <br><img src="\assets\images\blog\Bglowing.jpg" alt="meja">
                        </div><br><br><br><br>
                        <div class="popup7_header">
                            <h1>Dermapen</h1>
                            <div class="popup7_text">
                                <h3>(Facial + meso no needle)</h3>
                                <h3>mencegah proses penuaan dan mengatasi kerutan</h3>
                                </h3>
                            </div>
                            <p>
                            <h3>Before After</h3>
                            <div class="card2">
                                <!-- <div class="container1"> -->
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
                                    <iframe style="width:100%; height:auto;"
                                        src="https://www.youtube.com/embed/rdr4o1Ie4kM">
                                    </iframe>
                                </div>
                                <a href="https://shopee.co.id/bclinic.official?smtt=0.331281872-1672375852.9"
                                    class="btn popup_btn"><strong>BUY NOW</strong></a>
                                <button
                                    style="position: absolute;
                                                        top: 10px;
                                                        right: 10px;
                                                        color: 	#696969;"
                                    onclick="goBack()">X
                                </button>
                                <script>
                                    function goBack() {
                                        window.history.back();
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popup8" id="popup8">
                    <div class="popup8_content">
                        <div class="popup8_img">
                            <br><img src="\assets\images\blog\Bglowing.jpg" alt="meja">
                        </div><br><br><br><br>
                        <div class="popup8_header">
                            <h1>Dermastamp</h1>
                            <div class="popup8_text">
                                <h3>Perawatan injeksi untuk menghentikan radang pada jerawat</h3>
                                <h3>dan mengurangi pembengkakan pada kulit</h3>
                                </h3>
                            </div>
                            <p>
                            <h3>Before After</h3>
                            <div class="card2">
                                <!-- <div class="container1"> -->
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
                                    <iframe style="width:100%; height:auto;"
                                        src="https://www.youtube.com/embed/rdr4o1Ie4kM">
                                    </iframe>
                                </div>
                                <a href="https://shopee.co.id/bclinic.official?smtt=0.331281872-1672375852.9"
                                    class="btn popup_btn"><strong>BUY NOW</strong></a>
                                <button
                                    style="position: absolute;
                                                        top: 10px;
                                                        right: 10px;
                                                        color: 	#696969;"
                                    onclick="goBack()">X
                                </button>
                                <script>
                                    function goBack() {
                                        window.history.back();
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popup9" id="popup9">
                    <div class="popup9_content">
                        <div class="popup9_img">
                            <br><img src="\assets\images\blog\Bglowing.jpg" alt="meja">
                        </div><br><br><br><br>
                        <div class="popup9_header">
                            <h1>Facial Acne</h1>
                            <div class="popup9_text">
                                <h3>AHA bermanfaat untuk mencerahkan dan</h3>
                                <h3>BHA bermanfaat untuk mengontrol kadar minyak dan mencegah jerawat serta komedo</h3>
                                </h3>
                            </div>
                            <p>
                            <h3>Before After</h3>
                            <div class="card2">
                                <!-- <div class="container1"> -->
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
                                    <iframe style="width:100%; height:auto;"
                                        src="https://www.youtube.com/embed/rdr4o1Ie4kM">
                                    </iframe>
                                </div>
                                <a href="https://shopee.co.id/bclinic.official?smtt=0.331281872-1672375852.9"
                                    class="btn popup_btn"><strong>BUY NOW</strong></a>
                                <button
                                    style="position: absolute;
                                                        top: 10px;
                                                        right: 10px;
                                                        color: 	#696969;"
                                    onclick="goBack()">X
                                </button>
                                <script>
                                    function goBack() {
                                        window.history.back();
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popup10" id="popup10">
                    <div class="popup10_content">
                        <div class="popup10_img">
                            <br><img src="\assets\images\blog\Bglowing.jpg" alt="meja">
                        </div><br><br><br><br>
                        <div class="popup10_header">
                            <h1>Facial Acne Theraphy</h1>
                            <div class="popup10_text">
                                <h3>(Facial + geneo)</h3>
                                <h3>Mencerahkan kulit, menutrisi kulit dan meratakan warna kulit</h3>
                                </h3>
                            </div>
                            <p>
                            <h3>Before After</h3>
                            <div class="card2">
                                <!-- <div class="container1"> -->
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
                                    <iframe style="width:100%; height:auto;"
                                        src="https://www.youtube.com/embed/rdr4o1Ie4kM">
                                    </iframe>
                                </div>
                                <a href="https://shopee.co.id/bclinic.official?smtt=0.331281872-1672375852.9"
                                    class="btn popup_btn"><strong>BUY NOW</strong></a>
                                <button
                                    style="position: absolute;
                                                        top: 10px;
                                                        right: 10px;
                                                        color: 	#696969;"
                                    onclick="goBack()">X
                                </button>
                                <script>
                                    function goBack() {
                                        window.history.back();
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popup11" id="popup11">
                    <div class="popup11_content">
                        <div class="popup11_img">
                            <br><img src="\assets\images\blog\Bglowing.jpg" alt="meja">
                        </div><br><br><br><br>
                        <div class="popup11_header">
                            <h1>Facial Anti Aging</h1>
                            <div class="popup11_text">
                                <h3>Paket 3X Treatment</h3>
                                <h3>(Facial + oxy + acne serum + PDT)</h3>
                                <h3>mematikan bakteri jerawat, mengurangi peradangan dan mengontrol kadar minyak</h3>
                                </h3>
                            </div>
                            <p>
                            <h3>Before After</h3>
                            <div class="card2">
                                <!-- <div class="container1"> -->
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
                                    <iframe style="width:100%; height:auto;"
                                        src="https://www.youtube.com/embed/rdr4o1Ie4kM">
                                    </iframe>
                                </div>
                                <a href="https://shopee.co.id/bclinic.official?smtt=0.331281872-1672375852.9"
                                    class="btn popup_btn"><strong>BUY NOW</strong></a>
                                <button
                                    style="position: absolute;
                                                        top: 10px;
                                                        right: 10px;
                                                        color: 	#696969;"
                                    onclick="goBack()">X
                                </button>
                                <script>
                                    function goBack() {
                                        window.history.back();
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popup12" id="popup12">
                    <div class="popup12_content">
                        <div class="popup12_img">
                            <br><img src="\assets\images\blog\Bglowing.jpg" alt="meja">
                        </div><br><br><br><br>
                        <div class="popup12_header">
                            <h1>Facial Brightening</h1>
                            <div class="popup12_text">
                                <h3>Paket 3X Treatment</h3>
                                <h3>(OUR BEST FACIAL TREATMENT)</h3>
                                <h3>mampu membuat wajah cerah hanya dalam satu kali treatment saja</h3>
                                </h3>
                            </div>
                            <p>
                            <h3>Before After</h3>
                            <div class="card2">
                                <!-- <div class="container1"> -->
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
                                    <iframe style="width:100%; height:auto;"
                                        src="https://www.youtube.com/embed/rdr4o1Ie4kM">
                                    </iframe>
                                </div>
                                <a href="https://shopee.co.id/bclinic.official?smtt=0.331281872-1672375852.9"
                                    class="btn popup_btn"><strong>BUY NOW</strong></a>
                                <button
                                    style="position: absolute;
                                                        top: 10px;
                                                        right: 10px;
                                                        color: 	#696969;"
                                    onclick="goBack()">X
                                </button>
                                <script>
                                    function goBack() {
                                        window.history.back();
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popup13" id="popup13">
                    <div class="popup13_content">
                        <div class="popup13_img">
                            <br><img src="\assets\images\blog\Bglowing.jpg" alt="meja">
                        </div><br><br><br><br>
                        <div class="popup13_header">
                            <h1>Facial Korean Peel AHA/BHA</h1>
                            <div class="popup13_text">
                                <h3>Paket 3X Treatment</h3>
                                <h3>(Facial + Micro bubble + Korean Pee; AHA.BHA = RF wajah)</h3>
                                <h3>memberikan hasil lifting, shaing, glowing, soft peel, brightening dalam 1 rangkaian treatment</h3>
                                </h3>
                            </div>
                            <p>
                            <h3>Before After</h3>
                            <div class="card2">
                                <!-- <div class="container1"> -->
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
                                    <iframe style="width:100%; height:auto;"
                                        src="https://www.youtube.com/embed/rdr4o1Ie4kM">
                                    </iframe>
                                </div>
                                <a href="https://shopee.co.id/bclinic.official?smtt=0.331281872-1672375852.9"
                                    class="btn popup_btn"><strong>BUY NOW</strong></a>
                                <button
                                    style="position: absolute;
                                                        top: 10px;
                                                        right: 10px;
                                                        color: 	#696969;"
                                    onclick="goBack()">X
                                </button>
                                <script>
                                    function goBack() {
                                        window.history.back();
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popup14" id="popup14">
                    <div class="popup14_content">
                        <div class="popup14_img">
                            <br><img src="\assets\images\blog\Bglowing.jpg" alt="meja">
                        </div><br><br><br><br>
                        <div class="popup14_header">
                            <h1>Facial Micro Bubble</h1>
                            <div class="popup14_text">
                                <h3>Paket 3X Treatment</h3>
                                <h3>Membantu mengurangi flek hitam, kerusakan kulit akibat paparan sinar matahari, kerutan halus dan mengurangi peradangan pada wajah</h3>
                            </div>
                            <p>
                            <h3>Before After</h3>
                            <div class="card2">
                                <!-- <div class="container1"> -->
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
                                    <iframe style="width:100%; height:auto;"
                                        src="https://www.youtube.com/embed/rdr4o1Ie4kM">
                                    </iframe>
                                </div>
                                <a href="https://shopee.co.id/bclinic.official?smtt=0.331281872-1672375852.9"
                                    class="btn popup_btn"><strong>BUY NOW</strong></a>
                                <button
                                    style="position: absolute;
                                                        top: 10px;
                                                        right: 10px;
                                                        color: 	#696969;"
                                    onclick="goBack()">X
                                </button>
                                <script>
                                    function goBack() {
                                        window.history.back();
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popup15" id="popup15">
                    <div class="popup15_content">
                        <div class="popup15_img">
                            <br><img src="\assets\images\blog\Bglowing.jpg" alt="meja">
                        </div><br><br><br><br>
                        <div class="popup15_header">
                            <h1>Facial Microdermabrasi</h1>
                            <div class="popup15_text">
                                <h3>Paket 3X Treatment</h3>
                                <h3>Membantu mengurangi flek hitam, kerusakan kulit akibat paparan sinar matahari, kerutan halus dan mengurangi peradangan pada wajah</h3>
                            </div>
                            <p>
                            <h3>Before After</h3>
                            <div class="card2">
                                <!-- <div class="container1"> -->
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
                                    <iframe style="width:100%; height:auto;"
                                        src="https://www.youtube.com/embed/rdr4o1Ie4kM">
                                    </iframe>
                                </div>
                                <a href="https://shopee.co.id/bclinic.official?smtt=0.331281872-1672375852.9"
                                    class="btn popup_btn"><strong>BUY NOW</strong></a>
                                <button
                                    style="position: absolute;
                                                        top: 10px;
                                                        right: 10px;
                                                        color: 	#696969;"
                                    onclick="goBack()">X
                                </button>
                                <script>
                                    function goBack() {
                                        window.history.back();
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popup16" id="popup16">
                    <div class="popup16_content">
                        <div class="popup16_img">
                            <br><img src="\assets\images\blog\Bglowing.jpg" alt="meja">
                        </div><br><br><br><br>
                        <div class="popup16_header">
                            <h1>Facial Oxy</h1>
                            <div class="popup16_text">
                                <h3>Paket 3X Treatment</h3>
                                <h3>Membantu mengurangi flek hitam, kerusakan kulit akibat paparan sinar matahari, kerutan halus dan mengurangi peradangan pada wajah</h3>
                            </div>
                            <p>
                            <h3>Before After</h3>
                            <div class="card2">
                                <!-- <div class="container1"> -->
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
                                    <iframe style="width:100%; height:auto;"
                                        src="https://www.youtube.com/embed/rdr4o1Ie4kM">
                                    </iframe>
                                </div>
                                <a href="https://shopee.co.id/bclinic.official?smtt=0.331281872-1672375852.9"
                                    class="btn popup_btn"><strong>BUY NOW</strong></a>
                                <button
                                    style="position: absolute;
                                                        top: 10px;
                                                        right: 10px;
                                                        color: 	#696969;"
                                    onclick="goBack()">X
                                </button>
                                <script>
                                    function goBack() {
                                        window.history.back();
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popup17" id="popup17">
                    <div class="popup17_content">
                        <div class="popup17_img">
                            <br><img src="\assets\images\blog\Bglowing.jpg" alt="meja">
                        </div><br><br><br><br>
                        <div class="popup17_header">
                            <h1>HIFU Double Chin</h1>
                            <div class="popup17_text">
                                <h3>Paket 3X Treatment</h3>
                                <h3>Membantu mengurangi flek hitam, kerusakan kulit akibat paparan sinar matahari, kerutan halus dan mengurangi peradangan pada wajah</h3>
                            </div>
                            <p>
                            <h3>Before After</h3>
                            <div class="card2">
                                <!-- <div class="container1"> -->
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
                                    <iframe style="width:100%; height:auto;"
                                        src="https://www.youtube.com/embed/rdr4o1Ie4kM">
                                    </iframe>
                                </div>
                                <a href="https://shopee.co.id/bclinic.official?smtt=0.331281872-1672375852.9"
                                    class="btn popup_btn"><strong>BUY NOW</strong></a>
                                <button
                                    style="position: absolute;
                                                        top: 10px;
                                                        right: 10px;
                                                        color: 	#696969;"
                                    onclick="goBack()">X
                                </button>
                                <script>
                                    function goBack() {
                                        window.history.back();
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popup18" id="popup18">
                    <div class="popup18_content">
                        <div class="popup18_img">
                            <br><img src="\assets\images\blog\Bglowing.jpg" alt="meja">
                        </div><br><br><br><br>
                        <div class="popup18_header">
                            <h1>HIFU Face</h1>
                            <div class="popup18_text">
                                <h3>Paket 3X Treatment</h3>
                                <h3>Membantu mengurangi flek hitam, kerusakan kulit akibat paparan sinar matahari, kerutan halus dan mengurangi peradangan pada wajah</h3>
                            </div>
                            <p>
                            <h3>Before After</h3>
                            <div class="card2">
                                <!-- <div class="container1"> -->
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
                                    <iframe style="width:100%; height:auto;"
                                        src="https://www.youtube.com/embed/rdr4o1Ie4kM">
                                    </iframe>
                                </div>
                                <a href="https://shopee.co.id/bclinic.official?smtt=0.331281872-1672375852.9"
                                    class="btn popup_btn"><strong>BUY NOW</strong></a>
                                <button
                                    style="position: absolute;
                                                        top: 10px;
                                                        right: 10px;
                                                        color: 	#696969;"
                                    onclick="goBack()">X
                                </button>
                                <script>
                                    function goBack() {
                                        window.history.back();
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popup19" id="popup19">
                    <div class="popup19_content">
                        <div class="popup19_img">
                            <br><img src="\assets\images\blog\Bglowing.jpg" alt="meja">
                        </div><br><br><br><br>
                        <div class="popup19_header">
                            <h1>Instant Brightening</h1>
                            <div class="popup19_text">
                                <h3>Paket 3X Treatment</h3>
                                <h3>Membantu mengurangi flek hitam, kerusakan kulit akibat paparan sinar matahari, kerutan halus dan mengurangi peradangan pada wajah</h3>
                            </div>
                            <p>
                            <h3>Before After</h3>
                            <div class="card2">
                                <!-- <div class="container1"> -->
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
                                    <iframe style="width:100%; height:auto;"
                                        src="https://www.youtube.com/embed/rdr4o1Ie4kM">
                                    </iframe>
                                </div>
                                <a href="https://shopee.co.id/bclinic.official?smtt=0.331281872-1672375852.9"
                                    class="btn popup_btn"><strong>BUY NOW</strong></a>
                                <button
                                    style="position: absolute;
                                                        top: 10px;
                                                        right: 10px;
                                                        color: 	#696969;"
                                    onclick="goBack()">X
                                </button>
                                <script>
                                    function goBack() {
                                        window.history.back();
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popup20" id="popup20">
                    <div class="popup20_content">
                        <div class="popup20_img">
                            <br><img src="\assets\images\blog\Bglowing.jpg" alt="meja">
                        </div><br><br><br><br>
                        <div class="popup20_header">
                            <h1>IPL Toning</h1>
                            <div class="popup20_text">
                                <h3>Paket 3X Treatment</h3>
                                <h3>Membantu mengurangi flek hitam, kerusakan kulit akibat paparan sinar matahari, kerutan halus dan mengurangi peradangan pada wajah</h3>
                            </div>
                            <p>
                            <h3>Before After</h3>
                            <div class="card2">
                                <!-- <div class="container1"> -->
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
                                    <iframe style="width:100%; height:auto;"
                                        src="https://www.youtube.com/embed/rdr4o1Ie4kM">
                                    </iframe>
                                </div>
                                <a href="https://shopee.co.id/bclinic.official?smtt=0.331281872-1672375852.9"
                                    class="btn popup_btn"><strong>BUY NOW</strong></a>
                                <button
                                    style="position: absolute;
                                                        top: 10px;
                                                        right: 10px;
                                                        color: 	#696969;"
                                    onclick="goBack()">X
                                </button>
                                <script>
                                    function goBack() {
                                        window.history.back();
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popup21" id="popup21">
                    <div class="popup21_content">
                        <div class="popup21_img">
                            <br><img src="\assets\images\blog\Bglowing.jpg" alt="meja">
                        </div><br><br><br><br>
                        <div class="popup21_header">
                            <h1>Laser Rejuvenation</h1>
                            <div class="popup21_text">
                                <h3>Paket 3X Treatment</h3>
                                <h3>Membantu mengurangi flek hitam, kerusakan kulit akibat paparan sinar matahari, kerutan halus dan mengurangi peradangan pada wajah</h3>
                            </div>
                            <p>
                            <h3>Before After</h3>
                            <div class="card2">
                                <!-- <div class="container1"> -->
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
                                    <iframe style="width:100%; height:auto;"
                                        src="https://www.youtube.com/embed/rdr4o1Ie4kM">
                                    </iframe>
                                </div>
                                <a href="https://shopee.co.id/bclinic.official?smtt=0.331281872-1672375852.9"
                                    class="btn popup_btn"><strong>BUY NOW</strong></a>
                                <button
                                    style="position: absolute;
                                                        top: 10px;
                                                        right: 10px;
                                                        color: 	#696969;"
                                    onclick="goBack()">X
                                </button>
                                <script>
                                    function goBack() {
                                        window.history.back();
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popup22" id="popup22">
                    <div class="popup22_content">
                        <div class="popup22_img">
                            <br><img src="\assets\images\blog\Bglowing.jpg" alt="meja">
                        </div><br><br><br><br>
                        <div class="popup22_header">
                            <h1>PRP + Injector</h1>
                            <div class="popup22_text">
                                <h3>Paket 3X Treatment</h3>
                                <h3>Membantu mengurangi flek hitam, kerusakan kulit akibat paparan sinar matahari, kerutan halus dan mengurangi peradangan pada wajah</h3>
                            </div>
                            <p>
                            <h3>Before After</h3>
                            <div class="card2">
                                <!-- <div class="container1"> -->
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
                                    <iframe style="width:100%; height:auto;"
                                        src="https://www.youtube.com/embed/rdr4o1Ie4kM">
                                    </iframe>
                                </div>
                                <a href="https://shopee.co.id/bclinic.official?smtt=0.331281872-1672375852.9"
                                    class="btn popup_btn"><strong>BUY NOW</strong></a>
                                <button
                                    style="position: absolute;
                                                        top: 10px;
                                                        right: 10px;
                                                        color: 	#696969;"
                                    onclick="goBack()">X
                                </button>
                                <script>
                                    function goBack() {
                                        window.history.back();
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popup23" id="popup23">
                    <div class="popup23_content">
                        <div class="popup23_img">
                            <br><img src="\assets\images\blog\Bglowing.jpg" alt="meja">
                        </div><br><br><br><br>
                        <div class="popup23_header">
                            <h1>RF Lifting</h1>
                            <div class="popup23_text">
                                <h3>Paket 3X Treatment</h3>
                                <h3>Membantu mengurangi flek hitam, kerusakan kulit akibat paparan sinar matahari, kerutan halus dan mengurangi peradangan pada wajah</h3>
                            </div>
                            <p>
                            <h3>Before After</h3>
                            <div class="card2">
                                <!-- <div class="container1"> -->
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
                                    <iframe style="width:100%; height:auto;"
                                        src="https://www.youtube.com/embed/rdr4o1Ie4kM">
                                    </iframe>
                                </div>
                                <a href="https://shopee.co.id/bclinic.official?smtt=0.331281872-1672375852.9"
                                    class="btn popup_btn"><strong>BUY NOW</strong></a>
                                <button
                                    style="position: absolute;
                                                        top: 10px;
                                                        right: 10px;
                                                        color: 	#696969;"
                                    onclick="goBack()">X
                                </button>
                                <script>
                                    function goBack() {
                                        window.history.back();
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popup24" id="popup24">
                    <div class="popup24_content">
                        <div class="popup24_img">
                            <br><img src="\assets\images\blog\Bglowing.jpg" alt="meja">
                        </div><br><br><br><br>
                        <div class="popup24_header">
                            <h1>Super Deep Advance</h1>
                            <div class="popup24_text">
                                <h3>Paket 3X Treatment</h3>
                                <h3>Membantu mengurangi flek hitam, kerusakan kulit akibat paparan sinar matahari, kerutan halus dan mengurangi peradangan pada wajah</h3>
                            </div>
                            <p>
                            <h3>Before After</h3>
                            <div class="card2">
                                <!-- <div class="container1"> -->
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
                                    <iframe style="width:100%; height:auto;"
                                        src="https://www.youtube.com/embed/rdr4o1Ie4kM">
                                    </iframe>
                                </div>
                                <a href="https://shopee.co.id/bclinic.official?smtt=0.331281872-1672375852.9"
                                    class="btn popup_btn"><strong>BUY NOW</strong></a>
                                <button
                                    style="position: absolute;
                                                        top: 10px;
                                                        right: 10px;
                                                        color: 	#696969;"
                                    onclick="goBack()">X
                                </button>
                                <script>
                                    function goBack() {
                                        window.history.back();
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end popup -->
            </div>
            <div class="clearfix"></div>

        </div>
    </header>
    <br>

    <section id="feature" class="feature" style="margin-top: -1%;">
        <div class="container">
            <div class="section-header">
                <div class="col-lg-5">
                    <img width="100%" src="assets/images/slider/sideline.png" alt="">
                </div>
                <div class="col-lg-2 text-left text-lg-center">
                    <center>
                        <p style="color:black; font-size:20px;">Facial Treatment</p>
                    </center>
                </div>
                <div class="col-lg-5 right">
                    <img max-width="100%" src="assets/images/slider/sideline.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <div class="container" style="margin-top: -3%;">
        <div class="row">
            <div class="col col-lg-3 col-sm-6">
                <div class="card">
                <img src="assets/images/populer-products/20. B GLOWING.jpg">
                <center>
                <h2><a href="#popup3"><strong>B Glowing</strong></a></h2>
                </center>
                </div>
            </div>
            <div class="col col-lg-3 col-sm-6">
                <div class="card">
                <img src="assets/images/populer-products/16. SUPER DEEP ADVANCE.jpg">
                <center>
                <h2><a href="#popup24"><strong>Super Deep Advance</strong></a></h2>
                </center>
                </div>
            </div>
            <div class="col col-lg-3 col-sm-6">
                <div class="card">
                <img src="assets/images/populer-products/17. 2IN1 PICO LASER LIP PINK.jpg">
                <center>
                <h2><a href="#popup"><strong>2 in 1 Pico Laser Lip pink</strong></a></h2>
                </center>
                </div>
            </div>
            <div class="col col-lg-3 col-sm-6">
                <div class="card">
                <img src="assets/images/populer-products/18. B 3IN1 EYE TREATMENT.jpg">
                <center>
                <h2><a href="#popup2"><strong>B Eye Treatment</strong></a></h2>
                </center>
                </div>
            </div>
            <div class="col col-lg-3 col-sm-6">
                <div class="card">
                <img src="assets/images/populer-products/21. B GLOWING ADVANCE.jpg">
                <center>
                <h2><a href="#popup4"><strong>B Glowing Advance</strong></a></h2>
                </center>
                </div>
            </div>
            <div class="col col-lg-3 col-sm-6">
                <div class="card">
                <img src="assets/images/populer-products/11. HIFU DOUBLE CHIN.jpg">
                <center>
                <h2><a href="#popup17"><strong>HIFU Double Chin</strong></a></h2>
                </center>
                </div>
            </div>
            <div class="col col-lg-3 col-sm-6">
                <div class="card">
                <img src="assets/images/populer-products/10. Hifu Face.jpg">
                <center>
                <h2><a href="#popup18"><strong>HIFU Face</strong></a></h2>
                </center>
                </div>
            </div>
            <div class="col col-lg-3 col-sm-6">
                <!-- <div class="card">
                <img src="assets/images/populer-products/PRODUCT.png">
                <center>
                <h2><a href="{{ route('p-skincare') }}"><strong>Skin Care Prodicts</strong></a></h2>
                </center>
                </div> -->
            </div>
        </div>
    </div>

    <section id="feature" class="feature" style="margin-top: 1%;">
        <div class="container">
            <div class="section-header">
                <div class="col-lg-5">
                    <img width="100%" src="assets/images/slider/sideline.png" alt="">
                </div>
                <div class="col-lg-2 text-left text-lg-center">
                    <center>
                        <p style="color:black; font-size:20px;">Other Treatment</p>
                    </center>
                </div>
                <div class="col-lg-5 right">
                    <img max-width="100%" src="assets/images/slider/sideline.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="populer-products" class="populer-products" style="margin-top: -2%;">
        <div class="container">
            <div class="menu-container">
                <div class="row">
                <!-- <div class="col-md-3"> -->
                        <ul class="menu">
                            <li>
                                <div class="card0">
                                    <div class="single-populer-product-img">
                                        <img src="assets/images/populer-products/19. ACNE INJECTOR.jpg"
                                        style="width: 100%; border-radius: 5% 5% 5% 5%;" alt="populer-products images">
                                    </div>
                                    <a href="#popup1">Acne Injection</a>
                                </div>
                            </li>
                            <li>
                                <div class="card0">
                                                <div class="single-populer-product-img">
                                        <img src="assets/images/populer-products/25. B SNOW PEEL.jpg"
                                        style="width: 100%; border-radius: 5% 5% 5% 5%;" alt="populer-products images">
                                    </div>
                                    <a href="#popup5">B Snow Peeling</a>
                                </div>
                            </li>
                            <li>
                                <div class="card0">
                                                <div class="single-populer-product-img">
                                        <img src="assets/images/populer-products/22. BILLSSPEN.jpg"
                                        style="width: 100%; border-radius: 5% 5% 5% 5%;" alt="populer-products images">
                                    </div>
                                    <a href="#popup6">Blisspen</a>
                                </div>
                            </li>
                            <li>
                                <div class="card0">
                                                <div class="single-populer-product-img">
                                        <img src="assets/images/populer-products/24. Dermapen.jpg"
                                        style="width: 100%; border-radius: 5% 5% 5% 5%;" alt="populer-products images">
                                    </div>
                                    <a href="#popup7">Dermapen</a>
                                </div>
                            </li>
                            <li>
                                <div class="card0">
                                                <div class="single-populer-product-img">
                                        <img src="assets/images/populer-products/23. DERMASTAMP.jpg"
                                        style="width: 100%; border-radius: 5% 5% 5% 5%;" alt="populer-products images">
                                    </div>
                                    <a href="#popup8">Dermastamp</a>
                                </div>
                            </li>
                            <li>
                                <div class="card0">
                                                <div class="single-populer-product-img">
                                        <img src="assets/images/populer-products/01. FACIAL ACNE.jpg"
                                        style="width: 100%; border-radius: 5% 5% 5% 5%;" alt="populer-products images">
                                    </div>
                                    <a href="#popup9">Facial Acne</a>
                                </div>
                            </li>
                            <li>
                                <div class="card0">
                                                <div class="single-populer-product-img">
                                        <img src="assets/images/populer-products/03. FACIAL ACNE THERAPY.jpg"
                                        style="width: 100%; border-radius: 5% 5% 5% 5%;" alt="populer-products images">
                                    </div>
                                    <a href="#popup10">Facial Acne Theraphy</a>
                                </div>
                            </li>
                            <li>
                                <div class="card0">
                                                <div class="single-populer-product-img">
                                        <img src="assets/images/populer-products/07. FACIAL ANTI AGING.jpg"
                                        style="width: 100%; border-radius: 5% 5% 5% 5%;" alt="populer-products images">
                                    </div>
                                    <a href="#popup11">Facial Anti Aging</a>
                                </div>
                            </li>
                            <li>
                                <div class="card0">
                                                <div class="single-populer-product-img">
                                        <img src="assets/images/populer-products/02. FACIAL BRIGHTENING.jpg"
                                        style="width: 100%; border-radius: 5% 5% 5% 5%;" alt="populer-products images">
                                    </div>
                                    <a href="#popup12">Facial Brightening</a>
                                </div>
                            </li>
                            <li>
                                <div class="card0">
                                                <div class="single-populer-product-img">
                                        <img src="assets/images/populer-products/04. FACIAL KOREAN PEEL.jpg"
                                        style="width: 100%; border-radius: 5% 5% 5% 5%;" alt="populer-products images">
                                    </div>
                                    <a href="#popup13">Facial Korean Peel AHA/BHA</a>
                                </div>
                            </li>
                            <li>
                                <div class="card0">
                                                <div class="single-populer-product-img">
                                        <img src="assets/images/populer-products/08. FACIAL MICRO BUBBLE.jpg"
                                        style="width: 100%; border-radius: 5% 5% 5% 5%;" alt="populer-products images">
                                    </div>
                                    <a href="#popup14">Facial Micro Bubble</a>
                                </div>
                            </li>
                            <li>
                                <div class="card0">
                                                <div class="single-populer-product-img">
                                        <img src="assets/images/populer-products/05. FACIAL MICRO DERMABRASI.jpg"
                                        style="width: 100%; border-radius: 5% 5% 5% 5%;" alt="populer-products images">
                                    </div>
                                    <a href="#popup15">Facial Microdermabrasi</a>
                                </div>
                            </li>
                            <li>
                                <div class="card0">
                                                <div class="single-populer-product-img">
                                        <img src="assets/images/populer-products/06. FACIAL OXY.jpg"
                                        style="width: 100%; border-radius: 5% 5% 5% 5%;" alt="populer-products images">
                                    </div>
                                    <a href="#popup16">Facial Oxy</a>
                                </div>
                            </li>
                            <li>
                                <div class="card0">
                                                <div class="single-populer-product-img">
                                        <img src="assets/images/populer-products/09. INSTANT BRIGHTENING.jpg"
                                        style="width: 100%; border-radius: 5% 5% 5% 5%;" alt="populer-products images">
                                    </div>
                                    <a href="#popup19">Instant Brightening</a>
                                </div>
                            </li>
                            <li>
                                <div class="card0">
                                                <div class="single-populer-product-img">
                                        <img src="assets/images/populer-products/12. IPL TONING.jpg"
                                        style="width: 100%; border-radius: 5% 5% 5% 5%;" alt="populer-products images">
                                    </div>
                                    <a href="#popup20">IPL Toning</a>
                                </div>
                            </li>
                            <li>
                                <div class="card0">
                                                <div class="single-populer-product-img">
                                        <img src="assets/images/populer-products/13. LASER REJUVENATION.jpg"
                                        style="width: 100%; border-radius: 5% 5% 5% 5%;" alt="populer-products images">
                                    </div>
                                    <a href="#popup21">Laser Rejuvenation</a>
                                </div>
                            </li>
                            <li>
                                <div class="card0">
                                                <div class="single-populer-product-img">
                                        <img src="assets/images/populer-products/14. PRP.jpg"
                                        style="width: 100%; border-radius: 5% 5% 5% 5%;" alt="populer-products images">
                                    </div>
                                    <a href="#popup22">PRP + Injector</a>
                                </div>
                            </li>
                            <li>
                                <div class="card0">
                                                <div class="single-populer-product-img">
                                        <img src="assets/images/populer-products/15. RF LIFTING.jpg"
                                        style="width: 100%; border-radius: 5% 5% 5% 5%;" alt="populer-products images">
                                    </div>
                                    <a href="#popup23">RF Lifting</a>
                                </div>
                            </li>
                        </ul>
                    </div>
            <style>
                .card0 {
                width: 200px;
                height: 250px;
                border: 1px solid #ddd;
                border-radius: 5px;
                padding: 10px;
                background-color: #fff;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                }

                    .menu-container {
                width: 100%;
                overflow-x: auto;
                }

                .menu {
                display: flex;
                list-style: none;
                padding: 0;
                margin: 0;
                white-space: nowrap;
                }

                .menu li {
                margin-right: 15px;
                }

                .menu li:last-child {
                margin-right: 0;
                }

                .menu a {
                text-decoration: none;
                color: #000;
                padding: 10px;
                display: flex;
                justify-content: center;
                }
            </style>
        </section>
        
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

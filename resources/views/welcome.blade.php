<!DOCTYPE html>
<html lang="en">

<head>

    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bayam</title>

    <!-- PLUGINS CSS STYLE -->
    <!-- Bootstrap -->
    <link href="plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- themify icon -->
    <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
    <!-- Slick Carousel -->
    <link href="plugins/slick/slick.css" rel="stylesheet">
    <!-- Slick Carousel Theme -->
    <link href="plugins/slick/slick-theme.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <!-- CUSTOM CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- FAVICON -->
    <link href="images/favicon.ico" rel="shortcut icon">

    <style>
        .distribute-text {
            display: flex;
            justify-content: space-between;
        }
        .testimonial-card {
            background-color: #f9f9f9;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 12px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin: 10px;
            /* Add margin to space out cards */
        }

        .testimonial-image {
            display: block;
            margin: 0 auto;
            width: 150px;
            height: 150px;
            border-radius: 50%;
        }

        .testimonial-text {
            margin-top: 15px;
            font-size: 16px;
        }

        .testimonial-author {
            margin-top: 10px;
            font-style: italic;
            color: #888;
        }

        /* sliders start */

        .slider {
            width: 100%;
            /* max-width: 800px; */
            /* Adjust the max-width as needed */
            margin: 0 auto;

        }

        .slider-navigation {
            display: flex;
            flex-direction: column;
            /* Display dots and buttons in a column */
            align-items: center;
            margin-top: -50px;
            /* Reduce the top margin */
        }

        .custom-prev,
        .custom-next {
            background-color: rgba(102, 172, 46, 1);
            color: #000;
            border: none;
            padding: 10px 20px;
            margin: 10px;
            cursor: pointer;
        }

        .custom-prev:hover,
        .custom-next:hover {
            background-color: rgba(102, 172, 46, 1);
        }

        .custom-prev {
            float: left;
        }

        .custom-next {
            float: right;
        }

        /* .slick-dots {
            display: inline-block;
            text-align: center;
            margin-top: 100px;
            list-style: none;
           
        } */

        /* .slick-dots li {
            display: inline-block;
            margin: 0 5px;
            list-style: none;
            margin-top: 45px;
        } */

        .slick-dots ol button {
            font-size: 10px;
            border: none;
            padding: 5px;
            background-color: rgba(102, 172, 46, 1);
            border-radius: 50%;
            /* cursor: pointer; */
        }

        .slick-dots ol.slick-active button {
            background-color: rgba(102, 172, 46, 1);
            color: #fff;
        }

        /* slider end */
    </style>

</head>

<body class="body-wrapper">


    <nav class="navbar main-nav fixed-top navbar-expand-lg ">
        <div class="container  mx-auto ">
            <a class="navbar-brand" href="#home"><img src="images/bayam12.png" alt="logo"
                    style="width: 50px; height: 50px;"><span class=" text-light">Bayam</span> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-menu text-white"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link scrollTo" href="#home">{{ __('msg.Home') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scrollTo" href="#about">{{ __('msg.About') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scrollTo" href="#feature">{{ __('msg.Features') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scrollTo" href="#pricing">{{ __('msg.Pricing') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scrollTo" href="#team">{{ __('msg.Team') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scrollTo" href="#contact">{{ __('msg.Contact') }}</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">{{ __('msg.lang') }}</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="{{ url('/en') }}">En</a>
                            <a class="dropdown-item" href="{{ url('/fr') }}">Fr</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </nav>
    <!--=====================================
=            Homepage Banner            =
======================================-->

    <section class="banner bg-1" id="home">
        <div class="container ">
            <div class="row">
                <div class="col-md-12 col-sm-6 col-lg-8 align-self-center" style="margin-top: -55px">
                    <!-- Contents -->
                    <div class="content-block col-md-12 ">
                        <h3 class="text-white distribute-text" style="margin-top: -55px">{{ __('msg.h1') }}</h3><br><br>
                        <h5 style="margin-top: -55px">{{ __('msg.h11') }} <br> <br> {{__('msg.h12')}}</h5>
                        <!-- App Badge -->
                        <div class="app-badge ">
                            <ul class="list-inline">
                                <li class="list-inline-item ">
                                    <a href="#" class="btn btn-download"><img src="images/google-play.png"
                                            style="width: 50px; height: 50px">
                                        <div>{{ __('msg.dispo') }}<span>{{ __('msg.dispo1') }}</span></div>
                                    </a>
                                </li>
                                <li class="list-inline-item ">
                                    <a href="#" class="btn btn-download"><img src="images/aps.png"
                                            style="width: 50px; height: 50px">
                                        <div>{{ __('msg.dispos') }}<span>{{ __('msg.dispos1') }}</span></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="d-sm-none d-lg-block col-md-4" style="margin-top: -55px">
					<!-- App Image -->
					<div class="image-block">
                        <img class="img-fluid phone-thumb" src="images/phones/buy2.png" alt="iphone-banner">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====  End of Homepage Banner  ====-->

    <!--===========================
=            About            =
============================-->

    <section class="about section bg-2" id="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 align-self-center text-center">
                    <!-- Image Content -->
                    <div class="image-block">
                        <img class="phone-thumb-md col-sm-6 col-md-12 col-lg-12 " src="images/bayam/bays.png"
                            alt="iphone-feature" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4 col-md-10 m-md-auto align-self-center ml-auto">
                    <div class="about-block">
                        <!-- About 01 -->
                        <div class="about-item">
                            <div class="icon">
                                <i class="ti-palette"></i>
                            </div>
                            <div class="content">
                                <h6>{{ __('msg.design') }}</h6>
                                <p>{{ __('msg.designp') }}</p>
                            </div>
                        </div>
                        <!-- About 02 -->
                        <div class="about-item active">
                            <div class="icon">
                                <i class="ti-panel"></i>
                            </div>
                            <div class="content">
                                <h6>{{ __('msg.use') }}</h6>
                                <p>{{ __('msg.usep') }}</p>
                            </div>
                        </div>
                        <!-- About 03 -->
                        <div class="about-item">
                            <div class="icon">
                                <i class="ti-vector"></i>
                            </div>
                            <div class="content">
                                <h6>{{ __('msg.exp') }}</h6>
                                <p>{{ __('msg.expp') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====  End of About  ====-->

    <!--==============================
=            Features            =
===============================-->

    <section class="section feature " id="feature"> 
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>{{ __('msg.appfe') }}</h2>
                        <p >{{ __('msg.appfep') }}</p>
                    </div>
                </div>
            </div>
            <div class="row bg-elipse">
                <div class="col-lg-4 align-self-center text-center text-lg-right">
                    <!-- Feature Item -->
                    <div class="feature-item">
                        <!-- Icon -->
                        <div class="icon">
                            <i class="ti-user"></i>
                        </div>
                        <!-- Content -->
                        <div class="content">
                            <h5>{{ __('msg.profil') }}</h5>
                            <p style="font-size: 12px;">{{ __('msg.profilp') }}</p>
                        </div>
                    </div>
                    <!-- Feature Item -->
                    <div class="feature-item">
                        <!-- Icon -->
                        <div class="icon">
                            <i class="ti-rss"></i>
                        </div>
                        <!-- Content -->
                        <div class="content">
                            <h5>{{ __('msg.connect') }}</h5>
                            <p style="font-size: 12px;">{{ __('msg.connectp') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <!-- Feature Item -->
                    <div class="feature-item mb-0">
                        <!-- Icon -->
                        <div class="icon">
                            <i class="ti-bell"></i>
                        </div>
                        <!-- Content -->
                        <div class="content">
                            <h5>{{ __('msg.notif') }}</h5>
                            <p style="font-size: 12px;"> {{ __('msg.notifp') }} </p>
                        </div>
                    </div>
                    <div class="app-screen">
                        <img class="img-fluid" src="images/phones/picker.png" alt="app-screen">
                    </div>
                    <!-- Feature Item -->
                    <div class="feature-item">
                        <!-- Icon -->
                        <div class="icon">
                            <i class="ti-headphone-alt"></i>
                        </div>
                        <!-- Content -->
                        <div class="content">
                            <h5>{{ __('msg.support') }}</h5>
                            <p style="font-size: 12px;">{{ __('msg.supportp') }} </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-left align-self-center">
                    <!-- Feature Item -->
                    <div class="feature-item">
                        <!-- Icon -->
                        <div class="icon">
                            <i class="ti-announcement"></i>
                        </div>
                        <!-- Content -->
                        <div class="content">
                            <h5>{{ __('msg.annonce') }}</h5>
                            <p style="font-size: 12px;">{{ __('msg.annoncep') }}</p>
                        </div>
                    </div>
                    <!-- Feature Item -->
                    <div class="feature-item">
                        <!-- Icon -->
                        <div class="icon">
                            <img src="images/downloadss.png" class=" color-sucess"
                                style="height: 50px; width: 50px;">
                        </div>
                        <!-- Content -->
                        <div class="content">
                            <h5> {{ __('msg.appv') }}</h5>
                            <p style="font-size: 12px;">{{ __('msg.appvp') }} </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====  End of Features  ====-->

    <!--=================================
=            Promo Video            =
==================================-->

    {{-- <section class="section promo-video bg-3 overlay">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Promo Video -->
                    <div class="video">
                        <img class="img-fluid" src="images/backgrounds/promo-video-bg.jpg" alt="video-thumbnail">
                        <div class="video-button video-box">
                            <!-- Video Play Button -->
                            <a href="javascript:void(0)">
                                <span class="icon"
                                    data-video="https://www.youtube.com/embed/jrkvirglgaQ?autoplay=1">
                                    <i class="ti-control-play"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!--====  End of Promo Video  ====-->

    <!--===================================
=            Pricing Table            =
====================================-->

    <section class="pricing section bg-shape " id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title mb-4">
                        <h2 class="mb-3 ">{{ __('msg.plan') }}</h2>
                        <p>{{ __('msg.planp') }}</p>
                    </div>
                </div>
            </div>
            <div class="row  ">
                <div class="col-lg-4 col-md-8 col-sm-2 mx-auto">
                    <!-- Pricing Table -->
                    <div class="pricing-table text-center">
                        <!-- Title -->
                        <div class="title">
                            <h5>{{ __('msg.free') }}</h5>
                        </div>
                        <!-- Price Tag -->
                        <div class="price">
                            <p>0 XAF<span>/{{ __('msg.mois') }}</span></p>
                        </div>
                        <!-- Features -->
                        <ul class="feature-list">
                            <li> {{ __('msg.li') }}(15/{{ __('msg.mois') }})</li>
                            <li>{{ __('msg.li1') }}</li>
                            <li>{{ __('msg.li2') }}</li>
                            <li>{{ __('msg.li3') }}</li>
                        </ul>
                        <!-- Take Action -->
                        <div class="action-button">
                            <a href="" class="btn btn-main-rounded">{{ __('msg.startn') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-2 mx-auto">
                    <!-- Pricing Table -->
                    <div class="pricing-table featured text-center">
                        <!-- Title -->
                        <div class="title">
                            <h5>{{ __('msg.basic') }}</h5>
                        </div>
                        <!-- Price Tag -->
                        <div class="price">
                            <p>2500 XAF<span>/{{ __('msg.mois') }}</span></p>
                        </div>
                        <!-- Features -->
                        <ul class="feature-list">
                            <li>{{ __('msg.basicl') }}</li>
                            <li>{{ __('msg.basicli') }}</li>
                            <li>{{ __('msg.basicli1') }}</li>
                            <li>{{ __('msg.basicli2') }}</li>
                        </ul>
                        <!-- Take Action -->
                        <div class="action-button">
                            <a href="" class="btn btn-main-rounded">{{ __('msg.startn') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-2 mx-auto">
                    <!-- Pricing Table -->
                    <div class="pricing-table text-center">
                        <!-- Title -->
                        <div class="title">
                            <h5>{{ __('msg.advance') }}</h5>
                        </div>
                        <!-- Price Tag -->
                        <div class="price">
                            <p> 4800 XAF<span>/{{ __('msg.mois') }}</span></p>
                        </div>
                        <!-- Features -->
                        <ul class="feature-list">
                            <li>{{ __('msg.av') }}</li>
                            <li>{{ __('msg.av1') }} <br></li>
                            <li>{{ __('msg.av2') }}</li>
                        </ul>
                        <!-- Take Action -->
                        <div class="action-button">
                            <a href="#" class="btn btn-main-rounded">{{ __('msg.startn') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====  End of Pricing Table  ====-->

    <!--=============================================
=            Call to Action Download            =
==============================================-->

    <section class="cta-download bg-3 overlay ">
        <div class="container ">
            <div class="row">
                <div class="col-lg-6 text-center">
                    <div class="image-block"><img class="phone-thumb img-fluid" src="images/phones/mbuy.png"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-4 ">
                    <div class="content-block text-center">
                        <!-- Title -->
                        <h2 >{{ __('msg.download') }}</h2>
                        <!-- Desctcription -->
                        <p>{{ __('msg.downloadp') }}</p>
                        <!-- App Badge -->
                        <div class="app-badge ">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-download"><img src="images/google-play.png"
                                            style="width: 50px; height: 50px">
                                        <div>{{ __('msg.dispo') }}<span>{{ __('msg.dispo1') }}</span></div>
                                        <!-- <div>Get it on the<span>GOOGLE PLAY</span></div> -->
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-download"><img src="images/aps.png"
                                            style="width: 50px; height: 50px">
                                        <div>{{ __('msg.dispos') }}<span>{{ __('msg.dispos1') }}</span></div>
                                        <!-- <div>Available on the<span>Apple store</span></div> -->
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====  End of Call to Action Download  ====-->

    <!--=============================
=            Counter            =
==============================-->

    {{-- <section class="section counter bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <div class="counter-item">
                        <!-- Counter Number -->
                        <h3><span class="count" data-count="29">0</span>k</h3>
                        <!-- Counter Name -->
                        <p>Download</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <div class="counter-item">
                        <!-- Counter Number -->
                        <h3><span class="count" data-count="200">0</span>k</h3>
                        <!-- Counter Name -->
                        <p>Active Account</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <div class="counter-item">
                        <!-- Counter Number -->
                        <h3><span class="count" data-count="60">0</span>k</h3>
                        <!-- Counter Name -->
                        <p>Happy User</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <div class="counter-item">
                        <!-- Counter Number -->
                        <h3><span class="count" data-count="300">0</span>k<sup>+</sup></h3>
                        <!-- Counter Name -->
                        <p>Download</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!--====  End of Counter  ====-->

    <!--==========================
=            Team            =
===========================-->

    <div class="container">
        <div class="row">

        </div>
        <div class="container">
            <div class="  ">
                <div class="section-title">
                    <br><br>
                    <h2 class="mb-3">{{ __('msg.team') }}</h2>
                    <p>{{ __('msg.teamp') }}</p>
                </div>
            </div>
            <div id="testimonialsSlider" class="my-3 col-md-12">
                <div class="testimonial-card">
                    <img src="images/serges.png" alt="User 1" class="testimonial-image">
                    <div class="name"><br>
                        <h6>Kodjeu fodong serges</h6>
                    </div>
                    <div class="position">
                        <p>Co-Fondateur & CTO</p>
                    </div>
                    <div>
                        <ul class="social-icons list-inline">
                            <li class="list-inline-item">
                                <a href="https://web.facebook.com/SergesKodjeuOfficiel/" target="_blank"><i class="ti-facebook" style="color: #3b5998"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://twitter.com/serges_kodjeu" target="_blank"><i class="ti-twitter-alt" style="color: #1DA1F2"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.linkedin.com/in/serges-kodjeu-fodong-07b9ab221" target="_blank"><i class="ti-linkedin" style="color: #0e76a8"></i></a>
                            </li>
                            {{-- <li class="list-inline-item">
                                    <a href=""><i class="ti-youtube" style="color: #c4302b" ></i></a>
                                </li> --}}
                        </ul>
                    </div>
                </div>
                <div class="testimonial-card">
                    <img src="images/Yapi-Douglas.jpg" alt="User 2" class="testimonial-image">
                    <div class="name"><br>
                        <h6>Djomgoue Yapi Douglas I.</h6>
                    </div>
                    <div class="position">
                        <p>Co-Founder & MD</p>
                    </div>
                    <div>
                        <ul class="social-icons list-inline">
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/djomgouedouglas/" target="_blank"><i class="ti-facebook" style="color: #3b5998"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://twitter.com/YapiDouglas" target="_blank"><i class="ti-twitter-alt" style="color: #1DA1F2"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.linkedin.com/in/yapidouglasofficiel/" target="_blank"><i class="ti-linkedin" style="color: #0e76a8"></i></a>
                            </li>
                            {{-- <li class="list-inline-item">
                                    <a href=""><i class="ti-youtube" style="color: #c4302b" ></i></a>
                                </li> --}}
                        </ul>
                    </div>
                </div>
                <div class="testimonial-card">
                    <img src="images/michell.jpg" alt="User 2" class="testimonial-image">
                    <div class="name"><br>
                        <h6>Michel areol safomi</h6>
                    </div>
                    <div class="position">
                        <p>Partner & Designer</p>
                    </div>
                    <div>
                        <ul class="social-icons list-inline">
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/profile.php?id=61550695588850" target="_blank"><i class="ti-facebook" style="color: #3b5998"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" target="_blank"><i class="ti-twitter-alt" style="color: #1DA1F2"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.linkedin.com/in/michel-safomi-56933628a" target="_blank"><i class="ti-linkedin" style="color: #0e76a8"></i></a>
                            </li>
                            {{-- <li class="list-inline-item">
                                    <a href=""><i class="ti-youtube" style="color: #c4302b" ></i></a>
                                </li> --}}
                        </ul>
                    </div>
                </div>
                <div class="testimonial-card">
                    <img src="images/nickpicture.jpg" alt="User 2" class="testimonial-image">
                    <div class="name"><br>
                        <h6> Takafo Metambia Nick</h6>
                    </div>
                    <div class="position">
                        <p> Chief Executive officer</p>
                    </div>
                    <div>
                        <ul class="social-icons list-inline">
                            <li class="list-inline-item">
                                <a href="https://web.facebook.com/nickleandry.takafo" target="_blank"><i class="ti-facebook"
                                        style="color: #3b5998"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://twitter.com/NTakafo" target="_blank"><i class="ti-twitter-alt"
                                        style="color: #1DA1F2"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a
                                    href="https://www.linkedin.com/in/takafo-metambia-nick-leandry-828b30219/?lipi=urn%3Ali%3Apage%3Ad_flagship3_feed%3BrTejVobZS4OL0udn7LhCdQ%3D%3D" target="_blank"><i
                                        class="ti-linkedin" style="color: #0e76a8"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="testimonial-card">
                    <img src="images/bonom.jpg" alt="User 2" class="testimonial-image">
                    <div class="name"><br>
                        <h6> Dongmo Weladgi U</h6>
                    </div>
                    <div class="position">
                        <p>Partner</p>
                    </div>
                    <div>
                        <ul class="social-icons list-inline">
                            <li class="list-inline-item">
                                <a href="" target="_blank"><i class="ti-facebook" style="color: #3b5998"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="" target="_blank"><i class="ti-twitter-alt" style="color: #1DA1F2"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="" target="_blank"><i class="ti-linkedin" style="color: #0e76a8"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Add more testimonials with images and social media links as needed -->
            </div>
            <button type="button" class="custom-prev"><i class="ti-angle-double-left text-light"></i>
                <button type="button" class="custom-next"><i class="ti-angle-double-right text-light"></i></button>

        </div>
    </div>

    <!--====  End of Team  ====-->

    <!--=================================
=            Testimonial            =
==================================-->
    <section class="about section bg-2" id="">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="text-black">{{ __('msg.customer') }}</h2>
                        <p class="text-black">{{ __('msg.customerp') }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12 align-self-center text-center">
                    <!-- Image Content -->
                    <div class="image-block ">
                        <img class="phone-thumb-md col-sm-12 col-lg-12 col-md-12" src="images/bayam/5.png"
                            alt="iphone-feature" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4 col-md-10 m-md-auto align-self-center ml-auto">
                    <div class="about-block">
                        <!-- About 01 -->
                        <div class="about-item">
                            <div class="icon">
                                <i class="ti-palette"></i>
                            </div>
                            <div class="content">
                                <h6>{{ __('msg.designn') }}</h6>
                                <p style="font-size: 12px;">{{ __('msg.designnp') }}</p>
                            </div>
                        </div>
                        <!-- About 02 -->
                        <div class="about-item active">
                            <div class="icon">
                                <i class="ti-panel"></i>
                            </div>
                            <div class="content">
                                <h6>{{ __('msg.uses') }}</h6>
                                <p style="font-size: 12px;">{{ __('msg.usesp') }}</p>
                            </div>
                        </div>
                        <!-- About 03 -->
                        <div class="about-item">
                            <div class="icon">
                                <i class="ti-vector"></i>
                            </div>
                            <div class="content">
                                <h6>{{ __('msg.exps') }}</h6>
                                <p style="font-size: 12px;">{{ __('msg.expps') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!--====  End of Testimonial  ====-->

    <section class="section cta-subscribe" id="contact">
        <div class="container-fluid">
            <div class="row bg-elipse-red">
                <div class="col-lg-6">
                    <div class="image"><img class="phone-thumb col-sm-6 col-sm-4 col-lg-12 col-md-12" src="images/bayam/2.png"
                            alt="iphone-app"></div>
                </div><br>
                <div class="col-lg-6 align-self-center float-md-right">
                    <div class="content text-center">
                        <div class="mb-4">
                            <h2 class="text-black"> <span class="text-success"> {{ __('msg.chat') }}</span></h2>
                        </div>
                        <div class="description">
                            <h6>{{ __('msg.chatp') }}</h6>
                        </div>
                        <a href="https://cutt.ly/uwjhyrct" class="whatsapp-button">
                            <img src="images/whatsapp.png" alt="WhatsApp Icon">
                            <span>{{ __('msg.whats') }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--============================
=            Footer            =
=============================-->

    <footer class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-2 mr-auto">
                    <div class="footer-logo">
                        <p class="text-light"><img src="images/bayam12.png" alt="footer-logo"
                                style="height: 50px; width: 50px;">Bayam</p>
                    </div>
                    <div class="copyright">
                        <p>{{ __('msg.right') }} <br>{{ __('msg.right1') }}<a href="https://zonite.org/"
                                target="_blank">ZONITE SARL</a>

                            <!-- Distributed by : <a href="https://themewagon.com/" target="_blank">Themewagon</a> -->
                        </p>
                    </div>
                </div>
                <div class="col-lg-6  col-md-6  col-sm-2text-lg-right">
                    <!-- Social Icons -->
                    <ul class="social-icons list-inline">
                        <li class="list-inline-item">
                            <a target="_blank" href="https://web.facebook.com/BayamApp"><i class=" ti-facebook"
                                    style="color: #3b5998"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a target="_blank" href="https://twitter.com/bayamApp"><i class=" ti-twitter-alt"
                                    style="color: #1DA1F2"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a target="_blank" href="https://www.linkedin.com/showcase/bayamapp/"><i
                                    class=" ti-linkedin" style="color: #0e76a8"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a target="_blank" href="https://www.youtube.com/@BAYAM-ly6fr"><i
                                    class="text-danger ti-youtube" style="color: #c4302b"></i></a>
                        </li>
                    </ul>
                    <!-- Footer Links -->
                    <ul class="footer-links list-inline">
                        <li class="list-inline-item">
                            <a class="scrollTo" href="#about">{{ __('msg.About') }}</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="scrollTo" href="#">{{ __('msg.Team') }} </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="scrollTo" href="#contact">{{ __('msg.Contact') }}</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="scrollTo" href="#pricing">{{ __('msg.Pricing') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <!-- JAVASCRIPTS -->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBI14J_PNWVd-m0gnUBkjmhoQyNyd7nllA" async defer></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <script src="plugins/jquery/jquery.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <script src="plugins/slick/slick.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        $(document).ready(function() {
            $('#testimonialsSlider').slick({
                slidesToShow: 4, // Display four testimonials on larger screens
                slidesToScroll: 1,
                dots: true,
                prevArrow: '<button type="button" class="slick-prev">Previous</button>',
                nextArrow: '<button type="button" class="slick-next">Next</button>',
                autoplay: true,
                autoplaySpeed: 5000,
                responsive: [{
                        breakpoint: 1024, // Breakpoint for larger screens (tablet)
                        settings: {
                            slidesToShow: 2, // Display three testimonials on tablet screens
                        }
                    },
                    {
                        breakpoint: 768, // Breakpoint for iPads (portrait) and smaller tablets
                        settings: {
                            slidesToShow: 2, // Display two testimonials on smaller tablets
                        }
                    },
                    {
                        breakpoint: 576, // Breakpoint for mobile devices
                        settings: {
                            slidesToShow: 1, // Display one testimonial on mobile screens
                        }
                    }
                ],
                dots: true, // Enable dots navigation
                appendDots: $('#testimonialsSlider'),
            });

            $('.custom-prev').click(function() {
                $('#testimonialsSlider').slick('slickPrev');
            });

            $('.custom-next').click(function() {
                $('#testimonialsSlider').slick('slickNext');
            });
        });
    </script>



    {{-- @Nike-leandry --}}

</body>

</html>

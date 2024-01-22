
<!DOCTYPE html>
<html lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="dev_raj">
    <!-- ======== Page title ============ -->
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('home/images/'.$web->logo)}}">
    <meta name="description" content="Comprehensive financial advice and investment services that are tailored to meet your individual needs.">
    <meta name="keywords" content="finance, invest, goal, values, income, earnings, gold, forex, equity">
    <meta name="url" content="/">

    <meta name="og:title" content="{{$siteName}}"/>
    <meta name="og:type" content="company"/>
    <meta name="og:url" content="/"/>
    <meta name="og:image" content="{{asset('home/images/'.$web->logo)}}"/>
    <meta name="og:site_name" content="{{$siteName}}"/>
    <meta name="og:description" content="Comprehensive financial advice and investment services that are tailored to meet your individual needs."/>
    <meta name="description" content="{{$web->description}}">
    <meta name="keywords" content="business, marketing, agency">
    <title> {{$siteName}} | {{$pageName}}</title>
    <!-- ===========  All Stylesheet ================= -->
    <!--  Icon css plugins -->
    <link rel="stylesheet" href="{{asset('home/css/icons.css')}}">
    <!--  magnific-popup css plugins -->
    <link rel="stylesheet" href="{{asset('home/css/magnific-popup.css')}}">
    <!-- slick slider menu css file -->
    <link rel="stylesheet" href="{{asset('home/css/slick.min.css')}}">
    <!-- animate animation css file -->
    <link rel="stylesheet" href="{{asset('home/css/animate.min.css')}}">
    <!--  Bootstrap css plugins -->
    <link rel="stylesheet" href="{{asset('home/css/bootstrap.min.css')}}">
    <!-- template main style css file -->
    <link rel="stylesheet" href="{{asset('home/css/style.css')}}">

</head>

<body class="body-wrapper">
@inject('injected','App\Defaults\Custom')
<!-- preloader -->
<div id="preloader" class="preloader">
    <div class="animation-preloader">
        <div class="spinner">
        </div>
        <div class="txt-loading">
            @php
                $words = str_split($siteName);
            @endphp
            @foreach($words as $word)
                <span data-text-preloader="{{strtoupper($word)}}" class="letters-loading">
                        {{strtoupper($word)}}
                    </span>
            @endforeach
        </div>
        <p class="text-center">Loading</p>
    </div>
    <div class="loader">
        <div class="row">
            <div class="col-3 loader-section section-left">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-left">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-right">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-right">
                <div class="bg"></div>
            </div>
        </div>
    </div>
</div>
<!-- welcome content start from here -->

<!-- header end -->
<header class="header header-1 header-3">
    <div class="top-header top-header_4 d-none d-xl-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-8">
                    <div class="header-cta">
                        <ul>
                            <li><a><i class="fal fa-clock"></i> Mon – Fri: 8.00 – 18.00</a></li>
                            <li><a><i class="fal fa-clock"></i> Sun – Sat: 9.00 – 12.00</a></li>
                            @if(!empty($web->phone))
                                <li><a><i class="icon-phone"></i>{{$web->phone}}</a></li>
                            @endif
                        </ul>
                    </div>
                </div>

                <div class="col-4">
                    <div class="header-right-socail d-flex justify-content-end align-items-center">
                        <h6 class="font-la color-white fw-600">Follow On:</h6>

                        <div class="social-profile">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-header-wraper">
        <div class="container p-0">
            <div class="main_wrapper">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="header-logo">
                        <div class="logo">
                            <a href="{{url('/')}}">
                                <img src="{{asset('home/images/'.$web->logo)}}" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="header-menu d-none d-xl-block">
                        <div class="main-menu main-menu_4">
                            <ul>

                                <li>
                                    <a href="{{url('/')}}">Home</a>
                                </li>
                                <li>
                                    <a href="{{url('about')}}">About</a>
                                </li>
                                <li>
                                    <a href="#">Our Services</a>
                                    <ul>
                                        @foreach($injected->getServices() as $servi)
                                            <li><a href="{{route('service.details',['id'=>$servi->id])}}">{{$servi->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li>
                                    <a>Pages</a>
                                    <ul>
                                        <li>
                                            <a href="{{url('plans')}}">Pricing</a>
                                        </li>
                                        <li >
                                            <a href="{{url('faqs')}}">Faqs</a>
                                        </li>
                                        <li>
                                            <a href="{{url('terms')}}">Terms & Conditions</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a>Account</a>
                                    <ul>
                                        <li>
                                            <a href="{{route('register')}}">Register</a>
                                        </li>
                                        <li >
                                            <a href="{{route('login')}}">Login</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{url('contact')}}">Contact</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="header-right d-flex align-items-center">
                        <a href="{{route('register')}}" class="theme-btn btn__2 d-none d-sm-block">Get Started <i class="far fa-chevron-double-right"></i></a>
                        <div class="mobile-nav-bar d-block ml-3 ml-sm-5 d-xl-none">
                            <div class="mobile-nav-wrap">
                                <div id="hamburger" class="color-primary">
                                    <i class="fal fa-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- mobile menu - responsive menu  -->
<div class="mobile-nav">
    <button type="button" class="close-nav">
        <i class="fal fa-times-circle"></i>
    </button>

    <nav class="sidebar-nav">
        <div class="navigation">
            <div class="consulter-mobile-nav">
                <ul>
                    <li>
                        <a href="{{url('/')}}">Home</a>
                    </li>
                    <li>
                        <a href="{{url('about')}}">About</a>
                    </li>
                    <li>
                        <a href="#">Our Services</a>
                        <ul>
                            @foreach($injected->getServices() as $servi)
                                <li><a href="{{route('service.details',['id'=>$servi->id])}}">{{$servi->title}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <a>Pages</a>
                        <ul>
                            <li>
                                <a href="{{url('plans')}}">Pricing</a>
                            </li>
                            <li >
                                <a href="{{url('faqs')}}">Faqs</a>
                            </li>
                            <li>
                                <a href="{{url('terms')}}">Terms & Conditions</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a>Account</a>
                        <ul>
                            <li>
                                <a href="{{route('register')}}">Register</a>
                            </li>
                            <li >
                                <a href="{{route('login')}}">Login</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{url('contact')}}">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="sidebar-nav__bottom mt-20">
                <div class="sidebar-nav__bottom-contact-infos mb-20">
                    <h6 class="color-black mb-5">Contact Info</h6>

                    <ul>
                        <li><a><i class="fal fa-clock"></i> Mon – Fri: 8.00 – 18.00</a></li>
                        <li><a href="mailto:{{$web->email}}"><i class="icon-email"></i>{{$web->email}}</a></li>
                        @if(!empty($web->phone))
                            <li>
                                <a class="header-contact d-flex align-items-center">
                                    <div class="icon">
                                        <i class="icon-call"></i>
                                        <!-- <img src="{{asset('home/img/icon/phone-1.svg')}}" alt=""> -->
                                    </div>
                                    <div class="text">
                                        <span class="font-la mb-5 d-block fw-500">Contact For Support</span>
                                        <h5 class="fw-500">{{$web->phone}}</h5>
                                    </div>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>

                <div class="sidebar-nav__bottom-social">
                    <h6 class="color-black mb-5">Follow On:</h6>

                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>

<div class="offcanvas-overlay"></div>
<!-- header end -->
<!-- <div class="header-gutter home"></div> -->


<!-- page-banner start -->

<section class="banner banner__2 overflow-hidden" style="background-image: url({{asset('home/img/ai2.jpeg')}});">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner__content text-center m-auto">
                    <span class="sub-title fw-500  text-uppercase mb-sm-10 mb-xs-5 mb-15 d-block">Welcome To {{$siteName}}</span>
                    <h1 class="title mb-sm-10 mb-xs-5 mb-15">Artificial Intelligence Powered <span> Excellence</span></h1>

                    <div class="description font-la mb-40 mb-lg-35 mb-sm-30 mb-xs-25">
                        <p>
                            When you invest with {{$siteName}}, you are guaranteed of returns higher than anywhere
                            else
                        </p>
                    </div>

                    <a href="{{route('register')}}" class="theme-btn btn__2">Get Started <i class="far fa-chevron-double-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page-banner end -->

<!-- competitive-edge start -->

<div class="competitive-edge overflow-hidden">
    <div class="container">
        <div class="row align-items-end mb-minus-30">
            <div class="col-xxl-6 col-lg-6">
                <div class="competitive-edge__item competitive-edge__item_2 d-flex align-items-center justify-content-between bg-cover" style="background-image: url({{asset('home/img/home-4/banner_01.png')}});">
                    <div class="left d-flex align-items-center">
                        <div class="icon color-white">
                            <i class="icon-process-1"></i>
                        </div>
                        <h6 class="title text-capitalize color-white">Build your wealth the right way</h6>
                    </div>

                    <a href="{{route('login')}}" class="color-white">
                        <i class="icon-arrow-right-2"></i>
                    </a>
                </div>
            </div>

            <div class="col-xxl-6 col-lg-6">
                <div class="competitive-edge__item competitive-edge__item_2 d-flex align-items-center justify-content-between bg-cover" style="background-image: url({{asset('home/img/home-4/banner_01.png')}});">
                    <div class="left d-flex align-items-center">
                        <div class="icon color-white">
                            <i class="icon-like-comment"></i>
                        </div>
                        <h6 class="title text-capitalize color-white">We take care of the processes while you earn</h6>
                    </div>

                    <a href="{{route('register')}}" class="color-white">
                        <i class="icon-arrow-right-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- competitive-edge end -->

<!-- employee-friendly start -->

<section class="employee__wrapper section-padding_3 overflow-hidden">
    <div class="container">
        <div class="row align-items-center mb-30">
            <div class="col-lg-8 col-md-8">
                <div class="section-title">
                    <h5> <img src="{{asset('home/img/team-details/badge-line.svg')}}" alt> Services</h5>
                    <h2>Investor Friendly <span>Service</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($services as $service)
                <div class="col-lg-4 col-md-6 col-12 mt-30">
                    <div class="single_card_item text-center">
                        <div class="card_img">
                            <img src="{{asset('home/serv/'.$service->photo)}}" alt="">
                        </div>
                        <div class="card_content ">
                            <div class="content">
                                <h4>{{$service->title}}</h4>
                                <p>
                                    {{$service->short}}
                                </p>
                            </div>
                            <a href="{{route('service.details',['id'=>$service->id])}}"> Read Details <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- employee-friendly end -->

<!-- company-skill start -->

<section class="company-skill company-skill-home-3 pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-90 overflow-hidden">
    <div class="container">
        <a href="https://www.youtube.com/watch?v=9xwazD5SyVg" class="popup-video" data-effect="mfp-move-from-top"><i class="icon-play"></i></a>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="our-company__meida">
                    <img src="{{asset('home/img/about/our-company-1.png')}}" alt="" class="img-fluid">

                    <div class="years-experience overflow-hidden mt-20 mt-sm-10 mt-xs-10 text-center">
                        <div class="number mb-5 color-white">
                            <span class="counter">10</span><sup>+</sup>
                        </div>

                        <h5 class="title color-white">Years Experience</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="our-company__meida border-radius">
                    <img src="{{asset('home/img/about/our-company-2.png')}}" alt class="img-fluid">

                    <div class="horizental-bar"></div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="company-skill__content mt-md-50 mt-sm-45 mt-xs-40 ml-auto">
                    <span class="sub-title d-block fw-500 color-primary text-uppercase mb-sm-10 mb-xs-5 mb-md-15 mb-20"><img src="{{asset('home/img/team-details/badge-line.svg')}}" class="img-fluid mr-10" alt="">About Us</span>
                    <h2 class="title color-pd_black mb-25 mb-xs-10 mb-sm-15">Our Company Provide <span>High Quality Investment</span></h2>

                    <div class="description font-la">
                        <p>At {{$siteName}}, we believe in more than just investing; we believe in strategic wealth planning. Our team of experts collaborates with you to craft a personalized roadmap for financial success. From short-term gains to long-term legacies, we meticulously plan every step, ensuring your investments align with your aspirations. Join us in redefining the art of wealth creation through strategic planning and astute decision-making.</p>
                        <p class="mt-20">Embark on a personalized financial journey with {{$siteName}}, where we help you uncover the vast potential of your financial horizon. Our tailored strategies and innovative solutions are designed to align with your unique goals, ensuring a path to prosperity that's as individual as you are. Let {{$siteName}} be your compass as you navigate towards a secure and rewarding financial future.</p>
                    </div>

                    <div class="service_element d-flex justify-content-between">
                        <ul class="service_info">
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Consectetur adipiscing elit</li>
                            <li>Labore et dolore magna aliqua</li>
                        </ul>
                        <div class="area__item d-flex align-items-center">
                            <div class="icon">
                                <i class="icon-support-2"></i>
                            </div>

                            <div class="text_2 text-start">
                                <div class="number"><span class="counter">150</span>+</div>
                                <div class="description">Staff Members</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- company-skill end -->

<!-- protfolio_wrapper end -->

<section class="protfolio_wrapper section-padding">
    <div class="container">
        <div class="row align-items-center mb-30">
            <div class="col-lg-12 col-md-12">
                <div class="section-title text-center">
                    <h5> <img src="{{asset('home/img/team-details/badge-line.svg')}}" alt> Work Process</h5>
                    <h2>Our Working Process</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mt-30 position-relative">
                <div class="process__widget text-center">
                    <div class="icon__widget">
                        <div class="icons">
                            <i class="icon-outline"></i>
                        </div>
                    </div>
                    <h4>Step - 1. Create an Account</h4>
                    <p>Create a secured account on {{$siteName}} and login</p>
                </div>
                <div class="arrow__element d-none d-md-block">
                    <img src="{{asset('home/img/home-4/arrow_01.svg')}}" alt>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-30 position-relative">
                <div class="process__widget text-center">
                    <div class="icon__widget">
                        <div class="icons">
                            <i class="icon-teamwork-1"></i>
                        </div>
                    </div>
                    <h4>Step - 2. Select Package and Deposit</h4>
                    <p>From our list of available packages, select the one that suits your need and make deposit</p>
                </div>
                <div class="arrow__element d-none d-md-block">
                    <img src="{{asset('home/img/home-4/arrow_01.svg')}}" alt>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-30 position-relative">
                <div class="process__widget text-center">
                    <div class="icon__widget">
                        <div class="icons">
                            <i class="icon-teamwork-1"></i>
                        </div>
                    </div>
                    <h4>Step - 3. Earn and Withdraw</h4>
                    <p>Once your deposit is received, our staff will secure your slot in the investment option, then you can start earning.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-30 ">
        <div class="row align-items-center section-padding_3">
            <div class="col-lg-8 col-md-8">
                <div class="section-title">
                    <h5> <img src="{{asset('home/img/team-details/badge-line.svg')}}" alt>Our Industry</h5>
                    <h2>Amazing <span>Showcase</span></h2>
                </div>
            </div>
        </div>
    </div>

    <div class=" our-porfolio__slider__2 mt-30">
        @foreach($services as $ser)
            <div class="slider-item">
                <div class="our-project__item overflow-hidden">
                    <img src="{{asset('home/serv/'.$ser->photo)}}" alt="">

                    <div class="content d-flex align-items-center justify-content-between">
                        <div class="text">
                            <span class="fw-500 color-primary d-block mb-10 text-uppercase">{{$ser->title}}</span>
                            <h5 class="title color-secondary">{{$ser->title}}</h5>
                        </div>

                        <a href="{{route('service.details',['id'=>$ser->id])}}" class="theme-btn"><i class="icon-arrow-right-2"></i></a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</section>
<!-- protfolio_wrapper end -->

<!-- pricing start -->
<section class="pricing pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-110 overflow-hidden" style="background-image: url({{asset('home/img/price/testimonial-bg.svg')}});">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="pricing__content mb-40 mb-xs-30 text-center">
                    <h2 class="title color-d_black mb-25 mb-sm-20 mb-xs-15 text-capitalize">Our Investment Packages</h2>

                </div>
            </div>
        </div>

        <div class="pricing-item-wraper">
            <div class="row mb-minus-30">
                @foreach($packages as $package)
                    <div class="col-xl-4 col-md-6">
                        <div class="pricing__card d-flex flex-column justify-content-between mb-30 overflow-hidden">
                            <div class="pricing__card-header">
                                <h3 class="title color-d_black">Basic Plan</h3>
                                <h6 class="sub-title font-la fw-600 text-uppercase mb-30 mb-sm-25 mb-xs-15">Start package <img src="assets/img/icon/hand-3.svg" class="img-fluid" alt=""></h6>
                                <div class="price color-white mb-30 mb-sm-25 mb-xs-15 overflow-hidden">$29.00 <span>/Monthly</span></div>
                                <p>Plan for businesses with basic IT requirements</p>
                            </div>
                            <div class="pricing__card-body">
                                <ul>
                                    <li><i class="fal fa-check-square"></i> Business Solutions</li>
                                    <li><i class="fal fa-check-square"></i> Market Growth Solutions</li>
                                    <li><i class="fal fa-check-square"></i> Security Management</li>
                                    <li><i class="icon-close-3"></i> Digital Business Solutions</li>
                                    <li><i class="icon-close-3"></i> 24/7 System Monitoring</li>
                                </ul>
                                <a href="{{route('register')}}" class="theme-btn mt-40 mt-md-35">Get Started <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div><!-- /pricing__card -->
                @endforeach
            </div>

        </div>
    </div>
</section>
<!-- pricing end -->

<!-- testimonial start -->

<section class="testimonial bg-dark_white pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-110 overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="testimonial__content mb-60 mb-md-50 mb-sm-40 mb-xs-30 text-center">
                    <h6 class="sub-title fw-500 color-primary text-uppercase mb-sm-10 mb-xs-5 mb-15"><img src="{{asset('home/img/team-details/badge-line.svg')}}" class="img-fluid mr-10" alt=""> Testimonials</h6>
                    <h2 class="title color-d_black">Consulter <span>Customer Feedback</span></h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="testimonial-slider">

                    <div class="slider-item">
                        <div class="testimonial__item testimonial">
                            <div class="testimonial__item-header item-header-2 mb-35 mb-sm-25 mb-xs-20">
                                <div class="left d-flex align-items-center">
                                    <div class="media overflow-hidden">
                                        <img src="{{asset('home/img/testimonial/testimonial-1.png')}}" class="img-fluid" alt="">
                                    </div>

                                    <div class="meta">
                                        <h5 class="name fw-500 text-uppercase color-d_black">Bm Ashik<span> - Company, Ceo</span></h5>
                                        <span class="position font-la fw-500 color-d_black"> <img src="{{asset('home/img/testimonial/asana.png')}}" alt></a></span>
                                    </div>
                                </div>
                            </div>

                            <div class="description font-la mb-40 mb-md-35 mb-sm-30 mb-xs-25">
                                <p>Lorem ipsum Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque accusamus expedita autem eius perspiciatis! Magni! dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam.</p>
                            </div>

                            <div class="testimonial__item-footer d-flex justify-content-between">
                                <div class="right">
                                    <div class="starts">
                                        <ul>
                                            <li><span></span></li>
                                            <li><span></span></li>
                                            <li><span></span></li>
                                            <li><span></span></li>
                                            <li><span></span></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="quote color-primary">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="slider-item">
                        <div class="testimonial__item testimonial">
                            <div class="testimonial__item-header item-header-2 mb-35 mb-sm-25 mb-xs-20">
                                <div class="left d-flex align-items-center">
                                    <div class="media overflow-hidden">
                                        <img src="{{asset('home/img/testimonial/testimonial-2.png')}}" class="img-fluid" alt="">
                                    </div>

                                    <div class="meta">
                                        <h5 class="name fw-500 text-uppercase color-d_black">Bm Ashik<span> - Company, Ceo</span></h5>
                                        <span class="position font-la fw-500 color-d_black"> <img src="{{asset('home/img/testimonial/asana.png')}}" alt></a></span>
                                    </div>
                                </div>
                            </div>

                            <div class="description font-la mb-40 mb-md-35 mb-sm-30 mb-xs-25">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam.</p>
                            </div>

                            <div class="testimonial__item-footer d-flex justify-content-between">
                                <div class="right">
                                    <div class="starts">
                                        <ul>
                                            <li><span></span></li>
                                            <li><span></span></li>
                                            <li><span></span></li>
                                            <li><span></span></li>
                                            <li><span></span></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="quote color-primary">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="slider-item">
                        <div class="testimonial__item testimonial">
                            <div class="testimonial__item-header item-header-2 mb-35 mb-sm-25 mb-xs-20">
                                <div class="left d-flex align-items-center">
                                    <div class="media overflow-hidden">
                                        <img src="{{asset('home/img/testimonial/testimonial-3.png')}}" class="img-fluid" alt="">
                                    </div>

                                    <div class="meta">
                                        <h5 class="name fw-500 text-uppercase color-d_black">Bm Ashik<span> - Company, Ceo</span></h5>
                                        <span class="position font-la fw-500 color-d_black"> <img src="{{asset('home/img/testimonial/asana.png')}}" alt></a></span>
                                    </div>
                                </div>
                            </div>

                            <div class="description font-la mb-40 mb-md-35 mb-sm-30 mb-xs-25">
                                <p>Lorem ipsum Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores iure culpa exercitationem voluptatibus, ipsam dolorum? dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam.</p>
                            </div>

                            <div class="testimonial__item-footer d-flex justify-content-between">
                                <div class="right">
                                    <div class="starts">
                                        <ul>
                                            <li><span></span></li>
                                            <li><span></span></li>
                                            <li><span></span></li>
                                            <li><span></span></li>
                                            <li><span></span></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="quote color-primary">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="slider-item">
                        <div class="testimonial__item testimonial">
                            <div class="testimonial__item-header item-header-2 mb-35 mb-sm-25 mb-xs-20">
                                <div class="left d-flex align-items-center">
                                    <div class="media overflow-hidden">
                                        <img src="{{asset('home/img/testimonial/testimonial-4.png')}}" class="img-fluid" alt="">
                                    </div>

                                    <div class="meta">
                                        <h5 class="name fw-500 text-uppercase color-d_black">Bm Ashik<span> - Company, Ceo</span></h5>
                                        <span class="position font-la fw-500 color-d_black"> <img src="{{asset('home/img/testimonial/asana.png')}}" alt></a></span>
                                    </div>
                                </div>
                            </div>

                            <div class="description font-la mb-40 mb-md-35 mb-sm-30 mb-xs-25">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam.</p>
                            </div>

                            <div class="testimonial__item-footer d-flex justify-content-between">
                                <div class="right">
                                    <div class="starts">
                                        <ul>
                                            <li><span></span></li>
                                            <li><span></span></li>
                                            <li><span></span></li>
                                            <li><span></span></li>
                                            <li><span></span></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="quote color-primary">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial end -->

<!-- client-brand start -->

<div class="client-brand bg-dark_white pb-xs-80 pb-sm-100 pb-md-100 pb-120 overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="client-brand__slider"  data-slick='{
                        "dots": "false",
                        "arrows": "false",
                        "autoplay": "true",
                        "slidesToShow": 6,
                        "infinite": "true",
                        "slidesToScroll": 1,
                        "autoplaySpeed": 500,
                        "responsive": [
                            {
                                "breakpoint": 1300,
                                "settings": {
                                "slidesToShow": 5
                                }
                            },
                            {
                            "breakpoint": 1200,
                            "settings": {
                                "slidesToShow": 4
                            }
                            },
                            {
                                "breakpoint": 992,
                                "settings": {
                                "slidesToShow": 3
                                }
                            },
                            {
                                "breakpoint": 768,
                                "settings": {
                                "slidesToShow": 2
                                }
                            },
                            {
                            "breakpoint": 481,
                            "settings": {
                                "slidesToShow": 1
                            }
                            }
                        ]
                        }'>
                    <div class="slider-item">
                        <a href="#" class="client-brand__item">
                            <div class="client-brand__item-media">
                                <img src="{{asset('home/img/brand/brand-1.png')}}" class="img-fluid" alt="">
                            </div>
                        </a>
                    </div>

                    <div class="slider-item">
                        <a href="#" class="client-brand__item">
                            <div class="client-brand__item-media">
                                <img src="{{asset('home/img/brand/brand-2.png')}}" class="img-fluid" alt="">
                            </div>
                        </a>
                    </div>

                    <div class="slider-item">
                        <a href="#" class="client-brand__item">
                            <div class="client-brand__item-media">
                                <img src="{{asset('home/img/brand/brand-3.png')}}" class="img-fluid" alt="">
                            </div>
                        </a>
                    </div>

                    <div class="slider-item">
                        <a href="#" class="client-brand__item">
                            <div class="client-brand__item-media">
                                <img src="{{asset('home/img/brand/brand-4.png')}}" class="img-fluid" alt="">
                            </div>
                        </a>
                    </div>

                    <div class="slider-item">
                        <a href="#" class="client-brand__item">
                            <div class="client-brand__item-media">
                                <img src="{{asset('home/img/brand/brand-5.png')}}" class="img-fluid" alt="">
                            </div>
                        </a>
                    </div>

                    <div class="slider-item">
                        <a href="#" class="client-brand__item">
                            <div class="client-brand__item-media">
                                <img src="{{asset('home/img/brand/brand-6.png')}}" class="img-fluid" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="slider-item">
                        <a href="#" class="client-brand__item">
                            <div class="client-brand__item-media">
                                <img src="{{asset('home/img/brand/brand-1.png')}}" class="img-fluid" alt="">
                            </div>
                        </a>
                    </div>

                    <div class="slider-item">
                        <a href="#" class="client-brand__item">
                            <div class="client-brand__item-media">
                                <img src="{{asset('home/img/brand/brand-2.png')}}" class="img-fluid" alt="">
                            </div>
                        </a>
                    </div>

                    <div class="slider-item">
                        <a href="#" class="client-brand__item">
                            <div class="client-brand__item-media">
                                <img src="{{asset('home/img/brand/brand-3.png')}}" class="img-fluid" alt="">
                            </div>
                        </a>
                    </div>

                    <div class="slider-item">
                        <a href="#" class="client-brand__item">
                            <div class="client-brand__item-media">
                                <img src="{{asset('home/img/brand/brand-4.png')}}" class="img-fluid" alt="">
                            </div>
                        </a>
                    </div>

                    <div class="slider-item">
                        <a href="#" class="client-brand__item">
                            <div class="client-brand__item-media">
                                <img src="{{asset('home/img/brand/brand-5.png')}}" class="img-fluid" alt="">
                            </div>
                        </a>
                    </div>

                    <div class="slider-item">
                        <a href="#" class="client-brand__item">
                            <div class="client-brand__item-media">
                                <img src="{{asset('home/img/brand/brand-6.png')}}" class="img-fluid" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- client-brand end -->

<!-- delivery start -->

<section class="delivery__wrapper  section-padding bg-center bg-cover overflow-hidden" style="background-image: url({{asset('home/img/home-4/bg_01.png')}});">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <div class="section-title text-white">
                    <h2 class="text-white">From Strategy to Delivery<span> On Time Every Time</span></h2>
                    <p class="text-white mt-15 mb-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    <a href="#" class="theme-btn btn__2 bg-white color-primary">View All Services <i class="far fa-chevron-double-right"></i></a>
                </div>
            </div>
            <div class="col-xl-6 text-end">
                <div class="video_btn">
                    <div class="theme-btn-wrapper bg-primary">
                        <a href="https://www.youtube.com/watch?v=9xwazD5SyVg" class="popup-video text-white" data-effect="mfp-move-from-top"><i class="far fa-play"></i></a>
                    </div>
                </div>


            </div>
        </div>
        <div class="row section-padding_3">
            <div class="col-xl-3 col-lg-4 col-sm-6 mt-30">
                <div class="counter-area__item counter-area__item-three d-flex align-items-center">
                    <div class="icon color-primary">
                        <i class="icon-process-1"></i>
                    </div>

                    <div class="text text-center">
                        <div class="number fw-600 color-primary"><span class="counter">5620</span>+</div>
                        <div class="description font-la">Successful Project</div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6 mt-30">
                <div class="counter-area__item counter-area__item-three  d-flex align-items-center">
                    <div class="icon color-primary">
                        <i class="icon-support-2"></i>
                    </div>

                    <div class="text text-center">
                        <div class="number fw-600 color-primary"><span class="counter">150</span>+</div>
                        <div class="description font-la">Expert Consulter</div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6 mt-30">
                <div class="counter-area__item counter-area__item-three  d-flex align-items-center">
                    <div class="icon color-primary">
                        <i class="icon-coffee-2"></i>
                    </div>

                    <div class="text text-center">
                        <div class="number fw-600 color-primary"><span class="counter">96</span>+</div>
                        <div class="description font-la">Cup Of Cofee</div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6 mt-30">
                <div class="counter-area__item counter-area__item-three d-flex align-items-center">
                    <div class="icon color-primary">
                        <i class="icon-teamwork-1"></i>
                    </div>

                    <div class="text text-center">
                        <div class="number fw-600 color-primary"><span class="counter">3225</span>+</div>
                        <div class="description font-la">Client Satisfaction</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- delivery end -->

<!-- blog-news start -->

<section class="blog-news pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden" style="background-image: url({{asset('home/img/home-3/blog-new-bg.png')}});">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9">
                <div class="blog-news__content">
                    <span class="sub-title fw-500 color-primary text-uppercase mb-sm-10 mb-xs-5 mb-15 d-block"><img src="{{asset('home/img/team-details/badge-line.svg')}}" class="img-fluid mr-10" alt=""> Blog & News</span>
                    <h2 class="title color-d_black">Our Latest <span>Blog & News</span></h2>
                </div>
            </div>

        </div>

        <div class="blog-news__bottom mt-65 mt-sm-50 mt-xs-40">
            <div class="row mb-minus-30">

                <div class="col-xl-12 col-md-12 col-12">
                    <div class="blog-item mb-30">
                        <rssapp-wall id="38kEBNRCi1vuK60z"></rssapp-wall>
                        <script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog-news end -->

<!-- footer start -->
<footer class="footer-1 overflow-hidden">
    <div class="footer-top mb-xs-5 mb-sm-10 mb-md-15 mb-lg-20 mb-25 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="single-footer-wid site_info_box">
                        <a href="{{url('/')}}" class="d-block mb-20">
                            <img src="{{asset('home/images/'.$web->logo)}}" alt="">
                        </a>

                        <div class="description font-la color-white">
                            <p>
                                {{$siteName}} remains your steadfast companion, offering not just investment opportunities but a holistic
                                approach to financial well-being. With a global vision and a local impact, we continue to shape
                                the future of finance, one successful investment at a time.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6 col-xl-3">
                <div class="single-footer-wid contact_widget">
                    <h4 class="wid-title mb-30 color-white">Working Time</h4>

                    <div class="contact-wrapper pt-30 pr-30 pb-30 pl-30">
                        <div class="wid-contact pb-30 mb-25">
                            <ul>

                                <li>
                                    <div class="icon">
                                        <i class="far fa-clock"></i>
                                    </div>

                                    <div class="contact-info font-la color-white">
                                        <p>Mon - Sat / 24 Hours/p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="social-profile">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- /.col-lg-3 - single-footer-wid -->

            <div class="col-md-6 col-xl-2">
                <div class="single-footer-wid pl-xl-10 pl-50">
                    <h4 class="wid-title mb-30 color-white">Quick Link</h4>

                    <ul>
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('about')}}">About</a></li>

                    </ul>
                </div>
            </div> <!-- /.col-lg-2 - single-footer-wid -->

            <div class="col-md-6 col-xl-2">
                <div class="single-footer-wid pl-xl-10 pl-50">
                    <h4 class="wid-title mb-30 color-white">Services</h4>

                    <ul>
                        @foreach($injected->getServices() as $servi)
                            <li><a href="{{route('service.details',['id'=>$servi->id])}}">{{$servi->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div> <!-- /.col-lg-2 - single-footer-wid -->


        </div>
    </div>

    <div class="footer-bottom overflow-hidden">
        <div class="container">
            <div class="footer-bottom-content d-flex flex-column flex-md-row justify-content-between align-items-center">
                <div class="coppyright text-center text-md-start">
                    &copy; {{date('Y')}} <a href="{{url('/')}}">{{$siteName}}</a> | All Rights Reserved.
                </div>

                <div class="footer-bottom-list last_no_bullet">
                    <ul>
                        <li><a href="{{url('terms')}}">Terms & Conditions</a></li>
                        <li><a href="{{url('privacy')}}">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->

<!--  ALl JS Plugins
====================================== -->
<script src="{{asset('home/js/jquery.min.js')}}"></script>
<script src="{{asset('home/js/modernizr.min.js')}}"></script>
<script src="{{asset('home/js/jquery.easing.js')}}"></script>
<script src="{{asset('home/js/popper.min.js')}}"></script>
<script src="{{asset('home/js/bootstrap.min.js')}}"></script>
<script src="{{asset('home/js/slick.min.js')}}"></script>
<script src="{{asset('home/js/scrollUp.min.js')}}"></script>
<script src="{{asset('home/js/counterup.min.js')}}"></script>
<script src="{{asset('home/js/jquery.sticky-kit.js')}}"></script>
<script src="{{asset('home/js/magnific-popup.min.js')}}"></script>
<script src="{{asset('home/js/jquery.easypiechart.min.js')}}"></script>
<script src="{{asset('home/js/active.js')}}"></script>
</body>
</html>

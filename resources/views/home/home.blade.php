@extends('home.base')
@section('content')


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
                                <li>Real Estate</li>
                                <li>Mining</li>
                                <li>Quality</li>
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
                <div class="row mb-minus-30 justify-content-center">
                    @foreach($packages as $package)
                        @inject('option','App\Defaults\Custom')
                        <div class="col-xl-4 col-md-6">
                            <div class="pricing__card d-flex flex-column justify-content-between mb-30 overflow-hidden">
                                <div class="pricing__card-header">
                                    <h3 class="title color-d_black">{{$package->name}}</h3>
                                    <div class="price color-white mb-30 mb-sm-25 mb-xs-15 overflow-hidden">
                                        {{$package->roi}}%
                                        <span>/{{$option->getReturnType($package->returnType)}}</span></div>
                                </div>
                                <div class="pricing__card-body">
                                    <ul>
                                        <li><i class="fal fa-check-square"></i>
                                            Price: ${{number_format($package->minAmount,2)}} - @if($package->isUnlimited !=1)
                                                ${{number_format($package->maxAmount,2)}}
                                            @else
                                                Unlimited
                                            @endif
                                        </li>
                                        <li><i class="fal fa-check-square"></i>
                                            Profit return: {{$package->numberOfReturns*$package->roi}}% {{$option->getReturnType($package->returnType)}}
                                        </li>
                                        <li><i class="fal fa-check-square"></i> Contract Duration: {{$package->Duration}}</li>
                                        <li><i class="fal fa-check-square"></i> Referral Bonus: {{$package->referral}}%</li>
                                        <li><i class="fal fa-check-square"></i> 24/7 System Monitoring</li>
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
                        <h2 class="title color-d_black">{{$siteName}} <span>Clients Feedback</span></h2>
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
                                            <h5 class="name fw-500 text-uppercase color-d_black">Bm Ashik</h5>
                                            <span class="position font-la fw-500 color-d_black"> <img src="{{asset('home/img/testimonial/asana.png')}}" alt></a></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="description font-la mb-40 mb-md-35 mb-sm-30 mb-xs-25">
                                    <p>"{{$siteName}} has been a game-changer for my investments. The combination of AI precision and a diverse portfolio has not only safeguarded my wealth but propelled it to new heights. Trustworthy, innovative, and truly a partner in financial success."</p>
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
                                            <img src="https://ui-avatars.com/api/?name=Johnathan+A.&rounded=true" class="img-fluid" alt="">
                                        </div>

                                    </div>
                                </div>

                                <div class="description font-la mb-40 mb-md-35 mb-sm-30 mb-xs-25">
                                    <p>"As someone new to investing, {{$siteName}} provided the guidance I needed. The team's dedication to educating
                                        clients sets them apart. From understanding Forex to exploring green investments, they made the
                                        complex seem simple. Grateful for their expertise!"</p>
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
                                            <img src="https://ui-avatars.com/api/?name=Richards+J.&rounded=true" class="img-fluid" alt="">
                                        </div>

                                    </div>
                                </div>

                                <div class="description font-la mb-40 mb-md-35 mb-sm-30 mb-xs-25">
                                    <p>"I never thought investing could be this personalized and rewarding. {{$siteName}}'s tailored strategies aligned perfectly with my retirement goals. Their commitment to staying ahead of market trends is evident, making them my go-to choice for securing my financial future."</p>
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


    <!-- delivery start -->

    <section class="delivery__wrapper  section-padding bg-center bg-cover overflow-hidden" style="background-image: url({{asset('home/img/home-4/bg_01.png')}});">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="section-title text-white">
                        <h2 class="text-white">From Strategy to Delivery<span> On Time Every Time</span></h2>
                        <p class="text-white mt-15 mb-30">
                            Because trading and investing comes with its risks, we have taken neccessary care to seeing that
                            everything goes as planned. Our strategies are out of this world.
                        </p>
                    </div>
                </div>
                <div class="col-xl-6 text-end">
                    <div class="video_btn">
                        <div class="theme-btn-wrapper bg-primary">
                            <a href="#" class="popup-video text-white" data-effect="mfp-move-from-top"><i class="far fa-play"></i></a>
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
                            <div class="number fw-600 color-primary"><span class="counter">57</span>k+</div>
                            <div class="description font-la">Successful Investments</div>
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
                            <div class="description font-la">Expert Staff</div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6 mt-30">
                    <div class="counter-area__item counter-area__item-three  d-flex align-items-center">
                        <div class="icon color-primary">
                            <i class="icon-coffee-2"></i>
                        </div>

                        <div class="text text-center">
                            <div class="number fw-600 color-primary"><span class="counter">96</span>M+</div>
                            <div class="description font-la">Withdrawals paid</div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6 mt-30">
                    <div class="counter-area__item counter-area__item-three d-flex align-items-center">
                        <div class="icon color-primary">
                            <i class="icon-teamwork-1"></i>
                        </div>

                        <div class="text text-center">
                            <div class="number fw-600 color-primary"><span class="counter">64</span>K+</div>
                            <div class="description font-la">Clients</div>
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

@endsection

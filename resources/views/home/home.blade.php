@extends('home.base')
@section('content')

    <!-- Start Main Banner Area -->
    <section class="main-banner-area main-banner-area-two">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-text">
                        <h1>World’s Leading AI-powered Investment Company</h1>
                        <p>Embark on a journey to financial excellence with <strong>{{$siteName}}</strong>, the world's leading AI-powered investment company. Elevate your investments with cutting-edge technology, expert strategies, and a global perspective. Your financial future, redefined.</p>
                        <div class="banner-btn">
                            <a class="default-btn" href="{{route('register')}}">
                                Get Started
                            </a>
                            <a class="default-btn" href="{{route('login')}}">
                                Login
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-main-img banner-one-main-img">
                        <img src="{{asset('home/img/home-two-banner/banner-two-main-img.png')}}" alt="Image">
                    </div>
                    <div class="banner-img">
                        <img class="wow fadeInDown" data-wow-delay=".1s" src="{{asset('home/img/home-two-banner/banner-two-shape/1.png')}}" alt="Image">
                        <div class="wow fadeInDown" data-wow-delay=".3s">
                            <div class="square-img">
                                <img class="wow fadeInDown" data-wow-delay=".3s" src="{{asset('home/img/home-two-banner/banner-two-shape/2.png')}}" alt="Image">
                            </div>
                        </div>
                        <img class="wow fadeInDown" data-wow-delay=".6s" src="{{asset('home/img/home-two-banner/banner-two-shape/3.png')}}" alt="Image">
                        <div class="wow zoomIn" data-wow-delay=".9s">
                            <div class="circle-img">
                                <img  src="{{asset('home/img/home-two-banner/banner-two-shape/4.png')}}"  alt="Image">
                            </div>
                        </div>
                        <img src="{{asset('home/img/home-two-banner/banner-two-shape/5.png')}}" alt="Image">
                        <img class="wow fadeInDown" data-wow-delay=".6s" src="{{asset('home/img/home-two-banner/banner-two-shape/6.png')}}" alt="Image">
                        <img class="wow fadeInDown" data-wow-delay=".6s" src="{{asset('home/img/home-two-banner/banner-two-shape/7.png')}}" alt="Image">
                        <img class="wow fadeInRight" data-wow-delay=".9s" src="{{asset('home/img/home-two-banner/banner-two-shape/8.png')}}" alt="Image">
                        <img class="wow fadeInRight" data-wow-delay=".9s" src="{{asset('home/img/home-two-banner/banner-two-shape/9.png')}}" alt="Image">
                        <img class="wow fadeInRight" data-wow-delay="1s" src="{{asset('home/img/home-two-banner/banner-two-shape/10.png')}}" alt="Image">
                    </div>
                </div>
            </div>
        </div>
        <div class="over-shape">
            <img src="{{asset('home/img/home-one-banner/banner-one-shape/1.png')}}" alt="Image">
            <img src="{{asset('home/img/home-one-banner/banner-one-shape/2.png')}}" alt="Image">
            <img src="{{asset('home/img/home-one-banner/banner-one-shape/3.png')}}" alt="Image">
        </div>
    </section>
    <!-- End Main Banner Area -->

    <!-- Start features Area -->
    <section class="features-area mt-minus-70 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 p-0">
                    <div class="single-features">
                        <i class="flaticon-cloud-computing-1"></i>
                        <h3>AI-Powered Trading Revolution</h3>
                        <p>
                            Dive into the future of finance with {{$siteName}}'s groundbreaking AI-powered trading solutions. Our
                            sophisticated algorithms analyze market trends in real-time, empowering you with unparalleled insights. Experience the next level of precision and profitability in your investments.
                        </p>

                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 p-0">
                    <div class="single-features">
                        <i class="flaticon-engineer"></i>
                        <h3>Diversify and Prosper</h3>
                        <p>{{$siteName}} is your gateway to a diversified investment portfolio. From Forex trading to medical cannabis, we offer a spectrum of opportunities. Navigate the dynamic landscape of stocks, explore the stability of retirement planning, and embrace the potential of precious metals. Your journey to financial prosperity starts here.</p>

                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0 p-0">
                    <div class="single-features">
                        <i class="flaticon-success"></i>
                        <h3>Global Vision, Local Impact</h3>
                        <p>Discover the world of financial possibilities with {{$siteName}}. Our global perspective meets local impact as we navigate the realms of oil and gas investments. Join us in shaping the energy frontier while securing your financial legacy. At {{$siteName}}, your investments transcend borders, guided by AI innovation and a commitment to your success.</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End features Area -->

    <!-- Start About Area -->
    <section class="about-area pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{asset('home/img/about-img-three.png')}}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <span>About Us</span>
                        <h2>We make it possible using revolutionary solutions</h2>
                        <p>Welcome to {{$siteName}}, where financial innovation meets investment excellence. Founded with a vision to redefine wealth creation, we stand at the forefront of the financial industry, combining cutting-edge technology with seasoned expertise. Our journey began with a commitment to empower individuals to navigate the complexities of the financial landscape, and today, {{$siteName}} stands as a beacon of trust and success in the world of investments.</p>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <ul>
                                    <li>
                                        <i class="flaticon-checked"></i>
                                        Advanced caching
                                    </li>
                                    <li>
                                        <i class="flaticon-checked"></i>
                                        Unlimited  solutions
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <ul>
                                    <li>
                                        <i class="flaticon-checked"></i>
                                        24/7 Free extra support
                                    </li>
                                    <li>
                                        <i class="flaticon-checked"></i>
                                        Optimized stack
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a class="default-btn" href="{{url('about')}}">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Area -->

    <!-- Start What We Offer Area -->
    <section class="offer-area offer-area-two pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Services</span>
                <h2>Our Professionals Services For You</h2>
            </div>
            <div class="row">
                @foreach($services as $service)
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-offer">
                            <i class="flaticon-chip"></i>
                            <h3>{{$service->title}}</h3>
                            <p>{{$service->short}}</p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <div class="offer-shape">
            <img src="{{asset('home/img/shape/offer-shape/1.png')}}" alt="Image">
            <img src="{{asset('home/img/shape/offer-shape/2.png')}}" alt="Image">
            <img src="{{asset('home/img/shape/offer-shape/3.png')}}" alt="Image">
            <img src="{{asset('home/img/shape/offer-shape/4.png')}}" alt="Image">
            <img src="{{asset('home/img/shape/offer-shape/5.png')}}" alt="Image">
            <img src="{{asset('home/img/shape/offer-shape/5.png')}}" alt="Image">
            <img src="{{asset('home/img/shape/offer-shape/6.png')}}" alt="Image">
        </div>
    </section>
    <!-- End What We Offer Area -->

    <!-- Start Pricing Area -->
    <section class="pricing-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>What We Offer</span>
                <h2>Our Plans For You</h2>
            </div>
            <div class="tab quote-list-tab">

                <div class="tab_content">
                    <div class="tabs_item">
                        <div class="row justify-content-center">
                            @foreach($packages as $package)
                                @inject('option','App\Defaults\Custom')
                                <div class="col-lg-4 col-sm-6">
                                    <div class="single-pricing">
                                        <div class="pricing-top-heading">
                                            <h3>{{$package->name}}</h3>
                                        </div>
                                        <span>{{$package->numberOfReturns*$package->roi}}%<sub>/{{$option->getReturnType($package->returnType)}}</sub></span>
                                        <ul>
                                            <li>
                                                <i class="flaticon-checked-1"></i>
                                                Price: ${{number_format($package->minAmount,2)}} - @if($package->isUnlimited !=1)
                                                    ${{number_format($package->maxAmount,2)}}
                                                @else
                                                    Unlimited
                                                @endif
                                            </li>
                                            <li>
                                                <i class="flaticon-checked-1"></i>
                                                Profit return: {{$package->numberOfReturns*$package->roi}}% {{$option->getReturnType($package->returnType)}}
                                            </li>
                                            <li>
                                                <i class="flaticon-checked-1"></i>
                                                Contract Duration: {{$package->Duration}}
                                            </li>
                                            <li>
                                                <i class="flaticon-checked-1"></i>
                                                Referral Bonus: {{$package->referral}}%
                                            </li>
                                        </ul>
                                        <a class="default-btn" href="{{route('register')}}">
                                            Get Started
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Pricing Area -->

    <!-- Start Business Area -->
    <section class="business-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="business-content">
                        <h2>Plan for the future with {{$siteName}}</h2>
                    </div>
                    <div class="single-business">
                        <i class="flaticon-chip"></i>
                        <h3>Strategic Wealth Planning</h3>
                        <p>At {{$siteName}}, we believe in more than just investing; we believe in strategic wealth planning. Our team of experts collaborates with you to craft a personalized roadmap for financial success. From short-term gains to long-term legacies, we meticulously plan every step, ensuring your investments align with your aspirations. Join us in redefining the art of wealth creation through strategic planning and astute decision-making.</p>
                    </div>
                    <div class="single-business">
                        <i class="flaticon-blockchain"></i>
                        <h3>Discover Your Financial Horizon</h3>
                        <p>Embark on a personalized financial journey with {{$siteName}}, where we help you uncover the vast potential of your financial horizon. Our tailored strategies and innovative solutions are designed to align with your unique goals, ensuring a path to prosperity that's as individual as you are. Let {{$siteName}} be your compass as you navigate towards a secure and rewarding financial future.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 counter-nth">
                            <div class="single-counter">
                                <h2>
                                    <span class="odometer" data-count="100">00</span> <span class="target">M+</span>
                                </h2>
                                <p>Payouts made</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 counter-nth">
                            <div class="single-counter">
                                <h2>
                                    <span class="odometer" data-count="90">00</span> <span class="target">+</span>
                                </h2>
                                <p>Staff</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 counter-nth">
                            <div class="single-counter">
                                <h2>
                                    <span class="odometer" data-count="80">00</span> <span class="target">k+</span>
                                </h2>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 counter-nth">
                            <div class="single-counter">
                                <h2>
                                    <span class="odometer" data-count="5">00</span> <span class="target">+</span>
                                </h2>
                                <p>Awards Won</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Business Area -->

    <!-- Start Client Area -->
    <section class="client-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>Testimonial</span>
                <h2>What users Say About Us</h2>
            </div>
            <div class="client-wrap owl-carousel owl-theme">
                <div class="single-client">
                    <i class="quotes flaticon-left-quotes-sign"></i>
                    <p>"{{$siteName}} has been a game-changer for my investments. The combination of AI precision and a diverse portfolio has not only safeguarded my wealth but propelled it to new heights. Trustworthy, innovative, and truly a partner in financial success."</p>
                    <ul>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                    </ul>
                    <div class="client-img">
                        <img src="https://ui-avatars.com/api/?name=Johnathan+W.&rounded=true" alt="Image">
                        <h3>Johnathan W</h3>
                    </div>
                </div>
                <div class="single-client">
                    <i class="quotes flaticon-left-quotes-sign"></i>
                    <p>"I never thought investing could be this personalized and rewarding. {{$siteName}}'s tailored strategies aligned perfectly with my retirement goals. Their commitment to staying ahead of market trends is evident, making them my go-to choice for securing my financial future."</p>
                    <ul>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                    </ul>
                    <div class="client-img">
                        <img src="https://ui-avatars.com/api/?name=Sophia+R.&rounded=true" alt="Image">
                        <h3>Sophia R.</h3>
                    </div>
                </div>
                <div class="single-client">
                    <i class="quotes flaticon-left-quotes-sign"></i>
                    <p>"As someone new to investing, {{$siteName}} provided the guidance I needed. The team's dedication to educating
                        clients sets them apart. From understanding Forex to exploring green investments, they made the
                        complex seem simple. Grateful for their expertise!"</p>
                    <ul>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                    </ul>
                    <div class="client-img">
                        <img src="https://ui-avatars.com/api/?name=David+K.&rounded=true" alt="Image">
                        <h3>David K.</h3>
                    </div>
                </div>
                <div class="single-client">
                    <i class="quotes flaticon-left-quotes-sign"></i>
                    <p>"{{$siteName}}'s global perspective is refreshing. The foray into oil and gas investments appealed to my adventurous
                        side. Their commitment to making a positive impact while maximizing returns resonates with me. Proud
                        to be part of the {{$siteName}} success story."</p>
                    <ul>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                    </ul>
                    <div class="client-img">
                        <img src="https://ui-avatars.com/api/?name=Olivia+M.&rounded=true" alt="Image">
                        <h3>Olivia M.</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Client Area -->


    <!-- Strat News Area -->
    <section class="news-area pb-70">
        <div class="container">
            <div class="section-title">
                <span>News</span>
                <h2>Our Recent News</h2>
            </div>
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="single-news">
                        <rssapp-wall id="38kEBNRCi1vuK60z"></rssapp-wall>
                        <script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End News Area -->


    <!-- Start Brand Area -->
    <div class="brand-area pb-70">
        <div class="container">
            <div class="brand-list">
                <div class="single-brand">
                    <a href="#">
                        <img src="{{asset('home/img/brand/1.png')}}" alt="Image">
                    </a>
                </div>
                <div class="single-brand">
                    <a href="#">
                        <img src="{{asset('home/img/brand/2.png')}}" alt="Image">
                    </a>
                </div>
                <div class="single-brand">
                    <a href="#">
                        <img src="{{asset('home/img/brand/3.png')}}" alt="Image">
                    </a>
                </div>
                <div class="single-brand">
                    <a href="#">
                        <img src="{{asset('home/img/brand/4.png')}}" alt="Image">
                    </a>
                </div>
                <div class="single-brand">
                    <a href="#">
                        <img src="{{asset('home/img/brand/5.png')}}" alt="Image">
                    </a>
                </div>
                <div class="single-brand">
                    <a href="#">
                        <img src="{{asset('home/img/brand/6.png')}}" alt="Image">
                    </a>
                </div>
                <div class="single-brand">
                    <a href="#">
                        <img src="{{asset('home/img/brand/7.png')}}" alt="Image">
                    </a>
                </div>
                <div class="single-brand">
                    <a href="#">
                        <img src="{{asset('home/img/brand/8.png')}}" alt="Image">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Brand Area -->

@endsection

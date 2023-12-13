@extends('home.base')
@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>{{$pageName}} </h2>
                <ul>
                    <li>
                        <a href="{{url('/')}}">
                            Home
                        </a>
                    </li>
                    <li>{{$pageName}} </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start About Area -->
    <section class="about-area pb-100" style="margin-top: 5rem;">
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Area -->

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

@endsection

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Most of the retail financial markets traders spending a time finding for
    the best strategies which will make them to be the best traders of financial markets but
    their strategies didn't work, Struggling to get someone to support and mentor them to the
    dreams of becoming like other pro traders in financial markets, instead they are taught to
    drive a car without a side mirrors, mmmhh is it possible?? Actually No!.">


    <title>{{ config('app.name', 'Proplus.net') }}</title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('images/icon.jpeg') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Styles -->
    <style>
        /* Footer styles */

        .carousel-image {
            height: 30em;
        }

        .carousel-item::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            /* Set the desired opacity value */
            z-index: 1;
        }

        .carousel-caption {
            color: #fff;
            /* Customize the caption text color */
            z-index: 2;
            left: 50px;
            top: 20px;
        }

        .footer {
            background-color: #F8F8F8;
            ;
            color: #0f0f0f;
            padding: 30px 0;
            text-align: center;
            font-size: 14px;
            line-height: 1.5;
        }

        .footer-logo {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .footer-links {
            list-style: none;
            padding: 0;
            margin: 20px 0;
        }

        .footer-links li {
            display: inline-block;
            margin: 0 15px;
        }

        .footer-links a {
            color: #0d0d0d;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: #020202;
        }

        .footer-social-icons {
            margin-top: 20px;
        }

        .footer-social-icons a {
            display: inline-block;
            margin-right: 15px;
            color: #000000;
            font-size: 18px;
            transition: color 0.3s ease;
        }

        .footer-social-icons a:hover {
            color: #000000;
        }

        .footer-copyright {
            margin-top: 20px;
            font-size: 12px;
        }

        .admin {
            text-decoration: none;
            color: green;
        }

        .admin:hover {
            color: rgb(250, 250, 250);
            text-decoration: none;

        }

        .navbar-padding {
            margin-left: 20px;
        }

        .navbar {
            box-shadow: 0px 8px 8px -6px rgba(0, 0, 0, .5);
        }

        #homePage {
            padding-top: 50px;
        }

        .title-slideshow {
            font-weight: 500;
            font-size: 35px;
            text-align: justify;
            display: flex;
        }

        .paragraph-slideshow {
            text-align: justify;
            display: flex;
        }

        .card {
            background: #fff;
            box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
            border: 1;
            border-radius: 0.1rem;
        }

        .title-card {
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 600;
            font-size: 20px;
            color: green;
        }

        .aside_image {
            height: 100px;
            width: 200px;
        }

        .custom-btn {
            background-color: white;
            color: green;
            transition: background-color 0.3s;
            border: 1px solid green;
        }

        .custom-btn:hover {
            background-color: green;
            color: white;
        }

        .about-section {
            position: relative;
            padding: 120px 0px;
        }

        .about-section .content-column {
            position: relative;
            margin-bottom: 40px;
        }

        .about-section .content-column .inner-column {
            position: relative;
            padding-top: 10px;
            padding-right: 10px;
        }

        .about-section .content-column .text {
            position: relative;
            color: #777777;
            font-size: 15px;
            line-height: 2em;
            margin-bottom: 40px;
        }

        .about-section .content-column .email {
            position: relative;
            color: #252525;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .about-section .image-column {
            position: relative;
            margin-bottom: 50px;
        }

        .about-section .image-column .inner-column {
            position: relative;
            padding: 40px 40px 0px 0px;
            margin-left: 50px;
        }

        .about-section .image-column .inner-column:after {
            position: absolute;
            content: '';
            right: 0px;
            top: 0px;
            left: 40px;
            bottom: 100px;
            z-index: -1;
            border: 2px solid green;
        }

        .about-section .image-column .inner-column .image {
            position: relative;
        }

        .about-section .image-column .inner-column .image:before {
            position: absolute;
            content: '';
            left: -50px;
            bottom: -50px;
            width: 299px;
            height: 299px;
            background: url(img/pattern-2.png) no-repeat;
        }

        .about-section .image-column .inner-column .image img {
            position: relative;
            width: 100%;
            display: block;
        }

        .about-section .image-column .inner-column .image .overlay-box {
            position: absolute;
            left: 40px;
            bottom: 48px;
        }

        .about-section .image-column .inner-column .image .overlay-box .year-box {
            position: relative;
            color: green;
            font-size: 24px;
            font-weight: 700;
            line-height: 1.4em;
            padding-left: 125px;
        }

        .about-section .image-column .inner-column .image .overlay-box .year-box .number {
            position: absolute;
            left: 0px;
            top: 0px;
            width: 110px;
            height: 110px;
            color: green;
            font-size: 68px;
            font-weight: 700;
            line-height: 105px;
            text-align: center;
            background-color: #ffffff;
            border: 1px solid green;
        }


        .about-section .btn-style-three:before {
            position: absolute;
            content: '';
            left: 10px;
            top: 10px;
            z-index: -1;
            right: -10px;
            bottom: -10px;
            background: url(https://i.ibb.co/DKn55Qz/pattern-1.jpg) repeat;
        }

        .about-section .btn-style-three:hover {
            color: #ffffff;
            background: green;
        }

        .about-section .btn-style-three {
            position: relative;
            line-height: 24px;
            color: #252525;
            font-size: 15px;
            font-weight: 700;
            background: none;
            display: inline-block;
            padding: 11px 40px;
            background-color: #ffffff;
            text-transform: capitalize;
            border: 2px solid green;
            font-family: 'Arimo', sans-serif;
        }

        .sec-title2 {
            color: green;
        }

        .sec-title {
            position: relative;
            padding-bottom: 40px;
        }

        .sec-title .title {
            position: relative;
            color: #d9;
            font-size: 18px;
            font-weight: 700;
            padding-right: 50px;
            margin-bottom: 15px;
            display: inline-block;
            text-transform: capitalize;
        }

        .sec-title .title:before {
            position: absolute;
            content: '';
            right: 0px;
            bottom: 7px;
            width: 40px;
            height: 1px;
            background-color: #bbbbbb;
        }

        @media only screen and (max-width: 600px) {
            .carousel-image {
                height: 20em;
            }

            .row.clearfix {
                display: block;
            }

            .content-column,
            .image-column {
                width: 100%;
                text-align: center;
                padding: 0 10px;
            }

            .image-column {
                margin-top: 20px;
            }

            .text {
                font-size: 12px;
                line-height: 16px;
            }

            .year-box {
                font-size: 4px;
                line-height: 6px;
                margin-left: -50px;
            }

            .about-section .image-column .inner-column .image .overlay-box .year-box .number {
                position: flex;
                left: 0px;
                top: 0px;
                width: 90px;
                height: 90px;
                color: green;
                font-size: 60px;
                font-weight: 700;
                line-height: 80px;
                text-align: center;
                background-color: #ffffff;
                border: 1px solid green;
            }

            .about-section .image-column .inner-column .image .overlay-box .year-box {
                position: relative;
                color: green;
                font-size: 20px;
                font-weight: 700;
                line-height: 1.2em;
                padding-left: 100px;
            }

        }

        section {
            padding: 60px 0;
            min-height: 100vh;
        }

        a,
        a:hover,
        a:focus,
        a:active {
            text-decoration: none;
            outline: none;
        }

        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .site-heading h2 {
            display: block;
            font-weight: 700;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .site-heading h2 span {
            color: #00a01d;
        }

        .site-heading h4 {
            display: inline-block;
            padding-bottom: 20px;
            position: relative;
            text-transform: capitalize;
            z-index: 1;
        }

        .site-heading h4::before {
            background: #00a01d none repeat scroll 0 0;
            bottom: 0;
            content: "";
            height: 2px;
            left: 50%;
            margin-left: -25px;
            position: absolute;
            width: 50px;
        }

        .site-heading {
            margin-bottom: 60px;
            overflow: hidden;
            margin-top: -5px;
        }

        .carousel-shadow .owl-stage-outer {
            margin: -15px -15px 0;
            padding: 15px;
        }

        .we-offer-area .our-offer-carousel .owl-dots .owl-dot span {
            background: #ffffff none repeat scroll 0 0;
            border: 2px solid;
            height: 15px;
            margin: 0 5px;
            width: 15px;
        }

        .we-offer-area .our-offer-carousel .owl-dots .owl-dot.active span {
            background: #00a01d none repeat scroll 0 0;
            border-color: #00a01d;
        }

        .we-offer-area .item {
            background: #ffffff none repeat scroll 0 0;
            border-left: 2px solid #00a01d;
            -moz-box-shadow: 0 0 10px #cccccc;
            -webkit-box-shadow: 0 0 10px #cccccc;
            -o-box-shadow: 0 0 10px #cccccc;
            box-shadow: 0 0 10px #cccccc;
            overflow: hidden;
            padding: 30px;
            position: relative;
            z-index: 1;
        }

        .we-offer-area.text-center .item {
            background: #ffffff none repeat scroll 0 0;
            border: medium none;
            padding: 67px 40px 64px;
        }

        .we-offer-area.text-center .item i {
            background: #00a01d none repeat scroll 0 0;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            color: #ffffff;
            font-size: 40px;
            height: 80px;
            line-height: 80px;
            position: relative;
            text-align: center;
            width: 80px;
            z-index: 1;
            transition: all 0.35s ease-in-out;
            -webkit-transition: all 0.35s ease-in-out;
            -moz-transition: all 0.35s ease-in-out;
            -ms-transition: all 0.35s ease-in-out;
            -o-transition: all 0.35s ease-in-out;
            margin-bottom: 25px;
        }

        .we-offer-area.text-center .item i::after {
            border: 2px solid #00a01d;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            content: "";
            height: 90px;
            left: -5px;
            position: absolute;
            top: -5px;
            width: 90px;
            z-index: -1;
            transition: all 0.35s ease-in-out;
            -webkit-transition: all 0.35s ease-in-out;
            -moz-transition: all 0.35s ease-in-out;
            -ms-transition: all 0.35s ease-in-out;
            -o-transition: all 0.35s ease-in-out;
        }

        .we-offer-area.item-border-less .item {
            border: medium none;
        }

        .we-offer-area .our-offer-items.less-carousel .equal-height {
            margin-bottom: 30px;
        }

        .we-offer-area.item-border-less .item .number {
            font-family: "Poppins", sans-serif;
            font-size: 50px;
            font-weight: 900;
            opacity: 0.1;
            position: absolute;
            right: 30px;
            top: 30px;
        }

        .our-offer-carousel.center-active .owl-item:nth-child(2n) .item,
        .we-offer-area.center-active .single-item:nth-child(2n) .item {
            background: #00a01d none repeat scroll 0 0;
        }

        .our-offer-carousel.center-active .owl-item:nth-child(2n) .item i,
        .our-offer-carousel.center-active .owl-item:nth-child(2n) .item h4,
        .our-offer-carousel.center-active .owl-item:nth-child(2n) .item p,
        .we-offer-area.center-active .single-item:nth-child(2n) .item i,
        .we-offer-area.center-active .single-item:nth-child(2n) .item h4,
        .we-offer-area.center-active .single-item:nth-child(2n) .item p {
            color: #ffffff;
        }

        .we-offer-area .item i {
            color: #00a01d;
            display: inline-block;
            font-size: 60px;
            margin-bottom: 20px;
        }

        .we-offer-area .item h4 {
            font-weight: 600;
            text-transform: capitalize;
        }

        .we-offer-area .item p {
            margin: 0;
        }

        .we-offer-area .item i,
        .we-offer-area .item h4,
        .we-offer-area .item p {
            transition: all 0.35s ease-in-out;
            -webkit-transition: all 0.35s ease-in-out;
            -moz-transition: all 0.35s ease-in-out;
            -ms-transition: all 0.35s ease-in-out;
            -o-transition: all 0.35s ease-in-out;
        }

        .we-offer-area .item::after {
            background: #00a01d none repeat scroll 0 0;
            content: "";
            height: 100%;
            left: -100%;
            position: absolute;
            top: 0;
            transition: all 0.35s ease-in-out;
            -webkit-transition: all 0.35s ease-in-out;
            -moz-transition: all 0.35s ease-in-out;
            -ms-transition: all 0.35s ease-in-out;
            -o-transition: all 0.35s ease-in-out;
            width: 100%;
            z-index: -1;
        }

        .we-offer-area .item:hover::after {
            left: 0;
        }

        .we-offer-area .item:hover i,
        .we-offer-area .item:hover h4,
        .we-offer-area .item:hover p {
            color: #ffffff !important;
        }

        .we-offer-area.text-center .item:hover i::after {
            border-color: #ffffff !important;
        }

        .we-offer-area.text-center .item:hover i {
            background-color: #ffffff !important;
            color: #00a01d !important;
        }

        .we-offer-area.text-left .item i {
            background: #00a01d none repeat scroll 0 0;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            color: #ffffff;
            display: inline-block;
            font-size: 60px;
            height: 100px;
            line-height: 100px;
            margin-bottom: 30px;
            position: relative;
            width: 100px;
            z-index: 1;
            text-align: center;
        }

        .we-offer-area.text-left .item i::after {
            border: 2px solid #00a01d;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            content: "";
            height: 120px;
            left: -10px;
            position: absolute;
            top: -10px;
            width: 120px;
        }

        .pull-right {
            float: right;
        }

        .pull-left {
            float: left;
        }

        footer {
            background-color: rgb(249, 249, 249);
        }
    </style>


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <div class="navbar-padding"> <a class="navbar-brand" href="#"><img
                        src="{{ asset('images/logo.png') }}" style="width: 50px; height: 50px;" alt="nav-logo"></a>
                <a class="navbar-brand" href="#"><img src="{{ asset('images/logo-name.png') }}"
                        style="width: 150px; height: 25px;" alt="nav-logo"></a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#service">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                                <button class="btn btn-outline-success">
                                    <a href="{{ url('/dashboard') }}" class="admin"
                                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                </button>
                            @else
                                <button class="btn btn-outline-success">
                                    <a class="admin" href="{{ route('login') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500 underline">Admin</a>
                                </button>
                                @if (Route::has('register'))
                                    {{-- <a href="{{ route('register') }}"
                                        class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a> --}}
                                @endif
                            @endauth
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </nav>
    <!----slideshow Section-->
    <div id="homePage" class="container">
        <h3>Recent Articles</h3>
        <div id="carouselExampleCaptions" class="carousel slide mb-4" data-bs-ride="carousel">
            <!-- Carousel code here -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                @if ($posts)
                    @foreach ($posts as $post)
                        <div class="carousel-item @if ($loop->first) active @endif">
                            <img class="carousel-image" style="background-size: cover; width:100%; object-fit: cover;"
                                class="d-block w-100" src="{{ Storage::url($post->featured_image) }}"
                                alt="{{ $post->title }}" srcset="">
                            <div class="carousel-caption">
                                <h5 class="title-slideshow">{{ $post->title }}</h5>
                                <p class="paragraph-slideshow">{{ $post->content }}</p>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Content below the carousel -->
        <div class="row">
            <div class="col">
                <!-- Place your content here -->
                <!-- New product section -->
                <div style="padding-top: 50px;" class="container">
                    <div class="row">
                        @foreach ($posts as $post)
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card" style="width: 100%; padding: 10px;">
                                    <img class="card-img-top" style="object-fit: cover; height: 10em;"
                                        src="{{ Storage::url($post->featured_image) }}" alt="{{ $post->title }}">
                                    <div class="card-body">
                                        <h4 class="card-title" style="color: green; font-weight: 700;">
                                            {{ $post->title }}</h4>
                                        @php
                                            $words = explode(' ', $post->content);
                                            $excerpt = implode(' ', array_slice($words, 0, 10));
                                        @endphp
                                        <p class="card-text excerpt">{{ $excerpt }}</p>
                                        <a href="#" class="btn btn-primary custom-btn">Read more</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            {!! $posts->links('pagination::bootstrap-5', [
                                'class' => 'pagination justify-content-center custom-pagination',
                                'previous' => '&laquo; Prev',
                                'next' => 'Next &raquo;',
                            ]) !!}
                        </div>
                    </div>
                </div>

                <script>
                    $(document).ready(function() {
                        $('.excerpt').each(function() {
                            var fullContent = $(this).text();
                            var excerpt = fullContent.split(' ').slice(0, 30).join(' ');
                            $(this).text(excerpt);
                        });
                    });
                </script>


                <!-- End New product section -->
            </div>
        </div>
    </div>

    <section id="about" class="about-section">
        <div class="container">
            <div class="row clearfix">

                <!--Content Column-->
                <div class="content-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <div class="title">About Us</div>
                            <h3>We Are The Leader In <br> The Entertainment</h3>
                        </div>
                        <div class="text">Most of the retail financial markets traders spending a time finding for
                            the best strategies which will make them to be the best traders of financial markets but
                            their strategies didn't work, Struggling to get someone to support and mentor them to the
                            dreams of becoming like other pro traders in financial markets, instead they are taught to
                            drive a car without a side mirrors, mmmhh is it possible?? Actually No!</div>
                        <div class="email">Request Quote: <span class="theme_color">freequote@gmail.com</span></div>
                        <a href="about.html" class="theme-btn btn-style-three">Read More</a>
                    </div>
                </div>

                <!--Image Column-->
                <div class="image-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="{{ asset('images/about.jpg') }}" alt="about image">
                            <div class="overlay-box">
                                <div class="year-box"><span class="number">5</span>Years <br> Experience <br> Working
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Our service-->
    <section id="service" class="we-offer-area text-center bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-heading text-center">
                        <h2>What we <span>Offer</span></h2>
                        <h4>Lorem Ipsum is simply dummy text</h4>
                    </div>
                </div>
            </div>
            <div class="row our-offer-items less-carousel">
                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <i class="fas fa-pen-fancy"></i>
                        <h4>Project creation</h4>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </div>
                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <i class="fas fa-dharmachakra"></i>
                        <h4>Software Development</h4>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </div>
                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <i class="fas fa-tasks"></i>
                        <h4>Poject Management</h4>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </div>
                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <i class="fas fa-tachometer-alt"></i>
                        <h4>Porject Impliment</h4>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </div>
                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <i class="fas fa-recycle"></i>
                        <h4>Software Update</h4>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </div>
                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <i class="fas fa-headset"></i>
                        <h4>24/7 Support</h4>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </section>




    <footer id="footer" class="text-black text-center text-lg-start">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row mt-4">
                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                    <h4 class="text-uppercase mb-4"><img src="{{ asset('images/footer-logo.png') }}"
                            style="width: 9em" alt="footer-logo"></h4>

                    <div class="mt-4">
                        <!-- Facebook -->
                        <a href="#" style="margin: 25px; color:black;"><svg xmlns="http://www.w3.org/2000/svg"
                                width="27" height="27" fill="currentColor" class="bi bi-facebook"
                                viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                            </svg></a>
                        <!-- Twitter -->
                        <a href="#" style="margin: 25px; color:black;"><svg xmlns="http://www.w3.org/2000/svg"
                                width="27" height="27" fill="currentColor" class="bi bi-twitter"
                                viewBox="0 0 16 16">
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                            </svg></a>
                        <!-- Instagram -->
                        <a href="#" style="margin: 25px; color:black;"><svg xmlns="http://www.w3.org/2000/svg"
                                width="27" height="27" fill="currentColor" class="bi bi-instagram"
                                viewBox="0 0 16 16">
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                            </svg></a>
                        <!-- Linkedin -->
                    </div>
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h4 class="text-uppercase mb-4 pb-1"></h4>

                    <ul style="list-style-type: none;" class="fa-ul">
                        <li class="mb-3">
                            <a style="font-size: 25px; font-weight: 500;">About Us</a>
                        </li>
                        <li class="mb-3">
                            <a style="font-size: 25px; font-weight: 500;">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h4 class="text-uppercase mb-4 pb-1"></h4>

                    <ul class="fa-ul">
                        <li style="list-style-type: none;" class="mb-3">
                            <a style="font-size: 25px; font-weight: 500;">Terms of service</a>
                        </li>
                        <li style="list-style-type: none;" class="mb-3">
                            <a style="font-size: 25px; font-weight: 500;">Contact Us</a>
                        </li>

                    </ul>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->

        <div class="text-center p-3">
            &copy; 2023 Copyright: All rights reserved
            <a style="font-family:Arial, Helvetica, sans-serif; font-weight:700; color:#292929; text-decoration:none;"
                href="/"> proPlus
            </a>
        </div>
        <!-- Copyright -->
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>

 --}}


</body>

</html>

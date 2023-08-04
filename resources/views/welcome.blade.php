@extends('layout')

@section('content')

    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <div class="navbar-padding"> <a class="navbar-brand" href="#"><img src="{{ asset('images/logo.png') }}"
                        style="width: 50px; height: 50px;" alt="nav-logo"></a>
                <a class="navbar-brand" href="#"><img src="{{ asset('images/logo-name.png') }}"
                        style="width: 150px; height: 25px;" alt="nav-logo"></a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link active" aria-current="page" href="#service" href="#service">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contact" tabindex="-1" aria-disabled="true"> <i
                                class="bi bi-person-lines-fill"> Contacts</i></a>
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
                                        <a href="product" class="btn btn-primary custom-btn">View more</a>
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
                        <h4>Allow us to help you achieve your dream</h4>
                    </div>
                </div>
            </div>
            <div class="row our-offer-items less-carousel">
                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <i class="fas fa-dharmachakra"></i>
                        <h4>Technical analysis course</h4>
                        <p>
                            Are you looking to become a savvy trader who can confidently navigate the financial markets?
                            Our Technical Analysis Course is your gateway to mastering the art of market analysis and
                            making informed trading decisions.
                        </p>
                    </div>
                </div>
                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <i class="bi bi-bar-chart-line"></i>
                        <h4>Fundamental analysis course</h4>
                        <p>
                            Are you eager to make sound investment decisions in the ever-changing financial landscape?
                            Our Fundamental Analysis Course is your gateway to understanding the true value of stocks
                            and assets, empowering you to make informed and profitable investment choices.
                        </p>
                    </div>
                </div>
                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <i class="bi bi-bank"></i>
                        <h4>intermarket analysis course</h4>
                        <p>
                            Take your trading skills to the next level by understanding the
                            interconnectedness of global markets? Our Intermarket Analysis Course is your key to
                            deciphering the intricate relationships between various asset classes, empowering you to
                            make well-informed trading decisions.
                        </p>
                    </div>
                </div>
                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <i class="fas fa-tasks"></i>
                        <h4>Project Implementation</h4>
                        <p>
                            Are you ready to see your vision turn into reality? Our Project Implementations expertise
                            will take your projects to new heights, delivering successful outcomes on time and within
                            budget.
                        </p>
                    </div>
                </div>
                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <i class="bi bi-segmented-nav"></i>
                        <h4>sentiment analysis course</h4>
                        <p>
                            Our Sentiment Analysis Course is your gateway to understanding the emotions,
                            opinions, and attitudes expressed in text, unlocking a world of valuable insights for
                            businesses and organizations.
                        </p>
                    </div>
                </div>
                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <i class="bi bi-graph-up-arrow"></i>
                        <h4>24/7 Customer Support</h4>
                        <p>
                            At ProPlus, we take your satisfaction seriously, which is why our dedicated customer support
                            team is available round-the-clock, 24/7. Whenever you need assistance or have a question,
                            we're just a call, email, or chat away!
                        </p>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </section>
@endsection

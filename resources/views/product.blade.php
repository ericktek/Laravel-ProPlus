@extends('layout')

@section('content')
    <!----slideshow Section-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <div class="navbar-padding"> <a class="navbar-brand" href="/"><img src="{{ asset('images/logo.png') }}"
                        style="width: 50px; height: 50px;" alt="nav-logo"></a>
                <a class="navbar-brand" href="/"><img src="{{ asset('images/logo-name.png') }}"
                        style="width: 150px; height: 25px;" alt="nav-logo"></a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
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

    <div style="margin-top: 25px; margin-bottom: 25px;" class="container">
        <h1>Products</h1>
        <a style="color: green; text-decoration: none;" href="contact">Let know what's can i help you to day </a>
        <div class=""row>
            @foreach ($posts as $post)
                <div class="col">
                    <div style="margin-top: 25px;" class="card" style="width: 18rem;">
                        <img class="card-img-top" style="object-fit: cover;" src="{{ Storage::url($post->featured_image) }}"
                            alt="{{ $post->title }}">
                        <div class="card-body">
                            <h4 class="card-title" style="color: green; font-weight: 700;">
                                {{ $post->title }}</h4>
                            <p class="card-text">{{ $post->content }}</p>
                            <a style="text-decoration: none; background-color: white; border-radius: 2px solid green; border-radius: 2px; border: 1px solid green; color: green"
                                class="btn btn-primary custom-btn">Created
                                at: {{ $post->created_at }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endsection
</div>

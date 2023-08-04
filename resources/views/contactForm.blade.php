@extends('layout')

@section('content')

    <Style>
        .form-main {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

            .main-wrapper {
                border-radius: 10px;
                padding: 45px;
                width: 40%;
                box-shadow: 0 0 5px 5px #00000020;
                backdrop-filter: blur(5px);
                background-color: #ffffff85;

                @media screen and (max-width: 991px) {
                    width: 70%;
                }

                @media screen and (max-width: 767px) {
                    width: 90%;
                }

                .form-head {
                    font-size: 30px;
                    line-height: 40px;
                    font-weight: 600;
                    text-align: center;
                    margin: 0px 0 25px;
                }

                .form-wrapper {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    flex-direction: column;
                    gap: 15px;

                    .form-card {
                        position: relative;
                        width: 100%;

                        .form-input {
                            padding: 20px 25px 15px;
                            width: 100%;
                            border: 1px solid $color-black;
                            border-radius: 5px;
                            background: white;
                            outline: none;
                            font-size: 20px;
                            line-height: 30px;
                            font-weight: 400;
                            box-sizing: border-box;

                            &:valid,
                            &:focus {
                                border: 1px solid $color-gray;
                            }

                            &:valid~.form-label,
                            &:focus~.form-label {
                                color: $color-gray;
                                top: 30%;
                                transform: translateY(-70%);
                                font-size: 13px;
                                line-height: 23px;
                            }

                            &:-webkit-autofill,
                            &:-webkit-autofill:hover,
                            &:-webkit-autofill:focus,
                            &:-webkit-autofill:active {
                                transition: background-color 9999s ease-in-out 0s;
                            }

                            &::-webkit-outer-spin-button,
                            &::-webkit-inner-spin-button {
                                -webkit-appearance: none;
                                margin: 0;
                            }
                        }

                        .form-label {
                            position: absolute;
                            left: 25px;
                            top: 50%;
                            transform: translateY(-50%);
                            pointer-events: none;
                            transition: 0.3s;
                            margin: 0;
                            font-size: 18px;
                            line-height: 28px;
                            font-weight: 500;
                        }

                        .form-textarea {
                            padding: 20px 25px 15px;
                            width: 100%;
                            border: 1px solid $color-black;
                            border-radius: 5px;
                            background: white;
                            outline: none;
                            font-size: 20px;
                            line-height: 30px;
                            font-weight: 400;
                            display: -webkit-box;
                            -webkit-line-clamp: 3;
                            -webkit-box-orient: vertical;
                            overflow: hidden;
                            resize: none;
                            box-sizing: border-box;

                            &:valid,
                            &:focus {
                                border: 1px solid $color-gray;
                            }

                            &:valid~.form-textarea-label,
                            &:focus~.form-textarea-label {
                                color: $color-gray;
                                top: 18%;
                                transform: translateY(-82%);
                                font-size: 13px;
                                line-height: 23px;
                            }

                            &:-webkit-autofill,
                            &:-webkit-autofill:hover,
                            &:-webkit-autofill:focus,
                            &:-webkit-autofill:active {
                                transition: background-color 9999s ease-in-out 0s;
                            }
                        }

                        .form-textarea-label {
                            position: absolute;
                            left: 25px;
                            top: 30%;
                            transform: translateY(-70%);
                            pointer-events: none;
                            transition: 0.3s;
                            margin: 0;
                            font-size: 18px;
                            line-height: 28px;
                            font-weight: 500;
                        }
                    }
                }
            }
        }

        .btn-wrap {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 16px 0 0;
        }

        .btn-wrap button {
            padding: 0 32px;
            font-size: 18px;
            line-height: 48px;
            border: 1px solid transparent;
            font-weight: 600;
            border-radius: 6px;
            transition: all 0.5s ease;
            cursor: pointer;
            box-shadow: 0 0 5px 5px #00000020;
        }

        .btn-wrap button:hover {
            border: 1px solid #000;
            background: transparent;

        }
    </Style>
    <!----Navbar Section-->
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

    <div style="margin-top: 25px; margin-bottom:25px;" class="form-main">
        <div class="main-wrapper">
            <h2 style="color: green" class="form-head">Message Us 24/7</h2>

            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif

            <form class="form-wrapper" method="POST" action="{{ route('contact.store') }}" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-card">
                    <input class="form-input" type="text" name="full_name" required="required" />
                    <label class="form-label" for="full_name">Full Name</label>
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>

                <div class="form-card">
                    <input class="form-input" type="email" name="email" required="required" />
                    <label class="form-label" for="email">Email</label>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif

                </div>

                <div class="form-card">
                    <input class="form-input" type="number" name="phone" required="required" />
                    <label class="form-label" for="phone_number">Phone number</label>
                    @if ($errors->has('phone'))
                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                    @endif
                </div>

                <div class="form-card">
                    <textarea class="form-textarea" maxlength="420" rows="3" name="message" required="required"></textarea>
                    <label class="form-textarea-label" for="comment">Comment</label>

                </div>
                <div class="btn-wrap">
                    <button style="color: green"> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                            fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                            <path
                                d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z" />
                        </svg> &nbsp;
                        Sent </button>
                </div>
            </form>
        </div>
    </div>

@endsection

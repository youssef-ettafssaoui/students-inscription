<!DOCTYPE html>
<html lang="en">
@php
    $setting = App\Models\SiteSetting::find(1);
    $seo = App\Models\Seo::find(1);
@endphp

<head>
    <title>{{ $seo->meta_title }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Lingua project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/styles/bootstrap4/bootstrap.min.css') }}">
    <link href="{{ asset('front/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/styles/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/styles/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/styles/courses.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/styles/courses_responsive.css') }}">

    <link href="{{ asset('front/plugins/video-js/video-js.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/styles/instructors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/styles/instructors_responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/styles/course.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/styles/course_responsive.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('front/styles/blog.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/styles/blog_responsive.css') }}">
    <script defer src="{{ asset('js/app.js') }}"></script>
</head>

<body>

    <div class="super_container">

        <!-- Header -->

        <header class="header">

            <!-- Top Bar -->
            <div class="top_bar">
                <div class="top_bar_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                                    <div class="top_bar_phone">
                                        <span class="top_bar_title"><i class="fa fa-phone"></i> Téléphone :
                                            {{ $setting->phone_one }}
                                        </span>
                                        <span class="top_bar_title"><i class="fa fa-fax"></i> Fax :
                                            {{ $setting->phone_two }}</span>
                                    </div>
                                    <div class="top_bar_right ml-auto">
                                        <!-- Social -->
                                        <div class="top_bar_social">
                                            <span class="top_bar_title social_title"></span>
                                            <ul>
                                                @if (!Auth::check())
                                                    <li><a href="{{ route('login') }}"><i class="fa fa-sign-in"
                                                                aria-hidden="true"></i>
                                                            S'IDENTIFIER</a></li>
                                                    <li><a href="/register"><i class="fa fa-users"
                                                                aria-hidden="true"></i>ESPACE ETUDIANTS</a></li>
                                                    <li><a href="{{ route('gerant.register') }}"><i class="fa fa-user"
                                                                aria-hidden="true"></i>ESPACE GÉRANTS</a></li>
                                                @else
                                                    <li>
                                                        <a href="{{ route('home') }}"><i class="fa fa-home"
                                                                aria-hidden="true"></i>DASHBOARD</a>
                                                    </li> |
                                                    <li>
                                                        <a href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                            <i class="fa fa-sign-out"
                                                                aria-hidden="true"></i>DÉCONNECTION
                                                        </a>

                                                        <form id="logout-form" action="{{ route('logout') }}"
                                                            method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                    </li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Content -->
            <div class="header_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_content d-flex flex-row align-items-center justify-content-start">
                                <div class="logo_container mr-auto">
                                    <center>
                                        <a href="/">
                                            <h6>{{ $setting->ecole_name }}</h6>
                                        </a>
                                    </center>
                                </div>
                                <nav class="main_nav_contaner">
                                    <ul class="main_nav">
                                        <li class="active"><a href="/">ACCUEIL</a></li>
                                        <li><a href="/formations/allformations">NOS FORMATIONS</a></li>
                                        <li><a href="/gerants">GÉRANTS</a></li>
                                        <li><a href="/">CONTACTEZ-NOUS</a></li>
                                    </ul>
                                </nav>
                                <div class="header_content_right ml-auto text-right">
                                    <div class="header_search">
                                        <div class="search_form_container">
                                            <form action="{{ route('allformations') }}" id="search_form"
                                                class="search_form trans_400">

                                                <input type="search" name="search"
                                                    class="input-group form_input trans_400 header_search_input"
                                                    placeholder="Chercher Formations" required="required">
                                                <div class="search_button">
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <!-- Hamburger -->

                                    <div class="user"><a href="#"><i class="fa fa-user"
                                                aria-hidden="true"></i></a></div>
                                    <div class="hamburger menu_mm">
                                        <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>

        <!-- Menu -->

        <div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
            <div class="menu_close_container">
                <div class="menu_close">
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="search">
                <form action="#" class="header_search_form menu_mm">
                    <input type="search" class="search_input menu_mm" placeholder="Search" required="required">
                    <button
                        class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
                        <i class="fa fa-search menu_mm" aria-hidden="true"></i>
                    </button>
                </form>
            </div>
            <nav class="menu_nav">
                <ul class="menu_mm">
                    <li class="menu_mm"><a href="/">ACCUEIL</a></li>
                    <li class="menu_mm"><a href="/allformations">NOS FORMATIONS</a></li>
                    <li class="menu_mm"><a href="/gerants">GÉRANTS</a></li>
                    <li class="menu_mm"><a href="contact.html">CONTACTEZ-NOUS</a></li>
                </ul>
            </nav>
            <div class="menu_extra">
                <div class="menu_phone"><span class="menu_title">Téléphone : {{ $setting->phone_one }}</span></div>
                <div class="menu_social">
                    <ul>
                        <li>
                            <a href="{{ $setting->facebook }}">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $setting->youtube }}">
                                <i class="fa fa-youtube" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $setting->linkedin }}">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

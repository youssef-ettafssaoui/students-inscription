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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet" />
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
                                                    <li><a href="{{ route('login') }}" data-toggle="modal"
                                                            data-target="#exampleModal">
                                                            <i class="fa fa-sign-in" aria-hidden="true"></i>
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

        <style>
            a {
                text-decoration: none;
                color: rgb(4, 0, 119);
            }

            * {
                box-sizing: border-box;
            }
        </style>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Se Connecter</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-12 col-form-label text-md-left">{{ __('Adresse E-Mail') }}</label>

                                <div class="col-md-12">
                                    <input id="email" type="email"
                                        placeholder="Veuillez saisir votre Adresse E-mail"
                                        class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                        name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-12 col-form-label text-md-left">{{ __('Mot de Passe') }}</label>

                                <div class="col-md-12">
                                    <input id="password" placeholder="Veuillez saisir votre Mot de Passe"
                                        type="password"
                                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                        name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"
                                style="color: #fff;">&nbsp;</i>Fermer</button>
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-sign-in" style="color: #fff;">&nbsp;</i> Se Connecter
                        </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

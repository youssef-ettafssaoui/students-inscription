@extends('layouts.master')
@section('content')
    <!-- Home -->

    <div class="home">
        <div class="breadcrumbs_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <ul class="breadcrumbs_list d-flex flex-row align-items-center justify-content-start">
                            <li><a href="/">Accueil</a></li>
                            <li><a href="/gerants">Gérants</a></li>
                            <li><a href="#">{{ $gerant->gname }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Intro -->

    <div class="intro">
        <div class="intro_background parallax-window" data-parallax="scroll"
            data-image-src="{{ asset('front/images/introo.png') }}" data-speed="0.8">
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="intro_container d-flex flex-column align-items-start justify-content-end">
                        <div class="intro_content">
                            <div class="intro_title">{{ strtoupper($gerant->gname) }}</div>
                            <div class="intro_meta">
                                <div class="intro_instructors">
                                    <h2>{{ strtoupper($gerant->position) }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Course -->

    <div class="course">
        <div class="course_top"></div>
        <div class="container">
            <div class="row row-lg-eq-height">

                <!-- Panels -->
                <div class="col-lg-4">

                    <!-- Description -->
                    <div class="tab_panel description active">
                        <div class="panel_title">Éducations :</div>
                        <div class="panel_text">
                            <p>{{ $gerant->education }}</p>
                        </div>
                    </div>

                </div>

                <!-- Sidebar -->
                <div class="col-lg-8">
                    <div class="sidebar">
                        <div class="sidebar_background"></div>
                        <div class="sidebar_top"><a href="#"></a></div>
                        <div class="sidebar_content">

                            <!-- Features -->
                            <div class="sidebar_section features">
                                <div class="sidebar_title">Détails de l'Enseignant :</div>
                                <div class="features_content">
                                    <ul class="features_list">

                                        <div class="text-center">
                                            @if (empty($gerant->logo))
                                                <img class="rounded" width="50%" src="{{ asset('avatar/man.jpg') }}">
                                            @else
                                                <img class="rounded-circle" width="50%"
                                                    src="{{ asset('uploads/logo') }}/{{ $gerant->logo }}">
                                            @endif
                                        </div><br>


                                        <!-- Feature -->
                                        <li class="d-flex flex-row align-items-start justify-content-start">
                                            <div class="feature_title"><i class="fa fa-building"
                                                    aria-hidden="true"></i><span>Travaille à :</span></div>
                                            <div class="feature_text ml-auto">{{ $gerant->etablissement->etablissement }}
                                            </div>
                                        </li>


                                        <!-- Feature -->
                                        <li class="d-flex flex-row align-items-start justify-content-start">
                                            <div class="feature_title"><i class="fa fa-map-marker"
                                                    aria-hidden="true"></i><span>D'origine :</span></div>
                                            <div class="feature_text ml-auto">{{ $gerant->origin }}</div>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                            <!-- You may like -->
                            <div class="sidebar_section like">
                                <div class="sidebar_title">Les Formations de l'Enseignant :</div>
                                <div class="like_items">
                                    @if (count($gerant->formations) > 0)
                                        @foreach ($gerant->formations as $formation)
                                            <!-- Like Item -->
                                            <div class="like_item d-flex flex-row align-items-end justify-content-start">
                                                <div class="like_title_container">
                                                    <div class="like_title">
                                                        <a
                                                            href="{{ route('formations.show', [$formation->id, $formation->slug]) }}">
                                                            {{ $formation->title }}
                                                        </a>
                                                    </div>
                                                    <div class="like_subtitle">
                                                        {{ $formation->created_at->diffForHumans() }}
                                                    </div>
                                                </div>
                                                <div class="like_price ml-auto">{{ $formation->type }}</div>
                                            </div>
                                        @endforeach
                                    @else
                                        <p class="text-danger"><i class="fa fa-info"></i> &nbsp;
                                            Pas de formations Publié pour ce Moment par M/Mme.
                                            <b>{{ strtoupper($gerant->gname) }}</b> !
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

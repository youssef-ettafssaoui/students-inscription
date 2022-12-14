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
                            <li><a href="/formations">Nos Formations</a></li>
                            <li>{{ $formation->title }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Intro -->

    <div class="intro">
        <div class="intro_background parallax-window" data-parallax="scroll"
            data-image-src="{{ asset('front/images/formation-header.png') }}" data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="intro_container d-flex flex-column align-items-start justify-content-end">
                        <div class="intro_content">
                            <div class="intro_price">{{ $formation->type }}</div>
                            <div class="intro_title">
                                <h3> {{ $formation->title }}</h3>

                            </div>
                            <div class="intro_meta">
                                <div class="intro_image">
                                    @if (empty($formation->gerant->logo))
                                        <img src="{{ asset('front/images/intro_user.jpg') }}">
                                    @else
                                        <img src="{{ asset('uploads/logo') }}/{{ $formation->gerant->logo }}">
                                    @endif
                                </div>
                                <div class="intro_instructors">Gérant :
                                    <a href="">{{ strtoupper($formation->gerant->gname) }}</a>

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
                <div class="col-lg-6">
                    <div class="tab_panels">

                        <!-- Tabs -->
                        <div class="course_tabs_container">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="tabs d-flex flex-row align-items-center justify-content-start">
                                            <div class="tab active">Description</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Description -->
                        <div class="tab_panel description active">
                            <div class="panel_title">A Propos de Cette Formation</div>
                            <div class="panel_text">
                                <p>{{ $formation->description }}</p>
                            </div>
                            <br> <br>
                            <div class="panel_title">La Procédure de Séléction pour Cette Formation</div>
                            <div class="panel_text">
                                <p>{{ $formation->texte }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-6" id="app">
                    <div class="sidebar">
                        <div class="sidebar_background"></div>
                        <div class="sidebar_top"></div>
                        <div class="sidebar_content">

                            <!-- Features -->
                            <div class="sidebar_section features">
                                <div class="sidebar_title">Caractéristiques Formation</div>
                                <div class="features_content">
                                    <ul class="features_list">

                                        <!-- Feature -->
                                        <li class="d-flex flex-row align-items-start justify-content-start">
                                            <div class="feature_title"><i class="fa fa-clock-o"
                                                    aria-hidden="true"></i><span>Duration</span></div>
                                            <div class="feature_text ml-auto text-primary font-weight-bold">
                                                {{ $formation->masse_horraire }} Heures
                                            </div>
                                        </li>

                                        <!-- Feature -->
                                        <li class="d-flex flex-row align-items-start justify-content-start">
                                            <div class="feature_title"><i class="fa fa-book"
                                                    aria-hidden="true"></i><span>Type</span></div>
                                            <div class="feature_text ml-auto text-primary font-weight-bold">
                                                {{ $formation->type }}</div>
                                        </li>

                                        <!-- Feature -->
                                        <li class="d-flex flex-row align-items-start justify-content-start">
                                            <div class="feature_title"><i class="fa fa-home"
                                                    aria-hidden="true"></i><span>Etablissement</span></div>
                                            <div class="feature_text ml-auto text-primary font-weight-bold">
                                                {{ $formation->gerant->etablissement->slogan }}
                                            </div>
                                        </li>

                                        <!-- Feature -->
                                        <li class="d-flex flex-row align-items-start justify-content-start">
                                            <div class="feature_title"><i class="fa fa-envelope"
                                                    aria-hidden="true"></i><span>Email de Contact</span></div>
                                            <div class="feature_text ml-auto text-primary font-weight-bold">
                                                {{ $formation->gerant->etablissement->email }}
                                            </div>
                                        </li>

                                        <!-- Feature -->
                                        <li class="d-flex flex-row align-items-start justify-content-start">
                                            <div class="feature_title"><i class="fa fa-link"
                                                    aria-hidden="true"></i><span>Website</span></div>
                                            <div class="feature_text ml-auto text-primary font-weight-bold">
                                                <a href="{{ $formation->gerant->etablissement->website }}"
                                                    class="badge badge-primary">Consulter</a>
                                            </div>
                                        </li>


                                        <!-- Feature -->
                                        <li class="d-flex flex-row align-items-start justify-content-start">
                                            <div class="feature_title"><i class="fa fa-id-badge"
                                                    aria-hidden="true"></i><span>Gérant de Formation</span></div>
                                            <div class="feature_text ml-auto text-primary font-weight-bold">
                                                {{ $formation->gerant->gname }}</div>
                                        </li>

                                        <!-- Feature -->
                                        <li class="d-flex flex-row align-items-start justify-content-start">
                                            <div class="feature_title"><i class="fa fa-briefcase"
                                                    aria-hidden="true"></i><span>Métier du Gérant</span></div>
                                            <div class="feature_text ml-auto text-primary font-weight-bold">
                                                {{ $formation->gerant->position }}</div>
                                        </li>

                                        <!-- Feature -->
                                        <li class="d-flex flex-row align-items-start justify-content-start">
                                            <div class="feature_title"><i class="fa fa-phone"
                                                    aria-hidden="true"></i><span>Contact du Gérant</span></div>
                                            <div class="feature_text ml-auto text-primary font-weight-bold">
                                                {{ $formation->gerant->phone }}</div>
                                        </li>

                                        <!-- Feature -->
                                        <li class="d-flex flex-row align-items-start justify-content-start">
                                            <div class="feature_title"><i class="fa fa-calendar"
                                                    aria-hidden="true"></i><span>Dernier Délai</span></div>
                                            <div class="feature_text ml-auto text-danger font-weight-bold">
                                                {{ $formation->last_date }}
                                            </div>
                                        </li>


                                    </ul>
                                </div>
                            </div>

                            <!-- Cert -->
                            <div class="sidebar_section cert">
                                <div class="sidebar_title">Actions</div>
                                <div class="cert_image">
                                    @if (Auth::check() && Auth::user()->role->name === 'etudiant')
                                        @if (!$formation->checkApplication())
                                            <apply-component :formationid={{ $formation->id }}></apply-component>
                                        @else
                                            <center><span style="color: red;">Vous avez déja demandé cette Formation</span>
                                            </center>
                                        @endif
                                        <br>
                                        <favorite-component :formationid={{ $formation->id }}
                                            :favorited={{ $formation->checkSaved() ? 'true' : 'false' }}>
                                        </favorite-component>
                                    @else
                                        <p class="text-center text-danger">Veuillez vous connecter pour demander Cette
                                            Formation</p>
                                    @endif
                                </div>
                            </div>

                            <!-- You may like -->
                            <div class="sidebar_section like">
                                <div class="sidebar_title">Vous Pouvez aimer</div>
                                <div class="like_items">
                                    @foreach ($formationRecommendations as $formationRecommendation)
                                        <!-- Like Item -->
                                        <a
                                            href="{{ route('formations.show', [$formationRecommendation->id, $formationRecommendation->slug]) }}">
                                            <div class="like_item d-flex flex-row align-items-end justify-content-start">
                                                <div class="like_title_container">
                                                    <div class="like_title">{{ $formationRecommendation->title }}</div>
                                                    <div class="like_subtitle">
                                                        {{ $formationRecommendation->gerant->gname }}
                                                    </div>
                                                </div>
                                                <div class="like_price ml-auto">
                                                    {{ $formationRecommendation->type }}
                                                </div>
                                            </div>
                                        </a>
                                        <br />
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

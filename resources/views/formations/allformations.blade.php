@extends('layouts.master')
@section('content')

    <!-- Home -->

    <div class="home">

    </div>

    <!-- Blog -->

    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="welcome_title">Nos Formations :</div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ route('allformations') }}">
                        <div class="input-group mb-3">
                            <input type="text" name="search" class="input-group form_input"
                                placeholder="Titre Formation ou Nom du Gérant" required="required">
                            <br>
                            <div class="input-group-append">
                                <button type="submit" class="form_button">Chercher</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

            <!-- Blog Posts -->

            <div class="row blog_row">
                @if (count($formations) > 0)
                    @foreach ($formations as $formation)
                        <!-- Blog Post -->
                        <div class="col-lg-6">
                            <div class="blog_post">
                                <div class="blog_image"
                                    style="background-image:url({{ asset('front/images/fstg11.jpg') }})">
                                </div>
                                <div class="blog_title_container">
                                    <div class="blog_post_category"><a
                                            href="{{ route('formations.show', [$formation->id, $formation->slug]) }}">{{ $formation->gerant->gname }}
                                            - {{ $formation->gerant->position }}</a>
                                    </div>
                                    <div class="blog_post_title"><a
                                            href="{{ route('formations.show', [$formation->id, $formation->slug]) }}">{{ $formation->title }}</a>
                                    </div>
                                    <div class="blog_post_text">
                                        <p>{{ str_limit($formation->description, 150) }}</p>
                                    </div>
                                    <div class="read_more"><a
                                            href="{{ route('formations.show', [$formation->id, $formation->slug]) }}">Plus
                                            d'informations <img src="{{ asset('front/images/right.png') }}"></a></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h3 style="color: red;">Aucune Formation trouvée</h3>
                @endif



            </div>
        </div>
    </div>

@endsection

@extends('layouts.master')
@section('content')
    <div class="home"></div>
    <div class="video">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="video_content">
                        <div class="video_container_outer">
                            <div class="video_overlay d-flex flex-column align-items-start justify-content-center">
                                <div class="text-white">Être</div>
                                <div class="text-white">Le meilleur</div>
                                <div>Gérant</div>
                            </div>
                            <div class="video_container">
                                <video id="vid1" class="video-js vjs-default-skin" controls width="100%"
                                    height="100%"
                                    data-setup='{ "poster": "images/video.jpg", "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "https://youtu.be/IV3ueyrp5M4"}], "youtube": { "iv_load_policy": 1 } }'>
                                </video>
                            </div>
                        </div>
                        <div class="register_button"><a href="{{ route('gerant.register') }}">S'INSCRIRE</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Top Teachers -->

    <div class="teachers">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="section_title text-center">Nos meilleurs Enseignants dans tous les Domaines</h2>
                </div>
            </div>
            <div class="row teachers_row">
                @foreach ($gerants as $gerant)
                    <!-- Instructor -->
                    <div class="col-lg-4 col-md-6">
                        <div class="teacher d-flex flex-row align-items-center justify-content-start">
                            <div class="teacher_image">
                                <div>
                                    @if (empty($gerant->logo))
                                        <img src="{{ asset('avatar/man.jpg') }}">
                                    @else
                                        <img src="{{ asset('uploads/logo') }}/{{ $gerant->logo }}">
                                    @endif
                                </div>
                            </div>
                            <div class="teacher_content">
                                <div class="teacher_name"><a
                                        href="{{ route('gerant.index', [$gerant->id, $gerant->slug]) }}">{{ $gerant->gname }}</a>
                                </div>
                                <div class="teacher_title">{{ $gerant->position }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection

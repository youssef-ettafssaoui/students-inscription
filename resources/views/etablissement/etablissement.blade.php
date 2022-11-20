@extends('layouts.master')
@section('content')
    <div class="teachers">
        <br /> <br />
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="section_title text-center">ÉTABLISSEMENTS</h2>
                </div>
            </div>
            <div class="row teachers_row">
                @foreach ($etablissements as $etablissement)
                    <!-- Instructor -->

                    <div class="col-lg-4 col-md-6">
                        <a href="{{ $etablissement->website }}">
                            <div class="teacher d-flex flex-row align-items-center justify-content-start">
                                <div class="teacher_content">
                                    <div class="teacher_name">
                                        <h3>{{ $etablissement->slogan }}</h3>
                                    </div>
                                    <div class="teacher_title text-primary font-weight-bold">{{ $etablissement->ville }}
                                    </div>
                                    <p class="text-dark font-weight-bold" style="font-size: 13px">
                                        {{ $etablissement->etablissement }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection

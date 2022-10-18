@extends('layouts.master')
@section('content')
    <br><br><br><br><br>
    <div class="courses">
        <div class="container">
            <div class="row courses_row">

                @if (count($formations) > 0)
                    @foreach ($formations as $formation)
                        <div class="col-lg-4 course_col">

                            <div class="course">
                                <div class="course_body">
                                    <div class="course_title"><a
                                            href="{{ route('formations.show', [$formation->id, $formation->slug]) }}">{{ $formation->title }}</a>
                                    </div>
                                    <div class="course_info">
                                        <ul>
                                            <li>{{ $formation->gerant->gname }}</li>
                                            <li>{{ $formation->gerant->position }}</li>
                                        </ul>
                                    </div>
                                    <div class="course_text">
                                        <p>{{ str_limit($formation->description, 120) }}</p>
                                    </div>
                                </div>
                                <div class="course_footer d-flex flex-row align-items-center justify-content-start">
                                    <div class="course_info">
                                        <ul>
                                            <li>
                                                <i class="fa fa-clock-o"
                                                    aria-hidden="true"></i><span>&nbsp;&nbsp;{{ $formation->masse_horraire }}
                                                    Heures</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-calendar"
                                                    aria-hidden="true"></i><span>&nbsp;&nbsp;{{ $formation->created_at->diffForHumans() }}</span>
                                            </li>
                                            <li>
                                                <a href="#">{{ $formation->type }}</a>
                                            </li>

                                        </ul>
                                    </div>
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

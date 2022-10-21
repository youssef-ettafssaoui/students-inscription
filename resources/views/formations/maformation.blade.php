@extends('admin.layouts.master')

@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-book bg-primary"></i>
                    <div class="d-inline">
                        <h5>Mes Formations</h5>
                        <span>Liste</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-white"><b>Mes Formations</b></div>
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            @foreach ($formations as $formation)
                                <tr>
                                    <td>
                                        @if (empty(Auth::user()->gerant->logo))
                                            <img src="{{ asset('avatar/man.jpg') }}" width="80">
                                        @else
                                            <img src="{{ asset('uploads/logo') }}/{{ Auth::user()->gerant->logo }}"
                                                width="80">
                                        @endif

                                    </td>
                                    <td>Titre : {{ $formation->title }}
                                        <br>
                                        <i class="fa fa-clock-o"aria-hidden="true"></i>&nbsp;{{ $formation->type }}
                                    </td>
                                    <td><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;Masse Horraire :
                                        {{ $formation->masse_horraire }}</td>
                                    <td><i class="fa fa-globe"aria-hidden="true"></i>&nbsp;Date :
                                        {{ $formation->created_at->diffForHumans() }}</td>
                                    <td>
                                        <a href="{{ route('formations.show', [$formation->id, $formation->slug]) }}">
                                            <button class="btn btn-primary btn-sm" style="width: 80%;">Consulter</button>
                                        </a>
                                        <br><br>
                                        <a href="{{ route('formation.edit', [$formation->id]) }}">
                                            <button class="btn btn-dark btn-sm" style="width: 80%;">Modifier</button>
                                        </a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>


                </div>
            </div>

        </div>
    </div>
@endsection

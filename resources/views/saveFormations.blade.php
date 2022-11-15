@extends('admin.layouts.master')

@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-book bg-primary"></i>
                    <div class="d-inline">
                        <h5>Formations</h5>
                        <span>Enregistrées</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">

        <div class="col-md-10">
            @foreach ($formations as $formation)
                <div class="card">
                    <div class="card-header bg-primary text-white font-weight-bold">{{ $formation->title }} </div>
                    <div class="card-body">
                        <p class="text-primary font-weight-bold">Publié Par : {{ $formation->gerant->gname }} -
                            {{ $formation->gerant->position }} travaille à
                            {{ $formation->gerant->etablissement->etablissement }}</p>
                        <p> {{ $formation->description }}</p>
                    </div>
                    <div class="card-footer">
                        <span><a href="{{ route('formations.show', [$formation->id, $formation->slug]) }}"
                                class="btn btn-sm btn-primary">Consulter</a></span>
                        <span class="float-right badge badge-danger font-weight-bold">Dernier rendez-vous :
                            {{ $formation->last_date }}</span>
                    </div>

                </div>
                <br>
            @endforeach
        </div>
    </div>
@endsection

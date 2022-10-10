@extends('admin.layouts.master')

@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-tag bg-primary"></i>
                    <div class="d-inline">
                        <h5>Catégorie</h5>
                        <span>Ajouter Catégorie</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/home"><i class="ik ik-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('categorie.index') }}">Catégorie</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ajout</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">
            @if (Session::has('message'))
                <div class="alert bg-success alert-success text-white" role="alert">
                    {{ Session::get('message') }}
                </div>
            @endif

            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" action="{{ route('categorie.store') }}" method="post">@csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">

                                    <label for="name">Nom du Catégorie</label>
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        placeholder="Nom du Catégorie" value="{{ old('name') }}">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <a href="{{ route('categorie.index') }}" class="btn btn-danger"><i
                                            class="fa fa-undo"></i>
                                        Annuler l'Ajout</a>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-save"></i> Enregistrer la Catégorie
                                    </button>
                                </div>
                            </div>



                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@extends('admin.layouts.master')

@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-database bg-primary"></i>
                    <div class="d-inline">
                        <h5>Etablissement</h5>
                        <span>Ajouter Etablissement</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/home"><i class="ik ik-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('etablissement.index') }}">Etablissement</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ajout</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-12">
            @if (Session::has('message'))
                <div class="alert bg-success alert-success text-white" role="alert">
                    {{ Session::get('message') }}
                </div>
            @endif

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('etablissement.update', [$etablissement->id]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name">Nom Établissement</label>
                                    <input type="text" name="etablissement"
                                        class="form-control @error('etablissement') is-invalid @enderror"
                                        placeholder="Veuillez saisir le Nom d'Établissement"
                                        value="{{ $etablissement->etablissement }}">
                                    @error('etablissement')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name">Email Établissement</label>
                                    <input type="text" name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        placeholder="Veuillez saisir l'adresse email d'Établissement"
                                        value="{{ $etablissement->email }}">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name">Adresse Établissement</label>
                                    <input type="text" name="address"
                                        class="form-control @error('address') is-invalid @enderror"
                                        placeholder="Veuillez saisir l'Adresse d'Établissement"
                                        value="{{ $etablissement->address }}">
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="ville">Ville Établissement</label>
                                    <select class="form-control select" name="ville">
                                        <option value="Marrakech">Marrakech</option>
                                        <option value="Safi">Safi</option>
                                        <option value="Essaouira">Essaouira</option>
                                        <option value="Kelaa des Sraghna">Kelaa des Sraghna</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name">Slogan Établissement</label>
                                    <input type="text" name="slogan"
                                        class="form-control @error('slogan') is-invalid @enderror"
                                        placeholder="Veuillez saisir le Slogan d'Établissement"
                                        value="{{ $etablissement->slogan }}">
                                    @error('slogan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name">Website Établissement</label>
                                    <input type="text" name="website"
                                        class="form-control @error('website') is-invalid @enderror"
                                        placeholder="Veuillez saisir le Website Établissement"
                                        value="{{ $etablissement->website }}">
                                    @error('website')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name">Téléphone Établissement</label>
                                    <input type="text" name="phone"
                                        class="form-control @error('phone') is-invalid @enderror"
                                        placeholder="Veuillez saisir le Téléphone d'Établissement"
                                        value="{{ $etablissement->phone }}">
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="description">Description Établissement</label>
                                    <textarea name="description" class="form-control" placeholder="Veuillez saisir la Description d'Établissement"
                                        {{ $errors->has('description') ? ' is-invalid' : '' }}">{{ $etablissement->description }}</textarea>
                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>



                        <div class="form-group">
                            <a href="{{ route('etablissement.index') }}" class="btn btn-danger"><i
                                    class="fa fa-undo"></i>
                                Annuler Ajout</a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-save"></i> Enregistrer Établissement
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

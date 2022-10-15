@extends('admin.layouts.master')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            @if (Session::has('message'))
                <div class="alert alert-success">
                    {{ Session::get('message') }}
                </div>
            @endif

            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">Profile</h1>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-6">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Profile Details</h5>
                        </div>
                        <div class="card-body text-center">
                            @if (empty(Auth::user()->gerant->logo))
                                <img src="{{ asset('back/img/avatars/avatar-4.jpg') }}" alt="Christina Mason"
                                    class="img-fluid rounded-circle mb-2" width="128" height="128" />
                            @else
                                <img src="{{ asset('uploads/logo') }}/{{ Auth::user()->gerant->logo }}"
                                    class="img-fluid rounded-circle mb-2" width="128" height="128" />
                            @endif
                            <h5 class="card-title mb-0">{{ Auth::user()->gerant->gname }}</h5>
                            <div class="text-muted mb-2">{{ Auth::user()->gerant->position }}</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Adresse</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">{{ Auth::user()->gerant->address }}</div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Adresse</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">{{ Auth::user()->gerant->origin }}</div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Parcours</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">{{ Auth::user()->gerant->education }}</div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Téléphone</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">{{ Auth::user()->gerant->phone }}</div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Travail</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">{{ Auth::user()->gerant->work }}</div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">R.Sociaux</h6>

                                </div>
                                <div class="col-sm-9 text-primary">
                                    <a href="{{ Auth::user()->gerant->youtube }}">
                                        <i class="ik ik-youtube ik-1x"></i></a>
                                    <a href="{{ Auth::user()->gerant->faceboock }}">
                                        <i class="ik ik-facebook ik-1x"></i></a>
                                    <a href="{{ Auth::user()->gerant->instagram }}">
                                        <i class="ik ik-instagram ik-1x"></i></a>
                                    <a href="{{ Auth::user()->gerant->linkedIn }}">
                                        <i class="ik ik-linkedin ik-1x"></i></a>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Address</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ Auth::user()->gerant->phone }}
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Page</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <a href="gerant/{{ Auth::user()->gerant->slug }}">Visiter</a>
                                </div>
                            </div>
                            <hr />
                        </div>




                    </div>
                </div>

                <div class="col-md-6 col-xl-6">
                    <div class="card">
                        <div class="card-header">

                            <h5 class="card-title mb-0">Mettre à Jour vos Informations Personnelles : </h5>
                        </div>
                        <div class="card-body h-100">

                            <form action="{{ route('gerant.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Adresse</label>
                                    <input type="text" class="form-control" name="address"
                                        value="{{ Auth::user()->gerant->address }}">
                                </div>

                                <div class="form-group">
                                    <label for="">Numéro de Téléphone</label>
                                    <input type="text" class="form-control" name="phone"
                                        value="{{ Auth::user()->gerant->phone }}">
                                </div>

                                <div class="form-group">
                                    <label for="">Position Actuelle :</label>
                                    <input type="text" class="form-control" name="position"
                                        value="{{ Auth::user()->gerant->position }}">
                                </div>

                                <div class="form-group">
                                    <label for="">Etablissement de Travail</label>
                                    <input type="text" class="form-control" name="work"
                                        value="{{ Auth::user()->gerant->work }}">
                                </div>

                                <div class="form-group">
                                    <label for="">Origine :</label>
                                    <input type="text" class="form-control" name="origin"
                                        value="{{ Auth::user()->gerant->origin }}">
                                </div>

                                <div class="form-group">
                                    <label for="">Votre Parcours d'Étude</label>
                                    <textarea name="education" class="form-control"> {{ Auth::user()->gerant->education }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="">Youtube :</label>
                                    <input type="text" class="form-control" name="youtube"
                                        value="{{ Auth::user()->gerant->youtube }}">
                                </div>

                                <div class="form-group">
                                    <label for="">Faceboock :</label>
                                    <input type="text" class="form-control" name="faceboock"
                                        value="{{ Auth::user()->gerant->faceboock }}">
                                </div>

                                <div class="form-group">
                                    <label for="">Instagram :</label>
                                    <input type="text" class="form-control" name="instagram"
                                        value="{{ Auth::user()->gerant->instagram }}">
                                </div>

                                <div class="form-group">
                                    <label for="">LinkedIn :</label>
                                    <input type="text" class="form-control" name="linkedIn"
                                        value="{{ Auth::user()->gerant->linkedIn }}">
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit">Mettre à jour</button>
                                </div>

                            </form>

                            <form action="{{ route('gerant.logo') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card">
                                    <div class="card-body">
                                        <input type="file" class="form-control" name="gerant_logo"><br>
                                        <button class="btn btn-primary float-right" type="submit">Mettre à jour</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </main>
@endsection

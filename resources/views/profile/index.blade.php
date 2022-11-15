@extends('admin.layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">

                @if (empty(Auth::user()->etudiant->avatar))
                    <img src="{{ asset('avatar/man.jpg') }}" width="100" style="width: 100%;">
                @else
                    <img src="{{ asset('uploads/avatar') }}/{{ Auth::user()->etudiant->avatar }}" width="100"
                        style="width: 100%;">
                @endif

                <br><br>
                <form action="{{ route('avatar') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="card">
                        <div class="card-header bg-primary text-white font-weight-bold">Mettre à jour la photo de profil
                        </div>
                        <div class="card-body">
                            <input type="file" class="form-control" name="avatar">
                            <br>
                            <button class="btn btn-primary float-right" type="submit">Mettre à jour</button>
                            @if ($errors->has('avatar'))
                                <div class="error" style="color: red;">{{ $errors->first('avatar') }}</div>
                            @endif
                        </div>
                    </div>
                </form>

            </div>

            <div class="col-md-5">

                @if (Session::has('message'))
                    <div class="alert alert-primary">
                        {{ Session::get('message') }}
                    </div>
                @endif

                <div class="card">
                    <div class="card-header bg-primary text-white font-weight-bold">Mettre à jour votre profil</div>

                    <form action="{{ route('profile.create') }}" method="POST">
                        @csrf

                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Adresse :</label>
                                <input type="text" class="form-control" name="address"
                                    value="{{ Auth::user()->etudiant->address }}">
                                @if ($errors->has('address'))
                                    <div class="error" style="color: red;">{{ $errors->first('address') }}</div>
                                @endif

                            </div>


                            <div class="form-group">
                                <label for="">Numéro de téléphone : </label>
                                <input type="text" class="form-control" name="phone_number"
                                    value="{{ Auth::user()->etudiant->phone_number }}">
                                @if ($errors->has('phone_number'))
                                    <div class="error" style="color: red;">{{ $errors->first('phone_number') }}</div>
                                @endif
                            </div>


                            <div class="form-group">
                                <label for="">Sexe : </label><br />
                                <input type="radio" name="gender" value="Homme" required=""> Homme<br />
                                <input type="radio" name="gender" value="Femme"> Femme

                                @if ($errors->has('gender'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="form-group">
                                <label for="">Bio : </label>
                                <textarea name="bio" class="form-control">{{ Auth::user()->etudiant->bio }}</textarea>
                                @if ($errors->has('bio'))
                                    <div class="error" style="color: red;">{{ $errors->first('bio') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Mettre à jour</button>
                            </div>
                        </div>
                </div>
            </div>
            </form>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header font-weight-bold text-white bg-primary">Au propos de vous</div>
                    <div class="card-body">
                        <p>Nom : {{ Auth::user()->name }}</p>
                        <p>E-mail : {{ Auth::user()->email }}</p>
                        <p>Adresse : {{ Auth::user()->etudiant->address }}</p>
                        <p>Téléphone : {{ Auth::user()->etudiant->phone_number }}</p>
                        <p>Sexe : {{ Auth::user()->etudiant->gender }}</p>
                        <p>Bio : {{ Auth::user()->etudiant->bio }}</p>
                        <p>Membre activé depuis : {{ date('F d Y', strtotime(Auth::user()->created_at)) }}</p>

                        @if (!empty(Auth::user()->etudiant->resume))
                            <p><a href="{{ Storage::url(Auth::user()->etudiant->resume) }}">Curriculum Vitae CV</a></p>
                        @else
                            <p style="color: red;"><b>Veuillez télécharger le curriculum vitae CV</b></p>
                        @endif

                    </div>
                </div>
                <br>
                <form action="{{ route('resume') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="card">
                        <div class="card-header bg-primary text-white font-weight-bold">Mettre à jour le CV</div>
                        <div class="card-body">
                            <input type="file" class="form-control" name="resume">
                            <br>
                            <button class="btn btn-primary float-right" type="submit">Mettre à jour</button>
                            @if ($errors->has('resume'))
                                <div class="error" style="color: red;">{{ $errors->first('resume') }}</div>
                            @endif
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection

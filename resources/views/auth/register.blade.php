@extends('auth.layouts.master')

@section('content')
    <div class="container">
        <div class="signup-content">
            <div class="signup-img">
                <img src="{{ asset('auth/images/test.jpg') }}" alt="">
                <div class="signup-img-content">
                    <h2>Espace Etudiants </h2>
                    <p>Plateforme d'inscription des Étudiants !</p>
                </div>
            </div>
            <div class="signup-form">
                @if (Session::has('message'))
                    <div class="alert alert-success">
                        {{ Session::get('message') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('register') }}" class="register-form" id="register-form">
                    @csrf
                    <div class="form-row">
                        <div class="form-group">
                            <div class="form-input">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i> Nom complet
                                    d'Etudiant</label>
                                <input d="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus
                                    placeholder="Veuillez saisir votre Nom Complet" />
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-input">
                                <label for="cin"><i class="zmdi zmdi-accounts-alt material-icons-name"></i> CIN
                                    D'ETUDIANT</label>
                                <input id="cin" type="text" class="form-control @error('cin') is-invalid @enderror"
                                    name="cin" value="{{ old('cin') }}" required autocomplete="cin" autofocus
                                    placeholder="Veuillez saisir votre CIN" />
                                @error('cin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-input">
                                <label for="pass"><i class="zmdi zmdi-lock"></i> Mot de Passe</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="new-password" placeholder="Veuillez saisir votre Mot de Passe" />
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-input">
                                <label for="dob"><i class="zmdi zmdi-calendar"></i> Date de Naissance</label>
                                <input type="date" id="datepicker"
                                    class="form-control @error('dob') is-invalid @enderror" name="dob"
                                    value="{{ old('dob') }}">
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="form-input">
                                <label for="email"><i class="zmdi zmdi-account-box material-icons-name"></i> Adresse
                                    Email</label>
                                <input id="email" type="text"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus
                                    placeholder="Veuillez saisir votre Adresse Email" />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-input">
                                <label for="cne"><i class="zmdi zmdi-account-box material-icons-name"></i> CNE
                                    d'Etudiant</label>
                                <input id="cne" type="text" class="form-control @error('cne') is-invalid @enderror"
                                    name="cne" value="{{ old('cne') }}" required autocomplete="cne" autofocus
                                    placeholder="Veuillez saisir votre CNE" />
                                @error('cne')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-input">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i> Confirmer mot de Passe</label>
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password"
                                    placeholder="Veuillez Confirmer votre Mot de Passe" />
                            </div>
                        </div>
                    </div>

                    <div class="form-submit">
                        <input type="submit" name="signup" id="submit" class="submit" value="S'INSCRIRE" />
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

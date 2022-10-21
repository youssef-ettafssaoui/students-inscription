@extends('auth.layouts.master')

@section('content')
    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">
                        <center>ESPACE INSCRIPTION</center>
                    </h2>
                    <form method="POST" action="{{ route('register') }}" class="register-form" id="register-form">
                        @csrf
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input d="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                placeholder="Veuillez saisir votre Nom Complet" />
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="cin"><i class="zmdi zmdi-accounts-alt material-icons-name"></i></label>
                            <input id="cin" type="text" class="form-control @error('cin') is-invalid @enderror"
                                name="cin" value="{{ old('cin') }}" required autocomplete="cin" autofocus
                                placeholder="Veuillez saisir votre CIN" />
                            @error('cin')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="cne"><i class="zmdi zmdi-account-box material-icons-name"></i></label>
                            <input id="cne" type="text" class="form-control @error('cne') is-invalid @enderror"
                                name="cne" value="{{ old('cne') }}" required autocomplete="cne" autofocus
                                placeholder="Veuillez saisir votre CNE" />
                            @error('cne')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email"
                                placeholder="Veuillez saisir votre Adresse Email" />
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password" placeholder="Veuillez saisir votre Mot de Passe" />
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                required autocomplete="new-password" placeholder="Veuillez Confirmer votre Mot de Passe" />
                        </div>
                        <div class="form-group">
                            <label for="dob"><i class="zmdi zmdi-calendar"></i></label>
                            <input type="date" id="datepicker" class="form-control @error('dob') is-invalid @enderror"
                                name="dob" value="{{ old('dob') }}">
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit" value="S'INSCRIRE" />
                        </div>
                    </form>
                    <div class="links">
                        Déja un Memebre, Vous pouvez <a href="/login">Se Connecter</a>
                    </div>
                </div>
                <div class="signup-image">
                    <figure><img src="{{ asset('auth/images/signup-image.jpg') }}" alt="sing up image"></figure>
                </div>
            </div>
        </div>
    </section>
@endsection

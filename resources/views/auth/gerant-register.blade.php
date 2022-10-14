@extends('auth.layouts.master')

@section('content')
    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">
                        <center>ESPACE GÉRANTS</center>
                    </h2>
                    <form method="POST" action="">
                        @csrf
                        <div class="form-group">
                            <label for="gname"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input id="gname" type="text" class="form-control @error('gname') is-invalid @enderror"
                                name="gname" value="{{ old('gname') }}" required autocomplete="gname" autofocus
                                placeholder="Veuillez saisir votre Nom Complet" />
                            @error('gname')
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
                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit" value="S'INSCRIRE" />
                        </div>
                    </form>
                    <div class="links">
                        Déja un Memebre, Vous pouvez <a href="/login">Se Connecter</a>
                    </div>
                </div>
                <div class="signup-image">
                    <figure><img src="{{ asset('auth/images/signin-image.jpg') }}">
                    </figure>
                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('auth.layouts.master')

@section('content')
    <!-- Sing in  Form -->
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="{{ asset('auth/images/signin-image.jpg') }}" alt="sing up image"></figure>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">
                        <center>ESPACE CONNEXION</center>
                    </h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                placeholder="Veuillez saisir votre adresse Email" />
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password" placeholder="Veuillez saisir vot Mot de Passe" />
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit" value="Se Connecter" />
                        </div>
                    </form>
                    <div class="links">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Avez-vous oublié votre Mot de Passe ?') }}
                            </a>
                        @endif
                        <br>
                        Vous n'avez pas un Compte ? <a href="/register">Créez le Maintenant</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

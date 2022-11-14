@extends('auth.layouts.master')

@section('content')
    <div class="container">
        <div class="signup-content">
            <div class="signup-img">
                <img src="{{ asset('auth/images/test.jpg') }}" alt="">
                <div class="signup-img-content">
                    <h2>Espace Gérants </h2>
                    <p>while seats are available !</p>
                </div>
            </div>

            <div class="signup-form">
                @if (Session::has('message'))
                    <div class="alert alert-success">
                        {{ Session::get('message') }}
                    </div>
                @endif
                <form method="POST" action="" class="register-form" id="register-form">
                    @csrf
                    <div class="form-row">
                        <div class="form-group">
                            <div class="form-input">
                                <label for="gname"><i class="zmdi zmdi-account"></i> Nom Complet du Gérant</label>
                                <input id="gname" type="text"
                                    class="form-control @error('gname') is-invalid @enderror" name="gname"
                                    value="{{ old('gname') }}" required autocomplete="gname" autofocus
                                    placeholder="Veuillez saisir votre Nom Complet" />
                                @error('gname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-input">
                                <label for="email"><i class="zmdi zmdi-email"></i> Adresse Email</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email"
                                    placeholder="Veuillez saisir votre Adresse Email" />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-input">
                                <label for="address"><i class="zmdi zmdi-home"></i> Adresse de Résidence</label>
                                <input id="address" type="text"
                                    class="form-control @error('address') is-invalid @enderror" name="address"
                                    value="{{ old('address') }}" required autocomplete="address"
                                    placeholder="Veuillez saisir votre Adresse address" />
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-input">
                                <label for="origin"><i class="zmdi zmdi-google-maps"></i> Origine</label>
                                <input id="origin" type="text"
                                    class="form-control @error('origin') is-invalid @enderror" name="origin"
                                    value="{{ old('origin') }}" required autocomplete="origin"
                                    placeholder="Veuillez saisir votre Origine" />
                                @error('origin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="select-list">
                                <label for="etablissement_id"><i class="zmdi zmdi-folder-person"></i>
                                    Etablissement</label>
                                <select name="etablissement_id">
                                    @foreach (App\Models\Etablissement::all() as $etablissement)
                                        <option value="{{ $etablissement->id }}">{{ $etablissement->etablissement }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-input">
                                <label for="password"><i class="zmdi zmdi-lock"></i> Mot de passe</label>
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
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i> Confirmer Mot de Passe</label>
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password"
                                    placeholder="Veuillez Confirmer votre Mot de Passe" />
                            </div>

                            <div class="form-input">
                                <label for="phone"><i class="zmdi zmdi-phone"></i> Numéro de Téléphone</label>
                                <input id="phone" type="text"
                                    class="form-control @error('phone') is-invalid @enderror" name="phone"
                                    value="{{ old('phone') }}" required autocomplete="phone"
                                    placeholder="Veuillez saisir votre Adresse phone" />
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-input">
                                <label for="work"><i class="zmdi zmdi-folder-person"></i> Poste de Travail</label>
                                <input id="work" type="text"
                                    class="form-control @error('work') is-invalid @enderror" name="work"
                                    value="{{ old('work') }}" required autocomplete="work"
                                    placeholder="Veuillez saisir votre Poste de Travail" />
                                @error('work')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>
                    </div>
                    <div class="form-submit">
                        <input type="submit" name="signup" id="submit" class="submit" value="S'INSCRIRE" />
                    </div>
                    <span>Déja un Memebre, Vous pouvez <a href="/login">Se Connecter</a></span>
                </form>
            </div>
        </div>
    </div>
@endsection

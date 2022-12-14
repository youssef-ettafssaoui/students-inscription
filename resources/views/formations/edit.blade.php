@extends('admin.layouts.master')

@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-plus-circle bg-primary"></i>
                    <div class="d-inline">
                        <h5>Formations</h5>
                        <span>Modification</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-10">
            @if (Session::has('message'))
                <div class="alert bg-success alert-success text-white" role="alert">
                    {{ Session::get('message') }}
                </div>
            @endif

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('formation.update', [$formation->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Titre :</label>
                                    <input type="text" name="title"
                                        class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                        value="{{ $formation->title }}"
                                        placeholder="Veuillez saisir le Titre de la Formation">
                                    @if ($errors->has('title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Masse Horraire :</label>
                                    <input type="text" name="masse_horraire"
                                        class="form-control{{ $errors->has('masse_horraire') ? ' is-invalid' : '' }}"
                                        value="{{ $formation->masse_horraire }}"
                                        placeholder="Veuillez saisir la Masse Horraire de la Formation">
                                    @if ($errors->has('masse_horraire'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('masse_horraire') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="description">Description :</label>
                                    <textarea name="description" id="textarea" class="form-control"
                                        placeholder="Veuillez saisir la Description de la Formation"
                                        {{ $errors->has('description') ? ' is-invalid' : '' }}">{{ $formation->description }}</textarea>
                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="texte">Texte :</label>
                                    <textarea name="texte" class="form-control"
                                        placeholder="Veuillez saisir des informations suppl??mentaires de la Formation"
                                        {{ $errors->has('texte') ? ' is-invalid' : '' }}">{{ $formation->texte }}</textarea>
                                    @if ($errors->has('texte'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('texte') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                        </div>


                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="category">Cat??gorie :</label>
                                    <select name="categorie_id" class="form-control select">
                                        @foreach (App\Models\Categorie::all() as $cat)
                                            <option value="{{ $cat->id }}"
                                                {{ $cat->id == $formation->categorie_id ? 'selected' : '' }}>
                                                {{ $cat->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="status">Status :</label>
                                    <select class="form-control select" name="status">
                                        <option value="1"{{ $formation->status == '1' ? 'selected' : '' }}>Activ??
                                        </option>
                                        <option value="0"{{ $formation->status == '0' ? 'selected' : '' }}>Brouillon
                                        </option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="type">Type :</label>
                                    <select class="form-control select" name="type">
                                        <option value="gratuite"{{ $formation->type == 'gratuite' ? 'selected' : '' }}>
                                            Gratuite
                                        </option>
                                        <option value="payante"{{ $formation->type == 'payante' ? 'selected' : '' }}>
                                            Payante
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lastdate">Dernier rendez-vous :</label>
                                    <input type="date" name="last_date"
                                        class="form-control {{ $errors->has('last_date') ? ' is-invalid' : '' }}"
                                        value="{{ $formation->last_date }}">
                                    @if ($errors->has('last_date'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('last_date') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                        </div>

                        <button type="submit" class="btn btn-primary text-white">
                            <i class="fa fa-save"></i> Enregistrer la Formation
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

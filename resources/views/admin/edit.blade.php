@extends('admin.layouts.master')

@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-file bg-primary"></i>
                    <div class="d-inline">
                        <h5>Publications</h5>
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
                    <form action="{{ route('post.update', [$post->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Titre :</label>
                                    <input type="text" name="title"
                                        class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                        value="{{ $post->title }}">
                                    @if ($errors->has('title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Contenu :</label>
                                    <textarea name="content" class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}">{{ $post->content }}</textarea>
                                    @if ($errors->has('content'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('content') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                        </div>


                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Image :</label>
                                    <input type="file" name="image"
                                        class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}">
                                    <img src="{{ asset('storage/' . $post->image) }}" style="width: 100%;">

                                    @if ($errors->has('image'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Statut :</label>
                                    <select name="status" class="form-control">
                                        <option value="0"{{ $post->status == '0' ? 'selected' : '' }}>Desactivé
                                        </option>
                                        <option value="1"{{ $post->status == '1' ? 'selected' : '' }}>Activé</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <button type="submit" class="btn btn-primary text-white">
                            <i class="fa fa-save"></i> Enregistrer les Modifications
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

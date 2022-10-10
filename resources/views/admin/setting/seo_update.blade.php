@extends('admin.layouts.master')

@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-settings bg-primary"></i>
                    <div class="d-inline">
                        <h5>Paramètres du Référencement</h5>
                        <span>Modifier les Références</span>
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
                    <form method="post" action="{{ route('update.seosetting') }}">
                        @csrf
                        <h5 class="box-title text-primary mb-0 mt-20"><i class="ik ik-link me-15"></i> Paramètre du
                            Référencement :</h5>
                        <hr class="my-15">

                        <div class="form-group">
                            <input type="hidden" name="id" value="{{ $seo->id }}">
                        </div>

                        <div class="row">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Meta Title <span style="color:red">*</span> </label>
                                    <input type="text" name="meta_title" class="form-control"
                                        value="{{ $seo->meta_title }}">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Meta Author <span style="color:red">*</span> </label>
                                    <input type="text" name="meta_author" class="form-control"
                                        value="{{ $seo->meta_author }}">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Meta Keyword <span style="color:red">*</span> </label>
                                    <input type="text" name="meta_keyword" class="form-control"
                                        value="{{ $seo->meta_keyword }}">
                                </div>
                            </div>

                        </div>


                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Meta Description <span style="color:red">*</span> </label>
                                    <textarea name="meta_description" id="textarea" class="form-control" required placeholder="">{{ $seo->meta_description }}</textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Google Analytics <span style="color:red">*</span> </label>
                                    <textarea name="google_analytics" id="textarea" class="form-control" required placeholder="">{{ $seo->google_analytics }}</textarea>
                                </div>
                            </div>

                        </div>

                        <button type="submit" class="btn btn-primary text-white">
                            <i class="fa fa-save"></i> Enregistrer les Paramètre
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

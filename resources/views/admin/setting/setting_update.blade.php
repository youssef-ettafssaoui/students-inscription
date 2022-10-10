@extends('admin.layouts.master')

@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-settings bg-primary"></i>
                    <div class="d-inline">
                        <h5>Paramètres du Site</h5>
                        <span>Modifier le Site</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">
            @if (Session::has('message'))
                <div class="alert bg-success alert-success text-white" role="alert">
                    {{ Session::get('message') }}
                </div>
            @endif

            <div class="card">
                <div class="card-body">
                    <form method="post" class="forms-sample" action="{{ route('update.sitesetting') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <h5 class="box-title text-primary mb-0 mt-20"><i class="ik ik-edit me-15"></i> Paramètre du Site :
                        </h5>
                        <hr class="my-15">
                        <div class="form-group">
                            <input type="hidden" name="id" value="{{ $setting->id }}">
                        </div>

                        <div class="row">

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="">Site Logo</label>
                                    <input type="file" name="logo" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-label">Numéro de Téléphone 01 <span style="color:red">*</span>
                                    </label>
                                    <input type="text" name="phone_one" class="form-control"
                                        value="{{ $setting->phone_one }}" placeholder="Numéro de Téléphone 01">
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-label">Numéro de Téléphone 02 <span style="color:red">*</span>
                                    </label>
                                    <input type="text" name="phone_two" class="form-control"
                                        value="{{ $setting->phone_two }}" placeholder="Numéro de Téléphone 02">
                                </div>
                            </div>
                        </div>


                        <div class="row">

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-label">Adresse Email <span style="color:red">*</span>
                                    </label>
                                    <input type="email" name="email" class="form-control" value="{{ $setting->email }}"
                                        placeholder="Adresse Email">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Nom Propriétaire<span style="color:red">*</span>
                                    </label>
                                    <input type="text" name=ecole_name" class="form-control"
                                        placeholder="Nom Propriétaire" value="{{ $setting->ecole_name }}">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Adresse Propriétaire <span style="color:red">*</span> </label>
                                    <input type="text" name=ecole_address" class="form-control"
                                        placeholder="Adresse Propriétaire" value="{{ $setting->ecole_address }}">
                                </div>
                            </div>
                        </div>

                        <h5 class="box-title text-primary mb-0 mt-20">
                            <i class="ik ik-settings me-15"></i> Réseaux Sociaux :
                        </h5>
                        <hr class="my-15">

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label"> <i class="ik ik-facebook me-15"></i> Facebook :
                                        <span style="color:red">*</span> </label>
                                    <input type="text" name="facebook" class="form-control"
                                        placeholder="URL de la Page Facebook" value="{{ $setting->facebook }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label"><i class="ik ik-twitter me-15"></i> Twitter : <span
                                            style="color:red">*</span> </label>
                                    <input type="text" name="twitter" class="form-control"
                                        placeholder="URL de la Page Twitter" value="{{ $setting->twitter }}">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label"><i class="ik ik-linkedin me-15"></i> Linkedin :
                                        <span style="color:red">*</span> </label>
                                    <input type="text" name="linkedin" class="form-control"
                                        placeholder="URL de la Page Linkedin" value="{{ $setting->linkedin }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label"><i class="ik ik-youtube me-15"></i> Youtube : <span
                                            style="color:red">*</span> </label>
                                    <input type="text" name="youtube" class="form-control"
                                        placeholder="URL de la Page Youtube" value="{{ $setting->youtube }}">
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

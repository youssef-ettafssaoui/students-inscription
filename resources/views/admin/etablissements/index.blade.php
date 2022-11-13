@extends('admin.layouts.master')

@section('content')

    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-book bg-primary"></i>
                    <div class="d-inline">
                        <h5>Etablissement</h5>
                        <span>Liste des Etablissement</span>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            @if (Session::has('message'))
                <div class="alert bg-success alert-success text-white" role="alert">
                    {{ Session::get('message') }}
                </div>
            @endif
            <div class="card">

                <div class="card-body">
                    <table id="data_table" class="table">
                        <thead>
                            <tr>
                                <th>Logo</th>
                                <th>Etablissement</th>
                                <th>Adresse</th>
                                <th>Email</th>
                                <th>Website</th>
                                <th class="nosort"></th>
                                <th class="nosort"></th>
                                <th class="nosort"></th>

                            </tr>
                        </thead>
                        <tbody>
                            @if (count($etablissements) > 0)
                                @foreach ($etablissements as $etablissement)
                                    <tr>
                                        <td>
                                            @if (empty($etablissement->logo))
                                                <img width="100" src="{{ asset('avatar/icons8-apple-logo-128.png') }}">
                                            @else
                                                <img width="100"
                                                    src="{{ asset('uploads/logo') }}/{{ $etablissement->logo }}">
                                            @endif
                                        </td>
                                        <td class="font-weight-bold">{{ $etablissement->etablissement }}</td>
                                        <td class="font-weight-bold">{{ $etablissement->address }}</td>
                                        <td class="font-weight-bold">{{ $etablissement->email }}</td>
                                        <td>
                                            <a href="{{ $etablissement->website }}"
                                                class="btn btn-primary btn-sm font-weight-bold">CONSULTER.</a>
                                        </td>

                                        <td>
                                            <div class="table-actions">
                                                <a href="#" data-toggle="modal"
                                                    data-target="#exampleModal{{ $etablissement->id }}">
                                                    <i class="ik ik-eye text-primary"></i>
                                                </a>
                                                <a href="{{ route('etablissement.edit', [$etablissement->id]) }}"><i
                                                        class="ik ik-edit-2 text-success"></i></a>

                                                <a href="{{ route('etablissement.show', [$etablissement->id]) }}">
                                                    <i class="ik ik-trash-2 text-danger"></i>
                                                </a>

                                            </div>
                                        </td>
                                        <td>x</td>
                                    </tr>
                                    <!-- View Modal -->
                                    @include('admin.etablissements.model')
                                @endforeach
                            @else
                                <td class="text text-danger">Aucune Etablissement encore à afficher</td>
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

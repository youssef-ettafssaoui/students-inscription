@extends('admin.layouts.master')

@section('content')

    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-book bg-primary"></i>
                    <div class="d-inline">
                        <h5>Formations</h5>
                        <span>Liste des Formations</span>
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
                                <th>Titre</th>
                                <th>Entreprise</th>
                                <th>Statut</th>
                                <th class="nosort"></th>
                                <th class="nosort"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($formations) > 0)
                                @foreach ($formations as $formation)
                                    <tr>
                                        <td>{{ $formation->title }}</td>
                                        <td>{{ strtoupper($formation->gerant->gname) }}</td>
                                        <td>
                                            @if ($formation->status == '0')
                                                <a href="{{ route('formation.status', [$formation->id]) }}"
                                                    class="badge badge-danger" style="font-size: 14px;"> Desactivé</a>
                                            @else
                                                <a href="{{ route('formation.status', [$formation->id]) }}"
                                                    class="badge badge-success" style="font-size: 14px;"> Activé</a>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('formations.show', [$formation->id, $formation->slug]) }}"
                                                target="_blank"><button class="btn btn-primary">Consulter</button></a>
                                        </td>
                                        <td>x</td>
                                    </tr>
                                @endforeach
                            @else
                                <td class="text text-danger">Aucune Formation encore à afficher</td>
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

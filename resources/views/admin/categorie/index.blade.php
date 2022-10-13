@extends('admin.layouts.master')

@section('content')

    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-home bg-primary"></i>
                    <div class="d-inline">
                        <h5>Catégories</h5>
                        <span>Liste de tous les Catégories</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="../index.html"><i class="ik ik-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('categorie.index') }}">Département</a>
                        </li>
                    </ol>
                </nav>
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
                                <th>SN</th>
                                <th>Catégories</th>
                                <th class="nosort"></th>
                                <th class="nosort"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($categories) > 0)
                                @foreach ($categories as $key => $categorie)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td><b>{{ $categorie->name }}</b></td>

                                        <td>
                                            <div class="table-actions">
                                                <center>
                                                    <a href="{{ route('categorie.edit', [$categorie->id]) }}"><i
                                                            class="ik ik-edit-2 text-primary"></i></a>
                                                </center>


                                                {{--
                                                <form action="{{ route('categorie.destroy', [$categorie->id]) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a type="submit"><i class="ik ik-trash-2 text-danger">
                                                        </i></a>

                                                </form> --}}

                                            </div>
                                        </td>
                                        <td>x</td>
                                    </tr>
                                @endforeach
                            @else
                                <td class="text text-danger">Aucune Catégorie à afficher</td>
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

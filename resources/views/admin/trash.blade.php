@extends('admin.layouts.master')

@section('content')

    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-trash bg-primary"></i>
                    <div class="d-inline">
                        <h5>Publications</h5>
                        <span>Liste des Publication supprimées</span>
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
                                <th scope="col">Image</th>
                                <th scope="col">Titre</th>
                                <th scope="col">Contenu</th>
                                <th scope="col">Statut</th>
                                <th class="nosort"></th>
                                <th class="nosort"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($posts) > 0)
                                @foreach ($posts as $post)
                                    <tr>
                                        <td><img src="{{ asset('storage/' . $post->image) }}" width="80"></td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ str_limit($post->content, 20) }}</td>
                                        <td>
                                            @if ($post->status == '0')
                                                <a href="" class="badge badge-primary"> Desactivé</a>
                                            @else
                                                <a href="" class="badge badge-success"> Activé</a>
                                            @endif
                                        </td>
                                        <td>{{ $post->created_at->diffForHumans() }}</td>

                                        <td>
                                            <div class="table-actions">
                                                <center>
                                                    <a href="{{ route('post.restore', [$post->id]) }}"><button
                                                            class="btn btn-info btn-sm"><i
                                                                class="fa fa-refresh"></i></button></a>
                                                </center>

                                            </div>
                                        </td>
                                        <td>x</td>
                                    </tr>
                                @endforeach
                            @else
                                <td class="text text-danger">Aucune Publication à afficher</td>
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

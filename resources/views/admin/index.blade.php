@extends('admin.layouts.master')

@section('content')

    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-home bg-primary"></i>
                    <div class="d-inline">
                        <h5>Publications</h5>
                        <span>Liste des Publications</span>
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
                            <a href="{{ route('categorie.index') }}">Publications</a>
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
                                        <td><img src="{{ asset('storage/' . $post->image) }}" width="60"></td>
                                        <td><a href="{{ route('post.show', [$post->id, $post->slug]) }}"
                                                target="_blank">{{ $post->title }}</a></td>
                                        <td>{{ str_limit($post->content, 10) }}</td>
                                        <td>
                                            @if ($post->status == '0')
                                                <a href="{{ route('post.toggle', [$post->id]) }}"
                                                    class="badge badge-danger">
                                                    Désactivé</a>
                                            @else
                                                <a href="{{ route('post.toggle', [$post->id]) }}"
                                                    class="badge badge-success"> Activé</a>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="table-actions">
                                                <center>
                                                    <a href="{{ route('post.edit', [$post->id]) }}"><button
                                                            class="btn btn-warning btn-sm text-center"><i
                                                                class="fa fa-pen"></i></button></a>
                                                    <br> <br>
                                                    <button type="button" class="btn btn-danger btn-sm text-center"
                                                        data-toggle="modal" data-target="#exampleModal{{ $post->id }}">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </center>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal{{ $post->id }}" tabindex="-1"
                                                    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Supprimer
                                                                    Publication</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Voulez-vous vraiment supprimer <b
                                                                    style="color: red;">{{ $post->title }}</b> ?
                                                            </div>
                                                            <form action="{{ route('post.delete') }}" method="POST">@csrf
                                                                <div class="modal-footer">
                                                                    <input type="hidden" name="id"
                                                                        value="{{ $post->id }}">
                                                                    <button type="button" class="btn btn-dark btn-sm"
                                                                        data-dismiss="modal">Fermer</button>
                                                                    <button type="submit"
                                                                        class="btn btn-danger btn-sm">Supprimer</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

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

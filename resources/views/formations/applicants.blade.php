@extends('admin.layouts.master')

@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-users bg-primary"></i>
                    <div class="d-inline">
                        <h5>Candidats</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h1>Candidats</h1>
        <div class="row justify-content-center">
            <div class="col-md-12">
                @foreach ($applicants as $applicant)
                    <div class="card">
                        <div class="card-header bg-primary font-weight-bold"><a class="text-white"
                                href="{{ route('formations.show', [$applicant->id, $applicant->slug]) }}">{{ $applicant->title }}</a>
                        </div>

                        <div class="card-body">
                            @foreach ($applicant->users as $user)
                                <table class="table" style="width: 100%;">
                                    <thead class="thead-info">
                                    </thead>
                                    <tbody>
                                        <tr style="text-align: center">
                                            <td>
                                                @if ($user->etudiant->avatar)
                                                    <img src="{{ asset('uploads/avatar') }}/{{ $user->etudiant->avatar }}"
                                                        width="80">
                                                @else
                                                    <img src="{{ asset('uploads/avatar/man.jpg') }}" width="80">
                                                @endif
                                                <br>
                                                <span style="font-size: 10px;" class="font-weight-bold">Candidature en
                                                    {{ date('F d, Y', strtotime($applicant->created_at)) }}</span>
                                            </td>
                                            <td class="text-primary font-weight-bold">{{ $user->name }}</td>
                                            <td class="text-primary font-weight-bold">{{ $user->email }}</td>
                                            <td>{{ $user->etudiant->address }}</td>
                                            <td>{{ $user->etudiant->gender }}</td>
                                            <td>{{ $user->etudiant->bio }}</td>
                                            <td class="text-primary font-weight-bold">{{ $user->etudiant->phone_number }}
                                            </td>

                                            <td><a href="{{ Storage::url($user->etudiant->resume) }}">CV</a></td>

                                            <td></td>

                                        </tr>
                                    </tbody>
                                </table>

                        </div><br><br>
                @endforeach
            </div>
            <br>
            @endforeach


        </div>
    </div>
@endsection

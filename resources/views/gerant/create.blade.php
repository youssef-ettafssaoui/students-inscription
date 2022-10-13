@extends('admin.layouts.master')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">Profile</h1>
            </div>
            <div class="row">
                <div class="col-md-4 col-xl-3">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Profile Details</h5>
                        </div>
                        <div class="card-body text-center">
                            @if (empty(Auth::user()->gerant->logo))
                                <img src="{{ asset('back/img/avatars/avatar-4.jpg') }}" alt="Christina Mason"
                                    class="img-fluid rounded-circle mb-2" width="128" height="128" />
                            @else
                                <img src="{{ asset('uploads/logo') }}/{{ Auth::user()->gerant->logo }}"
                                    class="img-fluid rounded-circle mb-2" width="128" height="128" />
                            @endif
                            <form action="{{ route('gerant.logo') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card">
                                    <div class="card-body">
                                        <input type="file" class="form-control" name="gerant_logo"><br>
                                        <button class="btn btn-info float-right" type="submit">Mettre à jour</button>
                                    </div>
                                </div>
                            </form>
                            <h5 class="card-title mb-0">{{ $gerant->gname }}</h5>
                            <div class="text-muted mb-2">{{ $gerant->position }}</div>
                        </div>
                        <hr class="my-0" />
                        <div class="card-body">
                            <h5 class="h6 card-title">About</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-1"><span data-feather="home" class="feather-sm me-1"></span> Habite à <a
                                        href="#">{{ $gerant->address }}</a></li>

                                <li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> Travaille
                                    à
                                    <a href="#">{{ $gerant->work }}</a>
                                </li>
                                <li class="mb-1"><span data-feather="map-pin" class="feather-sm me-1"></span> D'origine <a
                                        href="#">{{ $gerant->origin }}</a></li>
                            </ul>
                        </div>
                        <hr class="my-0" />
                        <div class="card-body">
                            <h5 class="h6 card-title">Autre part</h5>
                            <ul class="list-unstyled mb-0">

                                <li class="mb-1"><a href="#">Youtube</a></li>
                                <li class="mb-1"><a href="#">Facebook</a></li>
                                <li class="mb-1"><a href="#">Instagram</a></li>
                                <li class="mb-1"><a href="#">LinkedIn</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 col-xl-9">
                    <div class="card">
                        <div class="card-header">

                            <h5 class="card-title mb-0">Activities</h5>
                        </div>
                        <div class="card-body h-100">

                            <div class="d-flex align-items-start">
                                <img src="img/avatars/avatar-5.jpg" width="36" height="36"
                                    class="rounded-circle me-2" alt="Vanessa Tucker">
                                <div class="flex-grow-1">
                                    <small class="float-end text-navy">5m ago</small>
                                    <strong>Vanessa Tucker</strong> started following <strong>Christina Mason</strong><br />
                                    <small class="text-muted">Today 7:51 pm</small><br />

                                </div>
                            </div>

                            <hr />
                            <div class="d-flex align-items-start">
                                <img src="img/avatars/avatar.jpg" width="36" height="36" class="rounded-circle me-2"
                                    alt="Charles Hall">
                                <div class="flex-grow-1">
                                    <small class="float-end text-navy">30m ago</small>
                                    <strong>Charles Hall</strong> posted something on <strong>Christina Mason</strong>'s
                                    timeline<br />
                                    <small class="text-muted">Today 7:21 pm</small>

                                    <div class="border text-sm text-muted p-2 mt-1">
                                        Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper
                                        libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus
                                        pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec
                                        vitae sapien ut libero venenatis faucibus. Nullam quis ante.
                                    </div>

                                    <a href="#" class="btn btn-sm btn-danger mt-1"><i class="feather-sm"
                                            data-feather="heart"></i> Like</a>
                                </div>
                            </div>

                            <hr />
                            <div class="d-flex align-items-start">
                                <img src="img/avatars/avatar-4.jpg" width="36" height="36"
                                    class="rounded-circle me-2" alt="Christina Mason">
                                <div class="flex-grow-1">
                                    <small class="float-end text-navy">1h ago</small>
                                    <strong>Christina Mason</strong> posted a new blog<br />

                                    <small class="text-muted">Today 6:35 pm</small>
                                </div>
                            </div>

                            <hr />
                            <div class="d-flex align-items-start">
                                <img src="img/avatars/avatar-2.jpg" width="36" height="36"
                                    class="rounded-circle me-2" alt="William Harris">
                                <div class="flex-grow-1">
                                    <small class="float-end text-navy">3h ago</small>
                                    <strong>William Harris</strong> posted two photos on <strong>Christina Mason</strong>'s
                                    timeline<br />
                                    <small class="text-muted">Today 5:12 pm</small>

                                    <div class="row g-0 mt-1">
                                        <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                            <img src="img/photos/unsplash-1.jpg" class="img-fluid pe-2" alt="Unsplash">
                                        </div>
                                        <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                            <img src="img/photos/unsplash-2.jpg" class="img-fluid pe-2" alt="Unsplash">
                                        </div>
                                    </div>

                                    <a href="#" class="btn btn-sm btn-danger mt-1"><i class="feather-sm"
                                            data-feather="heart"></i> Like</a>
                                </div>
                            </div>

                            <hr />
                            <div class="d-flex align-items-start">
                                <img src="img/avatars/avatar-2.jpg" width="36" height="36"
                                    class="rounded-circle me-2" alt="William Harris">
                                <div class="flex-grow-1">
                                    <small class="float-end text-navy">1d ago</small>
                                    <strong>William Harris</strong> started following <strong>Christina Mason</strong><br />
                                    <small class="text-muted">Yesterday 3:12 pm</small>

                                    <div class="d-flex align-items-start mt-1">
                                        <a class="pe-3" href="#">
                                            <img src="img/avatars/avatar-4.jpg" width="36" height="36"
                                                class="rounded-circle me-2" alt="Christina Mason">
                                        </a>
                                        <div class="flex-grow-1">
                                            <div class="border text-sm text-muted p-2 mt-1">
                                                Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas
                                                nec odio et ante tincidunt tempus.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr />
                            <div class="d-flex align-items-start">
                                <img src="img/avatars/avatar-4.jpg" width="36" height="36"
                                    class="rounded-circle me-2" alt="Christina Mason">
                                <div class="flex-grow-1">
                                    <small class="float-end text-navy">1d ago</small>
                                    <strong>Christina Mason</strong> posted a new blog<br />
                                    <small class="text-muted">Yesterday 2:43 pm</small>
                                </div>
                            </div>

                            <hr />
                            <div class="d-flex align-items-start">
                                <img src="img/avatars/avatar.jpg" width="36" height="36"
                                    class="rounded-circle me-2" alt="Charles Hall">
                                <div class="flex-grow-1">
                                    <small class="float-end text-navy">1d ago</small>
                                    <strong>Charles Hall</strong> started following <strong>Christina Mason</strong><br />
                                    <small class="text-muted">Yesterdag 1:51 pm</small>
                                </div>
                            </div>

                            <hr />
                            <div class="d-grid">
                                <a href="#" class="btn btn-primary">Load more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection

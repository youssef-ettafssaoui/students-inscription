@extends('layouts.master')
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@section('content')
    <div class="container">
        <div class="row">
            <div class="form-inline">
                <form action="{{ route('allformations') }}">
                    <div class="row register_row">
                        <div class="col-lg-12 register_col">
                            <input type="text" name="search" class="form_input"
                                placeholder="Titre Formation ou Nom du Gérant" required="required">
                        </div>
                        <div class="col">
                            <button type="submit" class="form_button trans_200">Chercher</button>
                        </div>
                    </div>
                </form>
            </div>



            <div class="col-md-12">
                <div class="rounded border jobs-wrap">
                    @if (count($formations) > 0)
                        @foreach ($formations as $formation)
                            <a href="{{ route('formations.show', [$formation->id, $formation->slug]) }}"
                                class="job-item d-block d-md-flex align-items-center  border-bottom @if ($formation->type == 'gratuite') gratuite @else payante @endif;">
                                <div class="company-logo blank-logo text-center text-md-left pl-3">
                                    <img src="{{ asset('uploads/logo') }}/{{ $formation->gerant->logo }}" alt="Image"
                                        class="img-fluid mx-auto">
                                </div>
                                <div class="job-details h-100">
                                    <div class="p-3 align-self-center">
                                        <h3>{{ $formation->title }}</h3>
                                        <div class="d-block d-lg-flex">
                                            <div class="mr-3"><span class="icon-suitcase mr-1"></span>
                                                {{ $formation->gerant->gname }}</div>
                                            <div class="mr-3"><span class="icon-room mr-1"></span>
                                                {{ str_limit($formation->address, 20) }}</div>
                                            <div><span class="icon-money mr-1"></span>{{ $formation->masse_horraire }}</div>
                                            <div>&nbsp;<span
                                                    class="fa fa-clock-o mr-1"></span>{{ $formation->created_at->diffForHumans() }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="job-category align-self-center">
                                    @if ($job->type == 'fulltime')
                                        <div class="p-3">
                                            <span
                                                class="text-info p-2 rounded border border-info">{{ $job->type }}</span>
                                        </div>
                                    @elseif($job->type == 'parttime')
                                        <div class="p-3">
                                            <span
                                                class="text-danger p-2 rounded border border-danger">{{ $job->type }}</span>
                                        </div>
                                    @else
                                        <div class="p-3">
                                            <span
                                                class="text-warning p-2 rounded border border-warning">{{ $job->type }}</span>
                                        </div>
                                    @endif

                                </div> --}}
                            </a>
                        @endforeach
                    @else
                        <h3 style="color: red;">Aucune Formation trouvée</h3>
                    @endif


                </div>
            </div>


        </div>

    </div>
@endsection

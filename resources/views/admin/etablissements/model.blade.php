       <div class="modal fade" id="exampleModal{{ $etablissement->id }}" tabindex="-1" role="dialog"
           aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog modal-lg">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLabel">Informations sur l'établissement :</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                       <div class="list-group">
                           <a href="#" class="list-group-item list-group-item-action">
                               <center>
                                   @if (empty($etablissement->logo))
                                       <img width="100" src="{{ asset('avatar/icons8-apple-logo-128.png') }}">
                                   @else
                                       <img width="100" src="{{ asset('uploads/logo') }}/{{ $etablissement->logo }}">
                                   @endif
                               </center>

                           </a>
                           <a href="#" class="list-group-item list-group-item-action">
                               <div class="d-flex w-100 justify-content-between">
                                   <p class="mb-1 text-primary font-weight-bold">ETABLISSEMENT</p>
                               </div>
                               <p class="mb-1">{{ $etablissement->etablissement }}</p>
                           </a>
                           <a href="#" class="list-group-item list-group-item-action">
                               <p class="mb-1 text-primary font-weight-bold">ADRESSE</p>
                               <p class="mb-1">{{ $etablissement->address }}</p>
                           </a>
                           <a href="#" class="list-group-item list-group-item-action">
                               <div class="d-flex w-100 justify-content-between">
                                   <p class="mb-1 text-primary font-weight-bold">ADRESSE EMAIL</p>
                               </div>
                               <p class="mb-1">{{ $etablissement->email }}</p>
                           </a>
                           <a href="#" class="list-group-item list-group-item-action">
                               <div class="d-flex w-100 justify-content-between">
                                   <p class="mb-1 text-primary font-weight-bold">NUMÉRO DE TELEPHONE</p>
                               </div>
                               <p class="mb-1">{{ $etablissement->phone }}</p>
                           </a>
                           <a href="#" class="list-group-item list-group-item-action">
                               <div class="d-flex w-100 justify-content-between">
                                   <p class="mb-1 text-primary font-weight-bold">SLOGAN</p>
                               </div>
                               <p class="mb-1">{{ $etablissement->slogan }}</p>
                           </a>
                           <a href="{{ $etablissement->website }}" class="list-group-item list-group-item-action">
                               <div class="d-flex w-100 justify-content-between">
                                   <p class="mb-1 text-primary font-weight-bold">WEBSITE</p>
                               </div>
                               <p class="mb-1">{{ $etablissement->website }}</p>
                           </a>
                           <a href="#" class="list-group-item list-group-item-action">
                               <div class="d-flex w-100 justify-content-between">
                                   <p class="mb-1 text-primary font-weight-bold">BREF DESCRIPTION</p>
                               </div>
                               <p class="mb-1">{{ $etablissement->description }}</p>
                           </a>
                       </div>
                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-warning" data-dismiss="modal">j'en ai assez entendu parler
                           de {{ $etablissement->slogan }}</button>
                   </div>
               </div>
           </div>
       </div>

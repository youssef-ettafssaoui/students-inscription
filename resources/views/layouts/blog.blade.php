 <!-- Events -->

 <div class="events">
     <div class="container">
         <div class="row">
             <div class="col">
                 <h2 class="section_title text-center">Nos derniers Articles</h2>
             </div>
         </div>
         <div class="row events_row">

             @if (count($posts) > 0)

                 @foreach ($posts as $post)
                     <!-- Event -->
                     <div class="col-lg-4 event_col">
                         <div class="event">
                             <div class="event_image">
                                 @if (!empty($post->image))
                                     <img src="{{ asset('storage/' . $post->image) }}">
                                 @else
                                     <img src="{{ asset('front/images/course_1.jpg') }}" alt="">
                                 @endif
                             </div>
                             <div class="event_body d-flex flex-row align-items-center justify-content-start">
                                 <div class="event_title">
                                     <a
                                         href="{{ route('post.show', [$post->id, $post->slug]) }}">{{ $post->title }}</a>
                                 </div>
                             </div>

                         </div>
                     </div>
                 @endforeach
             @else
                 <h3 style="color: red;">Aucune Article encore Publié Par notre Administrateur</h3>
             @endif
         </div>
     </div>
 </div>

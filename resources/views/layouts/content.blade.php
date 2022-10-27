 <!-- Home -->
 <br><br><br><br><br><br><br><br>
 <div class="home">
     <div class="home_background" style="background-image: url(front/images/index_background.jpg);"></div>
     <div class="home_content">
         <div class="container">
             <div class="row">
                 <div class="col text-center">
                     <h1 class="home_title">Plateforme d'Inscription</h1>
                     <div class="home_button trans_200"><a href="/formations/allformations">commencer</a></div>
                 </div>
             </div>
         </div>
     </div>
 </div>


 @include('layouts.category')
 <!-- Courses -->

 <div class="courses">
     <div class="courses_background"></div>
     <div class="container">
         <div class="row">
             <div class="col">
                 <h2 class="section_title text-center">Formations Récentes</h2>
             </div>
         </div>
         <div class="row courses_row">
             @foreach ($formations as $formation)
                 <!-- Course -->
                 <div class="col-lg-4 course_col">
                     <div class="course">
                         <div class="course_image">
                             @if (!empty($formation->gerant->logo))
                                 <img src="{{ asset('uploads/logo') }}/{{ $formation->gerant->logo }}">
                             @else
                                 <img src="{{ asset('front/images/course_1.jpg') }}" alt="">
                             @endif


                         </div>
                         <div class="course_body">
                             <div class="course_title"><a
                                     href="{{ route('formations.show', [$formation->id, $formation->slug]) }}">{{ $formation->title }}</a>
                             </div>
                             <div class="course_info">
                                 <ul>
                                     <li><a href="instructors.html">{{ $formation->gerant->gname }}</a></li>
                                     <li><a href="#">{{ $formation->gerant->position }}</a></li>
                                 </ul>
                             </div>
                             <div class="course_text">
                                 <p>{{ str_limit($formation->description, 120) }}</p>
                             </div>
                         </div>
                         <div class="course_footer d-flex flex-row align-items-center justify-content-start">
                             <div class="course_students"><i class="fa fa-clock-o"
                                     aria-hidden="true"></i><span>{{ $formation->masse_horraire }} Heures</span>
                             </div>
                             <div class="course_rating ml-auto"><i class="fa fa-calendar"
                                     aria-hidden="true"></i><span>{{ $formation->created_at->diffForHumans() }}</span>
                             </div>
                             <div class="course_mark course_free trans_200"><a
                                     href="#">{{ $formation->type }}</a>
                             </div>
                         </div>
                     </div>
                 </div>
             @endforeach
         </div>
     </div>
 </div>

 <!-- Register -->
 <div class="register">
     <div class="container">
         <div class="row">

             <!-- Register Form -->

             <div class="col-lg-6">
                 <div class="register_form_container">
                     <div class="register_form_title">Trouver une Formation</div>
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
             </div>

             <!-- Register Timer -->

             <div class="col-lg-6">
                 <div class="register_timer_container">
                     <div class="register_timer_title">Bref Notre Plateforme</div>
                     <div class="register_timer_text">
                         <p>Cette Application Web proposée par la Faculté des sciences et Techniques de Marrakech est
                             une plateforme interactive en ligne qui propose d'apprendre gratuitement</p>
                     </div>
                     <div class="timer_container">
                         <ul class="timer_list">
                             <li>
                                 <div id="day" class="timer_num">00</div>
                                 <div class="timer_ss">days</div>
                             </li>
                             <li>
                                 <div id="hour" class="timer_num">00</div>
                                 <div class="timer_ss">hours</div>
                             </li>
                             <li>
                                 <div id="minute" class="timer_num">00</div>
                                 <div class="timer_ss">minutes</div>
                             </li>
                             <li>
                                 <div id="second" class="timer_num">00</div>
                                 <div class="timer_ss">seconds</div>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

 @include('layouts.blog')

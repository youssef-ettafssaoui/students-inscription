 <!-- Home -->
 <br><br><br>
 <div class="home">
     <div class="home_background" style="background-image: url(images/index_background.jpg);"></div>
     <div class="home_content">
         <div class="container">
             <div class="row">
                 <div class="col text-center">
                     <h1 class="home_title">Commençons notre apprentissage !</h1>
                     <p>La Faculté des Sciences et Techniques de Marrakech propose cette solution innovante pour
                         développer les compétences professionnelles dont elle a besoin.</p>
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
                 <h2 class="section_title text-center">Popular Online Courses</h2>
             </div>
         </div>
         <div class="row courses_row">

             <!-- Course -->
             <div class="col-lg-4 course_col">
                 <div class="course">
                     <div class="course_image"><img src="{{ asset('front/images/course_1.jpg') }}" alt="">
                     </div>
                     <div class="course_body">
                         <div class="course_title"><a href="course.html">Vocabulary</a></div>
                         <div class="course_info">
                             <ul>
                                 <li><a href="instructors.html">Sarah Parker</a></li>
                                 <li><a href="#">English</a></li>
                             </ul>
                         </div>
                         <div class="course_text">
                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla.</p>
                         </div>
                     </div>
                     <div class="course_footer d-flex flex-row align-items-center justify-content-start">
                         <div class="course_students"><i class="fa fa-user" aria-hidden="true"></i><span>10</span>
                         </div>
                         <div class="course_rating ml-auto"><i class="fa fa-star"
                                 aria-hidden="true"></i><span>4,5</span></div>
                         <div class="course_mark course_free trans_200"><a href="#">Free</a></div>
                     </div>
                 </div>
             </div>

             <!-- Course -->
             <div class="col-lg-4 course_col">
                 <div class="course">
                     <div class="course_image"><img src="{{ asset('front/images/course_2.jpg') }}" alt=""></div>
                     <div class="course_body">
                         <div class="course_title"><a href="course.html">Vocabulary</a></div>
                         <div class="course_info">
                             <ul>
                                 <li><a href="instructors.html">Sarah Parker</a></li>
                                 <li><a href="#">Spanish</a></li>
                             </ul>
                         </div>
                         <div class="course_text">
                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla.</p>
                         </div>
                     </div>
                     <div class="course_footer d-flex flex-row align-items-center justify-content-start">
                         <div class="course_students"><i class="fa fa-user" aria-hidden="true"></i><span>10</span>
                         </div>
                         <div class="course_rating ml-auto"><i class="fa fa-star"
                                 aria-hidden="true"></i><span>4,5</span></div>
                         <div class="course_mark course_free trans_200"><a href="#">Free</a></div>
                     </div>
                 </div>
             </div>

             <!-- Course -->
             <div class="col-lg-4 course_col">
                 <div class="course">
                     <div class="course_image"><img src="{{ asset('front/images/course_3.jpg') }}" alt="">
                     </div>
                     <div class="course_body">
                         <div class="course_title"><a href="course.html">Vocabulary</a></div>
                         <div class="course_info">
                             <ul>
                                 <li><a href="instructors.html">Sarah Parker</a></li>
                                 <li><a href="#">English</a></li>
                             </ul>
                         </div>
                         <div class="course_text">
                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla.</p>
                         </div>
                     </div>
                     <div class="course_footer d-flex flex-row align-items-center justify-content-start">
                         <div class="course_students"><i class="fa fa-user" aria-hidden="true"></i><span>10</span>
                         </div>
                         <div class="course_rating ml-auto"><i class="fa fa-star"
                                 aria-hidden="true"></i><span>4,5</span></div>
                         <div class="course_mark trans_200"><a href="#">$45</a></div>
                     </div>
                 </div>
             </div>

         </div>
     </div>
 </div>

 <!-- Instructors -->

 <div class="instructors">
     <div class="instructors_background" style="background-image:url(front/images/instructors_background.png)"></div>
     <div class="container">
         <div class="row">
             <div class="col">
                 <h2 class="section_title text-center">The Best Tutors in Town</h2>
             </div>
         </div>
         <div class="row instructors_row">

             <!-- Instructor -->
             <div class="col-lg-4 instructor_col">
                 <div class="instructor text-center">
                     <div class="instructor_image_container">
                         <div class="instructor_image"><img src="{{ asset('front/images/instructor_1.jpg') }}"
                                 alt=""></div>
                     </div>
                     <div class="instructor_name"><a href="instructors.html">Sarah Parker</a></div>
                     <div class="instructor_title">Teacher</div>
                     <div class="instructor_text">
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus
                             in, sagittis fringilla tortor.</p>
                     </div>
                     <div class="instructor_social">
                         <ul>
                             <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                             <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                             <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                         </ul>
                     </div>
                 </div>
             </div>

             <!-- Instructor -->
             <div class="col-lg-4 instructor_col">
                 <div class="instructor text-center">
                     <div class="instructor_image_container">
                         <div class="instructor_image"><img src="{{ asset('front/images/instructor_2.jpg') }}"
                                 alt=""></div>
                     </div>
                     <div class="instructor_name"><a href="instructors.html">Sarah Parker</a></div>
                     <div class="instructor_title">Teacher</div>
                     <div class="instructor_text">
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus
                             in, sagittis fringilla tortor.</p>
                     </div>
                     <div class="instructor_social">
                         <ul>
                             <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                             <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                             <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                         </ul>
                     </div>
                 </div>
             </div>

             <!-- Instructor -->
             <div class="col-lg-4 instructor_col">
                 <div class="instructor text-center">
                     <div class="instructor_image_container">
                         <div class="instructor_image"><img src="{{ asset('front/images/instructor_3.jpg') }}"
                                 alt=""></div>
                     </div>
                     <div class="instructor_name"><a href="instructors.html">Sarah Parker</a></div>
                     <div class="instructor_title">Teacher</div>
                     <div class="instructor_text">
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus
                             in, sagittis fringilla tortor.</p>
                     </div>
                     <div class="instructor_social">
                         <ul>
                             <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                             <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                             <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                         </ul>
                     </div>
                 </div>
             </div>

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
                     <div class="register_form_title">Courses For Free</div>
                     <form action="#" id="register_form" class="register_form">
                         <div class="row register_row">
                             <div class="col-lg-6 register_col">
                                 <input type="text" class="form_input" placeholder="Name" required="required">
                             </div>
                             <div class="col-lg-6 register_col">
                                 <input type="email" class="form_input" placeholder="Email" required="required">
                             </div>
                             <div class="col-lg-6 register_col">
                                 <input type="tel" class="form_input" placeholder="Phone">
                             </div>
                             <div class="col-lg-6 register_col">
                                 <input type="url" class="form_input" placeholder="Site">
                             </div>
                             <div class="col">
                                 <button type="submit" class="form_button trans_200">get it now</button>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>

             <!-- Register Timer -->

             <div class="col-lg-6">
                 <div class="register_timer_container">
                     <div class="register_timer_title">Register Now</div>
                     <div class="register_timer_text">
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus
                             in, sagittis fringilla tortor.</p>
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

 <!-- Events -->

 <div class="events">
     <div class="container">
         <div class="row">
             <div class="col">
                 <h2 class="section_title text-center">Upcoming Events</h2>
             </div>
         </div>
         <div class="row events_row">

             <!-- Event -->
             <div class="col-lg-4 event_col">
                 <div class="event">
                     <div class="event_image"><img src="{{ asset('front/images/event_1.jpg') }}" alt="">
                     </div>
                     <div class="event_date d-flex flex-column align-items-center justify-content-center">
                         <div class="event_day">26</div>
                         <div class="event_month">aug</div>
                     </div>
                     <div class="event_body d-flex flex-row align-items-center justify-content-start">
                         <div class="event_title"><a href="#">Networking Day</a></div>
                         <div class="event_tag ml-auto">Free</div>
                     </div>
                 </div>
             </div>

             <!-- Event -->
             <div class="col-lg-4 event_col">
                 <div class="event">
                     <div class="event_image"><img src="{{ asset('front/images/event_2.jpg') }}" alt="">
                     </div>
                     <div class="event_date d-flex flex-column align-items-center justify-content-center">
                         <div class="event_day">26</div>
                         <div class="event_month">aug</div>
                     </div>
                     <div class="event_body d-flex flex-row align-items-center justify-content-start">
                         <div class="event_title"><a href="#">Networking Day</a></div>
                         <div class="event_tag ml-auto">Free</div>
                     </div>
                 </div>
             </div>

             <!-- Event -->
             <div class="col-lg-4 event_col">
                 <div class="event">
                     <div class="event_image"><img src="{{ asset('front/images/event_3.jpg') }}" alt="">
                     </div>
                     <div class="event_date d-flex flex-column align-items-center justify-content-center">
                         <div class="event_day">26</div>
                         <div class="event_month">aug</div>
                     </div>
                     <div class="event_body d-flex flex-row align-items-center justify-content-start">
                         <div class="event_title"><a href="#">Networking Day</a></div>
                         <div class="event_tag ml-auto">Free</div>
                     </div>
                 </div>
             </div>

         </div>
     </div>
 </div>

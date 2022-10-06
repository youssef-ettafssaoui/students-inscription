 <!-- Menu -->

 <div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
     <div class="menu_close_container">
         <div class="menu_close">
             <div></div>
             <div></div>
         </div>
     </div>
     <div class="search">
         <form action="#" class="header_search_form menu_mm">
             <input type="search" class="search_input menu_mm" placeholder="Search" required="required">
             <button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
                 <i class="fa fa-search menu_mm" aria-hidden="true"></i>
             </button>
         </form>
     </div>
     <nav class="menu_nav">
         <ul class="menu_mm">
             <li class="menu_mm"><a href="index.html">Home</a></li>
             <li class="menu_mm"><a href="courses.html">Courses</a></li>
             <li class="menu_mm"><a href="instructors.html">Instructors</a></li>
             <li class="menu_mm"><a href="#">Events</a></li>
             <li class="menu_mm"><a href="blog.html">Blog</a></li>
             <li class="menu_mm"><a href="contact.html">Contact</a></li>
         </ul>
     </nav>
     <div class="menu_extra">
         <div class="menu_phone"><span class="menu_title">phone:</span>+44 300 303 0266</div>
         <div class="menu_social">
             <span class="menu_title">follow us</span>
             <ul>
                 <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                 <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                 <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
             </ul>
         </div>
     </div>
 </div>

 <!-- Home -->

 <div class="home">
     <div class="home_background" style="background-image: url(images/index_background.jpg);"></div>
     <div class="home_content">
         <div class="container">
             <div class="row">
                 <div class="col text-center">
                     <h1 class="home_title">Learn Languages Easily</h1>
                     <div class="home_button trans_200"><a href="#">get started</a></div>
                 </div>
             </div>
         </div>
     </div>
 </div>

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

 <!-- Blog -->

 <div class="blog">
     <div class="container">
         <div class="row row-lg-eq-height">

             <!-- Blog Left -->
             <div class="col-lg-6">
                 <div class="blog_left">
                     <div class="blog_title">From Our Blog</div>
                     <div class="blog_text">
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus
                             in, sagittis fringilla tortor.</p>
                     </div>
                     <div class="blog_categories">
                         <div class="row categories_row">

                             <!-- Category -->
                             <div class="col-md-4 blog_category_col">
                                 <a href="blog.html">
                                     <div class="blog_category">
                                         <div class="blog_category_image"><img
                                                 src="{{ asset('front/images/blog_1.jpg') }}" alt=""></div>
                                         <div class="blog_category_title">travel</div>
                                     </div>
                                 </a>
                             </div>

                             <!-- Category -->
                             <div class="col-md-4 blog_category_col">
                                 <a href="blog.html">
                                     <div class="blog_category">
                                         <div class="blog_category_image"><img
                                                 src="{{ asset('front/images/blog_2.jpg') }}" alt=""></div>
                                         <div class="blog_category_title">languages</div>
                                     </div>
                                 </a>
                             </div>

                             <!-- Category -->
                             <div class="col-md-4 blog_category_col">
                                 <a href="blog.html">
                                     <div class="blog_category">
                                         <div class="blog_category_image"><img
                                                 src="{{ asset('front/images/blog_3.jpg') }}" alt=""></div>
                                         <div class="blog_category_title">cultures</div>
                                     </div>
                                 </a>
                             </div>

                             <!-- Category -->
                             <div class="col-md-4 blog_category_col">
                                 <a href="blog.html">
                                     <div class="blog_category">
                                         <div class="blog_category_image"><img
                                                 src="{{ asset('front/images/blog_4.jpg') }}" alt=""></div>
                                         <div class="blog_category_title">fashion</div>
                                     </div>
                                 </a>
                             </div>

                             <!-- Category -->
                             <div class="col-md-4 blog_category_col">
                                 <a href="blog.html">
                                     <div class="blog_category">
                                         <div class="blog_category_image"><img
                                                 src="{{ asset('front/images/blog_5.jpg') }}" alt=""></div>
                                         <div class="blog_category_title">cooking</div>
                                     </div>
                                 </a>
                             </div>

                             <!-- Category -->
                             <div class="col-md-4 blog_category_col">
                                 <a href="blog.html">
                                     <div class="blog_category">
                                         <div class="blog_category_image"><img
                                                 src="{{ asset('front/images/blog_6.jpg') }}" alt=""></div>
                                         <div class="blog_category_title">hobbies</div>
                                     </div>
                                 </a>
                             </div>

                         </div>
                     </div>
                 </div>
             </div>

             <!-- Blog Right -->

             <div class="col-lg-6">
                 <div class="blog_right">
                     <div class="blog_image" style="background-image:url(front/images/blog_7.jpg)"></div>
                     <div class="blog_title_container">
                         <div class="blog_right_category"><a href="#">travel</a></div>
                         <div class="blog_right_title"><a href="blog_single.html">Design Better Forms</a></div>
                         <div class="blog_right_text">
                             <p>Whether it is a signup flow, a multi-view stepper, or a monotonous data entry interface,
                                 forms are one of the most important components of digital product design.</p>
                         </div>
                         <div class="read_more"><a href="blog_single.html">Read More <img
                                     src="{{ asset('front/images/right.png') }}" alt=""></a></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

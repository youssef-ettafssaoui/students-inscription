@extends('layouts.master')

@section('content')
    <!-- Home -->

    <div class="home">
        <div class="breadcrumbs_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <ul class="breadcrumbs_list d-flex flex-row align-items-center justify-content-start">
                            <li><a href="/">Accueil</a></li>
                            <li><a href="/formations">Nos Formations</a></li>
                            <li>{{ $formation->title }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Intro -->

    <div class="intro">
        <div class="intro_background parallax-window" data-parallax="scroll" data-image-src="images/intro.jpg"
            data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="intro_container d-flex flex-column align-items-start justify-content-end">
                        <div class="intro_content">
                            <div class="intro_price">Free</div>
                            <div class="rating_r rating_r_4 intro_rating"><i></i><i></i><i></i><i></i><i></i></div>
                            <div class="intro_title">Vocabulary. Part 1</div>
                            <div class="intro_meta">
                                <div class="intro_image"><img src="images/intro_user.jpg" alt=""></div>
                                <div class="intro_instructors"><a href="instructors.html">Sarah Parker</a> and <span><a
                                            href="instructors.html">5 other instructors</a></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Course -->

    <div class="course">
        <div class="course_top"></div>
        <div class="container">
            <div class="row row-lg-eq-height">

                <!-- Panels -->
                <div class="col-lg-9">
                    <div class="tab_panels">

                        <!-- Tabs -->
                        <div class="course_tabs_container">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="tabs d-flex flex-row align-items-center justify-content-start">
                                            <div class="tab active">description</div>
                                            <div class="tab">curriculum</div>
                                            <div class="tab">reviews</div>
                                            <div class="tab">members</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Description -->
                        <div class="tab_panel description active">
                            <div class="panel_title">About this course</div>
                            <div class="panel_text">
                                <p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse commodo, turpis a
                                    dapibus fermentum, turpis ipsum rhoncus massa, sed commodo nisi lectus id ipsum. Sed nec
                                    elit vehicula, aliquam neque euismod, porttitor ex. Nam consequat iaculis maximus.
                                    Suspendisse potenti. In rutrum justo et diam egestas luctus. Mauris eu neque eget odio
                                    suscipit eleifend. Sed imperdiet ante quis felis tempor hendrerit. Curabitur eget
                                    fermentum ipsum. Sed efficitur eget velit eu vulputate. Duis tincidunt quam in erat
                                    dignissim consequat. Praesent tempus leo eu nisl fringilla interdum. Maecenas rutrum
                                    libero eget lacus bibendum tristique. Curabitur at felis lobortis, mollis ante ut,
                                    tempus elit. Morbi justo nisi, posuere sed augue id, iaculis tincidunt mi. Pellentesque
                                    sed dolor sed dui congue tempus a et felis.</p>
                            </div>

                            <!-- Instructors -->
                            <div class="instructors">
                                <div class="panel_title">All instructors</div>
                                <div class="row instructors_row">

                                    <!-- Instructor -->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="instructor d-flex flex-row align-items-center justify-content-start">
                                            <div class="instructor_image">
                                                <div><img src="images/instructor_4.jpg" alt=""></div>
                                            </div>
                                            <div class="instructor_content">
                                                <div class="instructor_name"><a href="instructors.html">Sarah Parker</a>
                                                </div>
                                                <div class="instructor_title">Teacher</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Instructor -->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="instructor d-flex flex-row align-items-center justify-content-start">
                                            <div class="instructor_image">
                                                <div><img src="images/instructor_5.jpg" alt=""></div>
                                            </div>
                                            <div class="instructor_content">
                                                <div class="instructor_name"><a href="instructors.html">Sarah Parker</a>
                                                </div>
                                                <div class="instructor_title">Teacher</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Instructor -->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="instructor d-flex flex-row align-items-center justify-content-start">
                                            <div class="instructor_image">
                                                <div><img src="images/instructor_6.jpg" alt=""></div>
                                            </div>
                                            <div class="instructor_content">
                                                <div class="instructor_name"><a href="instructors.html">Sarah Parker</a>
                                                </div>
                                                <div class="instructor_title">Teacher</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Instructor -->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="instructor d-flex flex-row align-items-center justify-content-start">
                                            <div class="instructor_image">
                                                <div><img src="images/instructor_7.jpg" alt=""></div>
                                            </div>
                                            <div class="instructor_content">
                                                <div class="instructor_name"><a href="instructors.html">Sarah Parker</a>
                                                </div>
                                                <div class="instructor_title">Teacher</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Instructor -->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="instructor d-flex flex-row align-items-center justify-content-start">
                                            <div class="instructor_image">
                                                <div><img src="images/instructor_8.jpg" alt=""></div>
                                            </div>
                                            <div class="instructor_content">
                                                <div class="instructor_name"><a href="instructors.html">Sarah Parker</a>
                                                </div>
                                                <div class="instructor_title">Teacher</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Instructor -->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="instructor d-flex flex-row align-items-center justify-content-start">
                                            <div class="instructor_image">
                                                <div><img src="images/instructor_9.jpg" alt=""></div>
                                            </div>
                                            <div class="instructor_content">
                                                <div class="instructor_name"><a href="instructors.html">Sarah Parker</a>
                                                </div>
                                                <div class="instructor_title">Teacher</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- FAQs -->
                            <div class="faqs">
                                <div class="panel_title">FAQs</div>
                                <div class="accordions">

                                    <div class="elements_accordions">

                                        <div class="accordion_container">
                                            <div class="accordion d-flex flex-row align-items-center active">
                                                <div>Can I just enroll in a single course? I'm not interested in the entire
                                                    Specializat</div>
                                            </div>
                                            <div class="accordion_panel">
                                                <p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse
                                                    commodo, turpis a dapibus fermentum, turpis ipsum rhoncus massa, sed
                                                    commodo nisi lectus id ipsum. Sed nec elit vehicula, aliquam neque
                                                    euismod, porttitor ex. Nam consequat iaculis maximus.</p>
                                            </div>
                                        </div>

                                        <div class="accordion_container">
                                            <div class="accordion d-flex flex-row align-items-center">
                                                <div>What is the refund policy?</div>
                                            </div>
                                            <div class="accordion_panel">
                                                <p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse
                                                    commodo, turpis a dapibus fermentum, turpis ipsum rhoncus massa, sed
                                                    commodo nisi lectus id ipsum. Sed nec elit vehicula, aliquam neque
                                                    euismod, porttitor ex. Nam consequat iaculis maximus.</p>
                                            </div>
                                        </div>

                                        <div class="accordion_container">
                                            <div class="accordion d-flex flex-row align-items-center">
                                                <div>What background knowledge is necessary</div>
                                            </div>
                                            <div class="accordion_panel">
                                                <p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse
                                                    commodo, turpis a dapibus fermentum, turpis ipsum rhoncus massa, sed
                                                    commodo nisi lectus id ipsum. Sed nec elit vehicula, aliquam neque
                                                    euismod, porttitor ex. Nam consequat iaculis maximus.</p>
                                            </div>
                                        </div>

                                        <div class="accordion_container">
                                            <div class="accordion d-flex flex-row align-items-center">
                                                <div>Do i need to take the courses in a specific ord</div>
                                            </div>
                                            <div class="accordion_panel">
                                                <p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse
                                                    commodo, turpis a dapibus fermentum, turpis ipsum rhoncus massa, sed
                                                    commodo nisi lectus id ipsum. Sed nec elit vehicula, aliquam neque
                                                    euismod, porttitor ex. Nam consequat iaculis maximus.</p>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Curriculum -->
                        <div class="tab_panel curriculum">
                            <div class="panel_title">Syllabus</div>
                            <div class="panel_text">
                                <p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse commodo, turpis a
                                    dapibus fermentum, turpis ipsum rhoncus massa, sed commodo nisi lectus id ipsum. Sed nec
                                    elit vehicula, aliquam neque euismod, porttitor ex. Nam consequat iaculis maximus.
                                    Suspendisse potenti. In rutrum justo et diam egestas luctus. Mauris eu neque eget odio
                                    suscipit eleifend. Sed imperdiet ante quis felis tempor hendrerit. Curabitur eget
                                    fermentum ipsum. Sed efficitur eget velit eu vulputate. Duis tincidunt quam in erat
                                    dignissim consequat. Praesent tempus leo eu nisl fringilla interdum. Maecenas rutrum
                                    libero eget lacus bibendum tristique. Curabitur at felis lobortis, mollis ante ut,
                                    tempus elit. Morbi justo nisi, posuere sed augue id, iaculis tincidunt mi. Pellentesque
                                    sed dolor sed dui congue tempus a et felis.</p>
                            </div>
                            <div class="curriculum_items">
                                <div class="cur_item">
                                    <div
                                        class="cur_title_container d-flex flex-row align-items-start justify-content-start">
                                        <div class="cur_title">Week 1</div>
                                        <div class="cur_num ml-auto">0/4</div>
                                    </div>
                                    <div class="cur_item_content">
                                        <div class="cur_item_title">Beginners Level</div>
                                        <div class="cur_item_text">
                                            <p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse
                                                commodo, turpis a dapibus fermentum, turpis ipsum rhoncus massa, sed commodo
                                                nisi lectus id ipsum.</p>
                                        </div>
                                        <div class="cur_contents">
                                            <ul>
                                                <li>
                                                    <i class="fa fa-folder" aria-hidden="true"></i><span>1 video, 1 audio,
                                                        1 reading</span>
                                                    <ul>
                                                        <li
                                                            class="d-flex flex-row align-items-center justify-content-start">
                                                            <i class="fa fa-video-camera"
                                                                aria-hidden="true"></i><span>Video: <a
                                                                    href="#">Greetings and Introductions</a></span>
                                                            <div class="cur_time ml-auto"><i class="fa fa-clock-o"
                                                                    aria-hidden="true"></i><span>15 minutes</span></div>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-row align-items-center justify-content-start">
                                                            <i class="fa fa-file" aria-hidden="true"></i><span>Reading: <a
                                                                    href="#">Word Types</a></span>
                                                            <div class="cur_time ml-auto"><i class="fa fa-clock-o"
                                                                    aria-hidden="true"></i><span>15 minutes</span></div>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-row align-items-center justify-content-start">
                                                            <i class="fa fa-volume-up" aria-hidden="true"></i><span>Audio:
                                                                <a href="#">Listening Exercise</a></span>
                                                            <div class="cur_time ml-auto"><i class="fa fa-clock-o"
                                                                    aria-hidden="true"></i><span>15 minutes</span></div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="d-flex flex-row align-items-center justify-content-start">
                                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i><span>Graded:
                                                        Cumulative Language Quiz</span>
                                                    <div class="cur_time ml-auto"><span>3 Questions</span></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="cur_item">
                                    <div
                                        class="cur_title_container d-flex flex-row align-items-start justify-content-start">
                                        <div class="cur_title">Week 2</div>
                                        <div class="cur_num ml-auto">0/5</div>
                                    </div>
                                    <div class="cur_item_content">
                                        <div class="cur_item_title">Intermediate Level</div>
                                        <div class="cur_item_text">
                                            <p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse
                                                commodo, turpis a dapibus fermentum, turpis ipsum rhoncus massa, sed commodo
                                                nisi lectus id ipsum.</p>
                                        </div>
                                        <div class="cur_contents">
                                            <ul>
                                                <li>
                                                    <i class="fa fa-folder" aria-hidden="true"></i><span>1 video, 1 audio,
                                                        1 reading</span>
                                                    <ul>
                                                        <li
                                                            class="d-flex flex-row align-items-center justify-content-start">
                                                            <i class="fa fa-video-camera"
                                                                aria-hidden="true"></i><span>Video: <a
                                                                    href="#">Greetings and Introductions</a></span>
                                                            <div class="cur_time ml-auto"><i class="fa fa-clock-o"
                                                                    aria-hidden="true"></i><span>15 minutes</span></div>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-row align-items-center justify-content-start">
                                                            <i class="fa fa-file" aria-hidden="true"></i><span>Reading: <a
                                                                    href="#">Word Types</a></span>
                                                            <div class="cur_time ml-auto"><i class="fa fa-clock-o"
                                                                    aria-hidden="true"></i><span>15 minutes</span></div>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-row align-items-center justify-content-start">
                                                            <i class="fa fa-volume-up" aria-hidden="true"></i><span>Audio:
                                                                <a href="#">Listening Exercise</a></span>
                                                            <div class="cur_time ml-auto"><i class="fa fa-clock-o"
                                                                    aria-hidden="true"></i><span>15 minutes</span></div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="d-flex flex-row align-items-center justify-content-start">
                                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i><span>Graded:
                                                        Cumulative Language Quiz</span>
                                                    <div class="cur_time ml-auto"><span>3 Questions</span></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Reviews -->
                        <div class="tab_panel reviews">
                            <div class="panel_title">Reviews</div>
                            <div class="panel_text">
                                <p>Lorem ipsum dolor sit amet, te eros consulatu pro, quem labores petentium no sea, atqui
                                    posidonium interpretaris pri eu. At soleat maiorum platonem vix, no mei case fierent.
                                    Primis quidam ancillae te mei.</p>
                            </div>
                            <div class="cur_ratings_container clearfix">
                                <div class="cur_rating d-flex flex-column align-items-center justify-content-center">
                                    <div class="cur_rating_num">4,5</div>
                                    <div class="rating_r rating_r_4 cur_stars"><i></i><i></i><i></i><i></i><i></i></div>
                                    <div class="cur_rating_text">Rated 5 out of 3 Ratings</div>
                                </div>
                                <div
                                    class="cur_rating_progress d-flex flex-column align-items-center justify-content-center">
                                    <div class="cur_progress d-flex flex-row align-items-center justify-content-between">
                                        <span>5 stars</span>
                                        <div id="cur_pbar_1" class="cur_pbar" data-perc="0.80"></div>
                                    </div>
                                    <div class="cur_progress d-flex flex-row align-items-center justify-content-between">
                                        <span>5 stars</span>
                                        <div id="cur_pbar_2" class="cur_pbar" data-perc="0.20"></div>
                                    </div>
                                    <div class="cur_progress d-flex flex-row align-items-center justify-content-between">
                                        <span>5 stars</span>
                                        <div id="cur_pbar_3" class="cur_pbar" data-perc="0.0"></div>
                                    </div>
                                    <div class="cur_progress d-flex flex-row align-items-center justify-content-between">
                                        <span>5 stars</span>
                                        <div id="cur_pbar_4" class="cur_pbar" data-perc="0.0"></div>
                                    </div>
                                    <div class="cur_progress d-flex flex-row align-items-center justify-content-between">
                                        <span>5 stars</span>
                                        <div id="cur_pbar_5" class="cur_pbar" data-perc="0.0"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="cur_reviews">

                                <!-- Review -->
                                <div class="review">
                                    <div
                                        class="review_title_container d-flex flex-row align-items-start justify-content-start">
                                        <div
                                            class="review_title d-flex flex-row align-items-center justify-content-center">
                                            <div class="review_author_image">
                                                <div><img src="images/review_1.jpg" alt=""></div>
                                            </div>
                                            <div class="review_author">
                                                <div class="review_author_name"><a href="#">Sarah Parker</a></div>
                                                <div class="review_date">Sep 29, 2017 at 9:48 am</div>
                                            </div>
                                        </div>
                                        <div class="review_stars ml-auto">
                                            <div class="rating_r rating_r_4 review_rating">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review_text">
                                        <p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse commodo,
                                            turpis a dapibus fermentum, turpis ipsum rhoncus massa, sed commodo nisi lectus
                                            id ipsum. Sed nec elit vehicula.</p>
                                    </div>
                                </div>

                                <!-- Review -->
                                <div class="review">
                                    <div
                                        class="review_title_container d-flex flex-row align-items-start justify-content-start">
                                        <div
                                            class="review_title d-flex flex-row align-items-center justify-content-center">
                                            <div class="review_author_image">
                                                <div><i class="fa fa-user" aria-hidden="true"></i></div>
                                            </div>
                                            <div class="review_author">
                                                <div class="review_author_name"><a href="#">Sarah Parker</a></div>
                                                <div class="review_date">Sep 29, 2017 at 9:48 am</div>
                                            </div>
                                        </div>
                                        <div class="review_stars ml-auto">
                                            <div class="rating_r rating_r_4 review_rating">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review_text">
                                        <p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse commodo,
                                            turpis a dapibus fermentum, turpis ipsum rhoncus massa, sed commodo nisi lectus
                                            id ipsum. Sed nec elit vehicula.</p>
                                    </div>
                                </div>

                                <!-- Review -->
                                <div class="review">
                                    <div
                                        class="review_title_container d-flex flex-row align-items-start justify-content-start">
                                        <div
                                            class="review_title d-flex flex-row align-items-center justify-content-center">
                                            <div class="review_author_image">
                                                <div><i class="fa fa-user" aria-hidden="true"></i></div>
                                            </div>
                                            <div class="review_author">
                                                <div class="review_author_name"><a href="#">Sarah Parker</a></div>
                                                <div class="review_date">Sep 29, 2017 at 9:48 am</div>
                                            </div>
                                        </div>
                                        <div class="review_stars ml-auto">
                                            <div class="rating_r rating_r_4 review_rating">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review_text">
                                        <p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse commodo,
                                            turpis a dapibus fermentum, turpis ipsum rhoncus massa, sed commodo nisi lectus
                                            id ipsum. Sed nec elit vehicula.</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Members -->
                        <div class="tab_panel members">
                            <div class="panel_title">Members</div>
                            <div class="panel_text">
                                <p>Lorem ipsum dolor sit amet, te eros consulatu pro, quem labores petentium no sea, atqui
                                    posidonium interpretaris pri eu. At soleat maiorum platonem vix, no mei case fierent.
                                    Primis quidam ancillae te mei.</p>
                            </div>
                            <div class="members_list d-flex flex-row flex-wrap align-items-start justify-content-start">

                                <!-- Member -->
                                <div class="member">
                                    <div class="member_image"><img src="images/member_1.jpg" alt=""></div>
                                    <div class="member_title"><a href="#">Sarah Parker</a></div>
                                </div>

                                <!-- Member -->
                                <div class="member">
                                    <div class="member_image"><img src="images/member_0.jpg" alt=""></div>
                                    <div class="member_title"><a href="#">Sarah Parker</a></div>
                                </div>

                                <!-- Member -->
                                <div class="member">
                                    <div class="member_image"><img src="images/member_0.jpg" alt=""></div>
                                    <div class="member_title"><a href="#">Sarah Parker</a></div>
                                </div>

                                <!-- Member -->
                                <div class="member">
                                    <div class="member_image"><img src="images/member_2.jpg" alt=""></div>
                                    <div class="member_title"><a href="#">Sarah Parker</a></div>
                                </div>

                                <!-- Member -->
                                <div class="member">
                                    <div class="member_image"><img src="images/member_3.jpg" alt=""></div>
                                    <div class="member_title"><a href="#">Sarah Parker</a></div>
                                </div>

                                <!-- Member -->
                                <div class="member">
                                    <div class="member_image"><img src="images/member_4.jpg" alt=""></div>
                                    <div class="member_title"><a href="#">Sarah Parker</a></div>
                                </div>

                                <!-- Member -->
                                <div class="member">
                                    <div class="member_image"><img src="images/member_0.jpg" alt=""></div>
                                    <div class="member_title"><a href="#">Sarah Parker</a></div>
                                </div>

                                <!-- Member -->
                                <div class="member">
                                    <div class="member_image"><img src="images/member_5.jpg" alt=""></div>
                                    <div class="member_title"><a href="#">Sarah Parker</a></div>
                                </div>

                                <!-- Member -->
                                <div class="member">
                                    <div class="member_image"><img src="images/member_6.jpg" alt=""></div>
                                    <div class="member_title"><a href="#">Sarah Parker</a></div>
                                </div>

                                <!-- Member -->
                                <div class="member">
                                    <div class="member_image"><img src="images/member_0.jpg" alt=""></div>
                                    <div class="member_title"><a href="#">Sarah Parker</a></div>
                                </div>

                                <!-- Member -->
                                <div class="member">
                                    <div class="member_image"><img src="images/member_7.jpg" alt=""></div>
                                    <div class="member_title"><a href="#">Sarah Parker</a></div>
                                </div>

                                <!-- Member -->
                                <div class="member">
                                    <div class="member_image"><img src="images/member_8.jpg" alt=""></div>
                                    <div class="member_title"><a href="#">Sarah Parker</a></div>
                                </div>

                                <!-- Member -->
                                <div class="member">
                                    <div class="member_image"><img src="images/member_0.jpg" alt=""></div>
                                    <div class="member_title"><a href="#">Sarah Parker</a></div>
                                </div>

                                <!-- Member -->
                                <div class="member">
                                    <div class="member_image"><img src="images/member_9.jpg" alt=""></div>
                                    <div class="member_title"><a href="#">Sarah Parker</a></div>
                                </div>

                                <!-- Member -->
                                <div class="member">
                                    <div class="member_image"><img src="images/member_0.jpg" alt=""></div>
                                    <div class="member_title"><a href="#">Sarah Parker</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-3">
                    <div class="sidebar">
                        <div class="sidebar_background"></div>
                        <div class="sidebar_top"><a href="#">buy course</a></div>
                        <div class="sidebar_content">

                            <!-- Features -->
                            <div class="sidebar_section features">
                                <div class="sidebar_title">Course Features</div>
                                <div class="features_content">
                                    <ul class="features_list">

                                        <!-- Feature -->
                                        <li class="d-flex flex-row align-items-start justify-content-start">
                                            <div class="feature_title"><i class="fa fa-clock-o"
                                                    aria-hidden="true"></i><span>Duration</span></div>
                                            <div class="feature_text ml-auto">2 weeks</div>
                                        </li>

                                        <!-- Feature -->
                                        <li class="d-flex flex-row align-items-start justify-content-start">
                                            <div class="feature_title"><i class="fa fa-bell"
                                                    aria-hidden="true"></i><span>Lectures</span></div>
                                            <div class="feature_text ml-auto">10</div>
                                        </li>

                                        <!-- Feature -->
                                        <li class="d-flex flex-row align-items-start justify-content-start">
                                            <div class="feature_title"><i class="fa fa-id-badge"
                                                    aria-hidden="true"></i><span>Quizzes</span></div>
                                            <div class="feature_text ml-auto">3</div>
                                        </li>

                                        <!-- Feature -->
                                        <li class="d-flex flex-row align-items-start justify-content-start">
                                            <div class="feature_title"><i class="fa fa-thumbs-up"
                                                    aria-hidden="true"></i><span>Pass Percentage</span></div>
                                            <div class="feature_text ml-auto">60</div>
                                        </li>

                                        <!-- Feature -->
                                        <li class="d-flex flex-row align-items-start justify-content-start">
                                            <div class="feature_title"><i class="fa fa-thumbs-down"
                                                    aria-hidden="true"></i><span>Max Retakes</span></div>
                                            <div class="feature_text ml-auto">5</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Cert -->
                            <div class="sidebar_section cert">
                                <div class="sidebar_title">Certification</div>
                                <div class="cert_image"><img src="images/cert.jpg" alt=""></div>
                            </div>

                            <!-- You may like -->
                            <div class="sidebar_section like">
                                <div class="sidebar_title">You may like</div>
                                <div class="like_items">

                                    <!-- Like Item -->
                                    <div class="like_item d-flex flex-row align-items-end justify-content-start">
                                        <div class="like_title_container">
                                            <div class="like_title">Vocabulary</div>
                                            <div class="like_subtitle">Spanish</div>
                                        </div>
                                        <div class="like_price ml-auto">Free</div>
                                    </div>
                                    <!-- Like Item -->
                                    <div class="like_item d-flex flex-row align-items-end justify-content-start">
                                        <div class="like_title_container">
                                            <div class="like_title">Vocabulary</div>
                                            <div class="like_subtitle">Spanish</div>
                                        </div>
                                        <div class="like_price ml-auto">Free</div>
                                    </div>
                                    <!-- Like Item -->
                                    <div class="like_item d-flex flex-row align-items-end justify-content-start">
                                        <div class="like_title_container">
                                            <div class="like_title">Vocabulary</div>
                                            <div class="like_subtitle">Spanish</div>
                                        </div>
                                        <div class="like_price ml-auto">Free</div>
                                    </div>
                                    <!-- Like Item -->
                                    <div class="like_item d-flex flex-row align-items-end justify-content-start">
                                        <div class="like_title_container">
                                            <div class="like_title">Vocabulary</div>
                                            <div class="like_subtitle">Spanish</div>
                                        </div>
                                        <div class="like_price ml-auto">Free</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

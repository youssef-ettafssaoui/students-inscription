@php
    $setting = App\Models\SiteSetting::find(1);
    $seo = App\Models\Seo::find(1);
@endphp

<footer class="footer">
    <div class="footer_body">
        <div class="container">
            <div class="row">

                <!-- Newsletter -->
                <div class="col-lg-4 footer_col">
                    <div class="newsletter_container d-flex flex-column align-items-start justify-content-end">
                        <img src="{{ asset('front/images/logo.png') }}" alt=""
                            style="padding: 20px; width:120px; margin: 0px;">
                        <div class="footer_logo mb-auto"><a href="#">{{ $setting->ecole_name }}</a></div>
                        <div class="footer_title">{{ $setting->ecole_address }}</div>
                    </div>
                </div>

                <!-- About -->
                <div class="col-lg-1 offset-lg-3 footer_col">
                    <div>
                        <div class="footer_title">Liens</div>
                        <ul class="footer_list">
                            <li><a href="/">Accueil</a></li>
                            <li><a href="/formations/allformations">Formations</a></li>
                            <li><a href="/gerants">Gérants</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </div>
                </div>


                <!-- Privacy -->
                <div class="col-lg-4 footer_col clearfix">
                    <div>
                        <div class="footer_title">Contacts</div>
                        <ul class="footer_list">
                            <li><i class="fa fa-phone"> {{ $setting->phone_one }}</i></li>
                            <li><i class="fa fa-fax"></i> {{ $setting->phone_two }}</li>
                            <li><i class="fa fa-envelope"></i> {{ $setting->ecole_address }}</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div
                        class="copyright_content d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-start">
                        <div class="cr">
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | Made with <i class="fa fa-heart-o"
                                aria-hidden="true"></i> by <a href="http://www.fstg-marrakech.ac.ma/FST/"
                                target="_blank">{{ $setting->ecole_name }}</a>
                        </div>
                        <div class="cr_right ml-md-auto">
                            <div class="footer_social">
                                <span class="cr_social_title">Nous suivre</span>
                                <ul>
                                    <li><a href="{{ $setting->facebook }}"><i class="fa fa-facebook"
                                                aria-hidden="true"></i></a></li>
                                    <li><a href="{{ $setting->linkedin }}"><i class="fa fa-linkedin"
                                                aria-hidden="true"></i></a></li>
                                    <li><a href="{{ $setting->youtube }}"><i class="fa fa-youtube"
                                                aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<script src="{{ asset('front/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('front/styles/bootstrap4/popper.js') }}"></script>
<script src="{{ asset('front/styles/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{ asset('front/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{ asset('front/plugins/easing/easing.js') }}"></script>
<script src="{{ asset('front/js/custom.js') }}"></script>
<script src="{{ asset('front/js/courses.js') }}"></script>
<script src="{{ asset('front/plugins/parallax-js-master/parallax.min.js') }}"></script>
<script src="{{ asset('front/plugins/progressbar/progressbar.min.js') }}"></script>
<script src="{{ asset('front/plugins/video-js/video.min.js') }}"></script>
<script src="{{ asset('front/plugins/video-js/Youtube.min.js') }}"></script>
<script src="{{ asset('front/js/instructors.js') }}"></script>
<script src="{{ asset('front/js/course.js') }}"></script>
<script src="{{ asset('front/js/blog.js') }}"></script>
</body>

</html>

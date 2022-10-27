<!-- Language -->

<div class="language">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="language_slider_container">
                    @if ($categories->count() > 0)
                        <!-- Language Slider -->

                        <div class="owl-carousel owl-theme language_slider">

                            @foreach ($categories as $category)
                                <div class="owl-item language_item">
                                    <a href="{{ route('category.index', [$category->id]) }}">
                                        <div class="flag">
                                            <span><i class="{{ $category->icon }}"></i></span>
                                        </div>
                                        <div class="lang_name">
                                            {{ $category->name }}
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>

                        <div class="lang_nav lang_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                        <div class="lang_nav lang_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                    @else
                        <center>
                            <h2 class="text-danger">Pas de Disciplines encore Publiées par notre Administrateur</h2>
                        </center>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

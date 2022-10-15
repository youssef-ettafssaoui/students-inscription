 <div class="blog">
     <div class="container">
         <div class="row row-lg-eq-height">

             <!-- Blog Left -->
             <div class="col-lg-12">
                 <div class="blog_left">
                     <div class="blog_title">Catégories Populaires</div>
                     <div class="blog_categories">
                         <div class="row categories_row">

                             @foreach ($categories as $category)
                                 <div class="col-md-4 blog_category_col">
                                     <a href="{{ route('category.index', [$category->id]) }}">
                                         <div class="blog_category">
                                             <div class="blog_category_image">
                                                 <img src="{{ asset('front/images/fstg11.jpg') }}" alt="">
                                             </div>
                                             <div class="blog_category_title">{{ $category->name }}
                                                 ({{ $category->formations->count() }})
                                             </div>
                                         </div>
                                     </a>
                                 </div>
                             @endforeach


                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

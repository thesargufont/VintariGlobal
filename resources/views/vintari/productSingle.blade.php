<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
   @include('layouts.header')
</head>
<body>

    <div class="loader"><div class="loader_html"></div></div>
    
    <div id="wrap" class="grid_1200">
        
        @include('layouts.head')
        
        <div class="clearfix"></div>
        
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h4>{{ucwords(__('vintari.desc_product'))}}</h4>
                        <span></span>
                    </div>
                    <div class="col-md-6">
                        
                    </div>
                </div><!-- End row -->
            </div><!-- End container -->
        </div><!-- End breadcrumbs -->
        
        <div class="sections">
            <div class="container">
                <div class="sections-title">
                    <div class="sections-title-h3"><h3>{{ $Product->title }}</h3></div>
                    <p>{{ $Product->description }}</p>
                </div><!-- End sections-title -->
                <div class="row">
                    <div class="col-md-7">
                        <div class="single-portfolio-slide single-portfolio-slide-2 bxslider-slide">
                            <ul>
                                @if ($Product->image_path1 !== '')
                                    <li><img alt="" src="{{ $Product->image_path1 }}"></li>
                                @endif
                                @if ($Product->image_path2 !== '')
                                    <<li><img alt="" src="{{ $Product->image_path2 }}"></li>
                                @endif
                                @if ($Product->image_path3 !== '')
                                    <li><img alt="" src="{{ $Product->image_path3 }}"></li>
                                @endif
                                @if ($Product->image_path4 !== '')
                                    <li><img alt="" src="{{ $Product->image_path4 }}"></li>
                                @endif
                                @if ($Product->image_path5 !== '')
                                    <li><img alt="" src="{{ $Product->image_path5 }}"></li>
                                @endif
                            </ul>
                        </div><!-- End single-portfolio-slide -->
                    </div>
                    <div class="col-md-5">
                        
                        
                        <div class="section-title section-title-2 section-title-3"><h6>{{ucwords(__('vintari.product_detail'))}} :</h6></div>
                        <div class="portfolio-details">
                            <ul>
                                <li><span>{{ucwords(__('vintari.product_name'))}} : </span>{{ $Product->title }}</li>
                                <li><span>{{ucwords(__('vintari.desc_product'))}} : </span>{{ $Product->description }}</li>
                                <li><span>{{ucwords(__('vintari.origin'))}} : </span>{{ $Product->countryname }}</li>
                                <li><span>{{ucwords(__('vintari.category'))}} : </span>{{ $Product->categoryname }}</li>
                            </ul>
                        </div><!-- End portfolio-details -->
                        
                        
                    </div>
                </div><!-- End row -->
            </div><!-- End container -->
        </div><!-- End sections -->
        
        <div class="sections section-2">
            <div class="container">
                <div class="sections-title">
                    <div class="sections-title-h3"><h3>{{ucwords(__('vintari.best_selling_product'))}}</h3></div>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.</p> -->
                </div><!-- End sections-title -->
                <div class="row">
                <div class="portfolio-slide bxslider-slide">
                        <ul>]
                            @foreach ($BestSellProdArr as $BestSellProds)
                            <li>
                                @foreach ($BestSellProds as $Product)
                                <div class="col-md-3 portfolio-item">
                                    <div class="portfolio-one">
                                        <div class="portfolio-head">
                                            <div class="portfolio-img"><img alt="" src="{{ $Product->image_path1 }}"></div>
                                            <div class="portfolio-hover">
                                                <a class="portfolio-link" href="{{ route('single-product',$Product->id) }}"><i class="fa fa-link"></i></a>
                                                <a class="portfolio-zoom prettyPhoto" href="{{ $Product->image_path1 }}"><i class="fa fa-search"></i></a>
                                            </div>
                                        </div><!-- End portfolio-head -->
                                        <div class="portfolio-content">
                                            <i class="fa fa-list"></i>
                                            <div class="portfolio-meta">
                                                <div class="portfolio-name"><h6><a href="{{ route('single-product',$Product->id) }}">{{ $Product->title }}</a></h6></div>
                                                <div class="portfolio-cat"><a href="#">
                                                    @php
                                                    $locale = session()->get('locale');
                                                    if($locale == 'en'){
                                                        echo $Product->category->name_en;
                                                    }else{
                                                        echo $Product->category->name;
                                                    }
                                                @endphp</a></div>
                                            </div><!-- End portfolio-meta -->
                                        </div><!-- End portfolio-content -->
                                    </div><!-- End portfolio-item -->
                                </div>
                                @endforeach
                            </li>
                            @endforeach
                            <li>
                                {{-- <div class="col-md-3 portfolio-item">
                                    <div class="portfolio-one">
                                        <div class="portfolio-head">
                                            <div class="portfolio-img"><img alt="" src="images/minute.png"></div>
                                            <div class="portfolio-hover">
                                                <a class="portfolio-link" href="single-portfolio.php"><i class="fa fa-link"></i></a>
                                                <a class="portfolio-zoom prettyPhoto" href="images/minute.png"><i class="fa fa-search"></i></a>
                                            </div>
                                        </div><!-- End portfolio-head -->
                                        <div class="portfolio-content">
                                            <i class="fa fa-list"></i>
                                            <div class="portfolio-meta">
                                                <div class="portfolio-name"><h6><a href="single-portfolio.php">Minute maid</a></h6></div>
                                                <div class="portfolio-cat"><a href="#">Makanan & Minuman</a></div>
                                            </div><!-- End portfolio-meta -->
                                        </div><!-- End portfolio-content -->
                                    </div><!-- End portfolio-item -->
                                </div>
                                <div class="col-md-3 portfolio-item">
                                    <div class="portfolio-one">
                                        <div class="portfolio-head">
                                            <div class="portfolio-img"><img alt="" src="images/lays.jpg"></div>
                                            <div class="portfolio-hover">
                                                <a class="portfolio-link" href="single-portfolio.php"><i class="fa fa-link"></i></a>
                                                <a class="portfolio-zoom prettyPhoto" href="images/lays.jpg"><i class="fa fa-search"></i></a>
                                            </div>
                                        </div><!-- End portfolio-head -->
                                        <div class="portfolio-content">
                                            <i class="fa fa-list"></i>
                                            <div class="portfolio-meta">
                                                <div class="portfolio-name"><h6><a href="single-portfolio.php">Lays</a></h6></div>
                                                <div class="portfolio-cat"><a href="#">Makanan & Minuman</a></div>
                                            </div><!-- End portfolio-meta -->
                                        </div><!-- End portfolio-content -->
                                    </div><!-- End portfolio-item -->
                                </div>
                                <div class="col-md-3 portfolio-item">
                                    <div class="portfolio-one">
                                        <div class="portfolio-head">
                                            <div class="portfolio-img"><img alt="" src="images/sensation.jpg"></div>
                                            <div class="portfolio-hover">
                                                <a class="portfolio-link" href="single-portfolio.php"><i class="fa fa-link"></i></a>
                                                <a class="portfolio-zoom prettyPhoto" href="images/sensation.jpg"><i class="fa fa-search"></i></a>
                                            </div>
                                        </div><!-- End portfolio-head -->
                                        <div class="portfolio-content">
                                            <i class="fa fa-list"></i>
                                            <div class="portfolio-meta">
                                                <div class="portfolio-name"><h6><a href="single-portfolio.php">Sensation</a></h6></div>
                                                <div class="portfolio-cat"><a href="#">Kebersihan</a></div>
                                            </div><!-- End portfolio-meta -->
                                        </div><!-- End portfolio-content -->
                                    </div><!-- End portfolio-item -->
                                </div>
                                <div class="col-md-3 portfolio-item">
                                    <div class="portfolio-one">
                                        <div class="portfolio-head">
                                            <div class="portfolio-img"><img alt="" src="images/oreo.jpg"></div>
                                            <div class="portfolio-hover">
                                                <a class="portfolio-link" href="single-portfolio.php"><i class="fa fa-link"></i></a>
                                                <a class="portfolio-zoom prettyPhoto" href="images/oreo.jpg"><i class="fa fa-search"></i></a>
                                            </div>
                                        </div><!-- End portfolio-head -->
                                        <div class="portfolio-content">
                                            <i class="fa fa-list"></i>
                                            <div class="portfolio-meta">
                                                <div class="portfolio-name"><h6><a href="single-portfolio.php">Oreo</a></h6></div>
                                                <div class="portfolio-cat"><a href="#">Makanan & Minuman</a></div>
                                            </div><!-- End portfolio-meta -->
                                        </div><!-- End portfolio-content -->
                                    </div><!-- End portfolio-item -->
                                </div>
                            </li>
                            <li>
                                <div class="col-md-3 portfolio-item">
                                    <div class="portfolio-one">
                                        <div class="portfolio-head">
                                            <div class="portfolio-img"><img alt="" src="images/soklin.jpg"></div>
                                            <div class="portfolio-hover">
                                                <a class="portfolio-link" href="single-portfolio.php"><i class="fa fa-link"></i></a>
                                                <a class="portfolio-zoom prettyPhoto" href="images/soklin.jpg"><i class="fa fa-search"></i></a>
                                            </div>
                                        </div><!-- End portfolio-head -->
                                        <div class="portfolio-content">
                                            <i class="fa fa-list"></i>
                                            <div class="portfolio-meta">
                                                <div class="portfolio-name"><h6><a href="single-portfolio.php">Soklin</a></h6></div>
                                                <div class="portfolio-cat"><a href="#">Kebersihan</a></div>
                                            </div><!-- End portfolio-meta -->
                                        </div><!-- End portfolio-content -->
                                    </div><!-- End portfolio-item -->
                                </div>
                                <div class="col-md-3 portfolio-item">
                                    <div class="portfolio-one">
                                        <div class="portfolio-head">
                                            <div class="portfolio-img"><img alt="" src="images/clear.jpg"></div>
                                            <div class="portfolio-hover">
                                                <a class="portfolio-link" href="single-portfolio.php"><i class="fa fa-link"></i></a>
                                                <a class="portfolio-zoom prettyPhoto" href="images/clear.jpg"><i class="fa fa-search"></i></a>
                                            </div>
                                        </div><!-- End portfolio-head -->
                                        <div class="portfolio-content">
                                            <i class="fa fa-list"></i>
                                            <div class="portfolio-meta">
                                                <div class="portfolio-name"><h6><a href="single-portfolio.php">Clear</a></h6></div>
                                                <div class="portfolio-cat"><a href="#">Kebersihan</a></div>
                                            </div><!-- End portfolio-meta -->
                                        </div><!-- End portfolio-content -->
                                    </div><!-- End portfolio-item -->
                                </div>
                                <div class="col-md-3 portfolio-item">
                                    <div class="portfolio-one">
                                        <div class="portfolio-head">
                                            <div class="portfolio-img"><img alt="" src="images/timtam.jpg"></div>
                                            <div class="portfolio-hover">
                                                <a class="portfolio-link" href="single-portfolio.php"><i class="fa fa-link"></i></a>
                                                <a class="portfolio-zoom prettyPhoto" href="images/timtam.jpg"><i class="fa fa-search"></i></a>
                                            </div>
                                        </div><!-- End portfolio-head -->
                                        <div class="portfolio-content">
                                            <i class="fa fa-list"></i>
                                            <div class="portfolio-meta">
                                                <div class="portfolio-name"><h6><a href="single-portfolio.php">Timtam</a></h6></div>
                                                <div class="portfolio-cat"><a href="#">Makanan & Minuman</a></div>
                                            </div><!-- End portfolio-meta -->
                                        </div><!-- End portfolio-content -->
                                    </div><!-- End portfolio-item -->
                                </div>
                                <div class="col-md-3 portfolio-item">
                                    <div class="portfolio-one">
                                        <div class="portfolio-head">
                                            <div class="portfolio-img"><img alt="" src="images/pepsi.jpg"></div>
                                            <div class="portfolio-hover">
                                                <a class="portfolio-link" href="single-portfolio.php"><i class="fa fa-link"></i></a>
                                                <a class="portfolio-zoom prettyPhoto" href="images/pepsi.jpg"><i class="fa fa-search"></i></a>
                                            </div>
                                        </div><!-- End portfolio-head -->
                                        <div class="portfolio-content">
                                            <i class="fa fa-list"></i>
                                            <div class="portfolio-meta">
                                                <div class="portfolio-name"><h6><a href="single-portfolio.php">Pepsi</a></h6></div>
                                                <div class="portfolio-cat"><a href="#">Makanan & Minuman</a></div>
                                            </div><!-- End portfolio-meta -->
                                        </div><!-- End portfolio-content -->
                                    </div><!-- End portfolio-item -->
                                </div>
                            </li> --}}
                        </ul>
                    </div><!-- End portfolio-slide -->
                </div><!-- End row -->
            </div><!-- End container -->
        </div><!-- End sections -->
    
    </div><!-- End wrap -->
    
    <div class="go-up"><i class="fa fa-chevron-up"></i></div>

    <script src="{{ asset("vintari/js/jquery.min.js") }}"></script>
    <script src="{{ asset("vintari/js/html5.js") }}"></script>
    <script src="{{ asset("vintari/js/jquery.isotope.min.js") }}"></script>
    <script src="{{ asset("vintari/js/jquery.nicescroll.min.js") }}"></script>
    <script src="{{asset("vintari/js/jquery.appear.js")}}"></script>
    <script src="{{asset("vintari/js/count-to.js")}}"></script>
    <script src="{{asset("vintari/js/twitter/jquery.tweet.js")}}"></script>
    <script src="{{asset("vintari/js/jquery.inview.min.js")}}"></script>
    <script src="{{asset("vintari/js/jquery.prettyPhoto.js")}}"></script>
    <script src="{{asset("vintari/js/jquery.bxslider.min.js")}}"></script>
    <script src="{{asset("vintari/js/jquery.themepunch.plugins.min.js")}}"></script>
    <script src="{{asset("vintari/js/jquery.themepunch.revolution.min.js")}}"></script>
    <script src="{{asset("vintari/js/custom.js")}}"></script>
    <script src="{{asset("vintari/js/apps.js")}}"></script>
    </body>
    
    </body>
    </html>
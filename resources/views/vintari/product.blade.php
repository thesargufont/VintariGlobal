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
                        <h4>{{ucwords(__('vintari.our_product'))}}</h4>
                        <!-- <span>Latest Awesome & Creative Works</span> -->
                    </div>
                    <div class="col-md-6">
                    </div>
                </div><!-- End row -->
            </div><!-- End container -->
        </div><!-- End breadcrumbs -->
        
        <div class="sections sections-left-sidebar">
            <div class="container">
                <div class="sections-title">
                    <div class="sections-title-h3"><h3>{{ucwords(__('vintari.our_product'))}}</h3></div>
                    <p>{{ucwords(__('vintari.our_product'))}}</p>
                </div><!-- End sections-title -->
                <div class="row">
                    <div class="col-md-9 main-content">
                        <div class="row portfolio-all portfolio-0">
                            <ul>
                                @foreach ($Products as $Product)
                                <li class="col-md-4 term-design portfolio-item isotope-item">
                                    <div class="portfolio-one">
                                        <div class="portfolio-head">
                                            <div class="portfolio-img"><img alt="" src="{{ url('storage/'.$Product->image_path1) }}"></div>
                                            <div class="portfolio-hover">
                                                <a class="portfolio-link" href="{{ route('single-product',$Product->id) }}"><i class="fa fa-link"></i></a>
                                                <a class="portfolio-zoom prettyPhoto" href="{{ url('storage/'.$Product->image_path1) }}"><i class="fa fa-search"></i></a>
                                            </div>
                                        </div><!-- End portfolio-head -->
                                        <div class="portfolio-content">
                                            <i class="fa fa-shopping-cart"></i>
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
                                                    @endphp
                                                    </a></div>
                                            </div><!-- End portfolio-meta -->
                                        </div><!-- End portfolio-content -->
                                    </div><!-- End portfolio-item -->
                                </li>
                                @endforeach
                                
                            </ul>
                        </div><!-- End portfolio-0 -->
                        {{ $Products->links() }}
                    </div><!-- End main-content -->
                    <div class="col-md-3 sidebar">
                        <div class="widget">
                            <div class="widget-title"><h6>{{ucwords(__('vintari.country'))}}</h6></div>
                            <ul>
                                @foreach ($Countries as $Country)
                                    <li><a href={{ route('product', $Country->id) }}>{{ $Country->name }}<span><i class="fa fa-arrow-circle-right"></i></span></a></li>
                                @endforeach
                            </ul>
                        </div>
                        <form action="{{ route('product_post', $Countries_id) }}" method="POST" >
                            <div class="widget">
                                <div class="widget-title"><h6>{{ucwords(__('vintari.category'))}}</h6></div>
                                <ul>
                                    @foreach ($Categories as $Category)
                                        @if(in_array($Category->id,  $Categories_post))
                                            <li><input type="checkbox" name="categories[]" value="{{ $Category->id }}" checked/> {{ $Category->name }}<br/></li>
                                        @else    
                                            <li><input type="checkbox" name="categories[]" value="{{ $Category->id }}"/> {{ $Category->name }}<br/></li>
                                        @endif 
                                    @endforeach
                                </ul>
                            <br>
                            {{ csrf_field() }}
                                <input class ='mx-auto button-1' type="submit" value="{{ucwords(__('vintari.search'))}}">
                            </div>
                        </form>
                        
                    </div><!-- End sidebar -->
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
    {{-- <script src="{{asset("vintari/js/apps.js")}}"></script> --}}
    </body>
    
    </body>
    </html>
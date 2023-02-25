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
                        <h4>{{ ucwords(__('vintari.activities'))}}</h4>
                        <span>{{ ucwords(__('vintari.our_activities'))}} </span>
                    </div>
                    <div class="col-md-6">
                        
                    </div>
                </div><!-- End row -->
            </div><!-- End container -->
        </div><!-- End breadcrumbs -->
        
        <div class="sections">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 main-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="blog-item single-post">
                                    <div class="blog-img">
                                        <div class="bxslider-slide">
                                            <ul>
                                                    @if ($Activity->image_path1 !== '')
                                                        <li><img alt="" src="{{ url('storage/'.$Activity->image_path1) }}"></li>
                                                    @endif
                                                    @if ($Activity->image_path2 !== '')
                                                        <li><img alt="" src="{{ url('storage/'.$Activity->image_path2) }}"></li>
                                                    @endif
                                                    @if ($Activity->image_path3 !== '')
                                                        <li><img alt="" src="{{ url('storage/'.$Activity->image_path3) }}"></li>
                                                    @endif
                                            </ul>
                                        </div>
                                        <div class="blog-date"><span>{{ $Activity->created_at->format('d') }}</span><span>{{ $Activity->created_at->format('M') }}, {{ $Activity->created_at->format('Y') }}</span></div>
                                    </div><!-- End blog-img -->
                                    <div class="blog-content">
                                        <h6>{{ $Activity->title }}</h6>
                                        <div class="clearfix"></div>
                                        <div class="post-content">
                                            <p class="justify">{{ $Activity->articles }}</p>
                                        </div><!-- End post-content -->
                                        <div class="clearfix"></div>
                                    </div><!-- End blog-content -->
                                    
                                </div><!-- End blog-item -->
                                
                                
                            </div>
                        </div><!-- End row -->
                    </div><!-- End main-content -->
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
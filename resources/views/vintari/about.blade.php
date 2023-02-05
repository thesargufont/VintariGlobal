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
                        <h4>{{ucwords(__('vintari.about_us'))}}</h4>
                        <span>{{ucwords(__('vintari.about'))}} Vintari Global Abadi</span>
                    </div>
                    <div class="col-md-6">
                        
                    </div>
                </div><!-- End row -->
            </div><!-- End container -->
        </div><!-- End breadcrumbs -->
        
        <div class="sections">
            <div class="container">
                <div class="sections-title">
                    <div class="sections-title-h3"><h3>Sejarah</h3></div>
                </div><!-- End sections-title -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="bxslider-slide about-slide">
                            <ul>
                                <li><img alt="" src="images/building.jpg"></li>
                                <li><img alt="" src="images/history.jpg"></li>
                                <li><img alt="" src="images/office.jpg"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <p>{{ $About->history }}</p>
                    </div>
                </div><!-- End row -->
            </div><!-- End container -->
        </div><!-- End sections -->
        
        <div class="sections sections-padding-b-50 section-2">
            <div class="container">
                <div class="sections-title">
                    <div class="sections-title-h3"><h3>{{ucwords(__('vintari.visi_mission'))}}</h3></div>
                    <p>{{ucwords(__('vintari.visi_mission_vintari'))}}</p>
                </div><!-- End sections-title -->
                <div class="row">
                    <div class="">
                        <ul>
                            <li>
                                <div class="col-md-6 member-item">
                                    <div class="member">
                                        <div class="member-head">
                                            
                                        </div><!-- End member-head -->
                                        <div class="member-content">
                                            <h5>{{ucwords(__('vintari.vision'))}}</h5>
                                            <p>{{ $About->visi }}</p>
                                        </div><!-- End member-content -->
                                    </div><!-- End member-item -->
                                </div>
                                <div class="col-md-6 member-item">
                                    <div class="member">
                                        <div class="member-head">
                                            
                                        </div><!-- End member-head -->
                                        <div class="member-content">
                                            <h5>{{ucwords(__('vintari.mission'))}}</h5>
                                            <p>{{ $About->misi }}</p>
                                        </div><!-- End member-content -->
                                    </div><!-- End member-item -->
                                </div>
                                
                            </li>
                            
                        </ul>
                    </div><!-- End member-slide -->
                </div><!-- End row -->
            </div><!-- End container -->
        </div><!-- End sections -->
    
        <div class="sections">
            <div class="container">
                <div class="sections-title">
                    <div class="sections-title-h3"><h3>{{ucwords(__('vintari.distributed_countries'))}}</h3></div>
                </div><!-- End sections-title -->
                <div class="row">
                    <div class="portfolio-slide bxslider-slide">
                        <ul>
                            
                            @foreach ($CountriesArr as $Countries)
                            
                            <li>
                                @foreach ($Countries as $country)

                                <div class="col-md-2 portfolio-item">
                                    <div class="portfolio-one">
                                        <div class="portfolio-head">
                                            <div class="portfolio-img"><img alt="" src="{{ $country->image_path }}"></div>
                                        </div><!-- End portfolio-head -->
                                        <div class="portfolio-content">
                                            <div class="portfolio-meta">
                                                <div class="portfolio-name"><h6>{{ $country->name }}</h6></div>
                                            </div><!-- End portfolio-meta -->
                                        </div><!-- End portfolio-content -->
                                    </div><!-- End portfolio-item -->
                                </div>
                                @endforeach
                            </li>
                            @endforeach
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
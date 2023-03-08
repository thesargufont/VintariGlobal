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
                        <h4>FAQs</h4>
                        <span></span>
                    </div>
                    <div class="col-md-6">
                        
                    </div>
                </div><!-- End row -->
            </div><!-- End container -->
        </div><!-- End breadcrumbs -->
        
        <div class="sections sections-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 main-content col-md-offset-2">
                        <div class="accordion accordion-2 toggle-accordion">
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($Faqs as $Faq)
                            <div class="section-content">
                                <h4 class="accordion-title @if ($i == '1'){ active } @endif "><a href="#">{{ $Faq->question }}<i class="fa fa-plus"></i></a></h4>
                                <div class="accordion-inner @if ($i == '1'){ active }@endif ">
                                    {{ $Faq->answer }}
                                </div>
                            </div>
                            @php
                                $i = $i + 1;
                            @endphp
                            @endforeach
                        </div><!-- End accordion -->
                    </div><!-- End main-content -->
                </div><!-- End row -->
                
            </div><!-- End container -->
        </div><!-- End sections -->
    
    </div><!-- End wrap -->
    
    <div class="go-up"><i class="fa fa-chevron-up"></i></div>
    <script src="{{ asset("vintari/js/jquery.min.js") }}"></script>
    <script src="{{ asset("vintari/js/html5.js") }}"></script>
    <script src="{{ asset("vintari/js/jquery.isotope.min.js") }}"></script>
    {{-- <script src="{{ asset("vintari/js/jquery.nicescroll.min.js") }}"></script> --}}
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
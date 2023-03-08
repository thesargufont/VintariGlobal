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
                        <h4>{{ucwords(__('vintari.contact_us'))}}</h4>
                        <span></span>
                    </div>
                    <div class="col-md-6">
                        
                    </div>
                </div><!-- End row -->
            </div><!-- End container -->
        </div><!-- End breadcrumbs -->
        
        <div class="sections sections-padding-b-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 main-content">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="section-title section-title-2"><h6>{{ucwords(__('vintari.contact_form'))}} :</h6></div>
                                <div class="comment-form">

                                    <form method="post" action="{{ route('send_message') }}">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-input">
                                                    <i class="fa fa-user"></i>
                                                    <input name="name" id="name" type="text" placeholder="{{ucwords(__('vintari.your_name'))}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-input">
                                                    <i class="fa fa-envelope"></i>
                                                    <input name="mail" id="mail" type="email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-input">
                                                    <i class="fa fa-comment"></i>
                                                    <textarea name="message" id="message" placeholder="{{ucwords(__('vintari.message'))}}"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="submit" class="button-3" value="{{ucwords(__('vintari.send_message'))}}">
                                            </div>
                                        </div><!-- End row -->
                                        {{ csrf_field() }}
                                    </form>
                                </div><!-- End comment-form -->
                            </div>
                            <div class="col-md-3">
                                <div class="section-title section-title-2"><h6>{{ ucwords(__('vintari.contact_information')) }} :</h6></div>
                                <div class="contact-information">
                                    <ul>
                                        <li>Ruko Permata Taman Palem blok B 5 No.16, Pegadungan, Kalideres, Jakarta Barat 11830</li>
                                        <li>- {{ $About->email ?? ''}}</li>
                                        <li>- {{ $About->telp ?? ''}}</li>
                                    </ul>
                                </div><!-- End contact-information -->
                                <div class="section-title section-title-2 section-title-3"><h6>{{ ucwords(__('vintari.business_hours')) }} :</h6></div>
                                <ul class="business-hours">
                                    <li>{{ucwords(__('vintari.monday_friday'))}} : 10am to 6pm</li>
                                    <li>{{ucwords(__('vintari.sunday'))}} : {{ucwords(__('vintari.closed'))}}</li>
                                </ul>
                            </div>
                        </div><!-- End row -->
                        <div class="clearfix gap"></div>
                        <div class="clearfix gap"></div>
                    </div><!-- End main-content -->
                </div><!-- End row -->
            </div><!-- End container -->
            <div class="contact-iframe"><iframe height="480" src="https://maps.google.com/maps?q=Ruko Permata Taman Palem blok B 5 No.16, Pegadungan, Kalideres, Jakarta Barat 11830&amp;output=embed"></iframe></div>
        </div><!-- End sections -->
        
    
    </div><!-- End wrap -->

    <script>
        $( document ).ready(function() {
        @if(!empty($Message))
            @if($Success == false)
                alertify.error("{{ $Message }}");
            @elseif($Success == true)
                alertify.success("{{ $Message }}");
            @endif
        @endif
        });
    </script>
    @php
        $Message = '';
    @endphp
    
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
    <script src="{{asset("vintari/js/alertify/alertify.min.js")}}"></script>
    </body>
    
    </body>
    </html>
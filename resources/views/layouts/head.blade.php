<header id="header-top">
    <div class="container clearfix">
        <div class="row">
            
            <div class="col-md-12">
                <div class="social-ul">
                    <ul>
                            <li class="social-google"><a href="{{ route('lang') }}?lang=id"><img src="{{ asset("vintari/images/id.png") }}"></i></a></li>
                            <li class="social-google"><a href="{{ route('lang') }}?lang=en"><img src="{{ asset("vintari/images/en.png") }}"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- End container -->
</header><!-- End header -->
<header id="header">
    <div class="container clearfix">
        <div class="logo"><a href="/"><img alt="" src="{{ asset("vintari/images/V-logo.jpg") }}"></a><span></span></div>
        <nav class="navigation">
            <ul>
                <li class="@if($Activetab =='Home') current_page_item  @endif"><a href="/">{{ucwords(__('vintari.home'))}}</a></li>
                <li class="@if($Activetab =='About') current_page_item  @endif"><a href="{{ route('about') }}">{{ucwords(__('vintari.about_us'))}}</a></li>
                <li class="@if($Activetab =='Product') current_page_item  @endif"><a href="{{ route('product') }}">{{ucwords(__('vintari.product'))}}</a></li>
                <li class="@if($Activetab =='Activity') current_page_item  @endif"><a href="{{ route('activity') }}">{{ucwords(__('vintari.activity'))}}</a></li>
                <li class="@if($Activetab =='Faq') current_page_item  @endif"><a href="{{ route('faq') }}">{{ucwords(__('vintari.faq'))}}</a></li>
                <li class="@if($Activetab =='Contact') current_page_item  @endif"><a href="{{ route('contact') }}">{{ucwords(__('vintari.contact'))}}</a></li>
            </ul>
        </nav><!-- End navigation -->
    </div><!-- End container -->
</header><!-- End header -->
<script src="{{asset('js/jquery/jquery-3.3.1.min.js')}}"></script>
<script>
      var url = "{{ route('lang') }}";
      function change() {
        console.log($(this).val());
        window.location.href = url + "?lang="+ $(this).val();
      }
</script>

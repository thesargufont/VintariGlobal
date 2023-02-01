<header id="header-top">
    <div class="container clearfix">
        <div class="row">
            
            <div class="col-md-12">
                <div class="social-ul">
                    <ul>
                        <li class="social-google"><a href="#"><i class="fa"><img src="images/id.png"><span></span></img></i></a></li>
                        <li class="social-google"><a href="#"><i class="fa"><img src="images/en.png"><span></span></img></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- End container -->
</header><!-- End header -->
<header id="header">
    <div class="container clearfix">
        <div class="logo"><a href="index.php"><img alt="" src="images/V-logo.jpg"></a><span></span></div>
        <div class="col-md-8">
            <select class="form-control Langchange">
                <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                <option value="id" {{ session()->get('locale') == 'id' ? 'selected' : '' }}>Indonesia</option>                    
            </select>
        </div>
        <nav class="navigation">
            <ul>
                <li class="current_page_item"><a href="index.php">{{ucwords(__('vintari.home'))}}</a></li>
                <li class=""><a href="{{ route('about') }}">{{ucwords(__('vintari.about_us'))}}</a></li>
                <li class=""><a href="{{ route('product') }}">{{ucwords(__('vintari.product'))}}</a></li>
                <li class=""><a href="{{ route('activity') }}">{{ucwords(__('vintari.activity'))}}</a></li>
                <li class=""><a href="{{ route('faq') }}">{{ucwords(__('vintari.faq'))}}</a></li>
                <li class=""><a href="{{ route('contact') }}">{{ucwords(__('vintari.contact'))}}</a></li>
            </ul>
        </nav><!-- End navigation -->
    </div><!-- End container -->
</header><!-- End header -->
<script src="{{asset('js/jquery/jquery-3.3.1.min.js')}}"></script>
<script>
      var url = "{{ route('lang') }}";
     $(".Langchange").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    });
</script>

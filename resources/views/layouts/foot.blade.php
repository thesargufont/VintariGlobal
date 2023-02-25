<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer-widget">
                    <div class="widget-title"><h6>{{ucwords(__('vintari.about_vintari'))}}</h6></div>
                    <div class="widget-about">
                        <p class="justify">{{ $About->history ?? ''  }}</p>
                        {{-- <div class="social-ul"> --}}
                            {{-- <ul>
                                <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="social-pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                                <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul> --}}
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer-widget">
                    <div class="widget-title"><h6>{{ucwords(__('vintari.contact_us'))}}</h6></div>
                    <div class="widget-about-2">
                        <ul>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <div>Jakarta, Indonesia</div>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <div>{{ucwords(__('vintari.contact_us'))}} : {{ $About->telp ?? '' }}</div>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <div>{{ucwords(__('vintari.sales_email'))}} : {{ $About->email ?? ''}}</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer-widget">
                    <div class="widget-title"><h6>{{ucwords(__('vintari.alibaba_store'))}}</h6></div>
                    <div class="widget-about-2">
                        <ul>
                            <li>
                                <i class="fa fa-globe"></i>
                                <div>URL Alibaba</div>
                                <div><a href="{{ $About->url_alibaba ?? '' }}">{{ucwords(__('vintari.go_to_alibaba'))}}</a></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
</footer><!-- End footer -->
<footer id="footer-bottom">
    <div class="container">
        <div class="copyrights">Vintari Global Abadi @2022</div>
        <nav class="navigation-footer">
        </nav>
    </div><!-- End container -->
</footer><!-- End footer-bottom -->
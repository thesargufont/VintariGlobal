<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Vintari Global Abadi</title>
    <meta name="description" content="Vintari Global Abadi">
    <!-- <meta name="author" content="2code.info"> -->

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset("vintari/style.css") }}">
    <!-- Skins -->
    <link rel="stylesheet" href="{{ asset("vintari/css/skins/skins.css") }}">
    <!-- Responsive Style -->
    <link rel="stylesheet" href="{{ asset("vintari/css/responsive.css") }}">
    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset("vintari/images/favicon.png") }}">
</head>

<body>

    <div class="loader">
        <div class="loader_html"></div>
    </div>

    <div id="wrap" class="grid_1200">

        @extends('layouts.head')

        <div class="clearfix"></div>

        <div class="slideshow">
            <div class="tp-banner-container">
                <div class="tp-banner">
                    <ul>
                        <li data-transition="random" data-slotamount="7" data-masterspeed="1500">
                            <!-- MAIN IMAGE -->
                            <img src="{{ asset("vintari/images/banner.jpg") }}" alt="" data-bgfit="cover" data-bgposition="left top"
                                data-bgrepeat="no-repeat">

                            <div class="slideshow-bg" data-y="310" data-x="center" data-start="0"></div>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="slide-h2 tp-caption randomrotate skewtoleft tp-resizeme start white"
                                data-y="160" data-x="center" data-hoffset="0" data-start="300"
                                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="500" data-easing="Power3.easeInOut" data-endspeed="300" style="z-index: 2">
                                <h2>Vintari Global Abadi</h2>
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="slide-h3 tp-caption customin white" data-y="230" data-x="center"
                                data-hoffset="0" data-start="600"
                                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="500" data-easing="Power3.easeInOut" data-endspeed="300" style="z-index: 2">
                                <h2>Distribusi dan Ekspor Produk Makanan</h2>
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="slide-p tp-caption black randomrotate skewtoleft tp-resizeme start"
                                data-x="center" data-hoffset="0" data-y="310" data-speed="500" data-start="1300"
                                data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none"
                                data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="500"
                                style="z-index: 6;white-space: pre-line;max-width: 1170px;text-align: center;">
                                <p class="white">Sejak 2006, PT Vintari Global Abadi bergerak di bidang penjualan ekspor
                                    ke berbagai negara di dunia, ekspor lebih dari 500 varian produk.</p>
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="slide-a tp-caption customin" data-x="center" data-y="390" data-hoffset="0"
                                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="500" data-start="1800" data-easing="Power3.easeInOut" data-endspeed="500"
                                style="z-index: 4"><a href="#" class="button-4">Tentang Kami</a>
                            </div>

                        </li>
                        <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                            <!-- MAIN IMAGE -->
                            <img src="images/banner2.jpg" alt="" data-bgfit="cover" data-bgposition="left top"
                                data-bgrepeat="no-repeat">

                            <div class="slideshow-bg" data-y="310" data-x="center" data-start="0"></div>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption lfl start" data-x="600" data-y="100" data-speed="400"
                                data-start="1300" data-easing="easeOut" data-endspeed="500"><img
                                    src="images/products.png" alt="products">
                            </div>

                            <!-- Layer NR. 2 -->
                            <div class="tp-caption color large_bg sfr start" data-x="0" data-y="110" data-start="1800"
                                data-speed="700" data-easing="easeOutBounce" style="z-index: 4">Harga Bersaing
                            </div>

                            <!-- Layer NR. 3 -->
                            <div class="tp-caption color large_bg sft start" data-x="0" data-y="160" data-start="2300"
                                data-speed="700" data-easing="easeOutBounce" style="z-index: 4">Banyak Varian
                            </div>

                            <!-- Layer NR. 4 -->
                            <div class="tp-caption color large_bg sfl start" data-x="0" data-y="210" data-start="2800"
                                data-speed="700" data-easing="easeOutBounce" style="z-index: 4">Tanpa Minimum Order
                            </div>

                            <!-- Layer NR. 5 -->
                            <div class="tp-caption color large_bg sft start" data-x="0" data-y="260" data-start="3300"
                                data-speed="700" data-easing="easeOutBounce" style="z-index: 4">Pengiriman Seluruh Dunia
                            </div>

                            <!-- Layer NR. 6 -->
                            <div class="tp-caption color large_bg sfr start" data-x="0" data-y="310" data-start="3800"
                                data-speed="700" data-easing="easeOutBounce" style="z-index: 4">Pemabaruan Produk
                            </div>

                            <!-- Layer NR. 7 -->
                            <div class="slide-a tp-caption customin" data-x="0" data-y="390" data-hoffset="0"
                                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="700" data-start="4200" data-easing="easeOutBounce" data-endspeed="500"
                                style="z-index: 4"><a href="#" class="button-3">Cek Produk Kami</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- End tp-banner-container -->
        </div><!-- End slideshow -->

        <div class="sections">
            <div class="container">
                <div class="sections-title">
                    <div class="sections-title-h3">
                        <h3>Berbagai Macam Varian</h3>
                    </div>
                    <p>Sejak 2006, PT Vintari Global Abadi bergerak di bidang penjualan ekspor ke berbagai negara di
                        dunia, ekspor lebih dari 500 varian produk. memberi jaminan kepuasan pelanggan dan juga
                        menyediakan berbagai macam varian</p>
                </div><!-- End sections-title -->
                <div class="row">
                    <div class="bxslider-slide box-icon-slide">
                        <ul>
                            <li>
                                <div class="col-md-3">
                                    <div class="box-icon">
                                        <div class="box-icon-i box-icon-i-2 box-icon-i-5"><i class="fa fa-dollar"></i>
                                        </div>
                                        <div class="box-icon-content">
                                            <h5>Harga Bersaing</h5>
                                            <p>Memberi jaminan harga bersaing dibanding kompetitor lain </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="box-icon">
                                        <div class="box-icon-i box-icon-i-2 box-icon-i-5"><i class="fa fa-sitemap"></i>
                                        </div>
                                        <div class="box-icon-content">
                                            <h5>Banyak Varian</h5>
                                            <p>variasi produk dan varian yang dapat dipilih oleh pembeli dari selusuh
                                                dunia </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="box-icon">
                                        <div class="box-icon-i box-icon-i-2 box-icon-i-5"><i
                                                class="fa fa-credit-card"></i></div>
                                        <div class="box-icon-content">
                                            <h5>Tanpa Minimum Order</h5>
                                            <p>Pembeli dapat melakukan order tanpa minimum order </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="box-icon">
                                        <div class="box-icon-i box-icon-i-2 box-icon-i-5"><i class="fa fa-globe"></i>
                                        </div>
                                        <div class="box-icon-content">
                                            <h5>Pengiriman ke seluruh dunia</h5>
                                            <p>Kami dapat pengiriman produk ke seluruh dunia </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div><!-- End box-icon-slide -->
                </div><!-- End row -->
            </div><!-- End container -->
        </div><!-- End sections -->

        <div class="sections section-2">
            <div class="container">
                <div class="sections-title">
                    <div class="sections-title-h3">
                        <h3>Produk Kami</h3>
                    </div>
                    <p>Kami menyediakan berbagai varian produk dan melakukan pengiriman ke seluauh ddunia dengan harga
                        yang bersaing</p>
                </div><!-- End sections-title -->
                <div class="row">
                    <div class="portfolio-slide bxslider-slide">
                        <ul>
                            <li>
                                <div class="col-md-3 portfolio-item">
                                    <div class="portfolio-one">
                                        <div class="portfolio-head">
                                            <div class="portfolio-img"><img alt="" src="{{ asset("vintari/images/minute.png") }}"></div>
                                            <div class="portfolio-hover">
                                                <a class="portfolio-link" href="single-product.php"><i
                                                        class="fa fa-link"></i></a>
                                                <a class="portfolio-zoom prettyPhoto" href="{{ asset("vintari/images/minute.png") }}"><i
                                                        class="fa fa-search"></i></a>
                                            </div>
                                        </div><!-- End portfolio-head -->
                                        <div class="portfolio-content">
                                            <i class="fa fa-list"></i>
                                            <div class="portfolio-meta">
                                                <div class="portfolio-name">
                                                    <h6><a href="single-product.php">Minute maid</a></h6>
                                                </div>
                                                <div class="portfolio-cat"><a href="#">Makanan & Minuman</a></div>
                                            </div><!-- End portfolio-meta -->
                                        </div><!-- End portfolio-content -->
                                    </div><!-- End portfolio-item -->
                                </div>
                                <div class="col-md-3 portfolio-item">
                                    <div class="portfolio-one">
                                        <div class="portfolio-head">
                                            <div class="portfolio-img"><img alt="" src="{{ asset("vintari/images/lays.jpg") }}"></div>
                                            <div class="portfolio-hover">
                                                <a class="portfolio-link" href="single-product.php"><i
                                                        class="fa fa-link"></i></a>
                                                <a class="portfolio-zoom prettyPhoto" href="{{ asset("vintari/images/lays.jpg") }}"><i
                                                        class="fa fa-search"></i></a>
                                            </div>
                                        </div><!-- End portfolio-head -->
                                        <div class="portfolio-content">
                                            <i class="fa fa-list"></i>
                                            <div class="portfolio-meta">
                                                <div class="portfolio-name">
                                                    <h6><a href="single-product.php">Lays</a></h6>
                                                </div>
                                                <div class="portfolio-cat"><a href="#">Makanan & Minuman</a></div>
                                            </div><!-- End portfolio-meta -->
                                        </div><!-- End portfolio-content -->
                                    </div><!-- End portfolio-item -->
                                </div>
                                <div class="col-md-3 portfolio-item">
                                    <div class="portfolio-one">
                                        <div class="portfolio-head">
                                            <div class="portfolio-img"><img alt="" src="{{ asset("vintari/images/sensation.jpg") }}"></div>
                                            <div class="portfolio-hover">
                                                <a class="portfolio-link" href="single-product.php"><i
                                                        class="fa fa-link"></i></a>
                                                <a class="portfolio-zoom prettyPhoto" href="{{ asset("vintari/images/sensation.jpg") }}"><i
                                                        class="fa fa-search"></i></a>
                                            </div>
                                        </div><!-- End portfolio-head -->
                                        <div class="portfolio-content">
                                            <i class="fa fa-list"></i>
                                            <div class="portfolio-meta">
                                                <div class="portfolio-name">
                                                    <h6><a href="single-product.php">Sensation</a></h6>
                                                </div>
                                                <div class="portfolio-cat"><a href="#">Kebersihan</a></div>
                                            </div><!-- End portfolio-meta -->
                                        </div><!-- End portfolio-content -->
                                    </div><!-- End portfolio-item -->
                                </div>
                                <div class="col-md-3 portfolio-item">
                                    <div class="portfolio-one">
                                        <div class="portfolio-head">
                                            <div class="portfolio-img"><img alt="" src="{{ asset("vintari/images/oreo.jpg") }}"></div>
                                            <div class="portfolio-hover">
                                                <a class="portfolio-link" href="single-product.php"><i
                                                        class="fa fa-link"></i></a>
                                                <a class="portfolio-zoom prettyPhoto" href="{{ asset("vintari/images/oreo.jpg") }}"><i
                                                        class="fa fa-search"></i></a>
                                            </div>
                                        </div><!-- End portfolio-head -->
                                        <div class="portfolio-content">
                                            <i class="fa fa-list"></i>
                                            <div class="portfolio-meta">
                                                <div class="portfolio-name">
                                                    <h6><a href="single-product.php">Oreo</a></h6>
                                                </div>
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
                                            <div class="portfolio-img"><img alt="" src="{{ asset("vintari/images/soklin.jpg") }}"></div>
                                            <div class="portfolio-hover">
                                                <a class="portfolio-link" href="single-product.php"><i
                                                        class="fa fa-link"></i></a>
                                                <a class="portfolio-zoom prettyPhoto" href="{{ asset("vintari/images/soklin.jpg") }}"><i
                                                        class="fa fa-search"></i></a>
                                            </div>
                                        </div><!-- End portfolio-head -->
                                        <div class="portfolio-content">
                                            <i class="fa fa-list"></i>
                                            <div class="portfolio-meta">
                                                <div class="portfolio-name">
                                                    <h6><a href="single-product.php">Soklin</a></h6>
                                                </div>
                                                <div class="portfolio-cat"><a href="#">Kebersihan</a></div>
                                            </div><!-- End portfolio-meta -->
                                        </div><!-- End portfolio-content -->
                                    </div><!-- End portfolio-item -->
                                </div>
                                <div class="col-md-3 portfolio-item">
                                    <div class="portfolio-one">
                                        <div class="portfolio-head">
                                            <div class="portfolio-img"><img alt="" src="{{ asset("vintari/images/clear.jpg") }}"></div>
                                            <div class="portfolio-hover">
                                                <a class="portfolio-link" href="single-product.php"><i
                                                        class="fa fa-link"></i></a>
                                                <a class="portfolio-zoom prettyPhoto" href="{{ asset("vintari/images/clear.jpg") }}"><i
                                                        class="fa fa-search"></i></a>
                                            </div>
                                        </div><!-- End portfolio-head -->
                                        <div class="portfolio-content">
                                            <i class="fa fa-list"></i>
                                            <div class="portfolio-meta">
                                                <div class="portfolio-name">
                                                    <h6><a href="single-product.php">Clear</a></h6>
                                                </div>
                                                <div class="portfolio-cat"><a href="#">Kebersihan</a></div>
                                            </div><!-- End portfolio-meta -->
                                        </div><!-- End portfolio-content -->
                                    </div><!-- End portfolio-item -->
                                </div>
                                <div class="col-md-3 portfolio-item">
                                    <div class="portfolio-one">
                                        <div class="portfolio-head">
                                            <div class="portfolio-img"><img alt="" src="{{ asset("vintari/images/timtam.jpg") }}"></div>
                                            <div class="portfolio-hover">
                                                <a class="portfolio-link" href="single-product.php"><i
                                                        class="fa fa-link"></i></a>
                                                <a class="portfolio-zoom prettyPhoto" href="{{ asset("vintari/images/timtam.jpg") }}"><i
                                                        class="fa fa-search"></i></a>
                                            </div>
                                        </div><!-- End portfolio-head -->
                                        <div class="portfolio-content">
                                            <i class="fa fa-list"></i>
                                            <div class="portfolio-meta">
                                                <div class="portfolio-name">
                                                    <h6><a href="single-product.php">Timtam</a></h6>
                                                </div>
                                                <div class="portfolio-cat"><a href="#">Makanan & Minuman</a></div>
                                            </div><!-- End portfolio-meta -->
                                        </div><!-- End portfolio-content -->
                                    </div><!-- End portfolio-item -->
                                </div>
                                <div class="col-md-3 portfolio-item">
                                    <div class="portfolio-one">
                                        <div class="portfolio-head">
                                            <div class="portfolio-img"><img alt="" src="{{ asset("vintari/images/pepsi.jpg") }}"></div>
                                            <div class="portfolio-hover">
                                                <a class="portfolio-link" href="single-product.php"><i
                                                        class="fa fa-link"></i></a>
                                                <a class="portfolio-zoom prettyPhoto" href="{{ asset("vintari/images/pepsi.jpg") }}"><i
                                                        class="fa fa-search"></i></a>
                                            </div>
                                        </div><!-- End portfolio-head -->
                                        <div class="portfolio-content">
                                            <i class="fa fa-list"></i>
                                            <div class="portfolio-meta">
                                                <div class="portfolio-name">
                                                    <h6><a href="single-product.php">Pepsi</a></h6>
                                                </div>
                                                <div class="portfolio-cat"><a href="#">Makanan & Minuman</a></div>
                                            </div><!-- End portfolio-meta -->
                                        </div><!-- End portfolio-content -->
                                    </div><!-- End portfolio-item -->
                                </div>
                            </li>
                        </ul>
                    </div><!-- End portfolio-slide -->
                </div><!-- End row -->
                <div class="load-more-projects"><a class="button-1" href="product-list.php">Load More Projects</a></div>
            </div><!-- End container -->
        </div><!-- End sections -->

        <div class="sections section-3 sections-padding-t-50">
            <div class="container">
                <div class="bxslider-slide bxslider-slide-2">
                    <ul>
                        <li>
                            <div class="testimonial-item testimonial-item-2">
                                <div class="testimonial-content">
                                    <div><i class="fa fa-quote-left"></i></div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam,
                                        adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus
                                        arcu id magna euismod in elementum purus molestie.Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum
                                        tristique vel, eleifend sed turpis.</p>
                                    <div><i class="fa fa-quote-right"></i></div>
                                </div><!-- End testimonial-content -->
                                <div class="testimonial-meta">
                                    <div class="testimonial-name"><span>Thesar Gufont</span><span>@artemis.tech</span>
                                    </div>
                                </div><!-- End testimonial-meta -->
                                <div class="clearfix"></div>
                            </div><!-- End testimonial-item -->
                        </li>
                        <li>
                            <div class="testimonial-item testimonial-item-2">
                                <div class="testimonial-content">
                                    <div><i class="fa fa-quote-left"></i></div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam,
                                        adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus
                                        arcu id magna euismod in elementum purus molestie.Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum
                                        tristique vel, eleifend sed turpis.</p>
                                    <div><i class="fa fa-quote-right"></i></div>
                                </div><!-- End testimonial-content -->
                                <div class="testimonial-meta">
                                    <div class="testimonial-name"><span>Yoel Putra
                                            Budiono</span><span>@artemis.tech</span></div>
                                </div><!-- End testimonial-meta -->
                                <div class="clearfix"></div>
                            </div><!-- End testimonial-item -->
                        </li>
                    </ul>
                </div><!-- End bxslider-slide -->
            </div><!-- End container -->
        </div><!-- End sections -->



        <div class="sections section-4 section-img">
            <div class="container">
                <div class="sections-title">
                    <div class="sections-title-h3">
                        <h3>Portofolio</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing
                        condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in
                        elementum purus molestie.</p>
                </div><!-- End sections-title -->
                <div class="gap"></div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="box-icon box-icon-number">
                            <div class="box-icon-i box-icon-i-2 box-icon-i-4"><i class="fa fa-coffee"></i></div>
                            <div class="box-icon-content">
                                <h5>31212</h5>
                                <p>Produk terjual</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box-icon box-icon-number">
                            <div class="box-icon-i box-icon-i-2 box-icon-i-4"><i class="fa fa-flag"></i></div>
                            <div class="box-icon-content">
                                <h5>12</h5>
                                <p>Negara</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box-icon box-icon-number">
                            <div class="box-icon-i box-icon-i-2 box-icon-i-4"><i class="fa fa-user"></i></div>
                            <div class="box-icon-content">
                                <h5>122</h5>
                                <p>Pelanggan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box-icon box-icon-number">
                            <div class="box-icon-i box-icon-i-2 box-icon-i-4"><i class="fa fa-folder-open"></i></div>
                            <div class="box-icon-content">
                                <h5>5485</h5>
                                <p>Total Ekspor</p>
                            </div>
                        </div>
                    </div>
                </div><!-- End row -->
            </div><!-- End container -->
        </div><!-- End sections -->





        <div class="sections sections-padding-b-50">
            <div class="container">
                <div class="sections-title">
                    <div class="sections-title-h3">
                        <h3>Product kami</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing
                        condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in
                        elementum purus molestie.</p>
                </div><!-- End sections-title -->
                <div class="row">
                    <div class="bxslider-slide clients-slide">
                        <ul>
                            <li>
                                <div class="col-md-2 client-item">
                                    <div class="client"><a href="#"><img alt="" src="{{ asset("vintari/images/cheetos.jpg") }}"></a></div>
                                </div>
                                <div class="col-md-2 client-item">
                                    <div class="client"><a href="#"><img alt="" src="{{ asset("vintari/images/dettol.jpg") }}"></a></div>
                                </div>
                                <div class="col-md-2 client-item">
                                    <div class="client"><a href="#"><img alt="" src="{{ asset("vintari/images/morris.jpg") }}"></a></div>
                                </div>
                                <div class="col-md-2 client-item">
                                    <div class="client"><a href="#"><img alt="" src="{{ asset("vintari/images/unilever.jpg") }}"></a></div>
                                </div>
                                <div class="col-md-2 client-item">
                                    <div class="client"><a href="#"><img alt="" src="{{ asset("vintari/images/cocacola.png") }}"></a></div>
                                </div>
                                <div class="col-md-2 client-item">
                                    <div class="client"><a href="#"><img alt="" src="{{ asset("vintari/images/glade.png") }}"></a></div>
                                </div>
                            </li>
                            <li>
                                <div class="col-md-2 client-item">
                                    <div class="client"><a href="#"><img alt="" src="{{ asset("vintari/images/glico.png") }}"></a></div>
                                </div>
                                <div class="col-md-2 client-item">
                                    <div class="client"><a href="#"><img alt="" src="{{ asset("vintari/images/nissin.png") }}"></a></div>
                                </div>
                                <div class="col-md-2 client-item">
                                    <div class="client"><a href="#"><img alt="" src="{{ asset("vintari/images/kimberly.png") }}"></a></div>
                                </div>
                                <div class="col-md-2 client-item">
                                    <div class="client"><a href="#"><img alt="" src="{{ asset("vintari/images/ot.png") }}"></a></div>
                                </div>
                                <div class="col-md-2 client-item">
                                    <div class="client"><a href="#"><img alt="" src="{{ asset("vintari/images/pg.png") }}"></a></div>
                                </div>
                                <div class="col-md-2 client-item">
                                    <div class="client"><a href="#"><img alt="" src="{{ asset("vintari/images/pocari.jpg") }}"></a></div>
                                </div>
                                <div class="col-md-2 client-item">
                                    <div class="client"><a href="#"><img alt="" src="{{ asset("vintari/images/redbull.png") }}"></a></div>
                                </div>


                            </li>
                        </ul>
                    </div><!-- End clients-slide -->
                </div><!-- End row -->
            </div><!-- End container -->
        </div><!-- End sections -->


        @extends('layouts.foot')


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
</body>

</html>

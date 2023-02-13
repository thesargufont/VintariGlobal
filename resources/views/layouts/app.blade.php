<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.title', 'Vintari') }}</title>

    <!-- Fonts: -->
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="css/SourceSansPro.css" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="css/adminlte/adminlte.min.css">
    <style>
        .control-sidebar, .control-sidebar:before {
            width: 500px;
            right: -500px;
        }
    
        .banner {
          position: relative;
          margin: 0 auto;
          max-width:720px;
        }
    
        .banner ul,
        ol {
          padding: 0;
          margin: 0
        }
    
        .banner li {
          width: 100%;
          list-style: none
        }
    
        .banner li p {
          position: absolute;
          margin: 0;
          padding: 0;
          left: 0;
          top: 50%;
          text-align: center;
          font-size: 28px;
          height: 38px;
          color: #fff;
          margin-top: -19px
        }
    
        .banner li a {
          text-decoration: none;
          color: #fff
        }
    
        #banner ol {
          width: 42px;
          position: absolute;
          left: 50%;
          bottom: 10px;
          z-index: 1000;
          margin-left: -21px;
          overflow: hidden
        }
    
        #banner ol li {
          float: left;
          background-color: #fff;
          color: #000;
          margin: 2px;
          width: 10px;
          height: 10px;
          display: block;
          text-align: center;
          cursor: pointer;
          border-radius: 50%;
          font-size: 14px;
          text-indent: -999em;
          list-style: none
        }
    
        #banner ol li.active {
          background-color: orange;
          color: #fff
        }
    
        .content-wrapper {
            background: #ffffff;
        }
    
        .jumbotron {
            background-color: #ffffff;
        }

        #navigation,.navbar .navbar-default{
            /* background-image: url("img/flower.jpg"); */
        }
    </style>
</head>
<body class="hold-transition sidebar-collapse">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand bg-danger navbar-light border-bottom">
            <!-- Left navbar links -->

            <ul class="navbar-nav">
              {{-- <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#">
                       <i class="fa fa-bars"></i>
                </a>
              </li> --}}

              {{-- <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Home</a>
              </li>
              <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
              </li> --}}

            </ul>
    
            <!-- SEARCH FORM -->
            {{-- <form class="form-inline ml-3">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="{{__('artemis_search')}}" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fa fa-search"></i>
                  </button>
                </div>
              </div>
            </form> --}}
    
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <!-- Notifications Dropdown Menu -->
                <!-- Authentication Links -->
                @guest
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{ route('login') }}" title="{{__('Sign in')}}">
                        <i class="fa fa-sign-in"></i>
                    </a>
                </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#"
                               onclick="document.getElementById('logout-form').submit();">
                                {{ __('sign out') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
                {{-- <li class="nav-item">
                <a class="nav-link" href="{{url('/docs')}}" title="{{__('Documentation')}}">
                        <i class="fa fa-question"></i>
                    </a>
                </li> --}}
            </ul>
        </nav>
        <!-- /.navbar -->
    
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-danger elevation-4">
            <!-- Brand Logo -->
            <a href="{{url('/')}}" class="brand-link bg-danger d-flex">
              <span class="brand-text font-weight-bold"><img src="img/artemis_logo.png" alt="Polytron Logo" class="brand-image" style="opacity: .8"> {{ config('app.name', 'Artemis') }}</span>
            </a>
    
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="{{url('/docs')}}" class="nav-link">
                                <i class="nav-icon fa fa-question"></i>
                                <p>{{__('Documentation')}}</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
    
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            @yield('content')
        </div>
        <!-- /.content-wrapper -->
    
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <a class="nav-link pull-right" data-widget="control-sidebar" data-slide="true" href="#" title="tutup">
                <i class="fa fa-close"></i>
            </a>
            <div class="p-3">
                <h5>Bantuan Halaman Login</h5>
                <p>Masukkan e-mail Anda dan kata sandi Anda ke form login, centang checkbox ingat saya untuk mengingat login jika membuka halaman lagi dengan status belum logout, Klik tombol login untuk menjalankan proses login.</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->
    
        <!-- Main Footer -->
        <footer class="main-footer bg-danger">
            <!-- To the right -->
            {{-- <div class="float-right d-none d-sm-inline">
                <a href="sitemap.html">Sitemap</a> | <a href="feedback.html">Umpan balik</a> | <a href="contact.html">Hubungi kami</a> | <a href="privacy.html">Pernyataan privasi</a> | <a href="usage.html">Persyaratan penggunaan</a> | <a href="attribution.html">Attributions</a>
            </div> --}}
            <!-- Default to the left -->
            <strong>Copyright &copy; 2019 ESD, PT. Hartono Istana Teknologi.</strong>
        </footer>
    </div>
    <!-- ./wrapper -->
    
    <!-- REQUIRED SCRIPTS -->
    
    <!-- jQuery -->
    <script src="js/jquery/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="js/adminlte/adminlte.min.js"></script>
</body>
</html>

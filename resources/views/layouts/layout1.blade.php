@php
  /**
   *   file       : layout/layout1.blade.php
   *   description: main blade for this layout  
   *   created    : rudy.gunawan@polytron.co.id 2019/05/15
   */
  global $refDoc, $tcode, $currentMenu;    
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <META HTTP-EQUIV="Expires" CONTENT="0">
    @if(isset($artemistimeout))
      <META http-equiv="refresh" content="{{$artemistimeout}}" >
    @elseif((session('artemistimeout')!='')&&(session('artemistimeout')!=0))
      <META http-equiv="refresh" content="{{session('artemistimeout')}}" >
    @endif
    <link rel="icon" href="{{ asset('favicon.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.title', 'Artemis') }}</title>

    <!-- Fonts: -->
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('css/fontawesome-5.11.2/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome-5.11.2/css/v4-shims.min.css')}}">

    <link href="{{asset('css/SourceSansPro.css')}}" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    {{-- <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/bootstrap-4.2.1/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{ asset('css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">

    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/DataTables-1.10.18/DataTables-1.10.18/css/dataTables.bootstrap4.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/DataTables-1.10.18/AutoFill-2.3.3/css/autoFill.bootstrap4.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/DataTables-1.10.18/Buttons-1.5.6/css/buttons.bootstrap4.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/DataTables-1.10.18/ColReorder-1.5.0/css/colReorder.bootstrap4.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/DataTables-1.10.18/FixedColumns-3.2.5/css/fixedColumns.bootstrap4.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/DataTables-1.10.18/FixedHeader-3.1.4/css/fixedHeader.bootstrap4.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/DataTables-1.10.18/Responsive-2.2.2/css/responsive.bootstrap4.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/DataTables-1.10.18/RowGroup-1.1.0/css/rowGroup.bootstrap4.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/DataTables-1.10.18/Scroller-2.0.0/css/scroller.bootstrap4.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/DataTables-1.10.18/Select-1.3.0/css/select.bootstrap4.min.css')}}"/>
    <!-- autocomplete -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.autocomplete.css') }}" />
    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{asset('css/adminlte/adminlte.min.css')}}">
    <style>
        .control-sidebar, .control-sidebar:before {
            width: 75%;
            right: -75%;
        }
    
        .banner {
          position: relative;
          margin: 0 auto;
          max-width:720px;
        }

        .banner ul,
        ol {
          padding: 0;
          margin: 0;
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

        .nav-item {
          padding-bottom: 2px;
          padding-top: 2px;
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
          font-size:12px;
          /* font-size: 14px; */
          text-indent: -999em;
          list-style: none
        }
    
        #banner ol li.active {
          background-color: orange;
          color: #fff
        }
        /*
        .content-wrapper {
            background: #ffffff;
        }
        */
        .jumbotron {
            background-color: #ffffff;
        }

        #navigation,.navbar .navbar-default{
            /* background-image: url("img/flower.jpg"); */
        }

        /* user-menu */
        .navbar-nav>.user-menu>.dropdown-menu {
         border-top-right-radius:0;
         border-top-left-radius:0;
         padding:1px 0 0 0;
         border-top-width:0;
         width:280px;
        }
        .navbar-nav>.user-menu>.dropdown-menu,
        .navbar-nav>.user-menu>.dropdown-menu>.user-body {
         border-bottom-right-radius:4px;
         border-bottom-left-radius:4px
        }
        .navbar-nav>.user-menu>.dropdown-menu>li.user-header {
         height:175px;
         padding:10px;
         text-align:center
         /* color: #000000; */
        }
        .navbar-nav>.user-menu>.dropdown-menu>li.user-header>img {
         z-index:5;
         height:60px;
         width:60px;
         border:3px solid;
         border-color:transparent;
         border-color:rgba(255,255,255,0.2)
        }
        .navbar-nav>.user-menu>.dropdown-menu>li.user-header>p {
         z-index:5;
         /* color:#fff; */
         /* color:rgba(255,255,255,0.8); */
         font-size:12px;
         /* font-size:17px; */
         margin-top:10px
        }
        .navbar-nav>.user-menu>.dropdown-menu>li.user-header>p>small {
         display:block;
         font-size:12px
        }
        .navbar-nav>.user-menu>.dropdown-menu>.user-body {
         padding:15px;
         border-bottom:1px solid #f4f4f4;
         border-top:1px solid #dddddd
        }
        .navbar-nav>.user-menu>.dropdown-menu>.user-body:before,
        .navbar-nav>.user-menu>.dropdown-menu>.user-body:after {
         content:" ";
         display:table
        }
        .navbar-nav>.user-menu>.dropdown-menu>.user-body:after {
         clear:both
        }
        .navbar-nav>.user-menu>.dropdown-menu>.user-body a {
         color:#444 !important
        }
        @media (max-width:991px) {
         .navbar-nav>.user-menu>.dropdown-menu>.user-body a {
          background:#fff !important;
          color:#444 !important
         }
        }
        .navbar-nav>.user-menu>.dropdown-menu>.user-footer {
         background-color:#f9f9f9;
         padding:10px
        }
        .navbar-nav>.user-menu>.dropdown-menu>.user-footer:before,
        .navbar-nav>.user-menu>.dropdown-menu>.user-footer:after {
         content:" ";
         display:table
        }
        .navbar-nav>.user-menu>.dropdown-menu>.user-footer:after {
         clear:both
        }
        .navbar-nav>.user-menu>.dropdown-menu>.user-footer .btn-default {
         /* color:#666666 */
         color: #000000 !important;
        }
        @media (max-width:991px) {
         .navbar-nav>.user-menu>.dropdown-menu>.user-footer .btn-default:hover {
          background-color:#f9f9f9
         }
        }
        .navbar-nav>.user-menu .user-image {
         float:left;
         width:25px;
         height:25px;
         border-radius:50%;
         margin-right:10px;
         margin-top:-2px
        }
        @media (max-width:767px) {
         .navbar-nav>.user-menu .user-image {
          float:none;
          margin-right:0;
          margin-top:-8px;
          line-height:10px
         }
        }
        /** draggable **/
        body.dragging, body.dragging * {
          cursor: move !important;
        }

        .dragged {
          position: absolute;
          opacity: 0.5;
          z-index: 2000;
        }

        ol.example li.placeholder {
          position: relative;
          /** More li styles **/
        }
        ol.example li.placeholder:before {
          position: absolute;
          /** Define arrowhead **/
        }

        /** search box **/
        hgroup { padding-left: 15px; border-bottom: 1px solid #ccc; }
        hgroup h1 { font: 500 normal 1.625em "Roboto",Arial,Verdana,sans-serif; color: #2a3644; margin-top: 0; line-height: 1.15; }
        hgroup h2.lead { font: normal normal 1.125em "Roboto",Arial,Verdana,sans-serif; color: #2a3644; margin: 0; padding-bottom: 10px; }

        /** fieldset **/
        fieldset.data-filter {
            border: 1px groove #ddd !important;
            padding: 0 1.4em 1.4em 1.4em !important;
            margin: 0 0 1.5em 0 !important;
            -webkit-box-shadow:  0px 0px 0px 0px #000;
                    box-shadow:  0px 0px 0px 0px #000;
        }

        legend.data-filter {
            width:inherit; /* Or auto */
            padding:0 10px; /* To give a bit of padding on the left and right */
            border-bottom:none;
            /* font-size:14px; */
            font-size:1rem;
        }

        /* HTML Base style for global adjustment */
        html {
          font-size:75%; /* 12/16 */
        }
        .btn {
          padding: 0rem .75rem;
        }

        .table td, .table th {
          padding: .4rem;
        }

        .brand-link {
          padding: .61rem .5rem;
        }

        .nav-tabs>.nav-item {
          padding-bottom: 0rem !important;
        }

        .content-header {
          padding: .1rem .5rem;
        }

        .card-header {
          padding: .2rem 1.25rem;
        }
        
        .fa-blank
        {
          visibility:hidden !important;
        }

        .main-sidebar {
          z-index: 998 !important;
        }

        #sidebar-overlay {
          z-index: 997 !important;
        }

        input[type=text]:valid {
          color: black;
        }

        input[type=text]:invalid {
          color: red;
        }

        .content-wrapper {
          min-height: calc(100vh - 5vh);
        }

        .main-footer {
          height: 5vh;
          width: 100%
          position: absolute;
          bottom: 0;
          left: 0;
        }
        body {
          width: 100vw;
          height: 100vh;
          padding-right: 1vw !important;
          overflow: hidden !important;
        }

        .modal-open {
          overflow-y: auto;
        }

        .modal-dialog {
          max-width: calc(100% - (1.75rem *2));
          width: 500px!important;
        }
        .modal-header {
          cursor: move;
        }
    </style>
    @yield('content_headscript')
    @livewireStyles
</head>
<body class="hold-transition sidebar-collapse">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand bg-danger navbar-light border-bottom">
            <!-- Left navbar links -->

            <ul class="navbar-nav">
              <li class="nav-item">
                <a role="button" class="nav-link sidebar-toggle art-sidebar-toggle" data-widget="pushmenu" href="#" title="{{ucwords(__('Artemis application menu'))}}">
                       <i class="fas fa-bars"></i>
                </a>
              </li>
            </ul>
    
            <!-- SEARCH FORM -->
            <form id="art_app_search_form" class="form-inline ml-3">
              <div class="input-group input-group-sm">
              <input id="art_app_search_input" class="form-control form-control-navbar" type="search" placeholder="{{ucwords(__('app menu search'))}}" aria-label="Search" title="{{ucfirst(__('You can search application menu with tcode or title'))}}" value="{{session('art_search_text')}}" autocomplete="off">
                <div id="art_search_result_dropdown" class="dropdown-menu dropdown-menu-lg">
                </div>
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </form>
    
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                @guest
                <!-- Authentication Links -->
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}" title="{{ucwords(__('sign in'))}}">
                    <i class="fas fa-sign-in-alt"></i>
                  </a>
                </li>
                @else
                <!-- Messages Dropdown Menu -->
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown" id="art_notifs">
                  <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fas fa-bell"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-header">0 {{ucwords(__('notification'))}}</span>
                    <div class="dropdown-divider"></div>
                    <span class="dropdown-item dropdown-footer">
                      <div class="dropdown-item-text">
                          &nbsp;
                      </div>
                    </span>
                  </div>
                </li>
                <!-- Authentication Links -->
                <li class="nav-item dropdown user user-menu">
                  <a class="nav-link" data-toggle="dropdown" href="#">
                    <img src="{{url('/avatars/'.Auth::user()->id)}}" class="user-image" alt="User Image" title="{{ucwords(strtolower(Auth::user()->name))}}">
                  </a>
                  <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <li class="user-header">
                      <img src="{{url('/avatars/'.Auth::user()->id)}}" width="32px" class="img-circle" alt="User Image">
                      <p>
                        {{Auth::user()->salutation}} {{ucwords(strtolower(Auth::user()->name))}}<br/>
                        {{strtoupper(Auth::user()->current_nik)}}<br/>
                      </p>
                    </li>
                    <li class="user-footer">
                        {{--
                        <div class="pull-left">
                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                        </div>
                        --}}
                        <div class="pull-right">
                            <a id="art-sign-out-btn" class="btn btn-default btn-flat" href="#">
                              <span class="fas fa-sign-out-alt"></span> {{ ucwords(__('sign out')) }}
                            </a>
                        </div>
                      </li>
                    </ul>
                </li>
                @endguest
                <li class="nav-item">
                  <a class="nav-link" href="#" title="{{ucwords(__('documentation'))}}" onclick="window.open('{{url('/docs/userdoc')}}');return false;">
                    <i class="fas fa-book"></i>
                  </a>
                </li>
            </ul>
          </nav>
        <!-- /.navbar -->
    
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-danger elevation-4">
            <!-- Brand Logo -->
            <a href="{{url('/')}}" class="brand-link bg-danger d-flex">
              <span class="brand-text font-weight-bold"><img src="{{asset('img/artemis_logo.png')}}" alt="Artemis Logo" class="brand-image" style="opacity: .8"> {{ config('app.title', 'Artemis') }}</span>
            </a>
    
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                      @guest
                        <!-- empty menu -->
                      @else
                      <li class="nav-item has-treeview menu-close" id="art_fav_menu_li">
                        <a href="#" class="nav-link active">
                          <i class="nav-icon fas fa-star"></i>
                          <p>
                            {{ucwords(__('Favourite Menu'))}}
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview artemis-fav-nav" id="art_fav_menu">
                        </ul>
                      </li>
                      {{-- <li class="nav-item has-treeview menu-close">
                        <a href="#" class="nav-link active">
                          <i class="nav-icon fas fa-paint-brush"></i>
                          <p>
                            {{ucwords(__('Design Standard'))}}
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview"> --}}
                        {{-- ui design menu --}}
                        {{-- </ul>
                      </li> --}}
                      @endguest
                      <li class="nav-item has-treeview menu-open" id="art_main_menu_li">
                        <a href="#" class="nav-link active">
                          <i class="nav-icon fas fa-th"></i>
                          <p>
                            {{ucwords(__('Main Menu'))}}
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview artemis-main-nav" id="art_main_menu">
                        </ul>
                      </li>
                      @if(config('app.main_development_site'))
                        <li class="nav-item has-treeview menu-close" id="art_sites_menu_li">
                          <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-sitemap"></i>
                            <p>
                              {{ucwords(__('Development Sites'))}}
                              <i class="right fas fa-angle-left"></i>
                            </p>
                          </a>
                          <ul class="nav nav-treeview artemis-sites-nav" id="art_sites_menu">
                            <li class="nav-item art-main-nav-item">
                              <a href="#" onclick="var wind=window.open('{{url('/sites/qa')}}','artqa');wind.focus();return false;" title="Development QA Test" class="nav-link art-nav-link" data-mt="main" data-mi="0">
                                Dev QA Test
                              </a>
                            </li>
                            <li class="nav-item art-main-nav-item">
                              <a href="#" onclick="var wind=window.open('{{url('/sites/sit')}}','artsit');wind.focus();return false;" title="System Integration Test" class="nav-link art-nav-link" data-mt="main" data-mi="0">
                                Sys Int Test
                              </a>
                            </li>
                          </ul>
                        </li>
                      @endif
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
    
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          @if((isset($currentMenu))&&($currentMenu!=null))
          <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-0">
                <div class="col-sm-6">
                  <h1 class="m-0 text-dark">
                    @if((isset($currentMenu->icon))&&($currentMenu->icon!=''))
                      <i class="nav-icon fa {{$currentMenu->icon}}"></i>
                    @endif
                    {{$currentMenu->tcode}} - {{__('menu.'.$currentMenu->tcode)}}
                    @if((isset($artMenuSubTitle))&&($artMenuSubTitle!=''))
                      / {{$artMenuSubTitle}}
                    @endif
                  </h1>
                </div><!-- /.col -->
                <div class="col-sm-6" id="art_breadcrumb"></div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </section>
          @endif
          <!-- /.content-header -->
          <!-- Main content -->
          <section class="content" height="100%">
            <div class="row" height="100%">
              <div class="col-12" id="art-main-contents" height="100%">
                <div id='art-flash-msg-container'>
                  @include('flash::message')
                </div>
                @yield('content')
              </div>
            </div>
          </section>
        </div>
        <!-- /.content-wrapper -->
        <!-- Control Sidebar -->
        {{-- <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div>
              <a class="nav-link pull-right" data-widget="control-sidebar" data-slide="true" href="#" title="tutup">
                  <i class="fas fa-close"></i>
              </a>
            </div>
            <div class="p-3" style="background-color: white">
              <iframe src="{{url('/docs/userdoc')}}" frameborder="0" width="100%" height="800px"></iframe>
            </div>
        </aside> --}}
        <!-- /.control-sidebar -->
        <!-- Main Footer -->
        <footer class="main-footer bg-danger">
            <!-- To the right -->
            @if((isset($refDoc))&&($refDoc!==''))
              <div class="float-right d-none d-sm-inline">
                {{$refDoc}}
              </div>
            @endif
            <!-- Default to the left -->
            <strong>Copyright &copy; 2019 ESD, PT. Hartono Istana Teknologi.</strong>
        </footer>
    </div>
    <!-- ./wrapper -->
    <!-- modal for artemis notif -->
    <div class="modal fade" id="divArtNotif" tabindex="-1" role="dialog" aria-labelledby="divArtNotifCenterTitle" aria-hidden="true">
      <div id="divArtNotifModal" style="width: 500px !important;" class="modal-dialog modal-dialog-centered modal-dialog-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="artNotifTitle">{{ucwords(__('new notification(s)'))}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div id="artNotifBody" class="modal-body" style="width : 100%; height : 400px; overflow : auto;">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" onclick="location.replace('{{url('/sysadmin/notification/userpage/all')}}');">{{ucwords(__('All notifications'))}}</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ucwords(__('close'))}}</button>
          </div>
        </div>
      </div>
    </div>
    <!-- modal for artemis chooser dialog -->
    <div class="modal fade" id="divArtChooser" tabindex="-1" role="dialog" aria-labelledby="divArtChooserCenterTitle" aria-hidden="true">
        <div id="divArtChooserModal" class="modal-dialog modal-dialog-centered modal-dialog-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="artChooserTitle">Option Chooser</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div id="artChooserBody" class="modal-body" style="width : 100%; height : 400px; overflow : auto;">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" onclick="artChooserOk();">{{ucwords(__('OK'))}}</button>
              <button type="button" class="btn btn-secondary" onclick="artChooserReset();">{{ucwords(__('Reset'))}}</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ucwords(__('close'))}}</button>
            </div>
          </div>
        </div>
    </div>
    <!-- modal for artemis confirmation dialog -->
    <div class="modal fade" id="divArtConfirmation" tabindex="-1" role="dialog" aria-labelledby="divArtConfirmationTitle" aria-hidden="true">
        <div id="divArtConfirmationModal" class="modal-dialog modal-dialog-centered modal-dialog-lg" role="document">
          <div class="modal-content">
            <div class="modal-header bg-warning">
              <h5 class="modal-title" id="artConfirmationTitle">Artemis</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="{{ucwords(__('close'))}}">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div id="artConfirmationBody" class="modal-body">
              {{ucfirst(__('Are you sure to do this action?'))}}
            </div>
            <div class="modal-footer">
              <button id="artConfirmationBtnOk" type="button" class="btn btn-secondary">{{ucwords(__('OK'))}}</button>
              <button id="artConfirmationBtnCancel" type="button" class="btn btn-secondary" data-dismiss="modal">{{ucwords(__('cancel'))}}</button>
            </div>
          </div>
        </div>
    </div>
    <!-- modal for artemis form dialog -->
    <div class="modal fade" id="divArtFormDialog" tabindex="-1" role="dialog" aria-labelledby="divArtFormDialogTitle" aria-hidden="true">
      <div id="divArtFormDialogModal" class="modal-dialog modal-dialog-centered modal-dialog-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="artFormDialogTitle">Artemis</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="{{ucwords(__('close'))}}">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div id="artFormDialogBody" class="modal-body">
            {{__('form contents')}}
          </div>
          <div class="modal-footer">
            <span id="artFormDialogBtns"></span>
            <button id="artFormDialogBtnOk" type="button" class="btn btn-secondary">{{ucwords(__('OK'))}}</button>
            <button id="artFormDialogBtnCancel" type="button" class="btn btn-secondary" data-dismiss="modal">{{ucwords(__('cancel'))}}</button>
          </div>
        </div>
      </div>
    </div>
    <!-- modal for artemis message dialog -->
    <div class="modal fade" id="divArtMessageDialog" tabindex="-1" role="dialog" aria-labelledby="divArtMessageDialogTitle" aria-hidden="true">
        <div id="divArtMessageDialogModal" class="modal-dialog modal-dialog-centered modal-dialog-lg" role="document">
          <div class="modal-content">
            <div id="artMessageDialogModalHeader" class="modal-header">
              <h5 class="modal-title" id="artMessageDialogTitle">Artemis</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="{{ucwords(__('close'))}}">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div id="artMessageDialogBody" class="modal-body">
              {{ucwords(__('info text'))}}
            </div>
            <div class="modal-footer">
              <button id="artMessageDialogBtnOk" type="button" class="btn btn-secondary" data-dismiss="modal">{{ucwords(__('OK'))}}</button>
            </div>
          </div>
        </div>
    </div>
    <!-- modal for artemis loading dialog -->
    <div class="modal fade" id="divArtLoadingDialog" tabindex="-1" role="dialog" aria-labelledby="divArtLoadingDialogTitle" aria-hidden="true">
        <div id="divArtLoadingDialogModal" class="modal-dialog modal-dialog-centered modal-dialog-lg" role="document">
          <div class="modal-content">
            <div id="artLoadingDialogBody" class="modal-body">
              <div class="text-center">
                <div class="spinner-border text-primary" style="width: 5rem; height: 5rem;" role="status" title="spinner for unmeasurable processes">
                    <span class="sr-only">{{ucwords(__('loading'))}}...</span>
                </div>
                <div id="artLoadingDialogText">{{ucfirst(__('please wait while we process your request'))}}..</div>
              </div>
            </div>
          </div>
        </div>
    </div>
  <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{asset('js/jquery/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/popper/umd/popper.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    {{-- <script src="{{asset('js/bootstrap/bootstrap.bundle.min.js')}}"></script> --}}
    <script src="{{asset('css/bootstrap-4.2.1/js/bootstrap.bundle.min.js')}}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{asset('js/ie10-viewport-bug-workaround.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('js/adminlte/adminlte.min.js')}}"></script>

    <!-- DataTables -->
    <script type="text/javascript" src="{{asset('css/DataTables-1.10.18/JSZip-2.5.0/jszip.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('css/DataTables-1.10.18/pdfmake-0.1.36/pdfmake.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('css/DataTables-1.10.18/pdfmake-0.1.36/vfs_fonts.js')}}"></script>
    <script type="text/javascript" src="{{asset('css/DataTables-1.10.18/DataTables-1.10.18/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('css/DataTables-1.10.18/DataTables-1.10.18/js/dataTables.bootstrap4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('css/DataTables-1.10.18/AutoFill-2.3.3/js/dataTables.autoFill.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('css/DataTables-1.10.18/AutoFill-2.3.3/js/autoFill.bootstrap4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('css/DataTables-1.10.18/Buttons-1.5.6/js/dataTables.buttons.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('css/DataTables-1.10.18/Buttons-1.5.6/js/buttons.bootstrap4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('css/DataTables-1.10.18/Buttons-1.5.6/js/buttons.colVis.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('css/DataTables-1.10.18/Buttons-1.5.6/js/buttons.html5.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('css/DataTables-1.10.18/Buttons-1.5.6/js/buttons.print.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('css/DataTables-1.10.18/ColReorder-1.5.0/js/dataTables.colReorder.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('css/DataTables-1.10.18/FixedColumns-3.2.5/js/dataTables.fixedColumns.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('css/DataTables-1.10.18/FixedHeader-3.1.4/js/dataTables.fixedHeader.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('css/DataTables-1.10.18/Responsive-2.2.2/js/dataTables.responsive.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('css/DataTables-1.10.18/Responsive-2.2.2/js/responsive.bootstrap4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('css/DataTables-1.10.18/RowGroup-1.1.0/js/dataTables.rowGroup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('css/DataTables-1.10.18/Scroller-2.0.0/js/dataTables.scroller.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('css/DataTables-1.10.18/Select-1.3.0/js/dataTables.select.min.js')}}"></script>
    <!-- autocomplete -->
    <script src="{{asset('js/jquery.autocomplete.min.js')}}"></script>
    <!-- jCryption -->
    <script type="text/javascript" src="{{asset('js/jquery.jcryption.3.1.0.js')}}"></script>
    <!-- draggable nav / sortable -->
    <script type="text/javascript" src="{{asset('js/Sortable.min.js')}}"></script>
    <script>
        @if((isset($currentMenu))&&($currentMenu!==null))
          sessionStorage.setItem("art_sys_mi", {{$currentMenu->id}});
        @endif
        if(!sessionStorage.getItem("art_sys_mi")) {
          sessionStorage.setItem("art_sys_mi", "1");
        }
        @guest
          // nothing
        @else
        var artFavMenu = null;
        var artMainMenu = null;
        var last_added_nav = null;

        var dropped = false, // is drop valid?
	        item; // dragged item

        var dragEnd = function(evt) {
        	if (!dropped) {
		        item.removeEventListener('dragend', dragEnd); // Remove event listener
            $.ajax({
					  	url: "{{url("/home/delfromfav")}}",
					  	type: 'POST',
              headers: {
                  'X-CSRF-TOKEN': '{!!csrf_token()!!}'
              },
					  	data: {
                'id': item.getElementsByTagName('A')[0].dataset.mi,
					  	},
					  	success: function(result) {
					  		if(result.success) {
                  item.parentNode.removeChild(item); // Remove dragged item from DOM
					  		}
              }
					  });
        	}
        };
        @endguest

        function sysMnu() {
          $.ajax({
						url: "{{url("/artemis/menu")}}/"+sessionStorage.getItem("art_sys_mi"),
						type: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{!!csrf_token()!!}'
            },
						data: {
						},
						success: function(result) {
							if(result.success) {
                if(result.nav_main!=null) {
                  $('ul#art_main_menu').empty().html(result.nav_main);
                } else {
                  $('ul#art_main_menu').empty().html("<li class=\"nav-item\"><i class=\"text-muted\">{{ucwords(__('empty'))}}</i></li>");
                }
                @guest
                  // nothing
                @else
                if(result.nav_fav!=null) {
                  $('ul#art_fav_menu').empty().html(result.nav_fav);
                }
                @endguest                
                $('#art_breadcrumb').html("<ol class=\"breadcrumb float-sm-right\">"+result.breadcrumb+"</ol>");
                @guest
                  // nothing
                @else
                if(!artFavMenu) {
                  artFavMenu = document.getElementById('art_fav_menu');
                  Sortable.create(artFavMenu, {
                    animation: 200,
                    group: {
                      name: 'artemis-fav-navigation',
                      put: ["artemis-main-navigation"],
                    },
                    invertSwap: true,
                    onStart: function(evt) {
                      dropped = false;
                      item = evt.item;
                      item.addEventListener('dragend', dragEnd);
                    },
                    onAdd: function (/**Event*/evt) {
                      // check same element on the list
                      var container = document.querySelector("#art_fav_menu");
                      var items = container.querySelectorAll("a[data-mi='"+evt.item.getElementsByTagName('A')[0].dataset.mi+"']");
                      var jumlah = items.length;
                      last_added_nav = evt.item;
                      if(jumlah>1) {
                        evt.item.parentNode.removeChild(evt.item);
                      } else if(evt.item.getElementsByTagName('A')[0].dataset.mi) {
                        $.ajax({
					              	url: "{{url("/home/addtofav")}}",
					              	type: 'POST',
                          headers: {
                              'X-CSRF-TOKEN': '{!!csrf_token()!!}'
                          },
					              	data: {
                            'id': evt.item.getElementsByTagName('A')[0].dataset.mi,
                            'favorder': evt.newIndex
					              	}
					              });
                      } else {
                            evt.item.parentNode.removeChild(evt.item);
                      }
                    },
                    onUpdate: function (evt) {
                      $.ajax({
					              	url: "{{url("/home/updatefav")}}",
					              	type: 'POST',
                          headers: {
                              'X-CSRF-TOKEN': '{!!csrf_token()!!}'
                          },
					              	data: {
                            'id': evt.item.getElementsByTagName('A')[0].dataset.mi,
                            'neworder': evt.newIndex,
                            'oldorder': evt.oldIndex
					              	}
					            });
                    }
                  });
                  artFavMenu.addEventListener('drop', function() {
	                  dropped = true;
                  });
                }
                if(!artMainMenu) {
                  artMainMenu = document.getElementById('art_main_menu');
                  Sortable.create(artMainMenu, {
                    animation: 200,
                    group: {
                      name: 'artemis-main-navigation',
                      pull: "clone",
                      revertClone: true,
                      put : false
                    },
                    sort: false,
                    dragoverBubble: true,
                    draggable: ".art-main-nav-item"
                  });
                  // create children draggable nav
                  var main_child = document.getElementsByClassName('art-main-nav-child');
                  for(var i = 0;i < main_child.length;i++){
                      Sortable.create(main_child[i], {
                      animation: 200,
                      group: {
                        name: 'artemis-main-navigation',
                        pull: "clone",
                        revertClone: true,
                        put : false
                      },
                      sort: false,
                      dragoverBubble: true
                    });
                  }
                }
                @endguest
                aHrefToReplaceLoc();
							} else {
                location.reload();
							}
						}
					});
        }

        function sysGetNotif() {
          $.ajax({
						url: "{{url("/sysadmin/notification/list")}}",
						type: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{!!csrf_token()!!}'
            },
						data: {
						},
						success: function(result) {
							if(result.success) {
                if(result.data!="") {
                  $('li#art_notifs').empty().html(result.data);
                } else {
                  $('li#art_notifs').empty().html("<a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\"><i class=\"fas fa-bell\"></i></a><div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\"><span class=\"dropdown-header\">0 {{ucwords(__('notification'))}}</span><div class=\"dropdown-divider\"></div><span class=\"dropdown-item dropdown-footer\"><div class=\"dropdown-item-text\">&nbsp;</div></span></div>");
                }
                aHrefToReplaceLoc();
							}
						}
					});
        }

        function openSearchPage() {
          $.ajax({
					  	url: "{{url("/home/search/post")}}",
					  	type: 'POST',
              headers: {
                  'X-CSRF-TOKEN': '{!!csrf_token()!!}'
              },
					  	data: {
                'searchtext': $('#art_app_search_input').val(),
					  	},
					  	success: function(result) {
					  		if(result.success) {
                  location.replace('{{url('/home/search')}}');
					  		}
					  	}
					  });
        }

        function aHrefToReplaceLoc() {
          var links = document.getElementsByTagName('a');
          for(var i=0;i<links.length;i++) {
            if((!links[i].hasAttribute('onclick'))&&(links[i].getAttribute('href')!="#")&&(links[i].getAttribute('href')!=null)&&(links[i].getAttribute('href')!="")) {
              links[i].addEventListener('click', function(event){
                const link = this;
                event.preventDefault();
                location.replace(link.getAttribute('href'));
              });
            }
          }
        }

        @if(session('home_sidebar-toggle-collapsed')=='Y')
          sessionStorage.setItem("sidebar-toggle-collapsed", "Y");
        @elseif(session('sidebar-toggle-collapsed')=='N')
          sessionStorage.setItem("sidebar-toggle-collapsed", "N");
        @endif
        if (sessionStorage.getItem("sidebar-toggle-collapsed")=="Y") {
          $("body").removeClass('sidebar-collapse');
        }

        $('.sidebar-toggle').click(function(event) {
          event.preventDefault();
          if (sessionStorage.getItem("sidebar-toggle-collapsed")=="Y") {
            sessionStorage.setItem("sidebar-toggle-collapsed", "N");
          } else {
            sessionStorage.setItem("sidebar-toggle-collapsed", "Y");
          }
          @guest
          
          @else
          $.ajax({
						url: "{{url("/home/userpref/save")}}",
						type: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{!!csrf_token()!!}'
            },
						data: {
              's': 'home',
              'v': 'sidebar-toggle-collapsed',
              'vl': sessionStorage.getItem("sidebar-toggle-collapsed")
						}
					});
          @endguest
        });

        var artChooserResult = null; // single string or coma separated string
        var artChooserResultId = null; // single string or coma separated string
        var artChooserDivId = '';
        var artChooserHiddenDivId = '';
        var oArtChooserTable = null;
        var artChooserMultiple = false;
        var artChooserOkCallback = null;

        {{--
        * function artChooserShow
        * inputId: id input elemen untuk menampung value tampilan dari data terpilih, harus ada
        * aurl: url ajax untuk ambil data pilihan yang ditampilkan, harus ada
        * multiple: jika 0 berarti single select, 1=multiple select, default: 0
        * is_select: 1 = input element adalah select, 0 = input element adalah input text, default: 0
        * inputHiddenId: id hidden input element untuk menampung id dari data terpilih, default: null
        * modalWidth: width modal dialog, default: 600
        * optionals field contoh penulisannya: {datas: arrayData, opsiLain: opsiData}, default: {}
        * datas: array data tambahan untuk ajax request (optional), default: null
        * okCallback: fungsi callback yang dijalankan saat klik OK button, default: null
        --}}
        function artChooserShow(inputId, aurl, multiple=0, is_select=0, inputHiddenId=null, modalWidth=600,options={}, okCallback=null) {
          // get optional parameters
          var datas = options.datas || null;
          window.artChooserOkCallback = okCallback;
          if(window.oArtChooserTable!=null)window.oArtChooserTable.destroy();
          window.artChooserDivId = inputId;
          window.artChooserHiddenDivId = inputHiddenId;
          if(multiple==1) { window.artChooserMultiple = true; } else { window.artChooserMultiple = false; }
          var selected = '';
          if((multiple==1)&&(is_select==1)) {
            window.artChooserIsSelect = true;
            window.artChooserResult = new Array();
            window.artChooserResultId = new Array();
            var selected = $("#"+inputId+" option").map(function(){ return this.value }).get().join(",");
            $.ajax({
					  	url: aurl,
					  	type: 'POST',
              headers: {
                  'X-CSRF-TOKEN': '{!!csrf_token()!!}'
              },
					  	data: {
                'multiple': multiple,
                'selected': selected,
                'datas': datas
					  	},
					  	success: function(result) {
                $('#artChooserTitle').empty().html(result.title);
                $('#artChooserBody').empty().html(result.html);
                eval(result.js);
                if(window.oArtChooserTable!=null) window.oArtChooserTable.page.len(10).draw();
                var oldSearch = $('.dataTables_filter input').val();
                var oldPaginate = window.oArtChooserTable.page.len();
                window.oArtChooserTable.page.len(-1).search('').draw();
                // clear event handler on input named artSelect
                $("input[name='artSelect']").off('change');
                window.oArtChooserTable.page.len(oldPaginate).search(oldSearch).draw();
                $('#divArtChooserModal').attr('style', 'width: '+modalWidth+'px !important');
                $('#divArtChooser').modal().show();
					  	}
					  });
          } else {
            window.artChooserResult = '';
            window.artChooserResultId = null;
            var selected = '';
            if(is_select==1) {
              window.artChooserIsSelect = true;
              selected = $("#"+inputId+" option").map(function(){ return this.value }).get().join(",");
            } else {
              window.artChooserIsSelect = false;
              if(window.artChooserHiddenDivId==null) {
                selected = $('#'+inputId).val();
              } else {
                selected = $('#'+window.artChooserHiddenDivId).val();
              }
            }
            $.ajax({
					  	url: aurl,
					  	type: 'POST',
              headers: {
                  'X-CSRF-TOKEN': '{!!csrf_token()!!}'
              },
					  	data: {
                'multiple': multiple,
                'selected': selected,
                'datas': datas
					  	},
					  	success: function(result) {
                $('#artChooserTitle').empty().html(result.title);
                $('#artChooserBody').empty().html(result.html);
                eval(result.js);
                if(window.oArtChooserTable!=null) window.oArtChooserTable.page.len(10).draw();
                var oldSearch = $('.dataTables_filter input').val();
                var oldPaginate = window.oArtChooserTable.page.len();
                window.oArtChooserTable.page.len(-1).search('').draw();
                // clear event handler on input named artSelect
                $("input[name='artSelect']").off('change');
                if(multiple==0) {
                  $("input[name='artSelect']").on('change', function(){
                    if(this.checked) {
                      var oldSearch = $('.dataTables_filter input').val();
                      var oldPaginate = window.oArtChooserTable.page.len();
                      var tableInfo = window.oArtChooserTable.page.info();
                      var oldTablePageCurrent = tableInfo.page;
                      window.oArtChooserTable.page.len(-1).search('').draw();
                      $("input[name='artSelect']").prop('checked',false);
                      $('#'+this.id).prop('checked',true);
                      window.oArtChooserTable.page.len(oldPaginate).search(oldSearch);
                      window.oArtChooserTable.page(oldTablePageCurrent).draw('page');
                    }
                  });
                }
                window.oArtChooserTable.page.len(oldPaginate).search(oldSearch).draw();
                $('#divArtChooserModal').attr('style', 'width: '+modalWidth+'px !important');
                $('#divArtChooser').modal().show();
					  	},
              error: function(data) {
                if(data.responseJSON.message) {
                    $('#art-main-contents').prepend('<div class="alert alert-danger" role="alert"><i class="fas fa-ban"> '+data.responseJSON.message+'</div>');
                }
                if(data.responseJSON.errors) {
                    if(data.responseJSON.errors) {
                        var target = data.responseJSON.errors;
                        for (var k in target){
                            if (typeof target[k] !== 'function') {
                                $('input[name='+k+']').addClass('is-invalid');
                                var errormsgs = target[k];
                                $('#'+k+'-feedback').html(errormsgs[0]);
                                $('#'+k+'-feedback').removeClass('d-none');
                            }
                        }
                    }
                }
                $('div.alert').not('.alert-important').delay(5000).fadeOut(350);
              }
					  });
          }
        }

        function artChooserReset() {
          var oldSearch = $('.dataTables_filter input').val();
          var oldPaginate = window.oArtChooserTable.page.len();
          window.oArtChooserTable.page.len(-1).search('').draw();
          $('input[name="artSelect"]').prop('checked', false);
          window.oArtChooserTable.page.len(oldPaginate).search(oldSearch).draw();
        }

        function artChooserOk() {
          if(window.oArtChooserTable!=null){
            window.oArtChooserTable.page.len(-1).search('').draw();
          } 
          if(window.artChooserIsSelect) {
            // clear all selection(s)
            $('#'+window.artChooserDivId).prop('selectedIndex', -1);
            // clear options
            $('#'+window.artChooserDivId).find('option').remove();
            if(window.artChooserMultiple) {
              window.artChooserResultId = $("input[name='artSelect']:checked").map(function() {return this.id.replace("artSelect",""); }).get();
              window.artChooserResult = $("input[name='artSelect']:checked").map(function() {return this.value; }).get();
              // add new options if not exists in options
              window.artChooserResultId.forEach(function(item, index){
                var optionExists = ($('#'+window.artChooserDivId+' option[value=' + item + ']').length > 0);
                if(!optionExists) {
                  $('#'+window.artChooserDivId).append("<option value='"+item+"'>"+window.artChooserResult[index]+"</option>");
                }
              });
            } else {
              var artChooserResultArr = $("input[name='artSelect']:checked").map(function() {return this.id.replace("artSelect",""); }).get();
              if(artChooserResultArr.length>0) window.artChooserResultId = artChooserResultArr[0];
              window.artChooserResult = $('input[name=artSelect]:checked').val();
              // add new options if not exists in options
              var optionExists = ($('#'+window.artChooserDivId+' option[value=' + window.artChooserResultId + ']').length > 0);
              if(!optionExists) {
                $('#'+window.artChooserDivId).append("<option value='"+window.artChooserResultId+"'>"+window.artChooserResult+"</option>");
              }
            }
            // set new selection(s)
            // $('#'+window.artChooserDivId).val(window.artChooserResultId);
          } else {
            if(window.artChooserHiddenDivId != null) {
              // if hidden input id is supplied then resultId goes to hiddeninput and result value goes to input id
              if(window.artChooserMultiple) {
                window.artChooserResultId = $("input[name='artSelect']:checked").map(function() {return this.id.replace("artSelect",""); }).get();
                window.artChooserResult = $("input[name='artSelect']:checked").map(function() {return this.value; }).get();
                $('#'+window.artChooserDivId).val(window.artChooserResult.join(","));
                $('#'+window.artChooserHiddenDivId).val(window.artChooserResultId.join(","));
              } else {
                var artChooserResultArr = $("input[name='artSelect']:checked").map(function() {return this.id.replace("artSelect",""); }).get();
                if(artChooserResultArr.length>0) window.artChooserResultId = artChooserResultArr[0];
                window.artChooserResult = $('input[name=artSelect]:checked').val();
                $('#'+window.artChooserDivId).val(window.artChooserResult);
                $('#'+window.artChooserHiddenDivId).val(window.artChooserResultId);
              }
            } else {
              if(window.artChooserMultiple) {
                window.artChooserResult = $("input[name='artSelect']:checked").map(function() {return this.value; }).get();
                $('#'+window.artChooserDivId).val(window.artChooserResult.join(","));
              } else {
                window.artChooserResult = $('input[name=artSelect]:checked').val();
                $('#'+window.artChooserDivId).val(window.artChooserResult);
              }
            }
            if(window.artChooserHiddenDivId!=null) {
              $('#'+window.artChooserHiddenDivId).val(window.artChooserResultId);
            }
          }
          $('#divArtChooser').modal('hide');
          if(window.artChooserOkCallback!=null){
            window.artChooserOkCallback();
          }
          
        }

        function artConfirmationDo(title, text, okCallback,modalWidth=600, okText='{{ucwords(__('form.ok'))}}', cancelText='{{ucwords(__('form.cancel'))}}', cancelCallback=null) {
          $('#artConfirmationTitle').text(title);
          $('#artConfirmationBody').html(text);
          $('#artConfirmationBtnOk').html(okText);
          $('#artConfirmationBtnCancel').html(cancelText);
          $('#artConfirmationBtnOk').off('click');
          $('#artConfirmationBtnOk').click(okCallback);
          if(cancelCallback!=null)
          {
            $('#artConfirmationBtnCancel').off('click');
            $('#artConfirmationBtnCancel').click(cancelCallback);
          }
          $('#artMessageDialogBtnOk').focus();
          $('#divArtConfirmationModal').attr('style', 'width: '+modalWidth+'px !important');
          $('#divArtConfirmation').modal().show();
        }

        function artConfirmationClose() {
          $('#divArtConfirmation').modal('hide');
        }

        function artFormDialogDo(title, text, okCallback, js='',modalWidth=600) {
          $('#artFormDialogTitle').text(title);
          $('#artFormDialogBody').html(text);
          $('#artFormDialogBtnOk').off('click');
          $('#artFormDialogBtnOk').click(okCallback);
          if(js!='') eval(js);
          $('#divArtFormDialogModal').attr('style', 'width: '+modalWidth+'px !important');
          $('#divArtFormDialog').modal().show();
        }

        function artFormDialogClose() {
          $('#divArtFormDialog').modal('hide');
        }

        function artMessageDialogDo(title, msgclass, text, okCallback=null,modalWidth=600) {
          $('#artMessageDialogTitle').text(title);
          $('#artMessageDialogModalHeader').removeClass('bg-primary').removeClass('bg-secondary').removeClass('bg-success').removeClass('bg-info').removeClass('bg-warning').removeClass('bg-danger');
          if(msgclass=='primary') {
            $('#artMessageDialogModalHeader').addClass('bg-primary');
          } else if(msgclass=='secondary') {
            $('#artMessageDialogModalHeader').addClass('bg-secondary');
          } else if(msgclass=='success') {
            $('#artMessageDialogModalHeader').addClass('bg-success');
          } else if(msgclass=='info') {
            $('#artMessageDialogModalHeader').addClass('bg-info');
          } else if(msgclass=='warning') {
            $('#artMessageDialogModalHeader').addClass('bg-warning');
          } else if(msgclass=='danger') {
            $('#artMessageDialogModalHeader').addClass('bg-danger');
          }
          $('#artMessageDialogBtnOk').focus();
          $('#artMessageDialogBody').html(text);
          if(okCallback!=null){
            $('#divArtMessageDialog').off('hidden.bs.modal');
            $('#divArtMessageDialog').on('hidden.bs.modal', artSubModalStack);
            $('#divArtMessageDialog').on('hidden.bs.modal',okCallback);
          }
          $('#divArtMessageDialogModal').attr('style', 'width: '+modalWidth+'px !important');
          $('#divArtMessageDialog').modal().show();
        }

        function artMessageDialogClose() {
          $('#divArtMessageDialog').modal('hide');
        }

        function artLoadingDialogDo(text, onShownCallback=null, onHiddenCallback=null, modalWidth=500) {
          $('#artLoadingDialogText').html(text);
          if(onShownCallback!=null)
          {
            $('#divArtLoadingDialog').off('shown.bs.modal');
            $('#divArtLoadingDialog').on('shown.bs.modal', artAddModalStack);
            $('#divArtLoadingDialog').on('shown.bs.modal',onShownCallback);
          }
          if(onHiddenCallback!=null)
          {
            $('#divArtLoadingDialog').off('hidden.bs.modal');
            $('#divArtLoadingDialog').on('hidden.bs.modal', artSubModalStack);
            $('#divArtLoadingDialog').on('hidden.bs.modal', onHiddenCallback);
          }
          $('#divArtLoadingDialogModal').attr('style', 'width: '+modalWidth+'px !important');
          $('#divArtLoadingDialog').modal({backdrop: 'static', keyboard: false}).show();
        }

        function artLoadingDialogClose() {
          $('#divArtLoadingDialog').modal('hide');
        }

        function artAllFlashMsgClose() {
          $('#art-flash-msg-container').html('');
        }

        function artCreateFlashMsg(msg, msgtype,isimportant) {
          var importantTxt = "";
          var theBtn = "";
          if(isimportant) {
            importantTxt = "alert-important";
            theBtn = "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>";
          }
          var msgDiv = "<div class=\"alert alert-"+msgtype+" "+importantTxt+" role=\"alert\">"+theBtn+msg+"</div>";
          $('#art-flash-msg-container').html($('#art-flash-msg-container').html()+msgDiv);                    
        }

        function artNumberFormat(num, decimals = 2) {
          return num.toFixed(decimals).replace('.', '{{config('app.decimal_point',',')}}').replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1{{config('app.thousand_separator','.')}}');
        }

        // multiple modal stack
        function artSubModalStack(event) {
          $(this).removeClass( 'fv-modal-stack' );
          $('body').data( 'fv_open_modals', $('body').data( 'fv_open_modals' ) - 1 );
        };

        function artAddModalStack(event) {
          // keep track of the number of open modals
          if ( typeof( $('body').data( 'fv_open_modals' ) ) == 'undefined' ) {
            $('body').data( 'fv_open_modals', 0 );
          }
          // if the z-index of this modal has been set, ignore.
          if ($(this).hasClass('fv-modal-stack')) {
            return;
          }
          $(this).addClass('fv-modal-stack');
          $('body').data('fv_open_modals', $('body').data('fv_open_modals' ) + 1 );
          $(this).css('z-index', 1040 + (10 * $('body').data('fv_open_modals' )));
          $('.modal-backdrop').not('.fv-modal-stack').css('z-index', 1039 + (10 * $('body').data('fv_open_modals')));
          $('.modal-backdrop').not('fv-modal-stack').addClass('fv-modal-stack'); 
        };


        $(document).ready(function () {
          sysMnu();
          @auth
            sysGetNotif();
          @endauth

          {{--
            // Restrict input to digits by using a regular expression filter.
            $("#myTextBox").inputFilter(function(value) {
              return /^\d*$/.test(value);
            });
            Some input filters you might want to use:
              Integer values (both positive and negative):
              /^-?\d*$/.test(value)
              Integer values (positive only):
              /^\d*$/.test(value)
              Integer values (positive and up to a particular limit):
              /^\d*$/.test(value) && (value === "" || parseInt(value) <= 500)
              Floating point values (allowing both . and , as decimal separator):
              /^-?\d*[.,]?\d*$/.test(value)
              Currency values (i.e. at most two decimal places):
              /^-?\d*[.,]?\d{0,2}$/.test(value)
              Hexadecimal values:
              /^[0-9a-f]*$/i.test(value)
          --}}
          $.fn.inputFilter = function(inputFilter) {
            return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
              if (inputFilter(this.value)) {
                this.oldValue = this.value;
                this.oldSelectionStart = this.selectionStart;
                this.oldSelectionEnd = this.selectionEnd;
              } else if (this.hasOwnProperty("oldValue")) {
                this.value = this.oldValue;
                this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
              }
            });
          };

          $('#art_app_search_input').bind('focus click', function() {
            $.ajax({
					  	url: "{{url("/home/search/ajax")}}",
					  	type: 'POST',
              headers: {
                  'X-CSRF-TOKEN': '{!!csrf_token()!!}'
              },
					  	data: {
                'searchtext': $('#art_app_search_input').val(),
					  	},
					  	success: function(result) {
                $('#art_search_result_dropdown').empty().html("<span class=\"dropdown-header\">{{ucwords(__('searching'))}}..</span>");
					  		if(result.success) {
                  if(result.data!="") {
                    $('#art_search_result_dropdown').empty().html(result.data);
                  } else {
                    $('#art_search_result_dropdown').empty().html("<span class=\"dropdown-header\">{{ucwords(__('no result'))}}</span>");
                  }
					  		}
                $('#art_search_result_dropdown').show();
					  	}
					  });
          });

          $('#art_app_search_form').bind('mouseleave', function(){
            $('#art_search_result_dropdown').hide();
          });
          $('#art_app_search_input').keyup(function() {
            if($('#art_app_search_input').val().length >= 3) {
              $.ajax({
					    	url: "{{url("/home/search/ajax")}}",
					    	type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{!!csrf_token()!!}'
                },
					    	data: {
                  'searchtext': $('#art_app_search_input').val(),
					    	},
					    	success: function(result) {
                  $('#art_search_result_dropdown').empty().html("<span class=\"dropdown-header\">{{ucwords(__('searching'))}}..</span>");
					    		if(result.success) {
                    if(result.data!="") {
                      $('#art_search_result_dropdown').empty().html(result.data);
                    } else {
                      $('#art_search_result_dropdown').empty().html("<span class=\"dropdown-header\">{{ucwords(__('no result'))}}</span>");
                    }
					    		}
                  $('#art_search_result_dropdown').show();
					    	}
					    });
            }
          });
          
          $('#art_app_search_form').submit(function() {
            $.ajax({
					  	url: "{{url("/home/search/post")}}",
					  	type: 'POST',
              headers: {
                  'X-CSRF-TOKEN': '{!!csrf_token()!!}'
              },
					  	data: {
                'searchtext': $('#art_app_search_input').val(),
					  	},
					  	success: function(result) {
					  		if(result.success) {
                  location.replace('{{url('/home/search')}}');
					  		}
					  	}
					  });
            return false;
          });

          $('#divArtNotif').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var notifid = button.data('notifid');
            $('#artNotifBody').load('{{url('/sysadmin/notification/detail')}}/'+ decodeURIComponent(notifid));
          });

          $('#art-sign-out-btn').click(function(event){
            event.preventDefault();
            $.ajax({
					  	url: "{{route("logout")}}",
					  	type: 'POST',
              headers: {
                  'X-CSRF-TOKEN': '{!!csrf_token()!!}'
              },
					  	success: function(result) {
                  location.replace('{{url('/')}}');
					  	}
					  });
            return false;
          });

          $('#flash-overlay-modal').modal();
          $('div.alert').not('.alert-important').delay(5000).fadeOut(350);

          $('input[type="text"]')
            .on('invalid', function(){
              return this.setCustomValidity('{{ucfirst(__('please fill out this field, match the requested format'))}}.');
            })
            .on('input', function(){
              return this.setCustomValidity('');
            });
          $('input[type="email"]')
            .on('invalid', function(){
              return this.setCustomValidity('{{ucfirst(__('please fill out this field, match the requested format'))}}.');
            })
            .on('input', function(){
              return this.setCustomValidity('');
            });
          $('input[type="textarea"]')
            .on('invalid', function(){
              return this.setCustomValidity('{{ucfirst(__('please fill out this field, match the requested format'))}}.');
            })
            .on('input', function(){
              return this.setCustomValidity('');
            });

          $('.modal').on('hidden.bs.modal', artSubModalStack);
          $('.modal').on('shown.bs.modal', artAddModalStack);
          @auth
            if($('#main-table-data-filter').length) {
              @if(session('form_filter-show')=='Y')
                  $('#main-table-data-filter').collapse('show');
              @else
                  $('#main-table-data-filter').collapse('hide');
              @endif
              $('#main-table-data-filter').on('hidden.bs.collapse', function() {
                $.ajax({
          				url: "{{url("/home/userpref/save")}}",
          				type: 'POST',
                  headers: {
                    'X-CSRF-TOKEN': '{!!csrf_token()!!}'
                  },
          			  data: {
                    's': 'form',
                    'v': 'filter-show',
                    'vl': 'N'
          			  }
          		  });
              });
              $('#main-table-data-filter').on('shown.bs.collapse', function() {
                $.ajax({
          				url: "{{url("/home/userpref/save")}}",
          				type: 'POST',
                  headers: {
                    'X-CSRF-TOKEN': '{!!csrf_token()!!}'
                  },
          			  data: {
                    's': 'form',
                    'v': 'filter-show',
                    'vl': 'Y'
          			  }
          		  });
              });
            }
          @endauth
          $(".modal-header").on("mousedown", function(mousedownEvt) {
            var $draggable = $(this);
            var x = mousedownEvt.pageX - $draggable.closest(".modal-dialog").offset().left,
            y = mousedownEvt.pageY - $draggable.closest(".modal-dialog").offset().top;
            $("body").on("mousemove.draggable", function(mousemoveEvt) {
              $draggable.closest(".modal-dialog").offset({
                "left": mousemoveEvt.pageX - x,
                "top": mousemoveEvt.pageY - y
              });
            });
            $("body").on("mouseup", function() {
              $("body").off("mousemove.draggable");
            });
            $draggable.closest(".modal").one("bs.modal.hide", function() {
              $("body").off("mousemove.draggable");
            });
          });

        });
    </script>
    @yield('content_tailscript')
    @livewireScripts
</body>
</html>

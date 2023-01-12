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

    <title>PT.Hartono Istana Teknologi</title>

    <!-- Fonts: -->
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('css/font-awesome-4.7.0/css/font-awesome.min.css')}}">
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
        /*
        .container-full {
          margin: 20px 20px 20px 20px;
          width: 98%;
        }
        */
        .nav-item {
          padding-bottom: 2px;
          padding-top: 2px;
        }
        /*
        .content-wrapper {
            background: #ffffff;
        }
        */
        #navigation,.navbar .navbar-default{
            background-image: url("img/flower.jpg");
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

        input[type=text]:valid {
          color: black;
        }

        input[type=text]:invalid {
          color: red;
        }
    </style>
    @yield('content_headscript')
</head>
<body class="hold-transition sidebar-collapse">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand bg-danger border-bottom">
            <!-- Brand Logo -->
            <a href="{{url('/special-sale')}}" class="brand-link bg-danger d-flex">
                <span class="brand-text font-weight-bold">
                    {{-- <img src="{{asset('img/artemis_logo.png')}}" alt="Artemis Logo" class="brand-image" style="opacity: .8"> --}}
                    POLYTRON - Special Price Sale
                </span>
            </a>
        </nav>
        <!-- /.navbar -->
    
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
          <!-- Main content -->
          <section class="content">
            <div class="row">
              <div class="col-12" id="art-main-contents">
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
                  <i class="fa fa-close"></i>
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
    <!-- modal for artemis confirmation dialog -->
    <div class="modal fade" id="divArtConfirmation" tabindex="-1" role="dialog" aria-labelledby="divArtConfirmationTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-lg" role="document">
          <div class="modal-content">
            <div class="modal-header bg-warning">
              <h5 class="modal-title" id="artConfirmationTitle">Artemis</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="{{__('close')}}">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div id="artConfirmationBody" class="modal-body">
              {{__('Are you sure to do this action?')}}
            </div>
            <div class="modal-footer">
              <button id="artConfirmationBtnOk" type="button" class="btn btn-secondary">{{__('OK')}}</button>
              <button id="artConfirmationBtnCancel" type="button" class="btn btn-secondary" data-dismiss="modal">{{__('cancel')}}</button>
            </div>
          </div>
        </div>
    </div>
    <!-- modal for artemis message dialog -->
    <div class="modal fade" id="divArtMessageDialog" tabindex="-1" role="dialog" aria-labelledby="divArtMessageDialogTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-lg" role="document">
          <div class="modal-content">
            <div id="artMessageDialogModalHeader" class="modal-header">
              <h5 class="modal-title" id="artMessageDialogTitle">Artemis</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="{{__('close')}}">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div id="artMessageDialogBody" class="modal-body">
              {{__('info text')}}
            </div>
            <div class="modal-footer">
              <button id="artMessageDialogBtnOk" type="button" class="btn btn-secondary" data-dismiss="modal">{{__('OK')}}</button>
            </div>
          </div>
        </div>
    </div>
    <!-- modal for artemis loading dialog -->
    <div class="modal fade" id="divArtLoadingDialog" tabindex="-1" role="dialog" aria-labelledby="divArtLoadingDialogTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-lg" role="document">
          <div class="modal-content">
            <div id="artLoadingDialogBody" class="modal-body">
              <div class="text-center">
                <div class="spinner-border text-primary" style="width: 5rem; height: 5rem;" role="status" title="spinner for unmeasurable processes">
                    <span class="sr-only">{{__('loading')}}...</span>
                </div>
                <div id="artLoadingDialogText">{{__('please wait while we process your request')}}..</div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- ./wrapper -->
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
        function artConfirmationDo(title, text, okCallback) {
          $('#artConfirmationTitle').text(title);
          $('#artConfirmationBody').html(text);
          $('#artConfirmationBtnOk').off('click');
          $('#artConfirmationBtnOk').click(okCallback);
          $('#divArtConfirmation').modal().show();
        }

        function artConfirmationClose() {
          $('#divArtConfirmation').modal('hide');
        }

        function artMessageDialogDo(title, msgclass, text) {
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
          $('#artMessageDialogBody').html(text);
          $('#divArtMessageDialog').modal().show();
        }

        function artMessageDialogClose() {
          $('#divArtMessageDialog').modal('hide');
        }

        function artLoadingDialogDo(text, onShownCallback) {
          $('#artLoadingDialogText').html(text);
          $('#divArtLoadingDialog').off('shown.bs.modal');
          $('#divArtLoadingDialog').on('shown.bs.modal',onShownCallback);
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

        $(document).ready(function () {

        });
    </script>
    @yield('content_tailscript')
</body>
</html>

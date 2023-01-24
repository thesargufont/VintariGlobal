@extends('layouts.layout1')

@section('content')
    <div class="card">
        <div class="card-body">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#about"   data-toggle="tab">{{ucwords(__('vintari.about'))}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"        href="#activity" data-toggle="tab">{{ucwords(__('vintari.activity'))}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"        href="#banner"  data-toggle="tab">{{ucwords(__('vintari.banner'))}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"        href="#brand"   data-toggle="tab">{{ucwords(__('vintari.brand'))}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"        href="#category"data-toggle="tab">{{ucwords(__('vintari.category'))}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"        href="#contact" data-toggle="tab">{{ucwords(__('vintari.contact'))}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"        href="#country" data-toggle="tab">{{ucwords(__('vintari.country'))}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"        href="#faq"     data-toggle="tab">{{ucwords(__('vintari.faq'))}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"        href="#product" data-toggle="tab">{{ucwords(__('vintari.product'))}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"        href="#user"    data-toggle="tab">{{ucwords(__('vintari.user'))}}</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="about">
                    <div class="form-group my-2">
                        <div class="btn-group" role="group">
                            <div class="dropdown">
                                <a href="#" title="{{__('create new item')}} " class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-plus"></i> {{__('new')}}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a href="#" class="dropdown-item" title="Product" onclick="location.replace('{{ route('admin.vintari.create', ['var' => 'about']) }}');">About</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="btn-group" role="group">
                            <div class="dropdown">
                                <a href="#" title="{{__('download')}} {{__('current filtered data')}} {{__('as')}}.." class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-download"></i> {{__('download')}} {{__('as')}}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a href="#" class="dropdown-item" id="btn_download_about_xlsx" title="download as XLSX file"><i class="fa fa-fw fa-file-excel-o"></i>Xlsx</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <table class="table table-hover compact table-condensed table-striped" id="about-table" width="100%">
                        <thead>
                            <tr>
                                <th>{{ucwords(__('vintari.action'))}}</th>
                                <th>{{ucwords(__('vintari.history'))}}</th>
                                <th>{{ucwords(__('vintari.history_en'))}}</th>
                                <th>{{ucwords(__('vintari.visi'))}}</th>
                                <th>{{ucwords(__('vintari.visi_en'))}}</th>
                                <th>{{ucwords(__('vintari.misi'))}}</th>
                                <th>{{ucwords(__('vintari.misi_en'))}}</th>
                                <th>{{ucwords(__('vintari.telpon'))}}</th>
                                <th>{{ucwords(__('vintari.email'))}}</th>
                                <th>{{ucwords(__('vintari.product_sold'))}}</th>
                                <th>{{ucwords(__('vintari.countries_sold'))}}</th>
                                <th>{{ucwords(__('vintari.client'))}}</th>
                                <th>{{ucwords(__('vintari.created_by'))}}</th>
                                <th>{{ucwords(__('vintari.created_at'))}}</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="tab-pane" id="activity">
                    <div class="form-group my-2">
                        <div class="btn-group" role="group">
                            <div class="dropdown">
                                <a href="#" title="{{__('create new item')}} " class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-plus"></i> {{__('new')}}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a href="#" class="dropdown-item" title="Product" onclick="location.replace('{{ route('admin.vintari.create',['var' => 'activity']) }}');">activity</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="btn-group" role="group">
                            <div class="dropdown">
                                <a href="#" title="{{__('download')}} {{__('current filtered data')}} {{__('as')}}.." class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-download"></i> {{__('download')}} {{__('as')}}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a href="#" class="dropdown-item" id="btn_download_activity_xlsx" title="download as XLSX file"><i class="fa fa-fw fa-file-excel-o"></i>Xlsx</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <table class="table table-hover compact table-condensed table-striped" id="activity-table" width="100%">
                        <thead>
                            <tr>
                                <th>{{ucwords(__('vintari.action'))}}</th>
                                <th>{{ucwords(__('vintari.title'))}}</th>
                                <th>{{ucwords(__('vintari.title_en'))}}</th>
                                <th>{{ucwords(__('vintari.articles'))}}</th>
                                <th>{{ucwords(__('vintari.articles_en'))}}</th>
                                <th>{{ucwords(__('vintari.created_by'))}}</th>
                                <th>{{ucwords(__('vintari.created_at'))}}</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="tab-pane" id="banner">
                    <div class="form-group my-2">
                        <div class="btn-group" role="group">
                            <div class="dropdown">
                                <a href="#" title="{{__('create new item')}} " class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-plus"></i> {{__('new')}}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a href="#" class="dropdown-item" title="Product" onclick="location.replace('{{ route('admin.vintari.create', ['var' => 'banner']) }}');">Banner</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="btn-group" role="group">
                            <div class="dropdown">
                                <a href="#" title="{{__('download')}} {{__('current filtered data')}} {{__('as')}}.." class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-download"></i> {{__('download')}} {{__('as')}}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a href="#" class="dropdown-item" id="btn_download_banner_xlsx" title="download as XLSX file"><i class="fa fa-fw fa-file-excel-o"></i>Xlsx</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <table class="table table-hover compact table-condensed table-striped" id="banner-table" width="100%">
                        <thead>
                            <tr>
                                <th>{{ucwords(__('vintari.action'))}}</th>
                                <th>{{ucwords(__('vintari.header'))}}</th>
                                <th>{{ucwords(__('vintari.header_en'))}}</th>
                                <th>{{ucwords(__('vintari.desc1'))}}</th>
                                <th>{{ucwords(__('vintari.desc1_en'))}}</th>
                                <th>{{ucwords(__('vintari.desc2'))}}</th>
                                <th>{{ucwords(__('vintari.desc2_en'))}}</th>
                                <th>{{ucwords(__('vintari.created_by'))}}</th>
                                <th>{{ucwords(__('vintari.created_at'))}}</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="tab-pane" id="brand">
                    <div class="form-group my-2">
                        <div class="btn-group" role="group">
                            <div class="dropdown">
                                <a href="#" title="{{__('create new item')}} " class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-plus"></i> {{__('new')}}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a href="#" class="dropdown-item" title="Product" onclick="location.replace('{{ route('admin.vintari.create', ['var' => 'brand']) }}');">Brand</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="btn-group" role="group">
                            <div class="dropdown">
                                <a href="#" title="{{__('download')}} {{__('current filtered data')}} {{__('as')}}.." class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-download"></i> {{__('download')}} {{__('as')}}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a href="#" class="dropdown-item" id="btn_download_brand_xlsx" title="download as XLSX file"><i class="fa fa-fw fa-file-excel-o"></i>Xlsx</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <table class="table table-hover compact table-condensed table-striped" id="brand-table" width="100%">
                        <thead>
                            <tr>
                                <th>{{ucwords(__('vintari.action'))}}</th>
                                <th>{{ucwords(__('vintari.name'))}}</th>
                                <th>{{ucwords(__('vintari.created_by'))}}</th>
                                <th>{{ucwords(__('vintari.created_at'))}}</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="tab-pane" id="category">
                    <div class="form-group my-2">
                        <div class="btn-group" role="group">
                            <div class="dropdown">
                                <a href="#" title="{{__('create new item')}} " class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-plus"></i> {{__('new')}}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a href="#" class="dropdown-item" title="Product" onclick="location.replace('{{ route('admin.vintari.create', ['var' => 'category']) }}');">Category</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="btn-group" role="group">
                            <div class="dropdown">
                                <a href="#" title="{{__('download')}} {{__('current filtered data')}} {{__('as')}}.." class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-download"></i> {{__('download')}} {{__('as')}}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a href="#" class="dropdown-item" id="btn_download_category_xlsx" title="download as XLSX file"><i class="fa fa-fw fa-file-excel-o"></i>Xlsx</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <table class="table table-hover compact table-condensed table-striped" id="category-table" width="100%">
                        <thead>
                            <tr>
                                <th>{{ucwords(__('vintari.action'))}}</th>
                                <th>{{ucwords(__('vintari.name'))}}</th>
                                <th>{{ucwords(__('vintari.name_en'))}}</th>
                                <th>{{ucwords(__('vintari.created_by'))}}</th>
                                <th>{{ucwords(__('vintari.created_at'))}}</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="tab-pane" id="contact">
                    <div class="form-group my-2">
                        <div class="btn-group" role="group">
                            <div class="dropdown">
                                <a href="#" title="{{__('create new item')}} " class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-plus"></i> {{__('new')}}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a href="#" class="dropdown-item" title="Product" onclick="location.replace('{{ route('admin.vintari.create', ['var' => 'contact']) }}');">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="btn-group" role="group">
                            <div class="dropdown">
                                <a href="#" title="{{__('download')}} {{__('current filtered data')}} {{__('as')}}.." class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-download"></i> {{__('download')}} {{__('as')}}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a href="#" class="dropdown-item" id="btn_download_contact_xlsx" title="download as XLSX file"><i class="fa fa-fw fa-file-excel-o"></i>Xlsx</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <table class="table table-hover compact table-condensed table-striped" id="contact-table" width="100%">
                        <thead>
                            <tr>
                                <th>{{ucwords(__('vintari.action'))}}</th>
                                <th>{{ucwords(__('vintari.name'))}}</th>
                                <th>{{ucwords(__('vintari.email'))}}</th>
                                <th>{{ucwords(__('vintari.message'))}}</th>
                                <th>{{ucwords(__('vintari.created_by'))}}</th>
                                <th>{{ucwords(__('vintari.created_at'))}}</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="tab-pane" id="country">
                    <div class="form-group my-2">
                        <div class="btn-group" role="group">
                            <div class="dropdown">
                                <a href="#" title="{{__('create new item')}} " class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-plus"></i> {{__('new')}}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a href="#" class="dropdown-item" title="Product" onclick="location.replace('{{ route('admin.vintari.create', ['var' => 'country']) }}');">Country</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="btn-group" role="group">
                            <div class="dropdown">
                                <a href="#" title="{{__('download')}} {{__('current filtered data')}} {{__('as')}}.." class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-download"></i> {{__('download')}} {{__('as')}}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a href="#" class="dropdown-item" id="btn_download_country_xlsx" title="download as XLSX file"><i class="fa fa-fw fa-file-excel-o"></i>Xlsx</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <table class="table table-hover compact table-condensed table-striped" id="country-table" width="100%">
                        <thead>
                            <tr>
                                <th>{{ucwords(__('vintari.action'))}}</th>
                                <th>{{ucwords(__('vintari.name'))}}</th>
                                <th>{{ucwords(__('vintari.created_by'))}}</th>
                                <th>{{ucwords(__('vintari.created_at'))}}</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="tab-pane" id="faq">
                    <div class="form-group my-2">
                        <div class="btn-group" role="group">
                            <div class="dropdown">
                                <a href="#" title="{{__('create new item')}} " class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-plus"></i> {{__('new')}}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a href="#" class="dropdown-item" title="Product" onclick="location.replace('{{ route('admin.vintari.create', ['var' => 'faq']) }}');">FAQ</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="btn-group" role="group">
                            <div class="dropdown">
                                <a href="#" title="{{__('download')}} {{__('current filtered data')}} {{__('as')}}.." class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-download"></i> {{__('download')}} {{__('as')}}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a href="#" class="dropdown-item" id="btn_download_faq_xlsx" title="download as XLSX file"><i class="fa fa-fw fa-file-excel-o"></i>Xlsx</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <table class="table table-hover compact table-condensed table-striped" id="faq-table" width="100%">
                        <thead>
                            <tr>
                                <th>{{ucwords(__('vintari.action'))}}</th>
                                <th>{{ucwords(__('vintari.question'))}}</th>
                                <th>{{ucwords(__('vintari.question_en'))}}</th>
                                <th>{{ucwords(__('vintari.answer'))}}</th>
                                <th>{{ucwords(__('vintari.answer_en'))}}</th>
                                <th>{{ucwords(__('vintari.created_by'))}}</th>
                                <th>{{ucwords(__('vintari.created_at'))}}</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="tab-pane" id="product">
                    <div class="form-group my-2">
                        <div class="btn-group" role="group">
                            <div class="dropdown">
                                <a href="#" title="{{__('create new item')}} " class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-plus"></i> {{__('new')}}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a href="#" class="dropdown-item" title="Product" onclick="location.replace('{{ route('admin.vintari.create', ['var' => 'product']) }}');">Product</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="btn-group" role="group">
                            <div class="dropdown">
                                <a href="#" title="{{__('download')}} {{__('current filtered data')}} {{__('as')}}.." class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-download"></i> {{__('download')}} {{__('as')}}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a href="#" class="dropdown-item" id="btn_download_xlsx" title="download as XLSX file"><i class="fa fa-fw fa-file-excel-o"></i>Xlsx</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <table class="table table-hover compact table-condensed table-striped" id="product-table" width="100%">
                        <thead>
                            <tr>
                                <th>{{ucwords(__('vintari.action'))}}</th>
                                <th>{{ucwords(__('vintari.category'))}}</th>
                                <th>{{ucwords(__('vintari.country'))}}</th>
                                <th>{{ucwords(__('vintari.title'))}}</th>
                                <th>{{ucwords(__('vintari.description'))}}</th>
                                <th>{{ucwords(__('vintari.description_en'))}}</th>
                                <th>{{ucwords(__('vintari.best_selling'))}}</th>
                                <th>{{ucwords(__('vintari.created_by'))}}</th>
                                <th>{{ucwords(__('vintari.created_at'))}}</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="tab-pane" id="user">
                    <div class="form-group my-2">
                        <div class="btn-group" role="group">
                            <div class="dropdown">
                                <a href="#" title="{{__('create new item')}} " class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-plus"></i> {{__('new')}}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a href="#" class="dropdown-item" title="Product" onclick="location.replace('{{ route('admin.vintari.create',['var' => 'user']) }}');">User</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="btn-group" role="group">
                            <div class="dropdown">
                                <a href="#" title="{{__('download')}} {{__('current filtered data')}} {{__('as')}}.." class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-download"></i> {{__('download')}} {{__('as')}}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a href="#" class="dropdown-item" id="btn_download_xlsx" title="download as XLSX file"><i class="fa fa-fw fa-file-excel-o"></i>Xlsx</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <table class="table table-hover compact table-condensed table-striped" id="user-table" width="100%">
                        <thead>
                            <tr>
                                <th>{{ucwords(__('vintari.action'))}}</th>
                                <th>{{ucwords(__('vintari.name'))}}</th>
                                <th>{{ucwords(__('vintari.email'))}}</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content_headscript')
@endsection

@section('content_tailscript')
    <!-- Datetimepicker -->
        <link href="{{ asset('css/datetimepicker/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" type="text/css" >
    <!-- colorpicker -->
    {{-- <link href="{{ asset('css/colorpicker/bootstrap-colorpicker.css') }}" rel="stylesheet" type="text/css" > --}}
    <!-- selectize -->
    <link href="{!! asset('css/selectize/selectize.bootstrap3.css') !!}"  media="all" rel="stylesheet" type="text/css" />
    <!-- Datetimepicker -->
    <script type='text/javascript' src='{{ asset('js/datetimepicker/moment.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('js/datetimepicker/bootstrap-datetimepicker.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('js/datetimepicker/id.js') }}'></script>
    <!-- colorpicker -->
    {{-- <script type='text/javascript' src='{{ asset('js/colorpicker/bootstrap-colorpicker.js') }}'></script> --}}
    <!-- selectize -->
    <script type="text/javascript">
        jQuery.extend( jQuery.fn.dataTableExt.oSort, {
            "date-eu-pre": function ( date ) {
                if(!date){
                    date = "31/12/9999";
                }
                date = date.replace(" ", "");
                
                if ( ! date ) {
                    return 0;
                }
        
                var year;
                var eu_date = date.split(/[\.\-\/]/);
        
                /*year (optional)*/
                if ( eu_date[2] ) {
                    year = eu_date[2];
                }
                else {
                    year = 0;
                }
        
                /*month*/
                var month = eu_date[1];
                if ( month.length == 1 ) {
                    month = 0+month;
                }
        
                /*day*/
                var day = eu_date[0];
                if ( day.length == 1 ) {
                    day = 0+day;
                }
        
                return (year + month + day) * 1;
            },
        
            "date-eu-asc": function ( a, b ) {
                return ((a < b) ? -1 : ((a > b) ? 1 : 0));
            },
        
            "date-eu-desc": function ( a, b ) {

                return ((a < b) ? 1 : ((a > b) ? -1 : 0));
            }
        } );
    </script>
    <script type="text/javascript" src="{!! asset('js/selectize/selectize.js') !!}"></script>
    <script>
        // TABLE ABOUT 
            var oAbout = null;
            $(function() {
                oAbout = $('#about-table').DataTable({
                    filter: true,
                    processing: true,
                    serverSide: true,
                    stateSave: false,
                    scrollY: 500,
                    scrollX: true,
                    language: {
                        paginate: {
                        first: "<i class='fa fa-step-backward'></i>",
                        last: "<i class='fa fa-step-forward'></i>",
                        next: "<i class='fa fa-caret-right'></i>",
                        previous: "<i class='fa fa-caret-left'></i>"
                        },
                        lengthMenu:     "<div class=\"input-group\">_MENU_ &nbsp; / page</div>",
                        info:           "_START_ to _END_ of _TOTAL_ item(s)",
                        infoEmpty:      ""
                    },
                    ajax: {
                        'url': '{!! route('admin.vintari.data') !!}',
                        'type': 'POST',
                        'headers': {
                            'X-CSRF-TOKEN': '{!! csrf_token() !!}'
                        },
                        'data': function (d) {
                            d.create = 'about'
                        }
                    },
                    columns: [
                        { data: 'action', name: 'action', orderable: false, searchable: false, width: '140px'},
                        { data: 'history', name: 'history'},
                        { data: 'history_en', name: 'history_en'},
                        { data: 'visi', name: 'visi'},
                        { data: 'visi_en', name: 'visi_en'},
                        { data: 'misi', name: 'misi'},
                        { data: 'misi_en', name: 'misi_en'},
                        { data: 'telp', name: 'telp'},
                        { data: 'email', name: 'email'},
                        { data: 'product_sold', name: 'product_sold'},
                        { data: 'countries_sold', name: 'countries_sold'},
                        { data: 'client', name: 'client'},
                        { data: 'created_by', name: 'created_by'},
                        { data: 'created_at', name: 'created_at', render: function(data, type) {
                            if (data) {
                                return type === 'sort' ? data : moment(data).format('DD/MM/YYYY HH:mm:ss');
                            }else{
                                return '';
                            }
                        }}
                    ],
                    columnDefs: [
                        { type: 'date-eu', targets: 13 },
                    ],
                    order: [ [13, 'desc'] ],
                    rowCallback: function( row, data, iDisplayIndex ) {
                        var api = this.api();    
                        var info = api.page.info();
                        var page = info.page;
                        var length = info.length;
                        var index = (page * length + (iDisplayIndex +1));
                    },
                });
                
                $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
                    $($.fn.dataTable.tables(true)).DataTable().columns.adjust();
                });
                
                // ACTION DOWNLOAD ABOUT
                    $('#btn_download_about_xlsx').on('click', function() {
                        // /aftersales/inventory/serial-number-report
                        window.open('{{ url('/admin/vintari/download-excel')}}/about', '_blank');
                    });
                // CLOSE ACTION DOWNLOAD ABOUT
            });
        // CLOSE TABLE ABOUT
        // TABLE ACTIVITY 
            var oActivity = null;
            $(function() {
                oActivity = $('#activity-table').DataTable({
                    filter: true,
                    processing: true,
                    serverSide: true,
                    stateSave: false,
                    scrollY: 500,
                    scrollX: true,
                    language: {
                        paginate: {
                        first: "<i class='fa fa-step-backward'></i>",
                        last: "<i class='fa fa-step-forward'></i>",
                        next: "<i class='fa fa-caret-right'></i>",
                        previous: "<i class='fa fa-caret-left'></i>"
                        },
                        lengthMenu:     "<div class=\"input-group\">_MENU_ &nbsp; / page</div>",
                        info:           "_START_ to _END_ of _TOTAL_ item(s)",
                        infoEmpty:      ""
                    },
                    ajax: {
                        'url': '{!! route('admin.vintari.data') !!}',
                        'type': 'POST',
                        'headers': {
                            'X-CSRF-TOKEN': '{!! csrf_token() !!}'
                        },
                        'data': function (d) {
                            d.create = 'activity'
                        }
                    },
                    columns: [
                        { data: 'action', name: 'action', orderable: false, searchable: false, width: '140px'},
                        { data: 'title', name: 'title'},
                        { data: 'title_en', name: 'title_en'},
                        { data: 'articles', name: 'articles'},
                        { data: 'articles_en', name: 'articles_en'},
                        { data: 'created_by', name: 'created_by'},
                        { data: 'created_at', name: 'created_at', render: function(data, type) {
                            if (data) {
                                return type === 'sort' ? data : moment(data).format('DD/MM/YYYY HH:mm:ss');
                            }else{
                                return '';
                            }
                        }}
                    ],
                    columnDefs: [
                        { type: 'date-eu', targets: 6 },
                    ],
                    order: [ [6, 'desc'] ],
                    rowCallback: function( row, data, iDisplayIndex ) {
                        var api = this.api();    
                        var info = api.page.info();
                        var page = info.page;
                        var length = info.length;
                        var index = (page * length + (iDisplayIndex +1));
                    },
                });
                
                $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
                    $($.fn.dataTable.tables(true)).DataTable().columns.adjust();
                });
                
                // ACTION DOWNLOAD ACTIVITY
                    $('#btn_download_activity_xlsx').on('click', function() {
                        // /aftersales/inventory/serial-number-report
                        window.open('{{ url('/admin/vintari/download-excel')}}/activity', '_blank');
                    });
                // CLOSE ACTION DOWNLOAD ACTIVITY
            });
        // CLOSE TABLE ACTIVITY
        // TABLE BANNER 
            var oBanner = null;
            $(function() {
                oBanner = $('#banner-table').DataTable({
                    filter: true,
                    processing: true,
                    serverSide: true,
                    stateSave: false,
                    scrollY: 500,
                    scrollX: true,
                    language: {
                        paginate: {
                        first: "<i class='fa fa-step-backward'></i>",
                        last: "<i class='fa fa-step-forward'></i>",
                        next: "<i class='fa fa-caret-right'></i>",
                        previous: "<i class='fa fa-caret-left'></i>"
                        },
                        lengthMenu:     "<div class=\"input-group\">_MENU_ &nbsp; / page</div>",
                        info:           "_START_ to _END_ of _TOTAL_ item(s)",
                        infoEmpty:      ""
                    },
                    ajax: {
                        'url': '{!! route('admin.vintari.data') !!}',
                        'type': 'POST',
                        'headers': {
                            'X-CSRF-TOKEN': '{!! csrf_token() !!}'
                        },
                        'data': function (d) {
                            d.create = 'banner'
                        }
                    },
                    columns: [
                        { data: 'action', name: 'action', orderable: false, searchable: false, width: '140px'},
                        { data: 'header', name: 'header'},
                        { data: 'header_en', name: 'header_en'},
                        { data: 'desc1', name: 'desc1'},
                        { data: 'desc1_en', name: 'desc1_en'},
                        { data: 'desc2', name: 'desc2'},
                        { data: 'desc2_en', name: 'desc2_en'},
                        { data: 'created_by', name: 'created_by'},
                        { data: 'created_at', name: 'created_at', render: function(data, type) {
                            if (data) {
                                return type === 'sort' ? data : moment(data).format('DD/MM/YYYY HH:mm:ss');
                            }else{
                                return '';
                            }
                        }}
                    ],
                    columnDefs: [
                        { type: 'date-eu', targets: 8 },
                    ],
                    order: [ [8, 'desc'] ],
                    rowCallback: function( row, data, iDisplayIndex ) {
                        var api = this.api();    
                        var info = api.page.info();
                        var page = info.page;
                        var length = info.length;
                        var index = (page * length + (iDisplayIndex +1));
                    },
                });
                
                $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
                    $($.fn.dataTable.tables(true)).DataTable().columns.adjust();
                });
                
                // ACTION DOWNLOAD BANNER
                    $('#btn_download_banner_xlsx').on('click', function() {
                        // /aftersales/inventory/serial-number-report
                        window.open('{{ url('/admin/vintari/download-excel')}}/banner', '_blank');
                    });
                // CLOSE ACTION DOWNLOAD BANNER
            });
        // CLOSE TABLE BANNER
        // TABLE BRAND 
            var oBrand = null;
            $(function() {
                oBrand = $('#brand-table').DataTable({
                    filter: true,
                    processing: true,
                    serverSide: true,
                    stateSave: false,
                    scrollY: 500,
                    scrollX: true,
                    language: {
                        paginate: {
                        first: "<i class='fa fa-step-backward'></i>",
                        last: "<i class='fa fa-step-forward'></i>",
                        next: "<i class='fa fa-caret-right'></i>",
                        previous: "<i class='fa fa-caret-left'></i>"
                        },
                        lengthMenu:     "<div class=\"input-group\">_MENU_ &nbsp; / page</div>",
                        info:           "_START_ to _END_ of _TOTAL_ item(s)",
                        infoEmpty:      ""
                    },
                    ajax: {
                        'url': '{!! route('admin.vintari.data') !!}',
                        'type': 'POST',
                        'headers': {
                            'X-CSRF-TOKEN': '{!! csrf_token() !!}'
                        },
                        'data': function (d) {
                            d.create = 'brand'
                        }
                    },
                    columns: [
                        { data: 'action', name: 'action', orderable: false, searchable: false, width: '140px'},
                        { data: 'name', name: 'name'},
                        { data: 'created_by', name: 'created_by'},
                        { data: 'created_at', name: 'created_at', render: function(data, type) {
                            if (data) {
                                return type === 'sort' ? data : moment(data).format('DD/MM/YYYY HH:mm:ss');
                            }else{
                                return '';
                            }
                        }}
                    ],
                    columnDefs: [
                        { type: 'date-eu', targets: 3 },
                    ],
                    order: [ [3, 'desc'] ],
                    rowCallback: function( row, data, iDisplayIndex ) {
                        var api = this.api();    
                        var info = api.page.info();
                        var page = info.page;
                        var length = info.length;
                        var index = (page * length + (iDisplayIndex +1));
                    },
                });
                
                $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
                    $($.fn.dataTable.tables(true)).DataTable().columns.adjust();
                });
                
                // ACTION DOWNLOAD BRAND
                    $('#btn_download_brand_xlsx').on('click', function() {
                        // /aftersales/inventory/serial-number-report
                        window.open('{{ url('/admin/vintari/download-excel')}}/brand', '_blank');
                    });
                // CLOSE ACTION DOWNLOAD BRAND
            });
        // CLOSE TABLE BRAND
        // TABLE CATEGORY 
            var oCategory = null;
            $(function() {
                oCategory = $('#category-table').DataTable({
                    filter: true,
                    processing: true,
                    serverSide: true,
                    stateSave: false,
                    scrollY: 500,
                    scrollX: true,
                    language: {
                        paginate: {
                        first: "<i class='fa fa-step-backward'></i>",
                        last: "<i class='fa fa-step-forward'></i>",
                        next: "<i class='fa fa-caret-right'></i>",
                        previous: "<i class='fa fa-caret-left'></i>"
                        },
                        lengthMenu:     "<div class=\"input-group\">_MENU_ &nbsp; / page</div>",
                        info:           "_START_ to _END_ of _TOTAL_ item(s)",
                        infoEmpty:      ""
                    },
                    ajax: {
                        'url': '{!! route('admin.vintari.data') !!}',
                        'type': 'POST',
                        'headers': {
                            'X-CSRF-TOKEN': '{!! csrf_token() !!}'
                        },
                        'data': function (d) {
                            d.create = 'category'
                        }
                    },
                    columns: [
                        { data: 'action', name: 'action', orderable: false, searchable: false, width: '140px'},
                        { data: 'name', name: 'name'},
                        { data: 'name_en', name: 'name_en'},
                        { data: 'created_by', name: 'created_by'},
                        { data: 'created_at', name: 'created_at', render: function(data, type) {
                            if (data) {
                                return type === 'sort' ? data : moment(data).format('DD/MM/YYYY HH:mm:ss');
                            }else{
                                return '';
                            }
                        }}
                    ],
                    columnDefs: [
                        { type: 'date-eu', targets: 4 },
                    ],
                    order: [ [4, 'desc'] ],
                    rowCallback: function( row, data, iDisplayIndex ) {
                        var api = this.api();    
                        var info = api.page.info();
                        var page = info.page;
                        var length = info.length;
                        var index = (page * length + (iDisplayIndex +1));
                    },
                });
                
                $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
                    $($.fn.dataTable.tables(true)).DataTable().columns.adjust();
                });
                
                // ACTION DOWNLOAD CATEGORY
                    $('#btn_download_category_xlsx').on('click', function() {
                        // /aftersales/inventory/serial-number-report
                        window.open('{{ url('/admin/vintari/download-excel')}}/category', '_blank');
                    });
                // CLOSE ACTION DOWNLOAD CATEGORY
            });
        // CLOSE TABLE CATEGORY
        // TABLE CONTACT 
            var oContact = null;
            $(function() {
                oContact = $('#contact-table').DataTable({
                    filter: true,
                    processing: true,
                    serverSide: true,
                    stateSave: false,
                    scrollY: 500,
                    scrollX: true,
                    language: {
                        paginate: {
                        first: "<i class='fa fa-step-backward'></i>",
                        last: "<i class='fa fa-step-forward'></i>",
                        next: "<i class='fa fa-caret-right'></i>",
                        previous: "<i class='fa fa-caret-left'></i>"
                        },
                        lengthMenu:     "<div class=\"input-group\">_MENU_ &nbsp; / page</div>",
                        info:           "_START_ to _END_ of _TOTAL_ item(s)",
                        infoEmpty:      ""
                    },
                    ajax: {
                        'url': '{!! route('admin.vintari.data') !!}',
                        'type': 'POST',
                        'headers': {
                            'X-CSRF-TOKEN': '{!! csrf_token() !!}'
                        },
                        'data': function (d) {
                            d.create = 'contact'
                        }
                    },
                    columns: [
                        { data: 'action', name: 'action', orderable: false, searchable: false, width: '140px'},
                        { data: 'name', name: 'name'},
                        { data: 'email', name: 'email'},
                        { data: 'message', name: 'message'},
                        { data: 'created_by', name: 'created_by'},
                        { data: 'created_at', name: 'created_at', render: function(data, type) {
                            if (data) {
                                return type === 'sort' ? data : moment(data).format('DD/MM/YYYY HH:mm:ss');
                            }else{
                                return '';
                            }
                        }}
                    ],
                    columnDefs: [
                        { type: 'date-eu', targets: 5 },
                    ],
                    order: [ [5, 'desc'] ],
                    rowCallback: function( row, data, iDisplayIndex ) {
                        var api = this.api();    
                        var info = api.page.info();
                        var page = info.page;
                        var length = info.length;
                        var index = (page * length + (iDisplayIndex +1));
                    },
                });
                
                $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
                    $($.fn.dataTable.tables(true)).DataTable().columns.adjust();
                });
                
                // ACTION DOWNLOAD CONTACT
                    $('#btn_download_contact_xlsx').on('click', function() {
                        // /aftersales/inventory/serial-number-report
                        window.open('{{ url('/admin/vintari/download-excel')}}/contact', '_blank');
                    });
                // CLOSE ACTION DOWNLOAD CONTACT
            });
        // CLOSE TABLE CONTACT
        // TABLE COUNTRY 
            var oCountry = null;
            $(function() {
                oCountry = $('#country-table').DataTable({
                    filter: true,
                    processing: true,
                    serverSide: true,
                    stateSave: false,
                    scrollY: 500,
                    scrollX: true,
                    language: {
                        paginate: {
                        first: "<i class='fa fa-step-backward'></i>",
                        last: "<i class='fa fa-step-forward'></i>",
                        next: "<i class='fa fa-caret-right'></i>",
                        previous: "<i class='fa fa-caret-left'></i>"
                        },
                        lengthMenu:     "<div class=\"input-group\">_MENU_ &nbsp; / page</div>",
                        info:           "_START_ to _END_ of _TOTAL_ item(s)",
                        infoEmpty:      ""
                    },
                    ajax: {
                        'url': '{!! route('admin.vintari.data') !!}',
                        'type': 'POST',
                        'headers': {
                            'X-CSRF-TOKEN': '{!! csrf_token() !!}'
                        },
                        'data': function (d) {
                            d.create = 'country'
                        }
                    },
                    columns: [
                        { data: 'action', name: 'action', orderable: false, searchable: false, width: '140px'},
                        { data: 'name', name: 'name'},
                        { data: 'created_by', name: 'created_by'},
                        { data: 'created_at', name: 'created_at', render: function(data, type) {
                            if (data) {
                                return type === 'sort' ? data : moment(data).format('DD/MM/YYYY HH:mm:ss');
                            }else{
                                return '';
                            }
                        }}
                    ],
                    columnDefs: [
                        { type: 'date-eu', targets: 3 },
                    ],
                    order: [ [3, 'desc'] ],
                    rowCallback: function( row, data, iDisplayIndex ) {
                        var api = this.api();    
                        var info = api.page.info();
                        var page = info.page;
                        var length = info.length;
                        var index = (page * length + (iDisplayIndex +1));
                    },
                });
                
                $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
                    $($.fn.dataTable.tables(true)).DataTable().columns.adjust();
                });
                
                // ACTION DOWNLOAD COUNTRY
                    $('#btn_download_country_xlsx').on('click', function() {
                        // /aftersales/inventory/serial-number-report
                        window.open('{{ url('/admin/vintari/download-excel')}}/country', '_blank');
                    });
                // CLOSE ACTION DOWNLOAD COUNTRY
            });
        // CLOSE TABLE COUNTRY
        // TABLE FAQ 
            var oFAQ = null;
            $(function() {
                oFAQ = $('#faq-table').DataTable({
                    filter: true,
                    processing: true,
                    serverSide: true,
                    stateSave: false,
                    scrollY: 500,
                    scrollX: true,
                    language: {
                        paginate: {
                        first: "<i class='fa fa-step-backward'></i>",
                        last: "<i class='fa fa-step-forward'></i>",
                        next: "<i class='fa fa-caret-right'></i>",
                        previous: "<i class='fa fa-caret-left'></i>"
                        },
                        lengthMenu:     "<div class=\"input-group\">_MENU_ &nbsp; / page</div>",
                        info:           "_START_ to _END_ of _TOTAL_ item(s)",
                        infoEmpty:      ""
                    },
                    ajax: {
                        'url': '{!! route('admin.vintari.data') !!}',
                        'type': 'POST',
                        'headers': {
                            'X-CSRF-TOKEN': '{!! csrf_token() !!}'
                        },
                        'data': function (d) {
                            d.create = 'faq'
                        }
                    },
                    columns: [
                        { data: 'action', name: 'action', orderable: false, searchable: false, width: '140px'},
                        { data: 'question', name: 'question'},
                        { data: 'question_en', name: 'question_en'},
                        { data: 'answer', name: 'answer'},
                        { data: 'answer_en', name: 'answer_en'},
                        { data: 'created_by', name: 'created_by'},
                        { data: 'created_at', name: 'created_at', render: function(data, type) {
                            if (data) {
                                return type === 'sort' ? data : moment(data).format('DD/MM/YYYY HH:mm:ss');
                            }else{
                                return '';
                            }
                        }}
                    ],
                    columnDefs: [
                        { type: 'date-eu', targets: 6 },
                    ],
                    order: [ [6, 'desc'] ],
                    rowCallback: function( row, data, iDisplayIndex ) {
                        var api = this.api();    
                        var info = api.page.info();
                        var page = info.page;
                        var length = info.length;
                        var index = (page * length + (iDisplayIndex +1));
                    },
                });
                
                $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
                    $($.fn.dataTable.tables(true)).DataTable().columns.adjust();
                });
                
                // ACTION DOWNLOAD FAQ
                    $('#btn_download_faq_xlsx').on('click', function() {
                        // /aftersales/inventory/serial-number-report
                        window.open('{{ url('/admin/vintari/download-excel')}}/faq', '_blank');
                    });
                // CLOSE ACTION DOWNLOAD FAQ
            });
        // CLOSE TABLE FAQ
        // TABLE PRODUCT 
            var oProduct = null;
            $(function() {
                oProduct = $('#product-table').DataTable({
                    filter: true,
                    processing: true,
                    serverSide: true,
                    stateSave: false,
                    scrollY: 500,
                    scrollX: true,
                    language: {
                        paginate: {
                        first: "<i class='fa fa-step-backward'></i>",
                        last: "<i class='fa fa-step-forward'></i>",
                        next: "<i class='fa fa-caret-right'></i>",
                        previous: "<i class='fa fa-caret-left'></i>"
                        },
                        lengthMenu:     "<div class=\"input-group\">_MENU_ &nbsp; / page</div>",
                        info:           "_START_ to _END_ of _TOTAL_ item(s)",
                        infoEmpty:      ""
                    },
                    ajax: {
                        'url': '{!! route('admin.vintari.data') !!}',
                        'type': 'POST',
                        'headers': {
                            'X-CSRF-TOKEN': '{!! csrf_token() !!}'
                        },
                        'data': function (d) {
                            d.create = 'product'
                        }
                    },
                    columns: [
                        { data: 'action', name: 'action', orderable: false, searchable: false, width: '140px'},
                        { data: 'categories_id', name: 'categories_id'},
                        { data: 'countries_id', name: 'countries_id'},
                        { data: 'title', name: 'title'},
                        { data: 'description', name: 'description'},
                        { data: 'description_en', name: 'description_en'},
                        { data: 'best_selling', name: 'best_selling'},
                        { data: 'created_by', name: 'created_by'},
                        { data: 'created_at', name: 'created_at', render: function(data, type) {
                            if (data) {
                                return type === 'sort' ? data : moment(data).format('DD/MM/YYYY HH:mm:ss');
                            }else{
                                return '';
                            }
                        }}
                    ],
                    columnDefs: [
                        { type: 'date-eu', targets: 8 },
                    ],
                    order: [ [8, 'desc'] ],
                    rowCallback: function( row, data, iDisplayIndex ) {
                        var api = this.api();    
                        var info = api.page.info();
                        var page = info.page;
                        var length = info.length;
                        var index = (page * length + (iDisplayIndex +1));
                    },
                });
                
                $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
                    $($.fn.dataTable.tables(true)).DataTable().columns.adjust();
                });
                
                // ACTION DOWNLOAD PRODUCT
                    $('#btn_download_product_xlsx').on('click', function() {
                        // /aftersales/inventory/serial-number-report
                        window.open('{{ url('/admin/vintari/download-excel')}}/product', '_blank');
                    });
                // CLOSE ACTION DOWNLOAD PRODUCT
            });
        // CLOSE TABLE PRODUCT
        // TABLE USER 
            var oUser = null;
            $(function() {
                oUser = $('#user-table').DataTable({
                    filter: true,
                    processing: true,
                    serverSide: true,
                    stateSave: false,
                    scrollY: 500,
                    scrollX: true,
                    language: {
                        paginate: {
                        first: "<i class='fa fa-step-backward'></i>",
                        last: "<i class='fa fa-step-forward'></i>",
                        next: "<i class='fa fa-caret-right'></i>",
                        previous: "<i class='fa fa-caret-left'></i>"
                        },
                        lengthMenu:     "<div class=\"input-group\">_MENU_ &nbsp; / page</div>",
                        info:           "_START_ to _END_ of _TOTAL_ item(s)",
                        infoEmpty:      ""
                    },
                    ajax: {
                        'url': '{!! route('admin.vintari.data') !!}',
                        'type': 'POST',
                        'headers': {
                            'X-CSRF-TOKEN': '{!! csrf_token() !!}'
                        },
                        'data': function (d) {
                            d.create = 'user'
                        }
                    },
                    columns: [
                        { data: 'action', name: 'action', orderable: false, searchable: false, width: '140px', visible:false},
                        { data: 'name', name: 'name'},
                        { data: 'email', name: 'email'}
                    ],
                    order: [ [1, 'desc'] ],
                    rowCallback: function( row, data, iDisplayIndex ) {
                        var api = this.api();    
                        var info = api.page.info();
                        var page = info.page;
                        var length = info.length;
                        var index = (page * length + (iDisplayIndex +1));
                    },
                });
                
                $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
                    $($.fn.dataTable.tables(true)).DataTable().columns.adjust();
                });
                
                // ACTION DOWNLOAD PRODUCT
                    $('#btn_download_user_xlsx').on('click', function() {
                        // /aftersales/inventory/serial-number-report
                        window.open('{{ url('/admin/vintari/download-excel')}}/user', '_blank');
                    });
                // CLOSE ACTION DOWNLOAD PRODUCT
            });
        // CLOSE TABLE USER

        // function showItem()
            function showItem(id) {
                var uriComponent = encodeURIComponent(id);
                location.replace('{{ url('/admin/vintari') }}/'+uriComponent);
            }
        // end function showItem()
        // function editItem()
            function editItem(id) {
                var uriComponent = encodeURIComponent(id);
                location.replace('{{ url('/admin/vintari') }}/'+uriComponent+'/edit');
            }
        // end function editItem()
        // function deleteItem()
            function deleteItem(id) {
                artConfirmationDo('{{ucfirst(__('vintari.confirmation'))}}', '{{ucfirst(__('vintari.delete_data'))}}', function(){
                artConfirmationClose();
                artLoadingDialogDo('Loading...', function(){
                    $.ajax({
                        url: "{{ url('/admin/vintari') }}/"+id,
                        type: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': '{!! csrf_token() !!}'
                        },
                        dataType:'json',
                        success:function(data)
                        {
                            if(data.errors)
                            {
                                artLoadingDialogClose();
                                artAllFlashMsgClose();
                                artCreateFlashMsg(data.message, 'error',true);
                            }
                            if(data.success)
                            {
                                artLoadingDialogClose();
                                artAllFlashMsgClose();
                                artCreateFlashMsg(data.message, 'success',true);
                                
                                $('#'+data.create_1+'-table').DataTable().ajax.reload();
                                
                            }
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            artLoadingDialogClose();
                            artCreateFlashMsg("{{ucfirst(__('textStatus'))}}",'error',true);
                        }
                    });
                });
            });
            }
        // end function deleteItem()
    </script>
@endsection
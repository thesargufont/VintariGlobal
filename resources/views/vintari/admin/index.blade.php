@extends('layouts.layout1')

@section('content')
    <div class="card">
        <div class="card-body">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#about"   data-toggle="tab">{{ucwords(__('vintari.about'))}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"        href="#activty" data-toggle="tab">{{ucwords(__('vintari.activty'))}}</a>
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
                                    <li><a href="#" class="dropdown-item" title="Product" onclick="location.replace('{{ route('admin.vintari.create') }}.abouts');">About</a></li>
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
                <div class="tab-pane" id="activty">
                    <div class="form-group my-2">
                        <div class="btn-group" role="group">
                            <div class="dropdown">
                                <a href="#" title="{{__('create new item')}} " class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-plus"></i> {{__('new')}}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a href="#" class="dropdown-item" title="Product" onclick="location.replace('{{ route('admin.vintari.create') }}.activity');">Activty</a></li>
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
                    <table class="table table-hover compact table-condensed table-striped" id="activty-table" width="100%">
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
                                    <li><a href="#" class="dropdown-item" title="Product" onclick="location.replace('{{ route('admin.vintari.create') }}.banner');">Banner</a></li>
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
                                    <li><a href="#" class="dropdown-item" title="Product" onclick="location.replace('{{ route('admin.vintari.create') }}.brand');">Brand</a></li>
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
                                    <li><a href="#" class="dropdown-item" title="Product" onclick="location.replace('{{ route('admin.vintari.create') }}.category');">Category</a></li>
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
                                    <li><a href="#" class="dropdown-item" title="Product" onclick="location.replace('{{ route('admin.vintari.create') }}.contact');">Contact</a></li>
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
                                    <li><a href="#" class="dropdown-item" title="Product" onclick="location.replace('{{ route('admin.vintari.create') }}.country');">Country</a></li>
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
                                    <li><a href="#" class="dropdown-item" title="Product" onclick="location.replace('{{ route('admin.vintari.create') }}.faq');">FAQ</a></li>
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
                                    <li><a href="#" class="dropdown-item" title="Product" onclick="location.replace('{{ route('admin.vintari.create') }}.product');">Product</a></li>
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
                                    <li><a href="#" class="dropdown-item" title="Product" onclick="location.replace('{{ route('admin.vintari.create') }}.user');">User</a></li>
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
    </script>
@endsection
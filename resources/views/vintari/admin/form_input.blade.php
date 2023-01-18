@extends('layouts.layout1')

@section('content')
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
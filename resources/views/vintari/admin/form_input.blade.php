@extends('layouts.layout1')

@section('content')
    <<form action="{{url("/vintari/admin/store")}}" id="form-add" enctype="multipart/form-data" method="POST">
        {{csrf_field()}}
        <div class="card">
            <input type="hidden" name="_method" value="POST" />
            <div class="card-header">
                <div class="form-group">
                    <button onclick="location.replace('{{route('vintari.admin.index')}}');" title="back to previous page" type='button' class="btn btn-secondary"><i class="fa fa-arrow-left"></i> {{__('back')}}</button>
                    @if (!$show)
                        <button title="save" id="submitBtn" type='submit' class="btn btn-simpan btn-primary" hidden><i class="fa fa-save"></i></button>
                        <button title="save" id="saveBtn" type='button' onclick="showConfirmTest();" class="btn btn-primary"><i class="fa fa-save"></i> {{ucwords(__('save'))}}</button>
                    @endif
                </div>
            </div>
            <div class="card-body">
                @if($create == 'BANNER')
                    {{-- header --}}
                        {{-- ID --}}
                            <div class="col-sm-5">
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label class="control-label" >{{ucwords(__('vintari.header'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control text-uppercase" maxlength="50" type="text" name="header" id="header" title="{{ucwords(__('vintari.header'))}}" placeholder="{{ucwords(__('vintari.header'))}}" required/>
                                        <small class="text-danger" id="header_error"></small>
                                    </div>
                                </div> 
                            </div>
                        {{-- END ID --}}
                        {{-- EN --}}
                            <div class="col-sm-5">
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label class="control-label" >{{ucwords(__('vintari.header_en'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control text-uppercase" maxlength="50" type="text" name="header_en" id="header_en" title="{{ucwords(__('vintari.header_en'))}}" placeholder="{{ucwords(__('vintari.header_en'))}}" required/>
                                        <small class="text-danger" id="header_en_error"></small>
                                    </div>
                                </div> 
                            </div>
                        {{-- END EN --}}
                    {{-- end header --}}
                    {{-- description --}}
                        {{-- desc1 --}}
                            <div class="col-sm-5">
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label class="control-label" >{{ucwords(__('vintar.desc1'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea id="desc1" name="desc1" rows="3" cols="50" maxlength="100" class="form-control text-uppercase" required></textarea>
                                        <small class="text-danger" id="desc1_error"></small>
                                    </div>
                                </div>
                            </div>
                        {{-- end desc1 --}}
                        {{-- desc1 en --}}
                            <div class="col-sm-5">
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label class="control-label" >{{ucwords(__('vintar.desc1_en'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea id="desc1_en" name="desc1_en" rows="3" cols="50" maxlength="100" class="form-control text-uppercase" required></textarea>
                                        <small class="text-danger" id="desc1_en_error"></small>
                                    </div>
                                </div>
                            </div>
                        {{-- end desc1 en --}}
                        {{-- desc2 --}}
                            <div class="col-sm-5">
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label class="control-label" >{{ucwords(__('vintar.desc2'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea id="desc2" name="desc2" rows="3" cols="50" maxlength="100" class="form-control text-uppercase"></textarea>
                                        <small class="text-danger" id="desc2_error"></small>
                                    </div>
                                </div>
                            </div>
                        {{-- end desc2 --}}
                        {{-- desc2 en --}}
                            <div class="col-sm-5">
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label class="control-label" >{{ucwords(__('vintar.desc2_en'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea id="desc2_en" name="desc2_en" rows="3" cols="50" maxlength="100" class="form-control text-uppercase"></textarea>
                                        <small class="text-danger" id="desc2_en_error"></small>
                                    </div>
                                </div>
                            </div>
                        {{-- end desc2 en --}}
                    {{-- end description --}}
                    {{-- upload --}}
                        <div class="col-sm-5">
                            <div class="row mb-3">
                                <div class="col-sm-4">{!!Form::label(Str::title(__('file')))!!}</div>
                                <div class="col-sm-8">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="banner" name="banner" title="{{__('file select input, for upload file')}} ({{__('required')}})" required>
                                        <label class="custom-file-label" for="banner">{{__('choose')}} {{__('file')}}...</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {{-- end upload --}}
                @elseif($create == 'BRAND')
                    {{-- name --}}
                        <div class="col-sm-5">
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <label class="control-label" >{{ucwords(__('vintari.name'))}}</label>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control text-uppercase" maxlength="50" type="text" name="name" id="name" title="{{ucwords(__('vintari.name'))}}" placeholder="{{ucwords(__('vintari.name'))}}" required/>
                                    <small class="text-danger" id="name_error"></small>
                                </div>
                            </div> 
                        </div>
                    {{-- end name --}}
                    {{-- upload --}}
                        <div class="col-sm-5">
                            <div class="row mb-3">
                                <div class="col-sm-4">{!!Form::label(Str::title(__('file')))!!}</div>
                                <div class="col-sm-8">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="brand" name="brand" title="{{__('file select input, for upload file')}} ({{__('required')}})" required>
                                        <label class="custom-file-label" for="brand">{{__('choose')}} {{__('file')}}...</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {{-- end upload --}}
                @elseif($create == 'ABOUT')
                    {{-- history --}}
                        {{-- ID --}}
                            <div class="col-sm-5">
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label class="control-label" >{{ucwords(__('vintar.history'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea id="history" name="history" rows="3" cols="50" maxlength="255" class="form-control text-uppercase" required></textarea>
                                        <small class="text-danger" id="history_error"></small>
                                    </div>
                                </div>
                            </div>
                        {{-- end ID --}}
                        {{-- EN --}}
                            <div class="col-sm-5">
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label class="control-label" >{{ucwords(__('vintar.history_en'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea id="history_en" name="history_en" rows="3" cols="50" maxlength="255" class="form-control text-uppercase" required></textarea>
                                        <small class="text-danger" id="history_en_error"></small>
                                    </div>
                                </div>
                            </div>
                        {{-- END EN --}}
                    {{-- end history --}}
                    {{-- visi --}}
                        {{-- ID --}}
                            <div class="col-sm-5">
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label class="control-label" >{{ucwords(__('vintar.visi'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea id="visi" name="visi" rows="3" cols="50" maxlength="255" class="form-control text-uppercase" required></textarea>
                                        <small class="text-danger" id="visi_error"></small>
                                    </div>
                                </div>
                            </div>
                        {{-- END ID --}}
                        {{-- EN --}}
                            <div class="col-sm-5">
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label class="control-label" >{{ucwords(__('vintar.visi_en'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea id="visi_en" name="visi_en" rows="3" cols="50" maxlength="255" class="form-control text-uppercase" required></textarea>
                                        <small class="text-danger" id="visi_en_error"></small>
                                    </div>
                                </div>
                            </div>
                        {{-- END EN --}}
                    {{-- end visi --}}
                    {{-- misi --}}
                        {{-- ID --}}
                            <div class="col-sm-5">
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label class="control-label" >{{ucwords(__('vintar.misi'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea id="misi" name="misi" rows="3" cols="50" maxlength="255" class="form-control text-uppercase" required></textarea>
                                        <small class="text-danger" id="misi_error"></small>
                                    </div>
                                </div>
                            </div>
                        {{-- END ID --}}
                        {{-- EN --}}
                            <div class="col-sm-5">
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label class="control-label" >{{ucwords(__('vintar.misi_en'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea id="misi_en" name="misi_en" rows="3" cols="50" maxlength="255" class="form-control text-uppercase" required></textarea>
                                        <small class="text-danger" id="misi_en_error"></small>
                                    </div>
                                </div>
                            </div>
                        {{-- END EN --}}
                    {{-- end misi --}}
                    {{-- upload --}}
                        <div class="col-sm-5">
                            <div class="row mb-3">
                                <div class="col-sm-4">{!!Form::label(Str::title(__('file')))!!}</div>
                                <div class="col-sm-8">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="about" name="about" title="{{__('file select input, for upload file')}} ({{__('required')}})" required>
                                        <label class="custom-file-label" for="about">{{__('choose')}} {{__('file')}}...</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {{-- end upload --}}
                    {{-- url alibaba --}}
                        <div class="col-sm-5">
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <label class="control-label" >{{ucwords(__('vintari.url_alibaba'))}}</label>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control text-uppercase" maxlength="255" type="text" name="url_alibaba" id="url_alibaba" title="{{ucwords(__('vintari.url_alibaba'))}}" placeholder="{{ucwords(__('vintari.url_alibaba'))}}">
                                    <small class="text-danger" id="url_alibaba_error"></small>
                                </div>
                            </div> 
                        </div>
                    {{-- end url alibaba --}}
                    {{-- telpon --}}
                        <div class="col-sm-5">
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <label class="control-label" >{{ucwords(__('vintari.telpon'))}}</label>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control text-uppercase positiveOnlyTextBox" maxlength="20" type="text" name="telpon" id="telpon" title="{{ucwords(__('vintari.telpon'))}}" placeholder="{{ucwords(__('vintari.telpon'))}}" required>
                                    <small class="text-danger" id="telpon_error"></small>
                                </div>
                            </div> 
                        </div>
                    {{-- end telpon --}}
                    {{-- email --}}
                        <div class="col-sm-5">
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <label class="control-label" >{{ucwords(__('vintari.email'))}}</label>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control text-uppercase" maxlength="25" type="text" name="email" id="email" title="{{ucwords(__('vintari.email'))}}" placeholder="{{ucwords(__('vintari.email'))}}" required>
                                    <small class="text-danger" id="email_error"></small>
                                </div>
                            </div> 
                        </div>
                    {{-- end email --}}
                    
                    {{-- product sold --}}
                    {{-- end product sold --}}

                    {{-- countries sold --}}
                    {{-- end countries sold --}}

                    {{-- client --}}
                    {{-- end client --}}
                @elseif($create == 'PRODUCT')
                @elseif($create == 'CATEGORY')
                    {{-- name --}}
                        {{-- ID --}}
                            <div class="col-sm-5">
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label class="control-label" >{{ucwords(__('vintari.name'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control text-uppercase" maxlength="50" type="text" name="name" id="name" title="{{ucwords(__('vintari.name'))}}" placeholder="{{ucwords(__('vintari.name'))}}" required/>
                                        <small class="text-danger" id="name_error"></small>
                                    </div>
                                </div> 
                            </div>
                        {{-- END ID --}}
                        {{-- EN --}}
                            <div class="col-sm-5">
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label class="control-label" >{{ucwords(__('vintari.name_en'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control text-uppercase" maxlength="50" type="text" name="name_en" id="name_en" title="{{ucwords(__('vintari.name_en'))}}" placeholder="{{ucwords(__('vintari.name_en'))}}" required/>
                                        <small class="text-danger" id="name_en_error"></small>
                                    </div>
                                </div> 
                            </div>
                        {{-- END EN --}}
                    {{-- end name --}}
                @elseif($create == 'COUNTRY')
                    {{-- name --}}
                        <div class="col-sm-5">
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <label class="control-label" >{{ucwords(__('vintari.country'))}}</label>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control text-uppercase" maxlength="50" type="text" name="country" id="country" title="{{ucwords(__('vintari.country'))}}" placeholder="{{ucwords(__('vintari.country'))}}" required/>
                                    <small class="text-danger" id="country_error"></small>
                                </div>
                            </div> 
                        </div>
                    {{-- end name --}}
                    {{-- upload --}}
                        <div class="col-sm-5">
                            <div class="row mb-3">
                                <div class="col-sm-4">{!!Form::label(Str::title(__('file')))!!}</div>
                                <div class="col-sm-8">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="country" name="country" title="{{__('file select input, for upload file')}} ({{__('required')}})" required>
                                        <label class="custom-file-label" for="country">{{__('choose')}} {{__('file')}}...</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {{-- end upload --}}
                @elseif($create == 'ACTIVITY')
                @elseif($create == 'FAQ')
                    {{-- question --}}
                        {{-- ID --}}
                            <div class="col-sm-5">
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label class="control-label" >{{ucwords(__('vintar.question'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea id="question" name="question" rows="3" cols="50" maxlength="50" class="form-control text-uppercase"></textarea>
                                        <small class="text-danger" id="question_error"></small>
                                    </div>
                                </div>
                            </div>
                        {{-- END ID --}}
                        {{-- EN --}}
                            <div class="col-sm-5">
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label class="control-label" >{{ucwords(__('vintar.question_en'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea id="question_en" name="question_en" rows="3" cols="50" maxlength="50" class="form-control text-uppercase"></textarea>
                                        <small class="text-danger" id="question_en_error"></small>
                                    </div>
                                </div>
                            </div>
                        {{-- END ID --}}
                    {{-- end question --}}
                    {{-- answer --}}
                        {{-- ID --}}
                            <div class="col-sm-5">
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label class="control-label" >{{ucwords(__('vintar.answer'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea id="answer" name="answer" rows="3" cols="50" maxlength="255" class="form-control text-uppercase"></textarea>
                                        <small class="text-danger" id="answer_error"></small>
                                    </div>
                                </div>
                            </div>
                        {{-- END ID --}}
                        {{-- EN --}}
                            <div class="col-sm-5">
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label class="control-label" >{{ucwords(__('vintar.answer_en'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea id="answer_en" name="answer_en" rows="3" cols="50" maxlength="255" class="form-control text-uppercase"></textarea>
                                        <small class="text-danger" id="answer_en_error"></small>
                                    </div>
                                </div>
                            </div>
                        {{-- END ID --}}
                    {{-- end answer --}}
                @elseif($create == 'CONTACT')
                    {{-- name --}}
                        <div class="col-sm-5">
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <label class="control-label" >{{ucwords(__('vintari.name'))}}</label>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control text-uppercase" maxlength="50" type="text" name="name" id="name" title="{{ucwords(__('vintari.name'))}}" placeholder="{{ucwords(__('vintari.name'))}}" required/>
                                    <small class="text-danger" id="name_error"></small>
                                </div>
                            </div> 
                        </div>
                    {{-- end name --}}
                    {{-- email --}}
                        <div class="col-sm-5">
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <label class="control-label" >{{ucwords(__('vintari.email'))}}</label>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control text-uppercase" maxlength="100" type="text" name="email" id="email" title="{{ucwords(__('vintari.email'))}}" placeholder="{{ucwords(__('vintari.email'))}}" required/>
                                    <small class="text-danger" id="email_error"></small>
                                </div>
                            </div> 
                        </div>
                    {{-- end email --}}
                    {{-- message --}}
                        <div class="col-sm-5">
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <label class="control-label" >{{ucwords(__('vintar.message'))}}</label>
                                </div>
                                <div class="col-sm-8">
                                    <textarea id="message" name="message" rows="3" cols="50" maxlength="255" class="form-control text-uppercase"></textarea>
                                    <small class="text-danger" id="message_error"></small>
                                </div>
                            </div>
                        </div>
                    {{-- end message --}}
                @endif
                @csrf
                <input type="hidden" name="create" id="create" value={!! json_encode($create_1) !!}>
            </div>
        </div>
    </form>
@endsection

@section('content_headscript')
@endsection

@section('content_tailscript')
    <!-- Datetimepicker -->
        <link href="{{ asset('css/datetimepicker/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" type="text/css" >
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
        var create1 = '';
        @if(!$create)
            loadData();
            @if($show)
                $('.form-control').prop('disabled', true);
                $('.btn-info').prop('disabled', true);
            @endif
        @else
            create1 = {!! json_encode($create_1) !!};
        @endif

        $(document).ready(function () {  
            $('.date-format').datetimepicker({
                useCurrent: true,
                format: 'DD/MM/YYYY',
                minDate: moment().millisecond(0).second(0).minute(0).hour(0),
                allowInputToggle: true,
                widgetPositioning: {
                    horizontal: 'auto',
                    vertical: 'auto'
                }
            });

            $("#positiveOnlyTextBox").inputFilter(function(value) { return /^\d*$/.test(value); });
            $(".positiveOnlyTextBox").inputFilter(function(value) { return /^\d*$/.test(value); });
            $("#bothPositiveNegativeTextBox").inputFilter(function(value) { return /^-?\d*$/.test(value); });
            $("#positiveUpTo500TextBox").inputFilter(function(value) { return /^\d*$/.test(value) && (value === "" || parseInt(value) <= 500); });
            $(".decimalPositiveUpTo4").inputFilter(function(value) { return /^\d*[.,]?\d{0,4}$/.test(value); });
            $(".positiveMin1").inputFilter(function(value) { return /^\d*$/.test(value) && (value === "" || parseInt(value) >= 1); });
            $("#floatingPointTextBox").inputFilter(function(value) { return /^-?\d*[.,]?\d*$/.test(value); });
            $("#hexadecimalTextBox").inputFilter(function(value) { return /^[0-9a-f]*$/i.test(value); });
            $(".alphabetOnly").inputFilter(function(value) { return /^[A-Za-z  0-9]*$/i.test(value); });
            $(".alphabetOnly1").inputFilter(function(value) { return /^[\S]*$/i.test(value); });
            $(".alphabetOnlyName").inputFilter(function(value) { return /^[A-Za-z  ]*$/i.test(value); });
           
            $(".regNumber").inputFilter(function(value) { return /^[a-zA-Z]{0,2}[ ]{1}\d{0,4}[ ]{1}[a-zA-Z]{0,3}$/i.test(value); });
        });

        function loadData() {
            var show    = {!! json_encode($show) !!};
            var edit    = {!! json_encode($edit) !!};
            var create  = {!! json_encode($create) !!};
            var create1 = {!! json_encode($create_1) !!};
            $.ajax({
                method: "POST", // Type of response and matches what we said in the route
                url: '{!! route('vintari.admin.load-data') !!}', // This is the url we gave in the route
                data: {
                    "_token": "{{ csrf_token() }}",
                    "id": "{{ $id }}",
                    "create": create1
                }, // a JSON object to send back
                dataType: "json",
                success: function(data) {
                    if (data.success) {
                        if (data.create == 'BANNER') {

                        } else if (data.create == 'BRAND') {

                        } else if (data.create == 'ABOUT') {

                        } else if (data.create == 'PRODUCT') {

                        } else if (data.create == 'CATEGORY') {

                        } else if (data.create == 'COUNTRY') {

                        } else if (data.create == 'ACTIVITY') {

                        } else if (data.create =='FAQ') {

                        } else if (data.create == 'CONTACT') {

                        }
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail

                }
            });
        }

        function showConfirmTest()
        {
            $(".form-control").removeClass('is-invalid');
            $("[id*=_error]").hide();
            $("[id*=_error]").html("{{ucfirst(__('please fill out this field'))}}");
            artAllFlashMsgClose();
            confirmTestCallback();
        }

        function confirmTestCallback() {
            artAllFlashMsgClose();
            $("#backBtn").attr("disabled", true);
            $("#saveBtn").attr("disabled", true);
            $('#submitBtn').click();
        }

        $('#submitBtn').click(function(event){
            event.preventDefault();
            $("[id*=_error]").hide();
            $("[id*=_error]").html("{{ucfirst(__('please fill out this field'))}}");
            var isError = false;
            $( '#form-add' ).find( 'select, textarea, input' ).each(function(){
                if( ! $( this ).prop( 'required' )){

                } else {
                    if ( ! $( this ).val() ) {
                        isError = true;
                        name = $( this ).attr( 'name' );
                        $(this).addClass("is-invalid");
                        $("#" + name + "_error").show();
                        console.log($("#" + name + "_error"));
                        // fail_log += name + " is required \n";
                    }
                }
            });
            if(isError)
            {
                // artLoadingDialogClose();
                return false;
            }
            
            artConfirmationDo('{{ucwords(__('confirmation'))}}', '{{ucfirst(__('vintar.save_data'))}}', function(){
                artConfirmationClose();
                saveData();
            });
        });

        // saveData create atau edit
        function saveData() {
            @if($create)
                var fd = new FormData(this.form);
                artLoadingDialongDo("loading", function() {
                    $.ajax({
                        method: "POST", // Type of response and matches what we said in the route
                        url: '{!! route('vintari.admin.store') !!}',
                        data: fd,
                        processData: false,
                        contentType: false,
                        success: function(data) { // What to do if we succeed
                            artLoadingDialogClose();
                            $("#backBtn").prop("disabled", false);
                            $("#saveBtn").prop("disabled", false);
                            if (data.error) {
                                artCreateFlashMsg(data.message, 'error', true);
                            }

                            if (data.success) {
                                artAllFlashMsgClose();
                                setTimeout(function(){ window.location.href = '{!! route('vintari.admin.index') !!}'; }, 1);
                            }
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            artLoadingDialogClose();
                            $("#backBtn").prop("disabled", false);
                            $("#saveBtn").prop("disabled", false);
                            artCreateFlashMsg("{{ucfirst(__('vintari.error_save'))}}",'error',true);
                        }
                    });
                });
            @elseif($edit)
                var fd = new FormData(this.form);
                artLoadingDialongDo("loading", function() {
                    $.ajax({
                        method: "PATCH", // Type of response and matches what we said in the route
                        url: '{!! route('vintari.admin.update')!!}, $id',
                        data: fd,
                        processData: false,
                        contentType: false,
                        success: function(data) { // What to do if we succeed
                            artLoadingDialogClose();
                            $("#backBtn").prop("disabled", false);
                            $("#saveBtn").prop("disabled", false);
                            if (data.error) {
                                artCreateFlashMsg(data.message, 'error', true);
                            }

                            if (data.success) {
                                artAllFlashMsgClose();
                                setTimeout(function(){ window.location.href = '{!! route('vintari.admin.index') !!}'; }, 1);
                            }
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            artLoadingDialogClose();
                            $("#backBtn").prop("disabled", false);
                            $("#saveBtn").prop("disabled", false);
                            artCreateFlashMsg("{{ucfirst(__('vintari.error_save'))}}",'error',true);
                        }
                    });
                });
            @endif
        }
    </script>
@endsection
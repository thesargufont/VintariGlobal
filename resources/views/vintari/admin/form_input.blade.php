@extends('layouts.layout1')

@section('content')
    <form action="{{route("admin.vintari.store")}}" id="form-add" enctype="multipart/form-data" method="POST">
        {{csrf_field()}}
        <div class="card">
            <input type="hidden" name="_method" value="POST" />
            <div class="card-header">
                <div class="form-group">
                    <button onclick="location.replace('{{ route('admin.vintari.index') }}');" title="back to previous page" type='button' class="btn btn-secondary"><i class="fa fa-arrow-left"></i> {{__('back')}}</button>
                    @if (!$show)
                        <button title="save" id="submitBtn" type='submit' class="btn btn-simpan btn-primary" hidden><i class="fa fa-save"></i></button>
                        <button title="save" id="saveBtn" type='button' onclick="showConfirmTest();" class="btn btn-primary"><i class="fa fa-save"></i> {{ucwords(__('save'))}}</button>
                    @endif
                </div>
            </div>
            <div class="card-body">
                @if($create_1 == 'BANNER')
                    {{-- header --}}
                        {{-- ID --}}
                            <div class="col-sm-5">
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label class="control-label" >{{ucwords(__('vintari.header'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control " maxlength="50" type="text" name="header" id="header" title="{{ucwords(__('vintari.header'))}}" placeholder="{{ucwords(__('vintari.header'))}}" required/>
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
                                        <input class="form-control " maxlength="50" type="text" name="header_en" id="header_en" title="{{ucwords(__('vintari.header_en'))}}" placeholder="{{ucwords(__('vintari.header_en'))}}" required/>
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
                                        <label class="control-label" >{{ucwords(__('vintari.desc1'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea id="desc1" name="desc1" rows="3" cols="50" maxlength="100" class="form-control " required></textarea>
                                        <small class="text-danger" id="desc1_error"></small>
                                    </div>
                                </div>
                            </div>
                        {{-- end desc1 --}}
                        {{-- desc1 en --}}
                            <div class="col-sm-5">
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label class="control-label" >{{ucwords(__('vintari.desc1_en'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea id="desc1_en" name="desc1_en" rows="3" cols="50" maxlength="100" class="form-control " required></textarea>
                                        <small class="text-danger" id="desc1_en_error"></small>
                                    </div>
                                </div>
                            </div>
                        {{-- end desc1 en --}}
                        {{-- desc2 --}}
                            <div class="col-sm-5">
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label class="control-label" >{{ucwords(__('vintari.desc2'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea id="desc2" name="desc2" rows="3" cols="50" maxlength="100" class="form-control "></textarea>
                                        <small class="text-danger" id="desc2_error"></small>
                                    </div>
                                </div>
                            </div>
                        {{-- end desc2 --}}
                        {{-- desc2 en --}}
                            <div class="col-sm-5">
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label class="control-label" >{{ucwords(__('vintari.desc2_en'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea id="desc2_en" name="desc2_en" rows="3" cols="50" maxlength="100" class="form-control "></textarea>
                                        <small class="text-danger" id="desc2_en_error"></small>
                                    </div>
                                </div>
                            </div>
                        {{-- end desc2 en --}}
                    {{-- end description --}}
                    {{-- upload --}}
                        <div class="col-sm-5">
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <label class="control-label" >{{ucwords(__('vintari.file'))}}</label>
                                </div>
                                <div class="col-sm-8">
                                    @if(!$create)
                                        <input class="btn btn-info" type="button" id="output_image" onclick="PreviewImage();" value="Preview Image"/>
                                    @endif
                                    @if($create)
                                        <div class="custom-file">
                                            <span class="btn btn-secondary fileinput-button" id="fileinputbtn">
                                                <i class="fa fa-photo" ></i>
                                                <span>{{__('Pilih file Gambar')}}</span>
                                                <!-- The file input field used as target for the file upload widget -->
                                                <input id="fileupload" type="file" name="fileupload" onclick="uploadPhoto();">
                                            </span>
                                            {{-- <small class="text-danger"> * file size max 2MB</small> --}}
                                           
                                            <!-- The global progress bar -->
                                            <div id="progress" class="progress">
                                                <div class="progress-bar progress-bar-success"></div>
                                            </div>
                                            <!-- The container for the uploaded files -->
                                            <ul id="files" class="files list-group list-group-flush"></ul>
                                            <input id="image_path" type="text" name="image_path" hidden>
                                        </div>                       
                                    @endif
                                </div>
                            </div>
                        </div>
                    {{-- end upload --}}
                @endif
                @if($create_1 == 'BRAND')
                    {{-- name --}}
                        <div class="col-sm-5">
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <label class="control-label" >{{ucwords(__('vintari.name'))}}</label>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control " maxlength="50" type="text" name="name" id="name" title="{{ucwords(__('vintari.name'))}}" placeholder="{{ucwords(__('vintari.name'))}}" required/>
                                    <small class="text-danger" id="name_error"></small>
                                </div>
                            </div> 
                        </div>
                    {{-- end name --}}
                    {{-- upload --}}
                        <div class="col-sm-5">
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <label class="control-label" >{{ucwords(__('vintari.file'))}}</label>
                                </div>
                                <div class="col-sm-8">
                                    @if(!$create)
                                        <input class="btn btn-info" type="button" id="output_image" onclick="PreviewImage();" value="Preview Image"/>
                                    @endif
                                    @if($create)
                                        <div class="custom-file">
                                            <span class="btn btn-secondary fileinput-button" id="fileinputbtn">
                                                <i class="fa fa-photo" ></i>
                                                <span>{{__('Pilih file Gambar')}}</span>
                                                <!-- The file input field used as target for the file upload widget -->
                                                <input id="fileupload" type="file" name="fileupload" onclick="uploadPhoto();">
                                            </span>
                                            {{-- <small class="text-danger"> * file size max 2MB</small> --}}
                                           
                                            <!-- The global progress bar -->
                                            <div id="progress" class="progress">
                                                <div class="progress-bar progress-bar-success"></div>
                                            </div>
                                            <!-- The container for the uploaded files -->
                                            <ul id="files" class="files list-group list-group-flush"></ul>
                                            <input id="image_path" type="text" name="image_path" hidden>
                                        </div>                       
                                    @endif
                                </div>
                            </div>
                        </div>
                    {{-- end upload --}}
                @endif
                @if($create_1 == 'ABOUT')
                    {{-- history --}}
                        {{-- ID --}}
                            <div class="col-sm-5">
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label class="control-label" >{{ucwords(__('vintari.history'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea id="history" name="history" rows="3" cols="50" class="form-control " required></textarea>
                                        <small class="text-danger" id="history_error"></small>
                                    </div>
                                </div>
                            </div>
                        {{-- end ID --}}
                        {{-- EN --}}
                            <div class="col-sm-5">
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label class="control-label" >{{ucwords(__('vintari.history_en'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea id="history_en" name="history_en" rows="3" cols="50"  class="form-control " required></textarea>
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
                                        <label class="control-label" >{{ucwords(__('vintari.visi'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea id="visi" name="visi" rows="3" cols="50" class="form-control " required></textarea>
                                        <small class="text-danger" id="visi_error"></small>
                                    </div>
                                </div>
                            </div>
                        {{-- END ID --}}
                        {{-- EN --}}
                            <div class="col-sm-5">
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label class="control-label" >{{ucwords(__('vintari.visi_en'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea id="visi_en" name="visi_en" rows="3" cols="50" class="form-control " required></textarea>
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
                                        <label class="control-label" >{{ucwords(__('vintari.misi'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea id="misi" name="misi" rows="3" cols="50" class="form-control " required></textarea>
                                        <small class="text-danger" id="misi_error"></small>
                                    </div>
                                </div>
                            </div>
                        {{-- END ID --}}
                        {{-- EN --}}
                            <div class="col-sm-5">
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label class="control-label" >{{ucwords(__('vintari.misi_en'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea id="misi_en" name="misi_en" rows="3" cols="50" class="form-control " required></textarea>
                                        <small class="text-danger" id="misi_en_error"></small>
                                    </div>
                                </div>
                            </div>
                        {{-- END EN --}}
                    {{-- end misi --}}
                    {{-- upload --}}
                        <div class="col-sm-5">
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <label class="control-label" >{{ucwords(__('vintari.file'))}}</label>
                                </div>
                                <div class="col-sm-8">
                                    @if(!$create)
                                        <input class="btn btn-info" type="button" id="output_image" onclick="PreviewImage();" value="Preview Image"/>
                                    @endif
                                    @if($create)
                                        <div class="custom-file">
                                            <span class="btn btn-secondary fileinput-button" id="fileinputbtn">
                                                <i class="fa fa-photo" ></i>
                                                <span>{{__('Pilih file Gambar')}}</span>
                                                <!-- The file input field used as target for the file upload widget -->
                                                <input id="fileupload" type="file" name="fileupload" onclick="uploadPhoto();">
                                            </span>
                                            {{-- <small class="text-danger"> * file size max 2MB</small> --}}
                                           
                                            <!-- The global progress bar -->
                                            <div id="progress" class="progress">
                                                <div class="progress-bar progress-bar-success"></div>
                                            </div>
                                            <!-- The container for the uploaded files -->
                                            <ul id="files" class="files list-group list-group-flush"></ul>
                                            <input id="image_path" type="text" name="image_path" hidden>
                                        </div>                       
                                    @endif
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
                                    <input class="form-control" maxlength="255" type="text" name="url_alibaba" id="url_alibaba" title="{{ucwords(__('vintari.url_alibaba'))}}" placeholder="{{ucwords(__('vintari.url_alibaba'))}}">
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
                                    <input class="form-control  positiveOnlyTextBox" maxlength="20" type="text" name="telpon" id="telpon" title="{{ucwords(__('vintari.telpon'))}}" placeholder="{{ucwords(__('vintari.telpon'))}}" required>
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
                                    <input class="form-control " maxlength="50" type="text" name="email" id="email" title="{{ucwords(__('vintari.email'))}}" placeholder="{{ucwords(__('vintari.email'))}}" required>
                                    <small class="text-danger" id="email_error"></small>
                                </div>
                            </div> 
                        </div>
                    {{-- end email --}}
                    
                    {{-- product sold --}}
                        <div class="col-sm-5">
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <label class="control-label" >{{ucwords(__('vintari.product_sold'))}}</label>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control  positiveOnlyTextBox"  type="text" name="product_sold" id="product_sold" title="{{ucwords(__('vintari.product_sold'))}}" placeholder="{{ucwords(__('vintari.product_sold'))}}" required>
                                    <small class="text-danger" id="product_sold_error"></small>
                                </div>
                            </div> 
                        </div>
                    {{-- end product sold --}}

                    {{-- countries sold --}}
                        <div class="col-sm-5">
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <label class="control-label" >{{ucwords(__('vintari.countries_sold'))}}</label>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control  positiveOnlyTextBox" type="text" name="countries_sold" id="countries_sold" title="{{ucwords(__('vintari.countries_sold'))}}" placeholder="{{ucwords(__('vintari.countries_sold'))}}" required>
                                    <small class="text-danger" id="countries_sold_error"></small>
                                </div>
                            </div> 
                        </div>
                    {{-- end countries sold --}}

                    {{-- client --}}
                        <div class="col-sm-5">
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <label class="control-label" >{{ucwords(__('vintari.client'))}}</label>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control  positiveOnlyTextBox" maxlength="20" type="text" name="client" id="client" title="{{ucwords(__('vintari.client'))}}" placeholder="{{ucwords(__('vintari.client'))}}" required>
                                    <small class="text-danger" id="client_error"></small>
                                </div>
                            </div> 
                        </div>
                    {{-- end client --}}
                @endif
                @if($create_1 == 'PRODUCT')
                    {{-- category --}}
                        <div class="col-sm-5">
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <label class="control-label">{{ucwords(__('vintari.category'))}} </label>
                                </div>
                                <div class="col-sm-8">
                                    <select id="category" name="category" class="form-control" required>
                                        <option value=""></option>
                                    </select>
                                    <small class="text-danger" id="category_error"></small>
                                </div>
                            </div>
                        </div>
                    {{-- end category --}}
                    {{-- country --}}
                        <div class="col-sm-5">
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <label class="control-label">{{ucwords(__('vintari.country'))}} </label>
                                </div>
                                <div class="col-sm-8">
                                    <select id="country" name="country" class="form-control" required>
                                        <option value=""></option>
                                    </select>
                                    <small class="text-danger" id="country_error"></small>
                                </div>
                            </div>
                        </div>
                    {{-- end country --}}
                    {{-- title --}}
                        <div class="col-sm-5">
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <label class="control-label" >{{ucwords(__('vintari.title'))}}</label>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control " maxlength="50" type="text" name="title" id="title" title="{{ucwords(__('vintari.title'))}}" placeholder="{{ucwords(__('vintari.title'))}}" required/>
                                    <small class="text-danger" id="title_error"></small>
                                </div>
                            </div> 
                        </div>
                    {{-- end title --}}
                    {{-- description --}}
                        {{-- ID --}}
                            <div class="col-sm-5">
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label class="control-label" >{{ucwords(__('vintari.description'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea id="description" name="description" rows="3" cols="50" maxlength="100" class="form-control" required></textarea>
                                        <small class="text-danger" id="description_error"></small>
                                    </div>
                                </div>
                            </div>
                        {{-- END ID --}}
                        {{-- EN --}}
                            <div class="col-sm-5">
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label class="control-label" >{{ucwords(__('vintari.description_en'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea id="description_en" name="description_en" rows="3" cols="50" maxlength="100" class="form-control" required></textarea>
                                        <small class="text-danger" id="description_en_error"></small>
                                    </div>
                                </div>
                            </div>
                        {{-- END EN --}}
                    {{-- end description --}}
                    {{-- best selling --}}
                    <div class="col-sm-5">
                        <div class="row mb-3">
                            <div class="col-sm-4">
                                <label class="control-label" >{{ucwords(__('vintari.best_selling'))}}</label>
                            </div>
                            <div class="col-sm-8">
                                <input class="form-check-input" type="checkbox" name="best_selling" id="best_selling">
                            </div>
                        </div>
                    </div>
                    
                    {{-- end best selling --}}
                    {{-- upload --}}
                        <div class="col-sm-5">
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <label class="control-label" >{{ucwords(__('vintari.file'))}}</label>
                                </div>
                                <div class="col-sm-8">
                                    @if(!$create)
                                        <input class="btn btn-info" type="button" id="output_image" onclick="PreviewImage();" value="Preview Image"/>
                                    @endif
                                    @if($create)
                                        <div class="custom-file">
                                            <span class="btn btn-secondary fileinput-button" id="fileinputbtn">
                                                <i class="fa fa-photo" ></i>
                                                <span>{{__('Pilih file Gambar')}}</span>
                                                <!-- The file input field used as target for the file upload widget -->
                                                <input id="fileupload" type="file" name="fileupload[]" onclick="uploadPhoto();">
                                            </span>
                                            {{-- <small class="text-danger"> * file size max 2MB</small> --}}
                                        
                                            <!-- The global progress bar -->
                                            <div id="progress" class="progress">
                                                <div class="progress-bar progress-bar-success"></div>
                                            </div>
                                            <!-- The container for the uploaded files -->
                                            <ul id="files" class="files list-group list-group-flush"></ul>
                                            <input id="image_path" type="text" name="image_path" hidden>
                                            <input id="image_path1" type="text" name="image_path1" hidden>
                                            <input id="image_path2" type="text" name="image_path2" hidden>
                                            <input id="image_path3" type="text" name="image_path3" hidden>
                                            <input id="image_path4" type="text" name="image_path4" hidden>
                                        </div>                       
                                    @endif
                                </div>
                            </div>
                        </div>
                    {{-- end upload --}}
                @endif
                @if($create_1 == 'CATEGORY')
                    {{-- name --}}
                        {{-- ID --}}
                            <div class="col-sm-5">
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label class="control-label" >{{ucwords(__('vintari.name'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control" maxlength="50" type="text" name="name" id="name" title="{{ucwords(__('vintari.name'))}}" placeholder="{{ucwords(__('vintari.name'))}}" required/>
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
                                        <input class="form-control" maxlength="50" type="text" name="name_en" id="name_en" title="{{ucwords(__('vintari.name_en'))}}" placeholder="{{ucwords(__('vintari.name_en'))}}" required/>
                                        <small class="text-danger" id="name_en_error"></small>
                                    </div>
                                </div> 
                            </div>
                        {{-- END EN --}}
                    {{-- end name --}}
                @endif
                @if($create_1 == 'COUNTRY')
                    {{-- country --}}
                        <div class="col-sm-5">
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <label class="control-label" >{{ucwords(__('vintari.country'))}}</label>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" maxlength="50" type="text" name="country" id="country" title="{{ucwords(__('vintari.country'))}}" placeholder="{{ucwords(__('vintari.country'))}}" required/>
                                    <small class="text-danger" id="country_error"></small>
                                </div>
                            </div> 
                        </div>
                    {{-- end country --}}
                    {{-- upload --}}
                        <div class="col-sm-5">
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <label class="control-label" >{{ucwords(__('vintari.file'))}}</label>
                                </div>
                                <div class="col-sm-8">
                                    @if(!$create)
                                        <input class="btn btn-info" type="button" id="output_image" onclick="PreviewImage();" value="Preview Image"/>
                                    @endif
                                    @if($create)
                                        <div class="custom-file">
                                            <span class="btn btn-secondary fileinput-button" id="fileinputbtn">
                                                <i class="fa fa-photo" ></i>
                                                <span>{{__('Pilih file Gambar')}}</span>
                                                <!-- The file input field used as target for the file upload widget -->
                                                <input id="fileupload" type="file" name="fileupload" onclick="uploadPhoto();">
                                            </span>
                                            {{-- <small class="text-danger"> * file size max 2MB</small> --}}
                                           
                                            <!-- The global progress bar -->
                                            <div id="progress" class="progress">
                                                <div class="progress-bar progress-bar-success"></div>
                                            </div>
                                            <!-- The container for the uploaded files -->
                                            <ul id="files" class="files list-group list-group-flush"></ul>
                                            <input id="image_path" type="text" name="image_path" hidden>
                                        </div>                       
                                    @endif
                                </div>
                            </div>
                        </div>
                    {{-- end upload --}}
                @endif
                @if($create_1 == 'ACTIVITY')
                    {{-- Title --}}
                        {{-- ID --}}
                            <div class="col-sm-5">
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label class="control-label" >{{ucwords(__('vintari.title'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control " maxlength="50" type="text" name="title" id="title" title="{{ucwords(__('vintari.title'))}}" placeholder="{{ucwords(__('vintari.title'))}}" required/>
                                        <small class="text-danger" id="title_error"></small>
                                    </div>
                                </div> 
                            </div>
                        {{-- END ID --}}
                        {{-- EN --}}
                            <div class="col-sm-5">
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label class="control-label" >{{ucwords(__('vintari.title_en'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control " maxlength="50" type="text" name="title_en" id="title_en" title_en="{{ucwords(__('vintari.title_en'))}}" placeholder="{{ucwords(__('vintari.title_en'))}}" required/>
                                        <small class="text-danger" id="title_en_error"></small>
                                    </div>
                                </div> 
                            </div>
                        {{-- END EN --}}
                    {{-- END Title --}}
                    {{-- Article --}}
                            {{-- ID --}}
                                <div class="col-sm-5">
                                    <div class="row mb-3">
                                        <div class="col-sm-4">
                                            <label class="control-label" >{{ucwords(__('vintari.articles'))}}</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <textarea id="articles" name="articles" rows="3" cols="50" maxlength="100" class="form-control " required></textarea>
                                            <small class="text-danger" id="articles_error"></small>
                                        </div>
                                    </div>
                                </div>
                            {{-- END ID --}}
                            {{-- EN --}}
                                <div class="col-sm-5">
                                    <div class="row mb-3">
                                        <div class="col-sm-4">
                                            <label class="control-label" >{{ucwords(__('vintari.articles_en'))}}</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <textarea id="articles_en" name="articles_en" rows="3" cols="50" maxlength="100" class="form-control " required></textarea>
                                            <small class="text-danger" id="articles_en_error"></small>
                                        </div>
                                    </div>
                                </div>
                            {{-- END EN --}}
                    {{-- END Article --}}
                    {{-- upload --}}
                        <div class="col-sm-5">
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <label class="control-label" >{{ucwords(__('vintari.file'))}}</label>
                                </div>
                                <div class="col-sm-8">
                                    @if(!$create)
                                        <input class="btn btn-info" type="button" id="output_image" onclick="PreviewImage();" value="Preview Image"/>
                                    @endif
                                    @if($create)
                                        <div class="custom-file">
                                            <span class="btn btn-secondary fileinput-button" id="fileinputbtn">
                                                <i class="fa fa-photo" ></i>
                                                <span>{{__('Pilih file Gambar')}}</span>
                                                <!-- The file input field used as target for the file upload widget -->
                                                <input id="fileupload" type="file" name="fileupload[]" onclick="uploadPhoto();">
                                            </span>
                                            {{-- <small class="text-danger"> * file size max 2MB</small> --}}
                                        
                                            <!-- The global progress bar -->
                                            <div id="progress" class="progress">
                                                <div class="progress-bar progress-bar-success"></div>
                                            </div>
                                            <!-- The container for the uploaded files -->
                                            <ul id="files" class="files list-group list-group-flush"></ul>
                                            <input id="image_path" type="text" name="image_path" hidden>
                                            <input id="image_path1" type="text" name="image_path1" hidden>
                                            <input id="image_path2" type="text" name="image_path2" hidden>
                                        </div>                       
                                    @endif
                                </div>
                            </div>
                        </div>
                    {{-- end upload --}}
                @endif
                @if($create_1 == 'FAQ')
                    {{-- question --}}
                        {{-- ID --}}
                            <div class="col-sm-5">
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label class="control-label" >{{ucwords(__('vintari.question'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea id="question" name="question" rows="3" cols="50" maxlength="50" class="form-control "></textarea>
                                        <small class="text-danger" id="question_error"></small>
                                    </div>
                                </div>
                            </div>
                        {{-- END ID --}}
                        {{-- EN --}}
                            <div class="col-sm-5">
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label class="control-label" >{{ucwords(__('vintari.question_en'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea id="question_en" name="question_en" rows="3" cols="50" maxlength="50" class="form-control "></textarea>
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
                                        <label class="control-label" >{{ucwords(__('vintari.answer'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea id="answer" name="answer" rows="3" cols="50" maxlength="255" class="form-control "></textarea>
                                        <small class="text-danger" id="answer_error"></small>
                                    </div>
                                </div>
                            </div>
                        {{-- END ID --}}
                        {{-- EN --}}
                            <div class="col-sm-5">
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label class="control-label" >{{ucwords(__('vintari.answer_en'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea id="answer_en" name="answer_en" rows="3" cols="50" maxlength="255" class="form-control "></textarea>
                                        <small class="text-danger" id="answer_en_error"></small>
                                    </div>
                                </div>
                            </div>
                        {{-- END ID --}}
                    {{-- end answer --}}
                @endif
                @if($create_1 == 'CONTACT')
                    {{-- name --}}
                        <div class="col-sm-5">
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <label class="control-label" >{{ucwords(__('vintari.name'))}}</label>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control " maxlength="50" type="text" name="name" id="name" title="{{ucwords(__('vintari.name'))}}" placeholder="{{ucwords(__('vintari.name'))}}" required/>
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
                                    <input class="form-control " maxlength="100" type="text" name="email" id="email" title="{{ucwords(__('vintari.email'))}}" placeholder="{{ucwords(__('vintari.email'))}}" required/>
                                    <small class="text-danger" id="email_error"></small>
                                </div>
                            </div> 
                        </div>
                    {{-- end email --}}
                    {{-- message --}}
                        <div class="col-sm-5">
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <label class="control-label" >{{ucwords(__('vintari.message'))}}</label>
                                </div>
                                <div class="col-sm-8">
                                    <textarea id="message" name="message" rows="3" cols="50" maxlength="255" class="form-control "></textarea>
                                    <small class="text-danger" id="message_error"></small>
                                </div>
                            </div>
                        </div>
                    {{-- end message --}}
                @endif
                @if($create_1 == 'USER')
                    {{-- name --}}
                        <div class="col-sm-5">
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <label class="control-label" >{{ucwords(__('vintari.name'))}}</label>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" maxlength="50" type="text" name="name" id="name" title="{{ucwords(__('vintari.name'))}}" placeholder="{{ucwords(__('vintari.name'))}}" required/>
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
                                    <input class="form-control" maxlength="50" type="text" name="email" id="email" title="{{ucwords(__('vintari.email'))}}" placeholder="{{ucwords(__('vintari.email'))}}" required/>
                                    <small class="text-danger" id="email_error"></small>
                                </div>
                            </div> 
                        </div>
                    {{-- end email --}}
                    {{-- password --}}
                        <div class="col-sm-5">
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <label class="control-label" >{{ucwords(__('vintari.password'))}}</label>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" maxlength="50" type="password" name="password" id="password" title="{{ucwords(__('vintari.password'))}}" placeholder="{{ucwords(__('vintari.password'))}}" required/>
                                    <small class="text-danger" id="password_error"></small>
                                </div>
                            </div> 
                        </div>
                    {{-- end password --}}
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
        <script src="{{asset('js/jQuery-File-Upload-10.7.0/js/vendor/jquery.ui.widget.js')}}"></script>
        <script src="{{asset('js/jQuery-File-Upload-10.7.0/js/jquery.fileupload.js')}}"></script>
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
        var filename_array = [];
        var fileName = '';
        var preview = '';   
        var country = '';
        var category = ''; 
        @if(!$create)
            loadData();
            @if($show)
                $('.form-control').prop('disabled', true);
                $('.btn-info').prop('disabled', true);
            @endif
            @if($edit)
                @if($create_1 == 'PRODUCT')
                    getSelectOption();
                @endif
            @endif
        @else
            @if($create_1 == 'PRODUCT')
                getSelectOption();
            @endif
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
                url: '{!! route('admin.vintari.load-data') !!}', // This is the url we gave in the route
                data: {
                    "_token": "{{ csrf_token() }}",
                    "id": "{{ $id }}",
                    "create": create1
                }, // a JSON object to send back
                dataType: "json",
                success: function(data) {
                    if (data.success) {
                        if (data.create == 'BANNER') {
                            $('#header').val(data.header);
                            $('#header_en').val(data.header_en);
                            $('#desc1').html(data.desc1);
                            $('#desc1_en').html(data.desc1_en);
                            $('#desc2').html(data.desc2);
                            $('#desc2_en').html(data.desc2_en);
                            preview = data.image_path;
                            if (preview != '') {
                                $('#output_image').prop('disabled', false);
                            }
                        } else if (data.create == 'BRAND') {
                            $('#name').val(data.name);
                            preview = data.image_path;
                            if (preview != '') {
                                $('#output_image').prop('disabled', false);
                            }
                        } else if (data.create == 'ABOUT') {
                            $('#history').html(data.history);
                            $('#history_en').html(data.history_en);
                            $('#visi').html(data.visi);
                            $('#visi_en').html(data.visi_en);
                            $('#misi').html(data.misi);
                            $('#misi_en').html(data.misi_en);
                            $('#url_alibaba').val(data.url_alibaba);
                            $('#telpon').val(data.telpon);
                            $('#email').val(data.email);
                            $('#url_alibaba').val(data.url_alibaba);
                            $('#product_sold').val(data.product_sold);
                            $('#countries_sold').val(data.countries_sold);
                            $('#client').val(data.client);
                            preview = data.image_path;
                            if (preview != '') {
                                $('#output_image').prop('disabled', false);
                            }
                        } else if (data.create == 'PRODUCT') {
                            // $('#category').html(data.category);
                            // $('#country').html(data.country);
                            category = data.category;
                            country = data.country;
                            getSelectOption();
                            $('#title').val(data.title);
                            if (data.best_selling == 1) {
                                $('#best_selling').prop('checked', true);
                            }
                            $('#description').val(data.description);
                            $('#description_en').val(data.description_en);
                            preview = new Array(data.image_path)
                            if (preview != '') {
                                $('#output_image').prop('disabled', false);
                            }
                        } else if (data.create == 'CATEGORY') {
                            $('#name').val(data.name);
                            $('#name_en').val(data.name_en);
                        } else if (data.create == 'COUNTRY') {
                            $('#country').val(data.name);
                            preview = data.image_path;
                            if (preview != '') {
                                $('#output_image').prop('disabled', false);
                            }
                        } else if (data.create == 'ACTIVITY') {
                            $('#title').val(data.title);
                            $('#title_en').val(data.title_en);
                            $('#articles_en').val(data.articles_en);
                            $('#articles_en').val(data.articles_en);
                            
                            preview = new Array(data.image_path)
                            if (preview != '') {
                                $('#output_image').prop('disabled', false);
                            }
                        } else if (data.create =='FAQ') {
                            $('#question').val(data.question);
                            $('#question_en').val(data.question_en);
                            $('#answer').val(data.answer);
                            $('#answer_en').val(data.answer_en);
                        } else if (data.create == 'CONTACT') {
                            $('#email').val(data.email);
                            $('#message').val(data.message);
                            $('#name').val(data.name);
                        }
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail

                }
            });
        }

        function getSelectOption() {
            $.ajax({
                method: "POST", // Type of response and matches what we said in the route
                url: '{!! route('admin.vintari.get-select-option') !!}', // This is the url we gave in the route
                data: {
                    "_token": "{{ csrf_token() }}",
                    "country" : country,
                    "category" : category
                }, // a JSON object to send back
                dataType: "json",
                success: function(data) {
                    if (data.success) {
                        $('#category').html(data.category);
                        $('#country').html(data.country);
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
                $("#backBtn").attr("disabled", false);
                $("#saveBtn").attr("disabled", false);
                return false;
            }
            $("#backBtn").prop("disabled", false);
            $("#saveBtn").prop("disabled", false);
            artConfirmationDo('{{ucwords(__('vintari.confirmation'))}}', '{{ucfirst(__('vintari.save_data'))}}', function(){
                artConfirmationClose();
                saveData();
            });
        });
        
        // saveData create atau edit
        function saveData() {
            var url = $('#form-add').attr("action");
            @if($create)
                artLoadingDialogDo('Loading...', function(){
                    $.ajax({
                        type: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{!!csrf_token()!!}'
                        },
                        url : '{!! route('admin.vintari.store') !!}',
                        dataType:"json",
                        @if($create_1 == 'CATEGORY')
                            data: {
                                'name'      : $('#name').val(),
                                'name_en'   : $('#name_en').val(),
                                'create'    : {!! json_encode($create_1) !!}
                            },
                        @endif
                        @if($create_1 == 'BANNER')
                            data: {
                                'header'    : $('#header').val(),
                                'header_en' : $('#header_en').val(),
                                'desc1'     : $('#desc1').val(),
                                'desc1_en'  : $('#desc1_en').val(),
                                'desc2'     : $('#desc2').val(),
                                'desc2_en'  : $('#desc2_en').val(),
                                'image_path': $('#image_path').val(),
                                'create'    : {!! json_encode($create_1) !!}
                            },
                        @endif
                        @if($create_1 == 'BRAND')
                            data: {
                                'name'    : $('#name').val(),
                                'image_path': $('#image_path').val(),
                                'create'  : {!! json_encode($create_1) !!}
                            },
                        @endif
                        @if($create_1 == 'ABOUT')
                            data: {
                                'history'       : $('#history').val(),
                                'history_en'    : $('#history_en').val(),
                                'visi'          : $('#visi').val(),
                                'visi_en'       : $('#visi_en').val(),
                                'misi'          : $('#misi').val(),
                                'misi_en'       : $('#misi_en').val(),
                                'image_path': $('#image_path').val(),
                                'url_alibaba'   : $('#url_alibaba').val(),
                                'telpon'        : $('#telpon').val(),
                                'email'         : $('#email').val(),
                                'product_sold'  : $('#product_sold').val(),
                                'countries_sold': $('#countries_sold').val(),
                                'client'        : $('#client').val(),
                                'create'        : {!! json_encode($create_1) !!}
                            },
                        @endif
                        @if($create_1 == 'COUNTRY')
                            data: {
                                'name'    : $('#country').val(),
                                'image_path': $('#image_path').val(),
                                'create'  : {!! json_encode($create_1) !!}
                            },
                        @endif
                        @if($create_1 == 'FAQ')
                            data: {
                                'question'      : $('#question').val(),
                                'question_en'   : $('#question_en').val(),
                                'answer'        : $('#answer').val(),
                                'answer_en'     : $('#answer_en').val(),
                                'create'        : {!! json_encode($create_1) !!}
                            },
                        @endif
                        @if($create_1 == 'CONTACT')
                            data: {
                                'name'      : $('#name').val(),
                                'email'     : $('#email').val(),
                                'message'   : $('#message').val(),
                                'create'    : {!! json_encode($create_1) !!}
                            },
                        @endif
                        @if($create_1 == 'ACTIVITY')
                            data: {
                                'title'         : $('#title').val(),
                                'title_en'      : $('#title_en').val(),
                                'articles'      : $('#articles').val(),
                                'articles_en'   : $('#articles_en').val(),
                                'image_path'    : $('#image_path').val(),
                                'image_path1'   : $('#image_path1').val(),
                                'image_path2'   : $('#image_path2').val(),
                                'create'        : {!! json_encode($create_1) !!}
                            },
                        @endif
                        @if($create_1 == 'PRODUCT')
                            data: {
                                'category'          : $('#category').val(),
                                'country'           : $('#country').val(),
                                'title'             : $('#title').val(),
                                'best_selling'      : $('#best_selling').prop('checked')?1:0,
                                'description'       : $('#description').val(),
                                'description_en'    : $('#description_en').val(),
                                'image_path'        : $('#image_path').val(),
                                'image_path1'       : $('#image_path1').val(),
                                'image_path2'       : $('#image_path2').val(),
                                'image_path3'       : $('#image_path3').val(),
                                'image_path4'       : $('#image_path4').val(),
                                'create'            : {!! json_encode($create_1) !!}
                            },
                        @endif
                        @if($create_1 == 'USER')
                            data: {
                                'name'      : $('#name').val(),
                                'email'     : $('#email').val(),
                                'password'  : $('#password').val(),
                                'create'    : {!! json_encode($create_1) !!}
                            },
                        @endif
                        success: function(data) { // What to do if we succeed
                            artLoadingDialogClose();
                            $("#backBtn").prop("disabled", false);
                            $("#saveBtn").prop("disabled", false);
                            if (data.error) {
                                artCreateFlashMsg(data.message, 'error', true);
                            }

                            if (data.success) {
                                artAllFlashMsgClose();
                                setTimeout(function(){ window.location.href = '{!! route('admin.vintari.index') !!}'; }, 1);
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
                artLoadingDialogDo('Loading...', function(){
                    $.ajax({
                        method: "PATCH", // Type of response and matches what we said in the route
                        headers: {
                            'X-CSRF-TOKEN': '{!!csrf_token()!!}'
                        },
                        url: "{{ url('/admin/vintari') }}/"+"{{ $id }}",
                        dataType:"json",
                        @if($create_1 == 'CATEGORY')
                            data: {
                                'name'      : $('#name').val(),
                                'name_en'   : $('#name_en').val(),
                                'create'    : {!! json_encode($create_1) !!}
                            },
                        @endif
                        @if($create_1 == 'BANNER')
                            data: {
                                'header'    : $('#header').val(),
                                'header_en' : $('#header_en').val(),
                                'desc1'     : $('#desc1').val(),
                                'desc1_en'  : $('#desc1_en').val(),
                                'desc2'     : $('#desc2').val(),
                                'desc2_en'  : $('#desc2_en').val(),
                                'create'    : {!! json_encode($create_1) !!}
                            },
                        @endif
                        @if($create_1 == 'BRAND')
                            data: {
                                'name'    : $('#name').val(),
                                'create'  : {!! json_encode($create_1) !!}
                            },
                        @endif
                        @if($create_1 == 'ABOUT')
                            data: {
                                'history'       : $('#history').val(),
                                'history_en'    : $('#history_en').val(),
                                'visi'          : $('#visi').val(),
                                'visi_en'       : $('#visi_en').val(),
                                'misi'          : $('#misi').val(),
                                'misi_en'       : $('#misi_en').val(),
                                'url_alibaba'   : $('#url_alibaba').val(),
                                'telpon'        : $('#telpon').val(),
                                'email'         : $('#email').val(),
                                'product_sold'  : $('#product_sold').val(),
                                'countries_sold': $('#countries_sold').val(),
                                'client'        : $('#client').val(),
                                'create'        : {!! json_encode($create_1) !!}
                            },
                        @endif
                        @if($create_1 == 'COUNTRY')
                            data: {
                                'name'    : $('#country').val(),
                                'create'  : {!! json_encode($create_1) !!}
                            },
                        @endif
                        @if($create_1 == 'FAQ')
                            data: {
                                'question'      : $('#question').val(),
                                'question_en'   : $('#question_en').val(),
                                'answer'        : $('#answer').val(),
                                'answer_en'     : $('#answer_en').val(),
                                'create'        : {!! json_encode($create_1) !!}
                            },
                        @endif
                        @if($create_1 == 'CONTACT')
                            data: {
                                'name'      : $('#name').val(),
                                'email'     : $('#email').val(),
                                'message'   : $('#message').val(),
                                'create'    : {!! json_encode($create_1) !!}
                            },
                        @endif
                        @if($create_1 == 'PRODUCT')
                            data: {
                                'category'          : $('#category').val(),
                                'country'           : $('#country').val(),
                                'title'             : $('#title').val(),
                                'best_selling'      : $('#best_selling').prop('checked')?1:0,
                                'description'       : $('#description').val(),
                                'description_en'    : $('#description_en').val(),
                                'image_path'        : $('#image_path').val(),
                                'image_path1'       : $('#image_path1').val(),
                                'image_path2'       : $('#image_path2').val(),
                                'image_path3'       : $('#image_path3').val(),
                                'image_path4'       : $('#image_path4').val(),
                                'create'            : {!! json_encode($create_1) !!}
                            },
                        @endif
                        success: function(data) { // What to do if we succeed
                            artLoadingDialogClose();
                            $("#backBtn").prop("disabled", false);
                            $("#saveBtn").prop("disabled", false);
                            if (data.error) {
                                artCreateFlashMsg(data.message, 'error', true);
                            }

                            if (data.success) {
                                artAllFlashMsgClose();
                                setTimeout(function(){ window.location.href = '{!! route('admin.vintari.index') !!}'; }, 1);
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

        // upload photo
        function uploadPhoto() {
            urlGlobal = "{{url('/admin/vintari/create/upload-photo')}}/"+{!! json_encode($create_1) !!};;
            var html = '';
              
            $('#fileupload').fileupload({
                url: urlGlobal,
                headers: {
                    'X-CSRF-TOKEN': '{!! csrf_token() !!}'
                },
                dataType: 'json',
                add: function (e, data) {
                    artAllFlashMsgClose();
                    if((data._progress.loaded/1048576) >(2)){
                        artCreateFlashMsg('file max 2MB', 'error',true);
                        return false;
                    }
                    upload_error_msg = "";
                    data.files = data.files.filter(function(file) {
                        if ($.inArray(file.name,filename_array) >= 0) { 
                            upload_error_msg = upload_error_msg + file.name+" ";
                            return false; // skip
                        }
                        return true;
                    }).map(function(file) { return file; });

                    if(upload_error_msg!=""){
                        alert("{{__('vintari.upload_failed_exists_in_list_prefix')}}"+upload_error_msg+"{{__('globals/efactureverification.upload_failed_exists_in_list_sufix')}}");
                        return true;
                    }
                    if({!! json_encode($create_1) !!} == 'ACTIVITY' || {!! json_encode($create_1) !!} == 'PRODUCT') {
                        if ({!! json_encode($create_1) !!} == 'ACTIVITY') {
                            if (filename_array.length < 3) {
                                if (data.autoUpload || (data.autoUpload !== false &&
                                    $(this).fileupload('option', 'autoUpload'))) {
                                    data.process().done(function () {
                                        data.submit();
                                    });
                                }
                            } else {
                                artCreateFlashMsg("{{__('vintari.activity_upload_photo_max')}}", 'error', false);
                            }
                        } else {
                            if (filename_array.length < 5) {
                                if (data.autoUpload || (data.autoUpload !== false &&
                                    $(this).fileupload('option', 'autoUpload'))) {
                                    data.process().done(function () {
                                        data.submit();
                                    });
                                }
                            } else {
                                artCreateFlashMsg("{{__('vintari.product_upload_photo_max')}}", 'error', false);
                            }
                        }
                    } else {
                        if (filename_array.length < 1) {
                            if (data.autoUpload || (data.autoUpload !== false &&
                                $(this).fileupload('option', 'autoUpload'))) {
                                data.process().done(function () {
                                    data.submit();
                                });
                            }
                        } else {
                            artCreateFlashMsg("{{__('vintari.upload_photo_max')}}", 'error', false);
                            return false;
                        }
                    }
                },
                done: function (e, data) {
                    var html = '';
                    artAllFlashMsgClose();
                    if((data.total/1048576) > (2)){
                        artCreateFlashMsg('file max 2MB', 'error',true);
                        return false;
                    }
                    if(data.result.errors){
                        html = '<div class="alert alert-danger">'+data.result.errors+'</div>';
                        // html = ;
                        // artCreateFlashMsg(data.result.errors, 'error',true);
                        $('#progress .progress-bar').css(
                            'width',
                            0 + '%'
                        );
                        artCreateFlashMsg(data.result.errors, 'error',true);
                        return false;
                    }
                    
                    $.each(data.result.files, function (index, file) {
                        filename_array.push(file.name);
                        fileName = file.name;
                        if({!! json_encode($create_1) !!} == 'ACTIVITY') {
                            if ($('#image_path').val() == '') {
                                $('#image_path').val(file.url);
                            } else if ($('#image_path1').val() == '') {
                                $('#image_path1').val(file.url);
                            } else {
                                $('#image_path2').val(file.url);
                            }
                        } else if({!! json_encode($create_1) !!} == 'PRODUCT') {
                            if ($('#image_path').val() == '') {
                                $('#image_path').val(file.url);
                            } else if ($('#image_path1').val() == '') {
                                $('#image_path1').val(file.url);
                            } else if ($('#image_path2').val() == '') {
                                $('#image_path2').val(file.url);
                            } else if ($('#image_path3').val() == '') {
                                $('#image_path3').val(file.url);
                            } else {
                                $('#image_path4').val(file.url);
                            }
                        } else {
                            $('#image_path').val(file.url);
                        }
                    });
                },
                progressall: function (e, data) {
                    artAllFlashMsgClose();
                    if((data.total/1048576) > (2)){
                        artCreateFlashMsg('file max 2MB', 'error',true);
                        $('#progress .progress-bar').css(
                            'width',
                            0 + '%'
                        );
                        return false;
                    }
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $('#progress .progress-bar').css(
                        'width',
                        progress + '%'
                    );
                }
            }).prop('disabled', !$.support.fileInput)
                .parent().addClass($.support.fileInput ? undefined : 'disabled');  
        }

        // preview image
        function PreviewImage() {
            if ({!! json_encode($create_1) !!} == 'ACTIVITY' || {!! json_encode($create_1) !!} == 'PRODUCT') {
                for (var i = 0; i < preview[0].length; i++) {
                    window.open(preview[0][i],'_blank');
                }
            } else {
                window.open(preview,'_blank');
            }
        }
    </script>
@endsection
<?php
    $lang = isset($lang) && $lang ? $lang : false;
    $data = isset($data) && !empty($data) ? (object) $data : [];
    $label = isset($label) ? ucfirst($label) : '';
    $columnName = isset($column) && $column ? $column : 'name';
    $columnId = $lang ? $columnName.'_'.$lang->locale : $columnName;
    $name = $lang ? $columnName.'_'.$lang->locale : $columnName;
    $icon = isset($icon) ? $icon : 'ni ni-info';
    $folder = isset($folder) ? $folder : 'images';
    $model = isset($model) ? $model : '';
    $gate = isset($gate) ? $gate : '';

    //check plugin scope, if model multilingual and the plugin is also multilingual
    if($data && $lang){
        $value = $data->getTranslation($columnName,$lang->locale);
    }
    elseif($data && !$lang){ $value = $data->{$columnName}; }
    else { $value = old($name) ? old($name) : ''; }
    $placeHolder = isset($placeHolder) && $placeHolder ? $placeHolder : 'fill the field!';
    $helpText = isset($helpText) && $helpText ? $helpText : 'Supported formats: jpeg,jpg,png';
    $size = isset($size) && $size ? $size : '1x';
    $width = 100 * floatval($size);
    $background = isset($background) && $background ? $background : false;
?>
<div class="form-group {!! $name !!} col-md-4">
    <label class="col-form-label text-lg-left form-label">{{tr($label)}}@if($lang): ({{$lang->locale}})@endif</label>
    <div class="input-group bg-white">
	    <div class="custom-file" style="overflow:hidden;">
	        <input type="file" name="{{$name}}" class="required borrowerImageFile custom-file-input" id="{{$columnId}}" data-errormsg="PhotoUploadErrorMsg">
	        <label class="custom-file-label" for="{{$columnId}}">Choose file</label>
	    </div>
	</div>
	<div class="input-group bg-white">
	    @if($helpText)
	    <span class="help-block">{{ $helpText }}</span>
	    @endif
	</div>
    @include('CMS.layout.components.error', ['name' => $name])
</div>

@if($value)
<div class="form-group col-md-12">

    <div id="{{$name}}-prev" style="margin-top:1.5rem;width:20%;min-width:250px" class="panel" data-panel-fullscreen="" data-panel-close="" data-panel-collapsed="" data-panel-locked="" data-panel-refresh="" data-panel-custombutton="" data-panel-reset="" role="widget" data-panel-attstyle="bg-danger-900 bg-info-gradient">
        <div class="panel-hdr" role="heading">
            <h2 class="ui-sortable-handle">
            {{$label}}<span class="fw-300"></span>
                                                </h2>
            <div class="panel-saving mr-2">
                <span id="lightgallery{{$name}}" style="margin-right:10px;">
                    <a href="{{ isset($value) ? asset('files/'.$folder. '/' .$value) : '' }}.jpg" id="{{$name}}-zoom">
                    <i class="far fa-search-plus fa-1x"></i>
                    <img style="display:none" class="{{ $name.'-src' }}" src="{{ isset($value) ? asset('files/'.$folder. '/' .$value) : '' }}.jpg"  alt="Uploaded Image Preview Holder" style="width:80%;"/>
                    </a>
                </span>

                <span class="remove-single-img-{{ $name }}" data-id="{{ $data->id }}" style="cursor: pointer;"><i class="far fa-trash-alt fa-1x"></i></span>
            </div>
        </div>
        <div class="panel-container show {{ $background ? 'bg-primary-500' : '' }}" role="content">
            <div class="panel-content" style="text-align:center">
                <img class="{{ $name.'-src' }}" src="{{ isset($value) ? asset('files/'.$folder. '/' .$value) : '' }}.jpg"  alt="Uploaded Image Preview Holder" style="width: {{$width}}%;"/>
            </div>
        </div>
    </div>
</div>
@endif
<div class="{{$name}}-end" syle="visibility:hidden;"></div>

@push('componentScripts')
<script>

	$('{!! "#".$columnId !!}').change(function()
	{
        let {!! $name !!}singleImg = new handleSingleImg('{!! $columnId !!}',{!! $name !!});
		{{ $name }}singleImg.change();
    });

    $('.remove-single-img-{{ $name }}').click(function(){

       /* var result = confirm("Are you sure to delete?");
        if(result){
            // Delete logic goes here
            imgData['el']    = $(this);
            imgData['gate']  = '{!! $gate !!}';
            imgData['model']  = '{!! $model !!}';
            imgData['id']     = $(this).attr('data-id');
            imgData['column'] = '{!! $columnName !!}';
            imgData['folder'] = '{!! $folder !!}';
            imgData['modelRemove'] = false;
            imgData['locale'] = '{!! $lang ? $lang->locale : false !!}';

            var imgModel = new removeModelImage();
            imgModel.init(imgData);
        }*/

        let imgData = [];
        imgData['el']    = $(this);
        imgData['gate']  = '{!! $gate !!}';
        imgData['model']  = '{!! $model !!}';
        imgData['id']     = $(this).attr('data-id');
        imgData['column'] = '{!! $columnName !!}';
        imgData['folder'] = '{!! $folder !!}';
        imgData['modelRemove'] = false;
        imgData['locale'] = '{!! $lang ? $lang->locale : false !!}';


        Swal.fire(
            {
                title: "{{tr('Are you sure to delete?')}}",
                type: "question",
                showCancelButton: true,
                cancelButtonText: 'არა',
                confirmButtonText: "დიახ"
            }).then(function (result) {
            if (result.value) {

                var imgModel = new removeModelImage();
                imgModel.init(imgData);
            }
        });


    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#lightgallery{!!$name!!}").lightGallery();
    });
</script>
@endpush

<?php 
    $lang = isset($lang) && $lang ? $lang : false; 
    $data = isset($data) && !empty($data) ? (object) $data : [];
    $label = isset($label) ? ucfirst($label) : '';
    $columnName = isset($column) && $column ? $column : 'file';
    $columnId = $lang ? $columnName.'_'.$lang->locale : $columnName;
    $name = $lang ? $columnName.'_'.$lang->locale : $columnName;
    $icon = isset($icon) ? $icon : 'ni ni-info';
    $folder = isset($folder) ? $folder : 'documents';
    $accept = isset($accept) ? $accept : 'application/pdf';
    $model = isset($model) ? $model : '';
    $fullRemove = isset($fullRemove) ? $fullRemove : false;

    //check plugin scope, if model multilingual and the plugin is also multilingual
    if($data && $lang && $data->translate($lang->locale)->locale == $lang->locale){
        $value = $data->translate($lang->locale)->{$columnName};
    }
    elseif($data && !$lang){ $value = $data->{$columnName}; }
    else { $value = old($name) ? old($name) : ''; }
    $placeHolder = isset($placeHolder) && $placeHolder ? $placeHolder : 'attach file!';
    $helpText = isset($helpText) ? $helpText : ''; 
?>
<div class="form-group col-md-6">
    <label class="form-label" for="{{$columnId}}">{{ $label }}</label>
    <input type="file" accept="{{ $accept }}"  name="{{ $name }}" id="{{$columnId}}" class="form-control" >
    @if($helpText)
    <span class="help-block">{{ tr($helpText) }}</span>
    @endif
    @include('CMS.layout.components.error', ['name' => $name])
</div>
@if($value)
<div class="form-group col-md-6 video-container">
    <span class="remove-video remove-video-{{ $name }}" data-id="{{ $data->id }}" data-column="{{ $columnName }}" style="cursor: pointer;"><i class="far fa-trash-alt fa-1x"></i></span>
    <video src="{{ asset('files/'.$folder.'/'.$value) }}" style="width:100%" controls></video>
    <!-- <a href="{{ asset('files/'.$folder.'/'.$value) }}" target="_blank" class="btn btn-lg btn-primary waves-effect waves-themed">{{ $data->{$columnName} }}<span class="badge bg-primary-300 ml-2"><i class="far fa-arrow-square-down"></i></span></a> -->
</div>
@endif

@push('componentScripts')
@if(!$fullRemove)
<script>
    $('.remove-video-{{ $name }}').click(function(){
        var result = confirm("Are you sure to delete?");
        if(result){
            id = $(this).data('id');
            column = $(this).data('column');
            let {!! $name !!}removeVideo = new removeVideo();
            {!! $name !!}removeVideo.init(id, column, '{!! $model !!}', '{!! $folder !!}', false);
            $(this).parent().remove();
        }
    });
</script>
@endif
@endpush
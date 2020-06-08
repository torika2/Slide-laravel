<?php

    $lang = isset($lang) && $lang ? $lang : false;
    $data = isset($data) && !empty($data) ? (object) $data : [];
    $label = isset($label) && $label ? $label : 'name';
    $columnName = isset($column) && $column ? $column : 'name';
    $columnId = $lang ? $columnName.'_'.$lang->locale : $columnName;
    $name = $lang ? $columnName.'_'.$lang->locale : $columnName;
    //Define $value
    if($data && $lang ){
        $value = old($name) ? old($name) : $data->getTranslation($columnName,$lang->locale);
    }
    elseif($data && !$lang){ $value = $data->{$columnName}; }
    else { $value = old($name) ? old($name) : ''; }
    //End of $value Definition
    $placeHolder = isset($placeHolder) && $placeHolder ? $placeHolder : 'fill the field!';
    $helpText = isset($helpText) ? $helpText : '';
    $required = isset($required) && $required ? $required : false;
    $width = isset($width) && $width ? $width : 12;
?>
<div class="form-group col-md-{{ $width }}">
    <label class="form-label" for="{{$columnId}}">{{tr($label)}}@if($lang): ({{$lang->locale}})@endif</label>
    <input type="text" id="{{$columnId}}"
        name="{{$name}}"
        value="{{ $value }}"
        class="form-control" @if($lang && $lang->active == 1 && $required) required @endif>
    @if($helpText)
    <span class="help-block">{{ tr($helpText) }}</span>
    @endif
    @include('CMS.layout.components.error', ['name' => $name])
</div>

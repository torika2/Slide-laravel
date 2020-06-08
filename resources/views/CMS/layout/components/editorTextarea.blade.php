<?php 
    $lang = isset($lang) && !empty($lang) ? $lang : false; 
    $data = isset($data) && !empty($data) ? (object) $data : [];
    $label = isset($label) && $label ? $label : 'name';
    $columnName = isset($column) && $column ? $column : 'name';
    $columnId = $lang ? $columnName.'_'.$lang->locale : $columnName;
    $name = $lang ? $columnName.'_'.$lang->locale : $columnName;
    //Define $value
    if($data && $lang && $data->translate($lang->locale)->locale == $lang->locale){
        $value = old($name) ? old($name) : $data->translate($lang->locale)->{$columnName};
    }
    elseif($data && !$lang){ $value = $data->{$columnName}; }
    else { $value = old($name) ? old($name) : ''; }
    //End of $value Definition
    $placeHolder = isset($placeHolder) && $placeHolder ? $placeHolder : 'fill the field!';
    $helpText = isset($helpText) ? $helpText : '';
    $required = isset($required) && $required ? $required : false;
?>
<div class="form-group col-md-12">
    <label class="form-label"
    for="{{$columnId}}">{{tr($label)}}@if($lang): ({{$lang->locale}})@endif</label>
    <textarea id="{{$columnId}}"
        name="{{$name}}"
        class="form-control" cols="30" rows="3"
        @if($lang && $lang->active == 1 && $required) required @endif>{{$value}}</textarea>
    @if($helpText)
    <span class="help-block">{{ tr($helpText) }}</span>
    @endif
    @include('CMS.layout.components.error', ['name' => $name])
</div>

@push('componentScripts')

<!-- <script>
CKEDITOR.replace( {{$name}} );
</script> -->

<script type="text/javascript">
    setTimeout(function() {
        tinymce.init({
            selector: "textarea#{{$columnId}}",
            theme: "modern",
            force_br_newlines: true,
            force_p_newlines: false,
            forced_root_block: '',
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste moxiecut"
            ],
            toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link insertfile image media | forecolor | fontsizeselect",
            autosave_ask_before_unload: false,
            height: 400,
            relative_urls: false
        });
    }, window.staticInc * 1000);
</script>

@endPush
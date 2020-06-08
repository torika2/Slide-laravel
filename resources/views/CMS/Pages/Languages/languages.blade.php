@extends('CMS.layout.cms')

@section('header')
    <title>Connect - {{tr('languages')}} </title>
    <link rel="stylesheet" media="screen, print" href="{{asset('cms/css/notifications/sweetalert2/sweetalert2.bundle.css')}}">

@stop




@section('content')
    <main id="js-page-content" role="main" class="page-content">
        <div class="row">
            <div class="col-xl-12">
                <div id="panel-1" class="panel">

                    @if(Session::has('success'))

                        <div class="alert bg-success-400 text-white" role="alert">
                            {!! Session::get("success") !!}
                        </div>
                    @elseif(Session::has('error'))
                        <div class="alert bg-danger-400 text-white" role="alert">
                            {!! Session::get("error") !!}
                        </div>
                    @endif <br>

                    <div class="panel-hdr">
                        <h2> {{tr('languages')}} <span class="fw-300"><i>{{tr('list')}}</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="{{tr('collapse')}}"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="{{tr('fullscreen')}}"></button>
                        </div>
                    </div>


                    <div class="panel-container show">
                        <div class="panel-content">
                            @can('createLanguage')
                                <a href="#" class="btn btn-primary waves-effect waves-themed" data-toggle="modal"
                                   data-target="#new-language-modal-center"> {{tr('new language')}}</a>
                            @endcan

                            @can('viewLanguage')


                                    <table id="dt-basic-languages" class="table table-bordered table-hover table-striped w-100">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>locale</th>
                                        <th>{{tr('language')}}</th>
                                        <th>{{tr('status')}}</th>
                                        <th>{{tr('default')}}</th>
                                        <th>{{tr('action')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($languages as $lang)
                                        <tr>
                                            <th scope="row">{{$lang->id}}</th>
                                            <td>{{$lang->locale}}</td>
                                            <td>{{$lang->name}}</td>
                                            <td>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input enable"
                                                           id="status_{{$lang->locale}}" data-id="{{$lang->id}}"
                                                           @if($lang->active == 1) checked="" @endif @cannot('updateLanguage') disabled @endcannot>
                                                    <label class="custom-control-label"
                                                           for="status_{{$lang->locale}}"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input default"  data-id="{{$lang->id}}"
                                                           id="default_{{$lang->locale}}"
                                                           @if($lang->default == 1) checked="" @endif  @cannot('updateLanguage') disabled @endcannot>
                                                    <label class="custom-control-label"
                                                           for="default_{{$lang->locale}}"></label>
                                                </div>
                                            </td>
                                            <td>@can('updateLanguage')<a href=""
                                                   class="btn btn-outline-primary btn-icon waves-effect waves-themed editlanguage"  data-id="{{$lang->id}}"
                                                                         data-toggle="modal"  data-target="#edit-language-modal-center">
                                                    <i class="fal  e fa-pen"></i></a> @endcan
                                                @can('deleteLanguage')
                                                <a href="javascript:void(0);" data-id="{{$lang->id}}"
                                                   data-toggle="modal"  data-target="#delete-modal-alert"
                                                   class="btn btn-outline-danger btn-icon waves-effect waves-themed deletelanugage">
                                                    <i class="fal fa-ban"></i></a> @endcan
                                            </td>
                                        </tr>
                                    @endforeach


                                    </tbody>
                                </table>
                                @endcan



                                @can('createLanguage')
                                <div class="modal fade" id="new-language-modal-center" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">{{tr('new language')}}</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                                </button>
                                            </div>
                                            <form action="{{route('CMS.language.create')}}" method="post">
                                                {{csrf_field()}}
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label class="form-label" for="locale">locale</label>
                                                    <input type="text" id="locale" name="locale" placeholder="Key" value="{{old('locale')}}" class="form-control" required="">
                                                    @if($errors->has('locale'))
                                                        <div class="alert bg-danger-200 text-white errorhas"
                                                             role="alert">{{ $errors->first('locale') }}</div>
                                                    @endif
                                                </div>

                                                <div class="form-group">
                                                    <label class="form-label" for="locale">{{tr('name')}}</label>
                                                    <input type="text" id="name" name="name" placeholder="{{tr('name')}}" value="{{old('name')}}" class="form-control" required="">
                                                    @if($errors->has('name'))
                                                        <div class="alert bg-danger-200 text-white errorhas"
                                                             role="alert">{{ $errors->first('name') }}</div>
                                                    @endif
                                                </div>


                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{tr('close')}}</button>
                                                <button type="submit" class="btn btn-primary">{{tr('save changes')}}</button>
                                            </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                @endcan

                            @can('updateLanguage')
                                    <div class="modal fade" id="edit-language-modal-center" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">{{tr('update language')}}</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                                    </button>
                                                </div>
                                                <form action="{{route('CMS.language.update')}}" method="post">
                                                    {{csrf_field()}}
                                                    <input type="hidden" id="editid" name="id" value="{{old('id')}}">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label class="form-label" for="locale">locale</label>
                                                            <input type="text" id="editlocale" name="locale" placeholder="Key" value="{{old('locale')}}" class="form-control" required="">
                                                            @if($errors->has('locale'))
                                                                <div class="alert bg-danger-200 text-white errorhas"
                                                                     role="alert">{{ $errors->first('locale') }}</div>
                                                            @endif
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="form-label" for="locale">{{tr('name')}}</label>
                                                            <input type="text" id="editname" name="name" placeholder="{{tr('name')}}" value="{{old('name')}}" class="form-control" required="">
                                                            @if($errors->has('name'))
                                                                <div class="alert bg-danger-200 text-white errorhas"
                                                                     role="alert">{{ $errors->first('name') }}</div>
                                                            @endif
                                                        </div>


                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{tr('close')}}</button>
                                                        <button type="submit" class="btn btn-primary">{{tr('save changes')}}</button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                @endcan

                            @can('deleteLanguage')

                                        <div class="modal modal-alert fade deletemodal" id="delete-modal-alert" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">{{tr('delete language')}}</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        {{tr('are you sure you want to delete this language?')}}
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form method="post" action="{{route('CMS.language.delete')}}">
                                                            {{csrf_field()}}
                                                            <input type="hidden" name="id"   id="deleteid">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">{{tr('close')}}</button>
                                                            <button type="submit" class="btn btn-danger">{{tr('yes, delete')}}</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                @endcan

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection


@section('scripts')

    <script src="{{asset('cms/js/notifications/sweetalert2/sweetalert2.bundle.js')}}"></script>
    <script>
        $(document).ready(function () {

            @can('deleteLanguage')

                $(document).on('click','.deletelanugage',function (e) {
                    $('#deleteid').val($(this).data('id'));
            });
            @endcan

            @canany(['createLanguage','updateLanguage'])
            $("#new-language-modal-center").on('hide.bs.modal', function () {
                $('#locale').val('');
                $('#name').val('');
                $('.errorhas').remove();
            });
            $("#edit-language-modal-center").on('hide.bs.modal', function () {
                $('#editlocale').val('');
                $('#editname').val('');
                $('#editid').val('');
                $('.errorhas').remove();
            });
            @if(old('id'))
            $("#edit-language-modal-center").modal();
            @elseif(old('name'))
            $("#new-language-modal-center").modal();
            @endif
                @endcanany
            @can('updateLanguage')


                $(document).on('click','.editlanguage',function (e) {
                $.post('{{route('CMS.language.language')}}', {
                    id: $(this).data('id'),
                    status: status,
                    _token: '{{csrf_token()}}'
                }).done(function (data) {
                    $('#editlocale').val(data.locale);
                    $('#editname').val(data.name);
                    $('#editid').val(data.id);
                });
            });


            "use strict";
            $('.enable').change(function() {
                var status;
                if($(this).is(':checked')){
                    status = 1;
                } else {
                    status = 0;
                }
                $.post('{{route('CMS.language.update.status')}}', {
                    id: $(this).data('id'),
                    status: status,
                    _token: '{{csrf_token()}}'
                }).done(function (data) {
                    if(data.active == 0){
                       var changedstatus = '{{tr('disabled')}}';
                    } else{
                       var changedstatus = '{{tr('enabled')}}';
                    }
                    Swal.fire(
                        {
                            position: "center",
                            type: "success",
                            title:  data.name +' '+ changedstatus +' {{tr('successfully')}}!',
                            showConfirmButton: false,
                            timer: 6000,
                            onClose: function onClose()
                            {
                                location.reload();
                            }
                        });
                }).fail(function( data ) {
                    var response = JSON.parse(data.responseText);
                    var errorString = '<ul>';
                    $.each( response.errors, function( key, value) {
                        errorString += '<li>' + value + '</li>';
                    });
                    errorString += '</ul>';
                    Swal.fire(
                        {
                            position: "center",
                            type: "error",
                            title: errorString,
                            showConfirmButton: false,
                            timer: 6000,
                            onClose: function onClose()
                            {
                                location.reload();
                            }
                        });
                });


                });
            $('.default').change(function() {
                var status;
                if($(this).is(':checked')){
                    status = 1;
                } else {
                    status = 0;
                }
                $.post('{{route('CMS.language.update.default')}}', {
                    id: $(this).data('id'),
                    status: status,
                    _token: '{{csrf_token()}}'
                }).done(function (data) {

                    if(data.active == 0){
                        var changedstatus = '{{tr('not')}}';
                    } else{
                        var changedstatus = ' ';
                    }
                    Swal.fire(
                        {
                            position: "center",
                            type: "success",
                            title:  data.name +' {{tr('is')}} '+ changedstatus +' {{tr('default language')}} {{tr('now')}}!',
                            showConfirmButton: false,
                            timer: 6000,
                            onClose: function onClose()
                            {
                                location.reload();
                            }
                        });
                }).fail(function( data ) {
                    var response = JSON.parse(data.responseText);
                    var errorString = '<ul>';
                    $.each( response.errors, function( key, value) {
                        errorString += '<li>' + value + '</li>';
                    });
                    errorString += '</ul>';
                    Swal.fire(
                        {
                            position: "center",
                            type: "error",
                            title: errorString,
                            showConfirmButton: false,
                            timer: 6000,
                            onClose: function onClose()
                            {
                                location.reload();
                            }
                        });
                });

            });

            @endcan

            $('#dt-basic-languages').dataTable(
                {
                    responsive: true,
                    searching: false,
                    paging: false,
                    ordering: false,
                    bInfo:false,

                });
        });
    </script>

@stop

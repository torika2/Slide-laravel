@extends('CMS.layout.cms')

@section('header')
    <title>Connect - {{tr('translations')}} </title>
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
                        <h2> {{tr('translations')}} <span class="fw-300"><i>{{tr('list')}}</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="{{tr('collapse')}}"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="{{tr('fullscreen')}}"></button>
                        </div>
                    </div>


                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="row">
                            @can('viewTranslation')
                                <div class="col-sm-6 justify-content-top">
                                    <form method="get">
                                        <div class="row">
                                        <div class="form-group col-xl-6" style="float: left">
                                            <label class="form-label" for="simpleinput"></label>
                                            <input type="text" placeholder="{{tr('search')}} key {{tr('or')}} {{tr('text')}}" name="search"
                                                value="{{request('search')}}" class="form-control">
                                        </div>
                                        <div class="form-group col-xl-4" style="display: inline-block; margin-top: 18px;">
                                            <button type="submit" class="btn btn-success">{{tr('search')}}</button>
                                            @if(request('search'))
                                                <a href="{{route('CMS.translations.list')}}" class="btn btn-danger">x</a>
                                            @endif
                                        </div>
                                        </div>
                                    </form>
                                </div>
                                @can('createTranslation')
                                    <div class="col-sm-6 d-flex align-items-center justify-content-end">
                                        <a href="#" class="btn btn-primary waves-effect waves-themed addtranslation"   data-toggle="modal"
                                            data-target="#translation-modal-center"> {{tr('new translation')}}</a>
                                    </div>
                                @endcan
                            </div>
                                <div class="panel-content">

                                    <ul class="nav nav-tabs" role="tablist">
                                        @php $activator = 0; $locales = getLocales(); @endphp
                                        @foreach($locales as $loc)
                                            <li class="nav-item"><a class="nav-link @if($activator == 0)  active @endif"
                                                                    data-toggle="tab" href="#locale-{{$loc->locale}}"
                                                                    role="tab" aria-selected="false">{{$loc->name}}
                                                    @if ($loc->active == 1) <i class="fal fa-check"
                                                                               style="color: #00cb00"></i>
                                                    @else <i class="fal fa-check" style="color: #cb2300"></i>  @endif
                                                </a></li>
                                            @php $activator++ @endphp
                                        @endforeach
                                    </ul>
                                    <div class="tab-content p-3">
                                        @php $activator = 0; @endphp
                                        @foreach($locales as $loc)
                                            <div class="tab-pane fade @if($activator == 0)  active show @endif"
                                                 id="locale-{{$loc->locale}}" role="tabpanel">
                                                <table id="dt-basic-translations" class="table table-bordered table-hover table-striped w-100">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Key</th>
                                                        <th>{{tr('value')}}</th>
                                                        <th>{{tr('action')}}</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    {{--{{ old('title'.$loc->locale, $data->getTranslation('title',$loc->locale)) }}--}}
                                                    @foreach($words as $word)
                                                        @can('viewTranslation')
                                                            <tr >
                                                                <th scope="row">{{$word->id}}</th>
                                                                <td>{{$word->key}}</td>
                                                                <td>{{$word->getTranslation('value',$loc->locale)}}</td>
                                                                <td>
                                                                    @can('updateTranslation')
                                                                    <a href="#" data-toggle="modal" data-target="#translation-modal-center" data-key="{{$word->key}}"
                                                                       class="btn btn-outline-primary btn-icon waves-effect waves-themed edittranslation">
                                                                        <i class="fal  fa-pen "></i> </a>
                                                                    @endcan

                                                                    @can('deleteTranslation') <a href="javascript:void(0);" data-key="{{$word->key}}"
                                                                       data-toggle="modal" data-target="#delete-modal-alert"
                                                                       class="btn btn-outline-danger btn-icon waves-effect waves-themed deletetranslation">
                                                                        <i class="fal fa-ban"></i></a> @endcan
                                                                </td>
                                                            </tr>

                                                        @endcan
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                                {{$words->appends(Request::query())->render()}}
                                            </div>
                                            @php $activator++ @endphp
                                        @endforeach



                                        @canany(['createTranslaton','updateTranslation','viewTranslation'])
                                            <div class="modal fade addeditmodal" id="translation-modal-center" tabindex="-1"
                                             role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">

                                                    <form  action="" id="addeditform" method="post">
                                                        {{csrf_field()}}
                                                        <input type="hidden" id="keyval" >
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="addedittitle">{{tr('translation')}}</h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true"><i
                                                                        class="fal fa-times"></i></span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <div class="form-group">
                                                                <label class="form-label" for="key">Key</label>
                                                                <input type="text" id="key" name="key" placeholder="Key"
                                                                       value="{{old('key')}}" class="form-control" required="">
                                                                @if($errors->has('key'))
                                                                    <div class="alert bg-danger-200 text-white errorhas"
                                                                         role="alert">{{ $errors->first('key') }}</div>
                                                                @endif
                                                            </div>

                                                            @foreach($locales as $loc)
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                           for="value_{{$loc->locale}}">{{tr('value')}}: {{$loc->name}}</label>
                                                                    <input type="text" id="value_{{$loc->locale}}"
                                                                           placeholder="{{$loc->name}}"
                                                                           name="value_{{$loc->locale}}" value="{{old('value_'.$loc->locale)}}"
                                                                           class="form-control"
                                                                           @if($loc->active == 1) required="" @endif>
                                                                    @if($errors->has('value_'.$loc->locale))
                                                                        <div
                                                                            class="alert bg-danger-200 text-white errorhas"
                                                                            role="alert">{{ $errors->first('value_'.$loc->locale) }}</div>
                                                                    @endif
                                                                </div>
                                                            @endforeach

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">{{tr('close')}}
                                                            </button>
                                                            <button type="submit" class="btn btn-primary">{{tr('save changes')}}</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                @endcanany
                                    @can('deleteTranslation')
                                        <div class="modal modal-alert fade deletemodal" id="delete-modal-alert" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">{{tr('delete translation')}}</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        {{tr('are you sure you want to delete this translation?')}}

                                                    </div>
                                                    <div class="modal-footer">
                                                        <form method="post" action="{{route('CMS.translations.delete')}}">
                                                            {{csrf_field()}}
                                                            <input type="hidden" name="key" value="" id="deletekey">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">{{tr('close')}}</button>
                                                            <button type="submit" class="btn btn-danger">{{tr('yes, delete')}}</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endcan
                            @endcan
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection

@section('scripts')
    <script>

        $(document).ready(function() {
            @can('deleteTranslation')

                $(document).on('click','.deletetranslation',function (e) {
                e.preventDefault();
                $('#deletekey').val($(this).data('key'));
            });
            $(".deletemodal").on('hide.bs.modal', function () {
                $('#deletekey').val('');
            });
            @endcan

            @canany(['createTranslaton','updateTranslation','viewTranslation'])
            @can('createTranslation')

                $(document).on('click','.addtranslation',function (e) {
                $('#addeditform').attr('action', '{{route('CMS.translations.create')}}');
                $('.addeditmodal').find('input[type=text]').val('');
                $('.errorhas').remove();
                $('#keyval').removeAttr('value');
                $('#keyval').removeAttr('name');
            });
            @endcan

            $(".addeditmodal").on('hide.bs.modal', function () {
                $('.addeditmodal').find('input[type=text]').val('');
                $('.errorhas').remove();
                $('#keyval').removeAttr('value');
                $('#keyval').removeAttr('name');
            });


                $(document).on('click','.edittranslation',function (e) {
                $('#keyval').attr('value', $(this).data('key'));
                $('#keyval').attr('name', 'valuehidenkey');
                $('#addeditform').attr('action', '{{route('CMS.translations.update')}}');

                $.post('{{route('CMS.translations.get.all.translated')}}', {
                    key: $(this).data('key'),
                    _token: '{{csrf_token()}}'
                }).done(function (data) {
                    console.log(data);
                    $('#key').val(data.key);

                    console.log(data.value.ka)
                   @foreach(getLocales() as $loc)
                    if (data.value.{{$loc->locale}}){
                       $('#value_{{$loc->locale}}').val(data.value.{{$loc->locale}});
                   }

                    @endforeach

                });
            });
            @if(old('valuehidenkey'))
            $(".addeditmodal").modal();
            $('#addeditform').attr('action', '{{route('CMS.translations.update')}}');
            $('#keyval').attr('name', 'valuehidenkey').val('{{old('valuehidenkey')}}');
            @elseif($errors->has('key'))
            $(".addeditmodal").modal();
            $('#addeditform').attr('action', '{{route('CMS.translations.create')}}');
            $('#keyval').removeAttr('value');
            $('#keyval').removeAttr('name');
            @endif


            @endcanany



            $('#dt-basic-translations').dataTable(
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

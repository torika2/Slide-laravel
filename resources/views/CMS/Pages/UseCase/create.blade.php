@extends('CMS.layout.cms')

@section('header')
    <title>{{sitename()}} - {{tr('create use case')}}</title>

@stop




@section('content')
    @if(!isset($data))
        {{$data = null}}
    @endif
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
                        <h2>
                            {{tr('use case')}} <span class="fw-300"><i></i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip"
                                    data-offset="0,10" data-original-title="{{tr('collapse')}}"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip"
                                    data-offset="0,10" data-original-title="{{tr('fullscreen')}}"></button>
                        </div>
                    </div>


                    <div class="panel-container show">
                        <div class="panel-content">


                            <form method="post" id="form" action="{{route('CMS.usecase.store')}}" enctype="multipart/form-data">
                                {{csrf_field()}}
                                @if($data)
                                <input type="hidden" name="id" value="{{$data->id}}">
                                @endif

                                <div class="col-md-12">
                                    @include('CMS.layout.includes.langTabComponent')

                                    <div class="tab-content p-3">
                                        @php $activator = 0; @endphp
                                        @foreach(getLocales() as $loc)
                                            <div class="tab-pane fade @if($activator == 0)  active show @endif"
                                                 id="locale-{{$loc->locale}}" role="tabpanel">


                                                @include('CMS.layout.components.textField',
                                                [  'lang' => $loc,
                                                    'data' => $data,
                                                    'column' => 'title',
                                                    'label' => 'title',
                                                    'placeHolder' => '',
                                                    'helpText' => '',

                                                    ])

                                                @include('CMS.layout.components.textarea',
                                               [  'lang' => $loc,
                                                   'data' => $data,
                                                   'column' => 'meta_description',
                                                   'label' => 'meta description',
                                                   'placeHolder' => '',
                                                   'helpText' => '' ])

                                                @include('CMS.layout.components.textarea',
                                                [  'lang' => $loc,
                                                    'data' => $data,
                                                    'column' => 'meta_keywords',
                                                    'label' => 'meta keywords',
                                                    'placeHolder' => '',
                                                    'helpText' => '' ])



                                                @include('CMS.layout.components.textarea',
                                               [  'lang' => $loc,
                                                   'data' => $data,
                                                   'column' => 'short_text',
                                                   'label' => 'short text',
                                                   'placeHolder' => '',
                                                   'helpText' => '' ])


                                                @include('CMS.layout.components.editorTextarea',
                                            [  'lang' => $loc,
                                                'data' => $data,
                                                'column' => 'text',
                                                'label' => 'Text',
                                                'placeHolder' => '',
                                                'helpText' => '',
                                                ])




                                            </div>
                                            @php $activator++ @endphp
                                        @endforeach
                                    </div>


                                    @include('CMS.layout.components.selectBox',
                                   [   'lang' => null,
                                       'data' => $data,
                                       'dataLoad' => $industries,
                                       'optionName' => 'name',
                                       'optionValue' => 'id',
                                       'column' => 'industry_id',
                                       'label' => 'industry' ])

                                    @include('CMS.layout.components.selectBox',
                                    [   'lang' => null,
                                        'data' => $data,
                                        'dataLoad' => $clients,
                                        'optionName' => 'name',
                                        'optionValue' => 'id',
                                        'column' => 'client_id',
                                        'label' => 'client' ])


                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="solutions">
                                            {{tr('solutions')}}
                                        </label>
                                        <select class="select2 form-control" name="solutions[]" multiple="multiple"
                                                id="solutions">
                                            @if($data)
                                                @foreach($solutions as $solution)
                                                    <option value="{{$solution->id}}"
                                                            @if($data->solutions()->find($solution->id)) selected @endif>{{$solution->title}} </option>
                                                @endforeach
                                            @else
                                                @foreach($solutions as $solution)
                                                    <option value="{{$solution->id}}">{{$solution->title}} </option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>




                                    @include('CMS.layout.components.singleImg',
                                          [   'lang' => null,
                                              'data' => $data,
                                              'column' => 'cover',
                                              'label' => 'cover',
                                              'placeHolder' => '',
                                              'class' => 'aaa',
                                              'folder' => 'img',
                                              'helpText' => '',
                                              'model' => 'usecase',
                                              'gate'  => 'updateUseCases',
                                              'webp'=>true])



                                    @include('CMS.layout.components.singleImg',
                                         [   'lang' => null,
                                             'data' => $data,
                                             'column' => 'banner',
                                             'label' => 'banner',
                                             'placeHolder' => '',
                                             'class' => 'aaa2',
                                             'folder' => 'img',
                                             'helpText' => '',
                                             'model' => 'usecase',
                                             'gate'  => 'updateUseCases',
                                             'webp'=>true])


                                    @include('CMS.layout.components.video',
                                        [   'lang' => null,
                                            'data' => $data,
                                            'column' => 'video',
                                            'label' => 'video',
                                            'folder' => 'video',
                                            'placeHolder' => '',
                                            'helpText' => 'Supported format: mp4',
                                            'accept'=>'video/mp4',
                                            'model' => 'about' ,
                                            'type'=>'link'])

                                </div>


                                <br>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <button type="submit"
                                                class="btn btn-primary">{{tr('save changes')}}</button>
                                        <a href="{{route('CMS.usecase.list')}}"
                                           class="btn btn-danger">{{tr('cancel')}}</a>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>

                </div>
            </div>
        </div>

    </main>
@endsection


@section('scripts')

    <script>

    </script>
@stop

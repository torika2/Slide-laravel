@extends('CMS.layout.cms')

@section('header')
    <title>{{sitename()}} - {{tr('Home Software component')}}</title>

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
                            {{tr('Home Software component')}} <span class="fw-300"><i></i></span>
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


                            <form method="post" id="form" action="{{route('CMS.home.soft.store')}}" enctype="multipart/form-data">
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
                                                  'column' => 'text',
                                                  'label' => 'text',
                                                  'placeHolder' => '',
                                                  'helpText' => '' ])



                                                @include('CMS.layout.components.textField',
                                              [  'lang' => $loc,
                                                  'data' => $data,
                                                  'column' => 'button1',
                                                  'label' => 'button name',
                                                  'placeHolder' => '',
                                                  'helpText' => '',

                                                  ])

                                                @include('CMS.layout.components.textField',
                                               [  'lang' => $loc,
                                                   'data' => $data,
                                                   'column' => 'link1',
                                                   'label' => 'button 1 link',
                                                   'placeHolder' => '',
                                                   'helpText' => '',
                                                   ])






                                                @include('CMS.layout.components.textField',
                                        [  'lang' => $loc,
                                            'data' => $data,
                                            'column' => 'button2',
                                            'label' => 'button 2 name',
                                            'placeHolder' => '',
                                            'helpText' => '',

                                            ])

                                                @include('CMS.layout.components.textField',
                                               [  'lang' => $loc,
                                                   'data' => $data,
                                                   'column' => 'link2',
                                                   'label' => 'button 2 link',
                                                   'placeHolder' => '',
                                                   'helpText' => '',
                                                   ])



                                            </div>
                                            @php $activator++ @endphp
                                        @endforeach
                                    </div>



                                    @include('CMS.layout.components.singleImg',
                                              [   'lang' => null,
                                                  'data' => $data,
                                                  'column' => 'image',
                                                  'class' => 'aaa',
                                                  'label' => 'image',
                                                  'placeHolder' => '',
                                                  'folder' => 'img',
                                                  'helpText' => '',
                                                  'model' => 'homesoftware',
                                                  'gate'  => 'updateHomeHead'
                                                  ])




                                </div>


                                <br>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <button type="submit"
                                                class="btn btn-primary">{{tr('save changes')}}</button>
                                        <a href="{{route('CMS.home.welyhube.list')}}"
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

@extends('CMS.layout.cms')

@section('header')
    <title>{{sitename()}} - {{tr('software pricing')}}</title>

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
                            {{tr('software pricing')}} <span class="fw-300"><i></i></span>
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


                            <form method="post" id="form" action="{{route('CMS.software.pricing.store')}}" enctype="multipart/form-data">
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


                                                @include('CMS.layout.components.textField',
                                               [  'lang' => $loc,
                                                   'data' => $data,
                                                   'column' => 'link',
                                                   'label' => 'redirect url',
                                                   'placeHolder' => '',
                                                   'helpText' => '',

                                                   ])





                                            </div>
                                            @php $activator++ @endphp
                                        @endforeach
                                    </div>


                                    @include('CMS.layout.components.textField',
                                                [  'lang' => null,
                                                    'data' => $data,
                                                    'column' => 'm_price',
                                                    'label' => 'monthly price',
                                                    'placeHolder' => '',
                                                    'helpText' => '',

                                                    ])


                                    @include('CMS.layout.components.textField',
                                               [  'lang' => null,
                                                   'data' => $data,
                                                   'column' => 'y_price',
                                                   'label' => 'annual price',
                                                   'placeHolder' => '',
                                                   'helpText' => '',

                                                   ])



                                    @include('CMS.layout.components.checkbox',
                                   [   'lang' => null,
                                       'data' => null,
                                       'column' => 'popular',
                                       'label' => 'show as popular',
                                       'placeHolder' => ''])


                                    <hr>


                                    <div class="panel-hdr">
                                        <h2>
                                            {{tr('parameters')}} <span class="fw-300"><i></i></span>
                                        </h2>

                                    </div>
                                    <br>

                                    @foreach($params as $param)

                                        <div class="form-group col-md-8">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="params[{{$param->id}}]"
                                                       @if(isset($data->params[$param->id])) checked @endif
                                                       class="custom-control-input" id="params[{{$param->id}}]">
                                                <label class="custom-control-label" for="params[{{$param->id}}]">{{$param->title}} </label>
                                            </div>
                                        </div>



                                    @endforeach












                                </div>


                                <br>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <button type="submit"
                                                class="btn btn-primary">{{tr('save changes')}}</button>
                                        <a href="{{route('CMS.software.pricing.list')}}"
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

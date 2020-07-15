@extends('CMS.layout.cms')

@section('header')
    <title>{{sitename()}} - {{tr('create experience')}}</title>

@stop




@section('content')
    @if(!isset($experience))
        {{$experience = null}}
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
                            {{tr('about')}} <span class="fw-300"><i></i></span>
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


                            <form method="post" id="form" action="{{route('CMS.experience.store')}}" enctype="multipart/form-data">
                                {{csrf_field()}}
                                @if($experience)
                                <input type="hidden" name="id" value="{{$experience->id}}">
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
                                                    'data' => $experience,
                                                    'column' => 'tab',
                                                    'label' => 'tab title',
                                                    'placeHolder' => '',
                                                    'helpText' => '',

                                                    ])






                                                @include('CMS.layout.components.textField',
                                               [  'lang' => $loc,
                                                   'data' => $experience,
                                                   'column' => 'title',
                                                   'label' => 'title',
                                                   'placeHolder' => '',
                                                   'helpText' => '' ,
                                                  ])


                                                @include('CMS.layout.components.textarea',
                                                [  'lang' => $loc,
                                                    'data' => $experience,
                                                    'column' => 'text',
                                                    'label' => 'text',
                                                    'placeHolder' => '',
                                                    'helpText' => '' ])

                                            </div>
                                            @php $activator++ @endphp
                                        @endforeach
                                    </div>

                                    @include('CMS.layout.components.singleImg',
                                               [   'lang' => null,
                                                   'data' => $experience,
                                                   'column' => 'image',
                                                   'label' => 'image',
                                                   'placeHolder' => '',
                                                   'class' => 'bbb',
                                                   'folder' => 'img',
                                                   'helpText' => '',
                                                   'model' => 'experience',
                                                   'gate'  => 'updateExperience'])

                                </div>


                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <button type="submit"
                                                class="btn btn-primary">{{tr('save changes')}}</button>
                                        <a href="{{route('CMS.experience.list')}}"
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

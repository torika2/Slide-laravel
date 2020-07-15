@extends('CMS.layout.cms')

@section('header')
    <title>{{sitename()}} - {{tr('footer menu columns')}} </title>
    <style>
        .error {
            color: #ff095f;
        }
    </style>
@stop





@section('content')

    @php $locales = getLocales(); @endphp
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
                            {{tr('footer menu column')}} <span class="fw-300"><i>{{tr('list')}}</i></span>
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

                            <br/>
                            <table class="table table-bordered table-hover table-striped w-100" id="data_table">
                                <thead>
                                <tr>

                                    <th>{{tr('column')}}</th>
                                    <th>{{tr('action')}}</th>
                                </tr>
                                </thead>

                                <tr>
                                    <td>1</td>
                                    <td><a href="{{route('CMS.footerMenu.list',[1])}}" class="btn btn-primary">{{tr('menus')}}</a></td>
                                </tr>


                                <tr>
                                    <td>2</td>
                                    <td><a href="{{route('CMS.footerMenu.list',[2])}}" class="btn btn-primary">{{tr('menus')}}</a></td>
                                </tr>


                                <tr>
                                    <td>3</td>
                                    <td><a href="{{route('CMS.footerMenu.list',[3])}}" class="btn btn-primary">{{tr('menus')}}</a></td>
                                </tr>


                            </table>








                        </div>
                    </div>





                </div>
            </div>
        </div>

    </main>
@endsection


@section('scripts')



@stop

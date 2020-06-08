@extends('CMS.layout.cms')

@section('header')
    <title>Connect - Dashboard </title>
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
                                <h2> {{tr('dashboard')}} <span class="fw-300"><i> </i></span> </h2>

                                <div class="panel-toolbar">
                                    <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="{{tr('collapse')}}"></button>
                                    <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="{{tr('fullscreen')}}"></button>
                                </div>
                            </div>
                            <div class="panel-container show">
                                <div class="panel-content">
                                    {{tr('name')}}





                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </main>
@endsection


@section('scripts')


@stop

@extends('CMS.layout.cms')

@section('header')
    <title>{{sitename()}} - {{tr('main settings')}} </title>
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
                                <h2>
                                    {{tr('Settings')}} <span class="fw-300"><i>{{tr('main')}}</i></span>
                                </h2>
                                <div class="panel-toolbar">
                                    <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="{{tr('collapse')}}"></button>
                                    <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="{{tr('fullscreen')}}"></button>
                                </div>
                            </div>




                            <div class="panel-container show">
                                <div class="panel-content">

                                    {{--site name--}}
                                    <form method="post"   action="{{route('CMS.settings.store')}}" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <h7>
                                            {{tr('Settings')}} :<span class="fw-300"><i>{{tr('site name')}}</i></span>
                                        </h7>
                                        <hr>
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


                                                <div class="form-group col-md-6" >
                                                    <label class="form-label" for="site_name">{{tr('site name')}} ({{$loc->locale}})</label>
                                                    <input type="text" id="site_name" name="site_name_{{$loc->locale}}" value="{{old('site_name_'.$loc->locale,$sitename->getTranslation('value',$loc->locale))}}" class="form-control" @if($loc->active ==1) required="" @endif>
                                                </div>



                                            </div>
                                            @php $activator++ @endphp
                                        @endforeach
                                    </div>



                                        <h7>
                                            {{tr('Settings')}} :<span class="fw-300"><i>{{tr('developong mode')}}</i></span>
                                        </h7>
                                        <hr>
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="devmode">{{tr('enable/disable')}} </label>
                                            <select name="devmode" id="devmode" class="form-control">
                                                <option value="1" @if($devmode->data['devmode'] == 1) selected @endif>{{tr('enabled')}}</option>
                                                <option value="0" @if($devmode->data['devmode'] == 0) selected @endif>{{tr('disabled')}}</option>
                                            </select>
                                        </div>


                                        <div class="form-group col-md-6" >
                                            <label class="form-label" for="allowedips">{{tr('allowed ips')}}</label>
                                            <textarea name="allowedips" id="allowedips" class="form-control" cols="1" rows="5">{{$devmode->data['allowed_ips']}}</textarea>
                                        </div>




                                        <h7>
                                            {{tr('Settings')}} :<span class="fw-300"><i>{{tr('email')}}</i></span>
                                        </h7>


                                        <div class="form-group col-md-6" >
                                            <label class="form-label" for="mail_host">{{tr('mail host')}}</label>
                                            <input type="text" class="form-control" name="host" value="{{$mail->data['host']}}" id="mail_host">
                                        </div>

                                        <div class="form-group col-md-6" >
                                            <label class="form-label" for="mail_port">{{tr('mail port')}}</label>
                                            <input type="text" class="form-control" value="{{$mail->data['port']}}" name="port" id="mail_port">
                                        </div>

                                        <div class="form-group col-md-6" >
                                            <label class="form-label" for="mail_username">{{tr('mail username')}}</label>
                                            <input type="text" class="form-control" value="{{$mail->data['username']}}" name="username" id="mail_username">
                                        </div>

                                        <div class="form-group col-md-6" >
                                            <label class="form-label" for="mail_password">{{tr('mail password')}}</label>
                                            <input type="text" class="form-control" value="{{$mail->data['password']}}" name="password" id="mail_password">
                                        </div>


                                        <div class="form-group col-md-6" >
                                            <label class="form-label" for="mail_contact">{{tr('contact mail')}}</label>
                                            <input type="text" class="form-control" value="{{$mail->data['contact']}}" name="contact" id="mail_contact">
                                        </div>




                                        @can('updateSettings')
                                        <div class="form-group">
                                            <button type="submit" id="savebutton" class="btn btn-success waves-effect waves-themed">save changes</button>
                                        </div>
                                            @endcan

                                    </form>

                                        {{--sitename--}}




                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </main>
@endsection


@section('scripts')


@stop

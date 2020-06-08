@extends('CMS.layout.cms')

@section('header')
    <title>Connect - {{tr('profile')}} </title>
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
                                <h2> {{tr('user')}} <span class="fw-300"><i>{{tr('profile')}} </i></span>
                                </h2>
                                <div class="panel-toolbar">
                                    <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="{{tr('collapse')}}"></button>
                                    <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="{{tr('fullscreen')}}"></button>
                                </div>
                            </div>


                            <div class="panel-container show">
                                <div class="panel-content">


                                    <form method="post" action="{{route('CMS.user.profile.update')}}" enctype="multipart/form-data">
                                        {{csrf_field()}}


                                        <div class="form-group">
                                            <label class="form-label" for="fullname">{{tr('fullname')}}</label>
                                            <input type="text" id="fullname" name="fullname" value="@if(old('fullname')){{old('fullname')}}@else{{$user->fullname}}@endif" class="form-control" required>
                                        </div>
                                        @if($errors->has('fullname'))
                                            <div class="alert bg-danger-200 text-white" role="alert">{{ $errors->first('fullname') }}</div>
                                        @endif

                                        <div class="form-group">
                                            <label class="form-label" for="username">{{tr('username')}}</label>
                                            <input type="text" id="username" name="username" value="@if(old('username')){{old('username')}}@else{{$user->username}}@endif" class="form-control" required>
                                        </div>
                                        @if($errors->has('username'))
                                            <div class="alert bg-danger-200 text-white" role="alert">{{ $errors->first('username') }}</div>
                                        @endif

                                        <div class="form-group">
                                            <label class="form-label" for="email">{{tr('email')}}</label>
                                            <input type="email" id="email" name="email" value="@if(old('email')){{old('email')}}@else{{$user->email}}@endif" class="form-control" required>
                                        </div>
                                        @if($errors->has('email'))
                                            <div class="alert bg-danger-200 text-white" role="alert">{{ $errors->first('email') }}</div>
                                        @endif

                                        <div class="form-group">
                                            <label class="form-label" for="phone">{{tr('phone')}}</label>
                                            <input type="number" id="phone" name="phone" value="@if(old('phone')){{old('phone')}}@else{{$user->phone}}@endif" class="form-control" required>
                                        </div>
                                        @if($errors->has('phone'))
                                            <div class="alert bg-danger-200 text-white" role="alert">{{ $errors->first('phone') }}</div>
                                        @endif




                                        <div class="form-group">
                                            <label class="form-label" for="password">{{tr('current password')}}</label>
                                            <input type="password" id="password" name="password"  class="form-control" required>
                                        </div>
                                        @if($errors->has('password'))
                                            <div class="alert bg-danger-200 text-white" role="alert">{{ $errors->first('password') }}</div>
                                        @endif

                                        <div class="form-group">
                                            <label class="form-label" for="new_password">{{tr('new password')}}</label>
                                            <input type="password" id="new_password" name="new_password"  class="form-control">
                                        </div>
                                        @if($errors->has('new_password'))
                                            <div class="alert bg-danger-200 text-white" role="alert">{{ $errors->first('new_password') }}</div>
                                        @endif

                                        <div class="form-group">
                                            <label class="form-label" for="confirm_password">{{tr('confirm password')}}</label>
                                            <input type="password" id="confirm_password" name="confirm_password"  class="form-control">
                                        </div>
                                        @if($errors->has('confirm_password'))
                                            <div class="alert bg-danger-200 text-white" role="alert">{{ $errors->first('confirm_password') }}</div>
                                        @endif

                                        <div class="form-group">
                                            <label class="form-label" for="avatar">{{tr('avatar')}}</label>
                                            <input type="file" id="avatar" name="avatar" value="{{old('avatar')}}" class="form-control" accept="image/*" >
                                        </div>



                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success">{{tr('save changes')}}</button>
                                            <a href="{{route('CMS.user.list')}}" class="btn btn-danger">{{tr('cancel')}}</a>
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


@stop

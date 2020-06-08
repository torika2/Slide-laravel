<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CONNECT CMS</title>
    <meta name="description" content="Login">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <!-- Call App Mode on ios devices -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <!-- base css -->
    <link rel="stylesheet" media="screen, print" href="{{asset('cms/css/vendors.bundle.css')}}">
    <link rel="stylesheet" media="screen, print" href="{{asset('cms/css/app.bundle.css')}}">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('cms/img/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('cms/img/favicon/favicon-32x32.png')}}">
    <link rel="mask-icon" href="{{asset('cms/img/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
    <!-- Optional: page related CSS-->
    <link rel="stylesheet" media="screen, print" href="{{asset('cms/css/page-login.css')}}">
</head>
<body>
<div class="blankpage-form-field">
    <div class="page-logo m-0 w-100 align-items-center justify-content-center rounded border-bottom-left-radius-0 border-bottom-right-radius-0 px-4">
        <a href="javascript:void(0)" class="page-logo-link press-scale-down d-flex align-items-center">
            <img src="{{asset('cms/img/connect-cms.svg')}}">
        </a>
    </div>
    <div class="card p-4 border-top-left-radius-0 border-top-right-radius-0">
        <form action="{{route('auth.postLogin')}}" method="post" >
            {{csrf_field()}}
            <div class="form-group">
                <label class="form-label" for="username">Username</label>
                <input type="text" id="username" name="username" value="{{old('username')}}" class="form-control" placeholder="your username" required>
                <span class="help-block">
                    your unique username
                        </span>
                @if ($errors->has('username'))
                    {{--todo style error text--}}
                    {{ $errors->first('username') }}
                @endif
            </div>
            <div class="form-group">
                <label class="form-label" for="password">password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="password" required>

                <span class="help-block"> your password </span>
                @if ($errors->has('password'))
                    {{--todo style error text--}}
                    {{ $errors->first('password') }}
                @endif

            </div>

            <div class="form-group">
                {!! NoCaptcha::renderJs() !!}
                {!! NoCaptcha::display() !!}
                @if ($errors->has('g-recaptcha-response'))
                    {{--todo style error text--}}
                    {{ $errors->first('g-recaptcha-response') }}
                @endif

            </div>

            @if(Session::has('error'))
                <div class="alert alert-danger">{!! Session::get("error") !!}</div>
            @endif

            <button type="submit" class="btn btn-default float-right">Connect</button>
        </form>

    </div>



</div>

<video poster="{{asset('cms/img/backgrounds/clouds.png')}}" id="bgvid" playsinline autoplay muted loop>
    <source src="{{asset('cms/media/video/cc.webm')}}" type="video/webm">
    <source src="{{asset('cms/media/video/cc.mp4')}}" type="video/mp4">
</video>

<script src="{{asset('cms/js/vendors.bundle.js')}}"></script>
<script src="{{asset('cms/js/app.bundle.js')}}"></script>

</body>
</html>

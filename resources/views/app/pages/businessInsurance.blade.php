@extends('app.layout.app')
@section('pageName')business @endsection
@section('content')

@include('app.layout.components.headSlider')

@include('app.layout.components.subMenu')

@include('app.layout.components.directionWithHover')

@include('app.layout.components.insuranceTabs')

@include('app.layout.components.videoContainer')

@include('app.layout.components.counter')

@endsection
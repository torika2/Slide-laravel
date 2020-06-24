@extends('app.layout.app')
@section('pageName')about-management @endsection
@section('content')
    @include('app.layout.components.directionTabHead')
	<div class="directHeadContainer">
		<div class="directHeadInner">
			<div class="management-list">
				@include('app.layout.components.manager')
				@include('app.layout.components.manager')
				@include('app.layout.components.manager')
				@include('app.layout.components.manager') 
			</div>
		</div>
	</div>

@endsection
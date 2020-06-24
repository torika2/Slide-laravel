@extends('app.layout.app')
@section('pageName')brand-platform @endsection
@section('content')
    @include('app.layout.components.directionTabHead')
	
	<div class="directHeadContainer">
		<div class="directHeadInner">
			<div class="fira-bold font-34 ttl">ჩვდენი ბრენდ პლატფორმა</div>
			<div class="text">
				გამოყენებით ვღებულობთ იმაზე მეტ-ნაკლებად სწორი გადანაწილების ტექსტს, ვიდრე ერთიდაიგივე გამეორებადი სიტყვებია ხოლმე. შედეგად, ტექსტი ჩვეულებრივ ინგლისურს გავს, მისი წაითხვა კი შეუძლებელია. დღეს უამრავი პერსონალური საგამომცემლო პროგრამა და ვებგვერდი იყენებს
			</div>
		
			@include('app.layout.components.brandPlatformSlider')
		</div>
	</div>


	@include('app.layout.components.teamContainer')
@endsection
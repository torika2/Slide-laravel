@extends('app.layout.app')
@section('pageName')about-partners @endsection
@section('content')
    @include('app.layout.components.directionTabHead')
	<div class="directHeadContainer">
		<div class="directHeadInner">
			<h2 class="fira-bold font-34 ttl">როგორ გახდე ჩვენი პარტნიორი?</h2>
			<div class="text">
				ცნობილი ფაქტია, რომ გვერდის წაკითხვად შიგთავსს შეუძლია მკითხველის ყურადღება მიიზიდოს და დიზაინის აღქმაში ხელი შეუშალოს. ის გამოყენებით ვღებულობთ იმაზე მეტ-ნაკლებად სწორი გადანაწილების ტექსტს, ვიდრე ერთიდაიგივე გამეორებადი სიტყვებია ხოლმე. შედეგად, ტექსტი ჩვეულებრივ ინგლისურს გავს, მისი წაითხვა კი შეუძლებელია. დღეს უამრავი პერსონალური საგამომცემლო პროგრამა და ვებგვერდი იყენებს
			</div>
			<div class="connect-btn connect-agent">
				<span class="fira-bold">დამიკავშირდი</span>
			</div>
			@include('app.layout.components.partners')
		</div>
	</div>
    @include('app.layout.components.bonusServices')
    @include('app.layout.components.formPopup')

@endsection
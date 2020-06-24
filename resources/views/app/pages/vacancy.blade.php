@extends('app.layout.app')
@section('pageName')home @endsection
@section('content')

<div class="vacancy-page-type">

	<section class="directionTabHead">
	    <img src="{{asset('assets/img/businessHead.jpg')}}" alt="">
	    <div class="directionTabHeadInner">
	        <div class="breadcrumb">
	            <a href="" class="noto-semibold">კომპანიის შესახებ</a>
	            <span>
	                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="8" viewBox="0 0 6 8">
	                  <path id="Polygon_16" data-name="Polygon 16" d="M4,0,8,6H0Z" transform="translate(6) rotate(90)" fill="#fff" opacity="0.8"/>
	                </svg>
	            </span>
	            <a href="" class="noto-semibold">ისტორია</a>
	            <span>
	                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="8" viewBox="0 0 6 8">
	                  <path id="Polygon_16" data-name="Polygon 16" d="M4,0,8,6H0Z" transform="translate(6) rotate(90)" fill="#fff" opacity="0.8"/>
	                </svg>
	            </span>
	            <a href="" class="noto-semibold active">GPI-ის ისტორია</a>
	        </div>
	        <div class="directionHeadTabsCont">
	            <h3 class="fira-bold font-55">ბიზნეს რისკები</h3>
	            <div class="directionHeadTabs">
	                <a href="##" class="directionHeadTab fira-bold uppercase">
	                    <img src="{{asset('assets/img/file.svg')}}" alt="">
	                    <span class="font-16 noto-semibold">სააპლიკაციო ანკეტა</span>
	                </a>
	            </div>
	        </div>
	    </div>
	</section>


	<section class="directHeadContainer vacancy">
		<div class="white--container">
			<div class="heading">
				<h2 class="font-34 fira-bold uppercase">დაზღვეულთა მომსახურების მენეჯერი</h2>
				<div class="term">
					<span class="font-21 noto-bold">ბოლო ვადა:</span>
					<span class="font-16 noto-regular">2020 წლის 29 სექტემბერი</span>
				</div>
				<img src="{{asset('assets/img/Path 6178.svg')}}" alt="">
			</div>
			<div class="form-container">
				<div class="side">
					<div class="text">
					   აუცილებელია უმაღლესი სამედიცინო განათლება (უპირატესობა ენიჭება მედიცინის ფაკულტეტს);
					   მინიმუმ ერთ წლიანი სამუშაო გამოცდილება მომსახურების სფეროში;
					   სრულყოფილი სასაუბრო და წერა-კითხვის უნარები რუსულ და ქართულ ენებში;
					   კომპიუტერთან მუშაობის უნარი (Windows, MS Office, Internet and E-mail);
					   დაძაბულ რეჟიმში მუშაობის უნარი;
					   ორგანიზებულობა და პასუხისმგებლობის გრძნობა.
					</div>
				</div>
				<div class="side">
					<img src="{{asset('assets/img/Path 10204.svg')}}" id="line" alt="">
					<h3 class="font-21 noto-bold">შეავსე განაცხადი</h3>
					<a href="" id="linkedIn">
						<img src="{{asset('assets/img/Icon awesome-linkedin.svg')}}" alt="">
						<span class="font-16 noto-bold">შეავსე ფორმა LinkedIn-ის მეშვეობით</span>
					</a>
					<form id="form" action="">
						<div class="input">
							<label for="name" class="font-16 noto-bold">
								სახელი<span class="font-16 noto-bold">*</span>
							</label>
							<input class="font-16 noto-bold" type="text" id="name">
							<div class="error font-13 noto-regular">გთხოვთ შეავსოთ ფორმა</div>
						</div>
						<div class="input">
							<label for="surname" class="font-16 noto-bold">
								გვარი<span class="font-16 noto-bold">*</span>
							</label>
							<input class="font-16 noto-bold" type="text" id="surname">
							<div class="error font-13 noto-regular">გთხოვთ შეავსოთ ფორმა</div>
						</div>
						<div class="input">
							<label for="city" class="font-16 noto-bold">
								ქალაქი/რეგიონი<span class="font-16 noto-bold">*</span>
							</label>
							<input class="font-16 noto-bold" type="text" id="city">
							<div class="error font-13 noto-regular">გთხოვთ შეავსოთ ფორმა</div>
						</div>
						<div class="input">
							<label for="country" class="font-16 noto-bold">
								ქვეყანა<span class="font-16 noto-bold">*</span>
							</label>
							<input class="font-16 noto-bold" type="text" id="country">
							<div class="error font-13 noto-regular">გთხოვთ შეავსოთ ფორმა</div>
						</div>
						<div class="input">
							<label for="last" class="font-16 noto-bold">
								მიმდინარე/ბოლო დამსაქმებელი<span class="font-16 noto-bold">*</span>
							</label>
							<input class="font-16 noto-bold" type="text" id="last">
							<div class="error font-13 noto-regular">გთხოვთ შეავსოთ ფორმა</div>
						</div>
						<div class="input">
							<label for="email" class="font-16 noto-bold">
								ელ-ფოსტა<span class="font-16 noto-bold">*</span>
							</label>
							<input class="font-16 noto-bold" type="text" id="email">
							<div class="error font-13 noto-regular">გთხოვთ შეავსოთ ფორმა</div>
						</div>
						<div class="input">
							<label for="mobile" class="font-16 noto-bold">
								მობილურის ნომერი<span class="font-16 noto-bold">*</span>
							</label>
							<input class="font-16 noto-bold" type="text" id="mobile">
							<div class="error font-13 noto-regular">გთხოვთ შეავსოთ ფორმა</div>
						</div>
						<div class="input file-input">
							<label for="file-input" class="font-16 noto-bold">
								ატვირთეთ თქვენი რეზიუმე/CV<span>*</span>
							</label>
							<div class="content">
								<img src="{{asset('assets/img/Rectangle 1537.png')}}" alt="">
								<input type="file" id="file-input">
								<h2 class="font-13 noto-bold">ფაილის დამატება</h2>
								<div class="file-name">
									<h3 class="font-13 font-bold">file name</h3>
									<img src="{{asset('assets/img/Group 489.svg')}}" alt="">
								</div>
							</div>
							<div class="error font-13 noto-regular">გთხოვთ შეავსოთ ფორმა</div>
						</div>
						<div class="input">
							<label for="motivation" class="font-16 noto-bold">
								სამოტივაციო წერილი
							</label>
							<textarea class="font-16 noto-bold" type="text" id="motivation"></textarea>
						</div>
						<div class="agree">
							<div class="checkbox">
								<input type="checkbox">
								<div class="box">
									<img src="{{asset('assets/img/Icon awesome-check.svg')}}" alt="">
								</div>
							</div>
							<span class="font-16 noto-bold">
								ვეთანხმები <a href="" class="font-16 noto-bold">მონაცემების გამოყენების პოლიტიკას</a>
							</span>
						</div>
						<button type="submit">submit</button>
					</form>
				</div>
			</div>
			<div class="vacancy-footer">
				<div class="socials">
					<span class="font-16 noto-bold">გაუზიარე მეგობარს:</span>
					<a href="">
						<img src="{{asset('assets/img/Subtraction 3.svg')}}" alt="">
					</a>
					<a href="">
						<img src="{{asset('assets/img/twitter-square-brands.svg')}}" alt="">
					</a>
					<a href="">
						<img src="{{asset('assets/img/envelope-square-solid.svg')}}" alt="">
					</a>
				</div>
				<div class="back">
					<a href="">
						<img src="{{asset('assets/img/Group 599.svg')}}" alt="">
						<span class="font-16 noto-bold">უკან დაბრუნება	</span>
					</a>
				</div>
			</div>
		</div>    
	</section>

</div>



@endsection
@extends('app.layout.app')
@section('pageName') @endsection
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
	                    <i></i>
	                    სააპლიკაციო ანკეტა
	                </a>
	                <a href="##" class="directionHeadTab fira-bold uppercase">
	                    <i></i>
	                    სააპლიკაციო ანკეტა
	                </a>
	                <a href="##" class="directionHeadTab fira-bold uppercase">
	                    <i></i>
	                    სააპლიკაციო ანკეტა
	                </a>
	                <a href="##" class="directionHeadTab fira-bold uppercase">
	                    <i></i>
	                    სააპლიკაციო ანკეტა
	                </a>
	            </div>
	        </div>
	    </div>
	</section>


	<section class="directHeadContainer vacancy suggesstion">
		<div class="white--container">
			<div class="header">
				<h1 class="font-34 fira-bold kfn_anim k-fadeUp">
					საბეჭდი და ტიპოგრაფიული ინდუსტრიის უშინაარსო ტექსტია. იგი სტანდარტად 1500-იანი წლებიდან იქცა.
				</h1>
				<div class="text kfn_anim k-fadeUp">
					საბეჭდი და ტიპოგრაფიული ინდუსტრიის უშინაარსო ტექსტია. იგი სტანდარტად 1500-იანი წლებიდან იქცა, როდესაც უცნობმა მბეჭდავმა ამწყობ დაზგაზე წიგნის საცდელი ეგზემპლარი დაბეჭდა. მისი ტექსტი არამარტო 5 საუკუნის მანძილზე შემორჩა, არამედ მან დღემდე, ელექტრონული ტიპოგრაფიის დრომდეც უცვლელად მოაღწია. განსაკუთრებული პოპულარობა მას 1960-იან წლებში გამოსულმა Letraset-ის ცნობილმა ტრაფარეტებმა მოუტანა, უფრო მოგვიანებით კი — Aldus PageMaker-ის ტიპის საგამომცემლო პროგრამებმა, რომლებშიც Lorem Ipsum-ის სხვადასხვა ვერსიები იყო ჩაშენებული.
				</div>
			</div>
			<div class="main-container">
				<div class="item">
					<div class="box kfn_anim k-fadeUp">
						<div class="image">
							<img src="{{asset('assets/img/businessHead.jpg')}}" alt="">
						</div>
						<div class="text-container">
							<div class="side">
								<img src="{{asset('assets/img/Curatio.jpg')}}" alt="">
								<img src="{{asset('assets/img/Path 9690.svg')}}" alt="" id="line">
							</div>
							<div class="side">
								<h2 class="font-34 fira-bold">
									კლინიკის სურათი <span>40%-მდე</span>
								</h2>
								<h3 class="font-16 noto-bold">
									ესთეტიკური პროცედურები, მასაჟი, ეპილაცია
								</h3>
								<div class="foot">
									<div class="address font-13 noto-bold">
										ქალაქი: თბილისი
									</div>
									<div class="tel">
										<span class="font-13 noto-bold">ტელეფონი:</span>
										<a class="font-13 noto-bold" href="tel:123123">2722551</a>,
										<a class="font-13 noto-bold" href="tel:123123">2722551</a>
									</div>
									<div class="webpage">
										<a href="" class="font-13 noto-bold">
											ვებგვერდი
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box kfn_anim k-fadeUp">
						<div class="image">
							<img src="{{asset('assets/img/businessHead.jpg')}}" alt="">
						</div>
						<div class="text-container">
							<div class="side">
								<img src="{{asset('assets/img/Curatio.jpg')}}" alt="">
								<img src="{{asset('assets/img/Path 9690.svg')}}" alt="" id="line">
							</div>
							<div class="side">
								<h2 class="font-34 fira-bold">
									კლინიკის სურათი <span>40%-მდე</span>
								</h2>
								<h3 class="font-16 noto-bold">
									ესთეტიკური პროცედურები, მასაჟი, ეპილაცია
								</h3>
								<div class="foot">
									<div class="address font-13 noto-bold">
										ქალაქი: თბილისი
									</div>
									<div class="tel">
										<span class="font-13 noto-bold">ტელეფონი:</span>
										<a class="font-13 noto-bold" href="tel:123123">2722551</a>,
										<a class="font-13 noto-bold" href="tel:123123">2722551</a>
									</div>
									<div class="webpage">
										<a href="" class="font-13 noto-bold">
											ვებგვერდი
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box kfn_anim k-fadeUp">
						<div class="image">
							<img src="{{asset('assets/img/businessHead.jpg')}}" alt="">
						</div>
						<div class="text-container">
							<div class="side">
								<img src="{{asset('assets/img/Curatio.jpg')}}" alt="">
								<img src="{{asset('assets/img/Path 9690.svg')}}" alt="" id="line">
							</div>
							<div class="side">
								<h2 class="font-34 fira-bold">
									კლინიკის სურათი <span>40%-მდე</span>
								</h2>
								<h3 class="font-16 noto-bold">
									ესთეტიკური პროცედურები, მასაჟი, ეპილაცია
								</h3>
								<div class="foot">
									<div class="address font-13 noto-bold">
										ქალაქი: თბილისი
									</div>
									<div class="tel">
										<span class="font-13 noto-bold">ტელეფონი:</span>
										<a class="font-13 noto-bold" href="tel:123123">2722551</a>,
										<a class="font-13 noto-bold" href="tel:123123">2722551</a>
									</div>
									<div class="webpage">
										<a href="" class="font-13 noto-bold">
											ვებგვერდი
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box kfn_anim k-fadeUp">
						<div class="image">
							<img src="{{asset('assets/img/businessHead.jpg')}}" alt="">
						</div>
						<div class="text-container">
							<div class="side">
								<img src="{{asset('assets/img/Curatio.jpg')}}" alt="">
								<img src="{{asset('assets/img/Path 9690.svg')}}" alt="" id="line">
							</div>
							<div class="side">
								<h2 class="font-34 fira-bold">
									კლინიკის სურათი <span>40%-მდე</span>
								</h2>
								<h3 class="font-16 noto-bold">
									ესთეტიკური პროცედურები, მასაჟი, ეპილაცია
								</h3>
								<div class="foot">
									<div class="address font-13 noto-bold">
										ქალაქი: თბილისი
									</div>
									<div class="tel">
										<span class="font-13 noto-bold">ტელეფონი:</span>
										<a class="font-13 noto-bold" href="tel:123123">2722551</a>,
										<a class="font-13 noto-bold" href="tel:123123">2722551</a>
									</div>
									<div class="webpage">
										<a href="" class="font-13 noto-bold">
											ვებგვერდი
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			@include('app.layout.components.pagination')
			<div class="line m-t-144"></div>
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

@include('app.layout.components.ltlCommercial')



@endsection
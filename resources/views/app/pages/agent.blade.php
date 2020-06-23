@extends('app.layout.app')
@section('pageName')agent @endsection
@section('content')

@include('app.layout.components.directionTabHead')
<div class="directHeadContainer">
	<div class="directHeadInner">
		<div class="agent">
				<div class="img-box">
					<picture>
			            <source media="(max-width: 767px)" srcset="{{asset('http://gpi.connect.ge/assets/img/sport.jpg')}}">
			            <source media="(max-width: 1023px)" srcset="{{asset('http://gpi.connect.ge/assets/img/sport.jpg')}}">
			            <img src="{{asset('http://gpi.connect.ge/assets/img/sport.jpg')}}" class="img-absolute" alt="">
			        </picture>
	                <div class="img-layer"></div>
				</div>
				<div class="content">
					<div class="top">
						<h2 class="noto-bold font-34 ttl">ნიკა გელაშვილი </h2>
						<div class="font-21 city">თბილისი</div>
					</div>
					<div class="info">
						<div>
							<span class="">ელ ფოსტა</span>
							<a class="font-21 noto-bold" href="mailto:n.gelashvili@gpih.ge">n.gelashvili@gpih.ge</a>
						</div>

						<div>
							<span class="">ნომერი</span>
							<a class="font-21 noto-bold color-prim" href="tel:">032 2 505 111</a>
						</div>
					</div>

					<div class="rate">
						<span class="">132</span>
						<span class="">შეფასება</span>
						<span class="">
							(4/5)
						</span>
					</div>

					<div class="stars one">
						<svg xmlns="http://www.w3.org/2000/svg" width="16.842" height="16" viewBox="0 0 16.842 16">
						  <path id="Icon_material-star" data-name="Icon material-star" d="M11.421,15.859,16.625,19l-1.381-5.92,4.6-3.983-6.055-.514L11.421,3,9.055,8.583,3,9.1,7.6,13.08,6.217,19Z" transform="translate(-3 -3)" fill="#9199b4"/>
						</svg>

						<svg xmlns="http://www.w3.org/2000/svg" width="16.842" height="16" viewBox="0 0 16.842 16">
						  <path id="Icon_material-star" data-name="Icon material-star" d="M11.421,15.859,16.625,19l-1.381-5.92,4.6-3.983-6.055-.514L11.421,3,9.055,8.583,3,9.1,7.6,13.08,6.217,19Z" transform="translate(-3 -3)" fill="#9199b4"/>
						</svg>

						<svg xmlns="http://www.w3.org/2000/svg" width="16.842" height="16" viewBox="0 0 16.842 16">
						  <path id="Icon_material-star" data-name="Icon material-star" d="M11.421,15.859,16.625,19l-1.381-5.92,4.6-3.983-6.055-.514L11.421,3,9.055,8.583,3,9.1,7.6,13.08,6.217,19Z" transform="translate(-3 -3)" fill="#9199b4"/>
						</svg>

						<svg xmlns="http://www.w3.org/2000/svg" width="16.842" height="16" viewBox="0 0 16.842 16">
						  <path id="Icon_material-star" data-name="Icon material-star" d="M11.421,15.859,16.625,19l-1.381-5.92,4.6-3.983-6.055-.514L11.421,3,9.055,8.583,3,9.1,7.6,13.08,6.217,19Z" transform="translate(-3 -3)" fill="#9199b4"/>
						</svg>
						
						<svg xmlns="http://www.w3.org/2000/svg" width="16.842" height="16" viewBox="0 0 16.842 16">
						  <path id="Icon_material-star" data-name="Icon material-star" d="M11.421,15.859,16.625,19l-1.381-5.92,4.6-3.983-6.055-.514L11.421,3,9.055,8.583,3,9.1,7.6,13.08,6.217,19Z" transform="translate(-3 -3)" fill="#9199b4"/>
						</svg>

					</div>


					<div class="connect-btn connect-agent">
						<span class="fira-bold">დამიკავშირდი</span>
					</div>
				</div>

				<div class="ver-social">
					<div class="social">
						<span class="noto-bold">გაუზიარე მეგობარს:</span>
						<div>
							<a href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="31.997" height="31.004" viewBox="0 0 31.997 31.004">
								  <path id="Subtraction_3" data-name="Subtraction 3" d="M30,31H2a2,2,0,0,1-2-2V2A2,2,0,0,1,2,0H30a2,2,0,0,1,2,2V29A2,2,0,0,1,30,31ZM12.726,12.766a.712.712,0,0,0-.722.7v2.743a.691.691,0,0,0,.2.516.737.737,0,0,0,.522.216H13.95a.21.21,0,0,1,.213.206v7.491a.713.713,0,0,0,.723.7H17.7a.712.712,0,0,0,.722-.7V17.143a.21.21,0,0,1,.213-.206h2.044a.719.719,0,0,0,.714-.6l.473-2.743a.68.68,0,0,0-.155-.585.731.731,0,0,0-.556-.251h-2.4a.331.331,0,0,1-.336-.325v-1.75a.616.616,0,0,1,.186-.52.667.667,0,0,1,.46-.184.676.676,0,0,1,.076,0h2.134a.712.712,0,0,0,.722-.7V6.511a.712.712,0,0,0-.722-.7H18.742a4.766,4.766,0,0,0-3.505,1.183,4.025,4.025,0,0,0-1.069,2.977V12.56a.21.21,0,0,1-.212.206Z" transform="translate(-0.004 0.003)" fill="#292562"></path>
								</svg>
							</a>
							<a href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="31.5" height="31.5" viewBox="0 0 31.5 31.5">
								  <path id="twitter-square-brands" d="M28.125,32H3.375A3.376,3.376,0,0,0,0,35.375v24.75A3.376,3.376,0,0,0,3.375,63.5h24.75A3.376,3.376,0,0,0,31.5,60.125V35.375A3.376,3.376,0,0,0,28.125,32ZM24.687,43.166c.014.2.014.4.014.6a13.031,13.031,0,0,1-13.12,13.12A13.06,13.06,0,0,1,4.5,54.816a9.716,9.716,0,0,0,1.111.056A9.246,9.246,0,0,0,11.334,52.9a4.618,4.618,0,0,1-4.31-3.2,4.97,4.97,0,0,0,2.081-.084,4.612,4.612,0,0,1-3.691-4.528v-.056A4.609,4.609,0,0,0,7.5,45.62,4.6,4.6,0,0,1,5.442,41.78a4.554,4.554,0,0,1,.626-2.327,13.094,13.094,0,0,0,9.506,4.823,4.621,4.621,0,0,1,7.868-4.212,9.037,9.037,0,0,0,2.925-1.111,4.6,4.6,0,0,1-2.025,2.538A9.177,9.177,0,0,0,27,40.775,9.706,9.706,0,0,1,24.687,43.166Z" transform="translate(0 -32)" fill="#292562"></path>
								</svg>
							</a>
							<a href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="31.5" height="31.5" viewBox="0 0 31.5 31.5">
								  <path id="envelope-square-solid" d="M28.125,32H3.375A3.375,3.375,0,0,0,0,35.375v24.75A3.375,3.375,0,0,0,3.375,63.5h24.75A3.375,3.375,0,0,0,31.5,60.125V35.375A3.375,3.375,0,0,0,28.125,32Zm-15.6,16.179C6.147,43.551,6.212,43.54,4.5,42.207v-1.77A1.687,1.687,0,0,1,6.188,38.75H25.313A1.687,1.687,0,0,1,27,40.437v1.77c-1.714,1.334-1.648,1.345-8.024,5.972-.738.538-2.207,1.837-3.226,1.821C14.73,50.015,13.263,48.718,12.524,48.179ZM27,45.062v10a1.687,1.687,0,0,1-1.687,1.687H6.188A1.687,1.687,0,0,1,4.5,55.063v-10c.981.759,2.343,1.774,6.7,4.937,1,.727,2.67,2.26,4.549,2.251,1.89.009,3.589-1.55,4.551-2.252C24.657,46.837,26.019,45.821,27,45.062Z" transform="translate(0 -32)" fill="#292562"></path>
								</svg>
							</a>
						</div>
					</div>

					<a href="#" class="back-btn">
						<svg xmlns="http://www.w3.org/2000/svg" width="48.914" height="10.829" viewBox="0 0 48.914 10.829">
						  <g id="Group_599" data-name="Group 599" transform="translate(1.414 1.414)">
						    <g id="Group_108" data-name="Group 108">
						      <line id="Line_14" data-name="Line 14" x1="46.5" transform="translate(0 4)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="2"></line>
						      <line id="Line_15" data-name="Line 15" x1="4" y2="4" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="2"></line>
						      <line id="Line_16" data-name="Line 16" x1="4" y1="4" transform="translate(0 4)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="2"></line>
						    </g>
						  </g>
						</svg>

						<span class="noto-bold">უკან დაბრუნება</span>
					</a>

				</div>
			</div>
			<div class="m-t-144 comments">
				<div class="fira-bold font-34 ttl">კომენტარები</div>

				<div class="comment-list">

					<div class="comment">
						<div class="noto-bold font-21 ttl">თინათინ ლომიძე</div>
						<time>12 დეკ 2020</time>
						<div class="text">
							როდესაც დიზაინის შესრულებისას საჩვენებელია, თუ როგორი იქნება ტექსტის ბლოკი. სწორედ ასეთ დროს არის მოსახერხებელი ამ გენერატორით შექმნილი ტექსტის გამოყენება, რადგან უბრალოდ „ტექსტი ტექსტი ტექსტი“ ან სხვა გამეორებადი სიტყვების ჩაყრა, ხელოვნურ ვიზუალურ სიმეტრიას ქმნის და არაბუნებრივად გამოიყურება.
						</div>
					</div>

					<div class="comment">
						<div class="noto-bold font-21 ttl">თინათინ ლომიძე</div>
						<time>12 დეკ 2020</time>
						<div class="text">
							როდესაც დიზაინის შესრულებისას საჩვენებელია, თუ როგორი იქნება ტექსტის ბლოკი. სწორედ ასეთ დროს არის მოსახერხებელი ამ გენერატორით შექმნილი ტექსტის გამოყენება, რადგან უბრალოდ „ტექსტი ტექსტი ტექსტი“ ან სხვა გამეორებადი სიტყვების ჩაყრა, ხელოვნურ ვიზუალურ სიმეტრიას ქმნის და არაბუნებრივად გამოიყურება.
						</div>
					</div>

					<div class="comment">
						<div class="noto-bold font-21 ttl">გიორგი ლომიძე</div>
						<time>12 დეკ 2020</time>
						<div class="text">
							ჯიპიაი ჰოლდინგი დაარსდა 2001 წელის როგორც პირველი კერძო საპენსიო ფონდი საქართველოში. კომპანიისთვის თავიდანვე პრიორიტეტად იქცა საქართველოში ე.წ. სოციალური დაზღვევის: ჯანმრთელობის, სიცოცხლისა და საპენსიო დაზღვევის პოპულარიზება და გავითარება. ამ მიმართულებას "ჯიპიაი ჰოლდინგი" დღესაც აქტიურად ავითარებს.

							"ჯიპიაი ჰოლდინგი" საქმიანობის პირველსავე წელს მნიშვნელოვან შედეგებს მიაღწია დაზღვევის სხვადასხვა სფეროში. ჰოლდინგი დღესაც ინარჩუნებს მოწინავე სადაზღვევო კომპანიის სტატუსს როგორც ზოგადად, ბაზარზე, ისე ცალკეული მიმიმართულებებით, მაგ. ჯანმრთელობის დაზღვევა, ავტოდაზღვევა, ქონების დაზღვევა და ა.შ.

							2006 წლიდან "ჯიპიაი ჰოლდინგი" ევროპის ერთ-ერთი უმსხვილესი სადაზღვევო კომპანიის, "ვენის სადაზღვევო ჯგუფის" წევრი გახდა. კომპანიისთვის ეს იყო მნიშვნელოვანი წინსვლა, არამხოლოდ ფინანსური სტაბილურობის, არამედ გამოცდილების გაზიარების თვალსაზრისითაც: საქართველოში პირველად მსგავსი დონისა და რეიტინგის უცხოური კომპანია ადგილობრივი კომპანიის აქციონერი გახდა.
							.
						</div>
					</div>

				</div>


				<div class="more-btn">
					<span class="noto-bold">მეტის ნახვა</span>
				</div>
			</div>
			<form action="" class="m-t-144 comment-form">
				
				<div class="rate-agent">
					<span class="font-13">შეფასება:</span>

					<input type="text" class="checkbox-input">
					<div style="display: flex; justify-content: center">
						<div class="checkbox-list">
							<div class="checkbox-star-wrap">
								<input type="checkbox" class="checkbox-star" data-star="one">
								<svg xmlns="http://www.w3.org/2000/svg" width="16.842" height="16" viewBox="0 0 16.842 16">
								  <path id="Icon_material-star" data-name="Icon material-star" d="M11.421,15.859,16.625,19l-1.381-5.92,4.6-3.983-6.055-.514L11.421,3,9.055,8.583,3,9.1,7.6,13.08,6.217,19Z" transform="translate(-3 -3)" fill="#9199b4"></path>
								</svg>
							</div>
							<div class="checkbox-star-wrap">
								<input type="checkbox" class="checkbox-star" data-star="two">
								<svg xmlns="http://www.w3.org/2000/svg" width="16.842" height="16" viewBox="0 0 16.842 16">
								  <path id="Icon_material-star" data-name="Icon material-star" d="M11.421,15.859,16.625,19l-1.381-5.92,4.6-3.983-6.055-.514L11.421,3,9.055,8.583,3,9.1,7.6,13.08,6.217,19Z" transform="translate(-3 -3)" fill="#9199b4"></path>
								</svg>
							</div>
							<div class="checkbox-star-wrap">
								<input type="checkbox" class="checkbox-star" data-star="three">
								<svg xmlns="http://www.w3.org/2000/svg" width="16.842" height="16" viewBox="0 0 16.842 16">
								  <path id="Icon_material-star" data-name="Icon material-star" d="M11.421,15.859,16.625,19l-1.381-5.92,4.6-3.983-6.055-.514L11.421,3,9.055,8.583,3,9.1,7.6,13.08,6.217,19Z" transform="translate(-3 -3)" fill="#9199b4"></path>
								</svg>
							</div>
							<div class="checkbox-star-wrap">
								<input type="checkbox" class="checkbox-star" data-star="four">
								<svg xmlns="http://www.w3.org/2000/svg" width="16.842" height="16" viewBox="0 0 16.842 16">
								  <path id="Icon_material-star" data-name="Icon material-star" d="M11.421,15.859,16.625,19l-1.381-5.92,4.6-3.983-6.055-.514L11.421,3,9.055,8.583,3,9.1,7.6,13.08,6.217,19Z" transform="translate(-3 -3)" fill="#9199b4"></path>
								</svg>
							</div>
							<div class="checkbox-star-wrap">
								<input type="checkbox" class="checkbox-star" data-star="five">
								<svg xmlns="http://www.w3.org/2000/svg" width="16.842" height="16" viewBox="0 0 16.842 16">
								  <path id="Icon_material-star" data-name="Icon material-star" d="M11.421,15.859,16.625,19l-1.381-5.92,4.6-3.983-6.055-.514L11.421,3,9.055,8.583,3,9.1,7.6,13.08,6.217,19Z" transform="translate(-3 -3)" fill="#9199b4"></path>
								</svg>
							</div>
						</div>
					</div>
				</div>

				<div class="fira-bold font-21 ttl">კომენტარის დამატება</div>

				<label for="">
					<span class="noto-bold">სახელი და გვარი</span>
					<span class="color-prim">*</span>
				</label>
				<input type="text" class="input">

				<label for="">
					<span class="noto-bold">სახელი და გვარი</span>
					<span class="color-prim">*</span>
				</label>
				<textarea name="" id="" ></textarea>

				<div class="bottom">
					<div class="captcha">captcha</div>
					<button class="noto-bold send-btn">გაგზავნა</button>
				</div>
			</form>
	</div>
</div>

<div class="message-popup">
	 <form action="" class="massage-form">
		<div class="close close-agent">
			<svg xmlns="http://www.w3.org/2000/svg" width="27.21" height="27.21" viewBox="0 0 27.21 27.21">
			  <g id="Group_3164" data-name="Group 3164" transform="translate(23.674 3.536) rotate(90)">
			    <line id="Line_15" data-name="Line 15" x2="20.139" y2="20.139" transform="translate(0 0)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="5"/>
			    <line id="Line_16" data-name="Line 16" y1="20.139" x2="20.139" transform="translate(0 0)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="5"/>
			  </g>
			</svg>
		</div>

	 	<div class="noto-bold font-34 ttl">დატოვეთ შეტყობინება</div>

	 	<div class="input-wrap">
			<div class="placeholder-wrap">
				<input class="v-empty" type="text">
				<div class="placeholder">
					<span>სახელი</span>
					<span>*</span>
				</div>
			</div>
			<div class="error-msg">
				<span>მიუთითეთ სახელი</span>
			</div>
		</div>

		<div class="input-wrap">
			<div class="placeholder-wrap">
				<input class="v-empty" type="text">
				<div class="placeholder">
					<span>ტელეფონის ნომერი</span>
					<span>*</span>
				</div>
			</div>
			<div class="error-msg">
				<span>მიუთითეთ სახელი</span>
			</div>
		</div>

		<div class="input-wrap">
			<div class="placeholder-wrap">
				<input class="v-empty" type="text">
				<div class="placeholder">
					<span>რა პროდუქტი გაინტერესებთ</span>
					<span></span>
				</div>
			</div>
			<div class="error-msg">
				<span>მიუთითეთ სახელი</span>
			</div>
		</div>

		<div class="textarea-wrap">
			<div class="placeholder-wrap">
				<textarea class="v-empty" rows="1"></textarea>
				<div class="placeholder">
					<span>შეტყობინება</span>
					<span>*</span>
				</div>
			</div>
			<div class="line"></div>
			<div class="error-msg">
				<span>ჩაწერეთ ტექსტი</span>
			</div>
		</div>

		<div class="btn-wrap">
			<div class="captcha">captcha</div>
            <button class="noto-bold send-btn">გაგზავნა</button>
		</div>
	 </form>  
</div>


@endsection
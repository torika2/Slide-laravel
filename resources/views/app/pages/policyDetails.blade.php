@extends('app.layout.app')
@section('pageName')policy-details @endsection
@section('content')
<section class="head">
    <div class="img-box">
        <picture>
            <source media="(max-width: 767px)" srcset="{{asset('assets/img/sport.jpg')}}">
            <source media="(max-width: 1023px)" srcset="{{asset('assets/img/sport.jpg')}}">
            <img src="{{asset('assets/img/sport.jpg')}}" class="img-absolute" alt="">
        </picture>
        <div class="img-overlay"></div>
    </div>
    <div class="nav">
    	<a href="#">
    		<span>ჩემთვის</span>
    		<svg xmlns="http://www.w3.org/2000/svg" width="6" height="8" viewBox="0 0 6 8">
			  <path id="Polygon_16" data-name="Polygon 16" d="M4,0,8,6H0Z" transform="translate(6) rotate(90)" fill="#fff" opacity="0.8"/>
			</svg>
    	</a>
    	<a href="#">
    		<span>დაზღვევა</span>
    		<svg xmlns="http://www.w3.org/2000/svg" width="6" height="8" viewBox="0 0 6 8">
			  <path id="Polygon_16" data-name="Polygon 16" d="M4,0,8,6H0Z" transform="translate(6) rotate(90)" fill="#fff" opacity="0.8"/>
			</svg>
    	</a>
    	<a href="#">
    		<span>ჯამთელობის დაზღვევა</span>
    		<svg xmlns="http://www.w3.org/2000/svg" width="6" height="8" viewBox="0 0 6 8">
			  <path id="Polygon_16" data-name="Polygon 16" d="M4,0,8,6H0Z" transform="translate(6) rotate(90)" fill="#fff" opacity="0.8"/>
			</svg>
    	</a>
    	<a href="#">
    		<span>პოლისი მედი</span>
    		<svg xmlns="http://www.w3.org/2000/svg" width="6" height="8" viewBox="0 0 6 8">
			  <path id="Polygon_16" data-name="Polygon 16" d="M4,0,8,6H0Z" transform="translate(6) rotate(90)" fill="#fff" opacity="0.8"/>
			</svg>
    	</a>
    </div>
    <h1 class="fira-bold font-55 white ttl">მედი ბაზისური</h1>
    <a href="" class="sign-up-btn">
    	<svg xmlns="http://www.w3.org/2000/svg" width="29" height="29.021" viewBox="0 0 29 29.021">
		  <g id="Group_3s472" data-name="Group 3s472" transform="translate(633 12556.021)">
		    <g id="Rectangle_1557" data-name="Rectangle 1557" transform="translate(-633 -12554)" fill="none" stroke="#fff" stroke-width="2">
		      <rect width="29" height="27" rx="2" stroke="none"/>
		      <rect x="1" y="1" width="27" height="25" rx="1" fill="none"/>
		    </g>
		    <path id="Path_10682" data-name="Path 10682" d="M-15450.782,140.979V145.8" transform="translate(14823 -12696)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
		    <path id="Path_10683" data-name="Path 10683" d="M-15450.782,140.979V145.8" transform="translate(14826 -12696)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
		    <path id="Path_10684" data-name="Path 10684" d="M-15450.782,120.282V145.8" transform="translate(-485.395 2904.17) rotate(90)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
		    <path id="Path_10685" data-name="Path 10685" d="M-15450.782,140.979V145.8" transform="translate(14838 -12696)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
		    <path id="Path_10686" data-name="Path 10686" d="M-15450.782,140.979V145.8" transform="translate(14841 -12696)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
		  </g>
		</svg>
		<span class="noto-semibold white">ექიმთან ჩაეწერე</span>
    </a>

    <div class="price-box">
    	<div class="top">
    		<div class="noto-bold num">
    			11
    		</div>
    		<div class="price">
    			₾
    		</div>
    	</div>
    	<div class="bottom">
    		<svg xmlns="http://www.w3.org/2000/svg" width="26.606" height="25.606" viewBox="0 0 93.689 25.606">
			  <g id="Group_1635" data-name="Group 1635" transform="translate(0.189 0.153)">
			    
			    <path id="shedzena" d="M27.235,7.74h0a.849.849,0,0,0-.768-.41L10.978,6.646a.992.992,0,0,0-.067,1.983l14.221.615L22.4,18H10.01L7.774,5.415a.981.981,0,0,0-.6-.752l-3.739-1.5a.963.963,0,0,0-1.269.547,1.033,1.033,0,0,0,.534,1.3L5.938,6.3l2.3,12.854a.977.977,0,0,0,.968.82h.134l-.8,2.29a1.041,1.041,0,0,0,.1.889.807.807,0,0,0,.668.376h.434a3.037,3.037,0,0,0-.734,1.949,2.838,2.838,0,1,0,4.94-1.949h4.607a3.037,3.037,0,0,0-.734,1.949,2.838,2.838,0,1,0,4.94-1.949H23.1a.848.848,0,0,0,.835-.957.837.837,0,0,0-.835-.855H10.545l.6-1.709H23.1a.974.974,0,0,0,.935-.684L27.369,8.663A1.247,1.247,0,0,0,27.235,7.74ZM11.88,26.611a1.2,1.2,0,1,1,1.168-1.2A1.2,1.2,0,0,1,11.88,26.611Zm8.813,0a1.2,1.2,0,1,1,1.168-1.2A1.2,1.2,0,0,1,20.693,26.611Z" transform="translate(-2.098 -3.086)" fill="#ee2a7b" stroke="#fff" stroke-width="0.3"/>
			  </g>
			</svg>

			<span class="noto-bold">შეძენა</span>
    	</div>
    </div>
</section>


<div class="package-cont">
	<div class="package-inner">
		<h2 class="fira-bold font-34 ttl">ჯამთელობის ინდივიდუალური დაზღვევა</h2>
		<h3 class="noto-bold subtitle">მაღალი ხარისხის მომსახურება და 
		მრავალფეროვანი სამედიცინო სერვისის დაფინანსება.</h3>
		<div class="text">
			დაზღვევის მომენტიდან თქვენ პირადი ექიმი გყავთ, ბავშვის დაზღვევის შემთხვევაში კი - პირადი პედიატრი. პოლისი ,,მედით" აგინაზღაურდებათ როგორც ამბულატორიული მომსახურების (ვიზიტები სპეციალისტებთან, გამოკვლევები, ანალიზები, ა.შ.), ასევე უეცარ ავადმყოფობასთან დაკავშირებული ხარჯების უმეტესი ნაწილი.

			პოლისი ,,მედით" თავს დაცულად იგრძნობთ, ვინაიდან გაუთვალისწინებელ შემთხვევებში ხარჯების უმეტეს ნაწილს ჩვენ დავფარავთ. რაც მთავარია, თქვენ დარწმუნდებით, რომ ჩვენ მუდამ თქვენს გვერდით ვართ - დღის და ღამის ნებისმიერ მომენტში!
			პოლისის შეძენისას თქვენ ავტომატურად ერთვებით ლოიალობის პროგრამაში! დააგროვეთ ეკო მონეტები!

			ისარგებლეთ სხვადასხვა ფასდაკლებებით საცურაო აუზებსა და ესთეტიკურ ცენტრებში

		</div>

		<div class="package-details">
			<h2 class="noto-bold font-21 ttl">მედი ბაზისური პოლისის დეტალები</h2>

			<div class="package-details-list">
				 <div class="item">
				 	<div class="info">
				 		<svg xmlns="http://www.w3.org/2000/svg" width="17.383" height="17.383" viewBox="0 0 17.383 17.383">
						  <path id="MenuClaims" d="M445,8.691a8.692,8.692,0,1,1,8.692,8.692A8.691,8.691,0,0,1,445,8.691Zm1.365,0a7.326,7.326,0,1,0,7.326-7.326A7.322,7.322,0,0,0,446.365,8.691Zm6.849,4.3a.619.619,0,0,1-.2-.478.654.654,0,0,1,.2-.478.7.7,0,0,1,.955,0,.619.619,0,0,1,.2.478.654.654,0,0,1-.2.478.619.619,0,0,1-.478.2A.757.757,0,0,1,453.214,12.992Zm-.2-2.844V4.869a.682.682,0,1,1,1.365,0v5.279a.682.682,0,1,1-1.365,0Z" transform="translate(-445)" fill="#292562"/>
						</svg>
						<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17">
						  <g id="Group_3474" data-name="Group 3474" transform="translate(-4363 -1896)">
						    <circle id="Ellipse_105" data-name="Ellipse 105" cx="8.5" cy="8.5" r="8.5" transform="translate(4363 1896)" fill="#ee2a7b"/>
						    <path id="MenuClaims" d="M453.214,12.992a.619.619,0,0,1-.2-.478.654.654,0,0,1,.2-.478.7.7,0,0,1,.955,0,.619.619,0,0,1,.2.478.654.654,0,0,1-.2.478.619.619,0,0,1-.478.2A.757.757,0,0,1,453.214,12.992Zm-.2-2.844V4.869a.682.682,0,1,1,1.365,0v5.279a.682.682,0,1,1-1.365,0Z" transform="translate(3917.821 1895.861)" fill="#fff"/>
						  </g>
						</svg>

						<div class="popup">
							სამკურნალო მანიპულაციები, რომლებიც არ საჭიროებენ პაციენტის მიერ საწოლის დაკავებას. მომსახურებაზე ვრცელდება მოცდის პერიოდი 24 თვე.
						</div>
				 	</div>
				 	<div class="description">
				 		<div>
				 			<span>გეგმიური ამბულატორიული მომსახურება პირადი ექიმის სამსახურის ბაზაზე  </span>
				 			<svg xmlns="http://www.w3.org/2000/svg" width="1" height="25.032" viewBox="0 0 0.5 25.032">
							  <path id="Path_6241" data-name="Path 6241" d="M655-7923.56h24.532" transform="translate(-7923.31 -654.75) rotate(90)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"></path>
							</svg>
				 		</div>
				 		<div>
				 			<span>100% ულიმიტო წელიწადში ერთხელ და რაღაც</span>
				 		</div>
				 	</div>
				 	<div class="svg-wrap">
					 	<svg xmlns="http://www.w3.org/2000/svg" width="1555.746" height="1" viewBox="0 0 1555.746 0.5">
						  <path id="Path_6197" data-name="Path 6197" d="M655-7923.56H2210.246" transform="translate(-654.75 7923.81)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"></path>
						</svg>
						<svg xmlns="http://www.w3.org/2000/svg" width="25.032" height="1" viewBox="0 0 25.032 0.5">
						  <path id="Path_10495" data-name="Path 10495" d="M655-7923.56h24.532" transform="translate(679.782 -7923.31) rotate(180)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"/>
						</svg>

					</div>
				 </div>

				 <div class="item">
				 	<div class="info">
				 		<svg xmlns="http://www.w3.org/2000/svg" width="17.383" height="17.383" viewBox="0 0 17.383 17.383">
						  <path id="MenuClaims" d="M445,8.691a8.692,8.692,0,1,1,8.692,8.692A8.691,8.691,0,0,1,445,8.691Zm1.365,0a7.326,7.326,0,1,0,7.326-7.326A7.322,7.322,0,0,0,446.365,8.691Zm6.849,4.3a.619.619,0,0,1-.2-.478.654.654,0,0,1,.2-.478.7.7,0,0,1,.955,0,.619.619,0,0,1,.2.478.654.654,0,0,1-.2.478.619.619,0,0,1-.478.2A.757.757,0,0,1,453.214,12.992Zm-.2-2.844V4.869a.682.682,0,1,1,1.365,0v5.279a.682.682,0,1,1-1.365,0Z" transform="translate(-445)" fill="#292562"/>
						</svg>
						<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17">
						  <g id="Group_3474" data-name="Group 3474" transform="translate(-4363 -1896)">
						    <circle id="Ellipse_105" data-name="Ellipse 105" cx="8.5" cy="8.5" r="8.5" transform="translate(4363 1896)" fill="#ee2a7b"/>
						    <path id="MenuClaims" d="M453.214,12.992a.619.619,0,0,1-.2-.478.654.654,0,0,1,.2-.478.7.7,0,0,1,.955,0,.619.619,0,0,1,.2.478.654.654,0,0,1-.2.478.619.619,0,0,1-.478.2A.757.757,0,0,1,453.214,12.992Zm-.2-2.844V4.869a.682.682,0,1,1,1.365,0v5.279a.682.682,0,1,1-1.365,0Z" transform="translate(3917.821 1895.861)" fill="#fff"/>
						  </g>
						</svg>

						<div class="popup">
							სამკურნალო მანიპულაციები, რომლებიც არ საჭიროებენ პაციენტის მიერ საწოლის დაკავებას. მომსახურებაზე ვრცელდება მოცდის პერიოდი 24 თვე.
						</div>
				 	</div>
				 	<div class="description">
				 		<div>
				 			<span>24 საათიანი ცხელი ხაზი</span>
				 			<svg xmlns="http://www.w3.org/2000/svg" width="1" height="25.032" viewBox="0 0 0.5 25.032">
							  <path id="Path_6241" data-name="Path 6241" d="M655-7923.56h24.532" transform="translate(-7923.31 -654.75) rotate(90)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"></path>
							</svg>
				 		</div>
				 		<div>
				 			<span>
				 				<svg xmlns="http://www.w3.org/2000/svg" width="16.657" height="16.657" viewBox="0 0 16.657 16.657">
								  <g id="Group_1652" data-name="Group 1652" transform="translate(-6286.872 -1697.942)">
								    <line id="Line_211" data-name="Line 211" x2="11" y2="11" transform="translate(6289.7 1700.77)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-miterlimit="10" stroke-width="4"/>
								    <line id="Line_212" data-name="Line 212" x1="11" y2="11" transform="translate(6289.7 1700.77)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-miterlimit="10" stroke-width="4"/>
								  </g>
								</svg>
				 			</span>
				 		</div>
				 	</div>
				 	<div class="svg-wrap">
					 	<svg xmlns="http://www.w3.org/2000/svg" width="1555.746" height="1" viewBox="0 0 1555.746 0.5">
						  <path id="Path_6197" data-name="Path 6197" d="M655-7923.56H2210.246" transform="translate(-654.75 7923.81)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"></path>
						</svg>
						<svg xmlns="http://www.w3.org/2000/svg" width="25.032" height="1" viewBox="0 0 25.032 0.5">
						  <path id="Path_10495" data-name="Path 10495" d="M655-7923.56h24.532" transform="translate(679.782 -7923.31) rotate(180)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"/>
						</svg>
					</div>
				 </div>


			</div>
			<div class="bottom">
				<div class="amount">
					<div class="noto-bold">11</div>
					<div >₾</div>
				</div>

				<a href="" class="buy-btn">
					<span class="noto-bold">შეძენა</span>
				</a>
			</div>

			<div class="ver-social">
				<div class="social">
					<span class="noto-bold">გაუზიარე მეგობარს:</span>
					<div>
						<a href="#">
							<svg xmlns="http://www.w3.org/2000/svg" width="31.997" height="31.004" viewBox="0 0 31.997 31.004">
							  <path id="Subtraction_3" data-name="Subtraction 3" d="M30,31H2a2,2,0,0,1-2-2V2A2,2,0,0,1,2,0H30a2,2,0,0,1,2,2V29A2,2,0,0,1,30,31ZM12.726,12.766a.712.712,0,0,0-.722.7v2.743a.691.691,0,0,0,.2.516.737.737,0,0,0,.522.216H13.95a.21.21,0,0,1,.213.206v7.491a.713.713,0,0,0,.723.7H17.7a.712.712,0,0,0,.722-.7V17.143a.21.21,0,0,1,.213-.206h2.044a.719.719,0,0,0,.714-.6l.473-2.743a.68.68,0,0,0-.155-.585.731.731,0,0,0-.556-.251h-2.4a.331.331,0,0,1-.336-.325v-1.75a.616.616,0,0,1,.186-.52.667.667,0,0,1,.46-.184.676.676,0,0,1,.076,0h2.134a.712.712,0,0,0,.722-.7V6.511a.712.712,0,0,0-.722-.7H18.742a4.766,4.766,0,0,0-3.505,1.183,4.025,4.025,0,0,0-1.069,2.977V12.56a.21.21,0,0,1-.212.206Z" transform="translate(-0.004 0.003)" fill="#292562"/>
							</svg>
						</a>
						<a href="#">
							<svg xmlns="http://www.w3.org/2000/svg" width="31.5" height="31.5" viewBox="0 0 31.5 31.5">
							  <path id="twitter-square-brands" d="M28.125,32H3.375A3.376,3.376,0,0,0,0,35.375v24.75A3.376,3.376,0,0,0,3.375,63.5h24.75A3.376,3.376,0,0,0,31.5,60.125V35.375A3.376,3.376,0,0,0,28.125,32ZM24.687,43.166c.014.2.014.4.014.6a13.031,13.031,0,0,1-13.12,13.12A13.06,13.06,0,0,1,4.5,54.816a9.716,9.716,0,0,0,1.111.056A9.246,9.246,0,0,0,11.334,52.9a4.618,4.618,0,0,1-4.31-3.2,4.97,4.97,0,0,0,2.081-.084,4.612,4.612,0,0,1-3.691-4.528v-.056A4.609,4.609,0,0,0,7.5,45.62,4.6,4.6,0,0,1,5.442,41.78a4.554,4.554,0,0,1,.626-2.327,13.094,13.094,0,0,0,9.506,4.823,4.621,4.621,0,0,1,7.868-4.212,9.037,9.037,0,0,0,2.925-1.111,4.6,4.6,0,0,1-2.025,2.538A9.177,9.177,0,0,0,27,40.775,9.706,9.706,0,0,1,24.687,43.166Z" transform="translate(0 -32)" fill="#292562"/>
							</svg>
						</a>
						<a href="#">
							<svg xmlns="http://www.w3.org/2000/svg" width="31.5" height="31.5" viewBox="0 0 31.5 31.5">
							  <path id="envelope-square-solid" d="M28.125,32H3.375A3.375,3.375,0,0,0,0,35.375v24.75A3.375,3.375,0,0,0,3.375,63.5h24.75A3.375,3.375,0,0,0,31.5,60.125V35.375A3.375,3.375,0,0,0,28.125,32Zm-15.6,16.179C6.147,43.551,6.212,43.54,4.5,42.207v-1.77A1.687,1.687,0,0,1,6.188,38.75H25.313A1.687,1.687,0,0,1,27,40.437v1.77c-1.714,1.334-1.648,1.345-8.024,5.972-.738.538-2.207,1.837-3.226,1.821C14.73,50.015,13.263,48.718,12.524,48.179ZM27,45.062v10a1.687,1.687,0,0,1-1.687,1.687H6.188A1.687,1.687,0,0,1,4.5,55.063v-10c.981.759,2.343,1.774,6.7,4.937,1,.727,2.67,2.26,4.549,2.251,1.89.009,3.589-1.55,4.551-2.252C24.657,46.837,26.019,45.821,27,45.062Z" transform="translate(0 -32)" fill="#292562"/>
							</svg>
						</a>
					</div>
				</div>

				<a href="#" class="back-btn">
					<svg xmlns="http://www.w3.org/2000/svg" width="48.914" height="10.829" viewBox="0 0 48.914 10.829">
					  <g id="Group_599" data-name="Group 599" transform="translate(1.414 1.414)">
					    <g id="Group_108" data-name="Group 108">
					      <line id="Line_14" data-name="Line 14" x1="46.5" transform="translate(0 4)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="2"/>
					      <line id="Line_15" data-name="Line 15" x1="4" y2="4" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="2"/>
					      <line id="Line_16" data-name="Line 16" x1="4" y1="4" transform="translate(0 4)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="2"/>
					    </g>
					  </g>
					</svg>

					<span class="noto-bold">უკან დაბრუნება</span>
				</a>

			</div>	
		</div>
	</div>
</div>

@include('app.layout.components.directionSlider')


@endsection
@extends('app.layout.app')
@section('pageName')policy-compare @endsection
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
</section>
<div class="package-cont">
	<div class="package-inner">
		<div class="policy-compare">
			
			<div class="ttl">
				სადაზღვეო კომპანია
			</div>

			<div class="static">
				<div class="top">
					<div class="fira-bold font-21 ttl">
						სადაზღვეო პრემია
					</div>
				</div>
				<div class="list">
					<div class="item compare-item" data-hover="h1">
						<div class="info">
							<svg xmlns="http://www.w3.org/2000/svg" width="17.383" height="17.383" viewBox="0 0 17.383 17.383">
							  <path id="MenuClaims" d="M445,8.691a8.692,8.692,0,1,1,8.692,8.692A8.691,8.691,0,0,1,445,8.691Zm1.365,0a7.326,7.326,0,1,0,7.326-7.326A7.322,7.322,0,0,0,446.365,8.691Zm6.849,4.3a.619.619,0,0,1-.2-.478.654.654,0,0,1,.2-.478.7.7,0,0,1,.955,0,.619.619,0,0,1,.2.478.654.654,0,0,1-.2.478.619.619,0,0,1-.478.2A.757.757,0,0,1,453.214,12.992Zm-.2-2.844V4.869a.682.682,0,1,1,1.365,0v5.279a.682.682,0,1,1-1.365,0Z" transform="translate(-445)" fill="#292562"></path>
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17">
							  <g id="Group_3474" data-name="Group 3474" transform="translate(-4363 -1896)">
							    <circle id="Ellipse_105" data-name="Ellipse 105" cx="8.5" cy="8.5" r="8.5" transform="translate(4363 1896)" fill="#ee2a7b"></circle>
							    <path id="MenuClaims" d="M453.214,12.992a.619.619,0,0,1-.2-.478.654.654,0,0,1,.2-.478.7.7,0,0,1,.955,0,.619.619,0,0,1,.2.478.654.654,0,0,1-.2.478.619.619,0,0,1-.478.2A.757.757,0,0,1,453.214,12.992Zm-.2-2.844V4.869a.682.682,0,1,1,1.365,0v5.279a.682.682,0,1,1-1.365,0Z" transform="translate(3917.821 1895.861)" fill="#fff"></path>
							  </g>
							</svg>
							<div class="popup">
								სამკურნალო მანიპულაციები, რომლებიც არ საჭიროებენ პაციენტის მიერ საწოლის დაკავებას. მომსახურებაზე ვრცელდება მოცდის პერიოდი 24 თვე.
							</div>
						</div>
						<div class="description">
							<!-- ამ ტექსტს ვადუბლირებთ slider policy-item  description პირველი დივის სპანში მობილურის ვერსიისთვის მჭირდება-->
							<span>ჰოსპიტალური მომსახურება უბედური შემთხვევის გამო  </span>
							<svg xmlns="http://www.w3.org/2000/svg" width="1" height="25.032" viewBox="0 0 0.5 25.032">
							  <path id="Path_6241" data-name="Path 6241" d="M655-7923.56h24.532" transform="translate(-7923.31 -654.75) rotate(90)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"></path>
							</svg>
						</div>
						<div class="svg-wrap">
						 	<svg xmlns="http://www.w3.org/2000/svg" width="1555.746" height="1" viewBox="0 0 1555.746 0.5">
							  <path id="Path_6197" data-name="Path 6197" d="M655-7923.56H2210.246" transform="translate(-654.75 7923.81)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"></path>
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" width="25.032" height="1" viewBox="0 0 25.032 0.5">
							  <path id="Path_10495" data-name="Path 10495" d="M655-7923.56h24.532" transform="translate(679.782 -7923.31) rotate(180)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"></path>
							</svg>
						</div>
					</div>
					<div class="item compare-item" data-hover="h2">
						<div class="info">
							<svg xmlns="http://www.w3.org/2000/svg" width="17.383" height="17.383" viewBox="0 0 17.383 17.383">
							  <path id="MenuClaims" d="M445,8.691a8.692,8.692,0,1,1,8.692,8.692A8.691,8.691,0,0,1,445,8.691Zm1.365,0a7.326,7.326,0,1,0,7.326-7.326A7.322,7.322,0,0,0,446.365,8.691Zm6.849,4.3a.619.619,0,0,1-.2-.478.654.654,0,0,1,.2-.478.7.7,0,0,1,.955,0,.619.619,0,0,1,.2.478.654.654,0,0,1-.2.478.619.619,0,0,1-.478.2A.757.757,0,0,1,453.214,12.992Zm-.2-2.844V4.869a.682.682,0,1,1,1.365,0v5.279a.682.682,0,1,1-1.365,0Z" transform="translate(-445)" fill="#292562"></path>
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17">
							  <g id="Group_3474" data-name="Group 3474" transform="translate(-4363 -1896)">
							    <circle id="Ellipse_105" data-name="Ellipse 105" cx="8.5" cy="8.5" r="8.5" transform="translate(4363 1896)" fill="#ee2a7b"></circle>
							    <path id="MenuClaims" d="M453.214,12.992a.619.619,0,0,1-.2-.478.654.654,0,0,1,.2-.478.7.7,0,0,1,.955,0,.619.619,0,0,1,.2.478.654.654,0,0,1-.2.478.619.619,0,0,1-.478.2A.757.757,0,0,1,453.214,12.992Zm-.2-2.844V4.869a.682.682,0,1,1,1.365,0v5.279a.682.682,0,1,1-1.365,0Z" transform="translate(3917.821 1895.861)" fill="#fff"></path>
							  </g>
							</svg>
							<div class="popup">
								სამკურნალო მანიპულაციები, რომლებიც არ საჭიროებენ პაციენტის მიერ საწოლის დაკავებას. მომსახურებაზე ვრცელდება მოცდის პერიოდი 24 თვე.
							</div>
						</div>
						<div class="description">
							<span>ჰოსპიტალური მომსახურება  </span>
							<svg xmlns="http://www.w3.org/2000/svg" width="1" height="25.032" viewBox="0 0 0.5 25.032">
							  <path id="Path_6241" data-name="Path 6241" d="M655-7923.56h24.532" transform="translate(-7923.31 -654.75) rotate(90)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"></path>
							</svg>
						</div>
						<div class="svg-wrap">
						 	<svg xmlns="http://www.w3.org/2000/svg" width="1555.746" height="1" viewBox="0 0 1555.746 0.5">
							  <path id="Path_6197" data-name="Path 6197" d="M655-7923.56H2210.246" transform="translate(-654.75 7923.81)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"></path>
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" width="25.032" height="1" viewBox="0 0 25.032 0.5">
							  <path id="Path_10495" data-name="Path 10495" d="M655-7923.56h24.532" transform="translate(679.782 -7923.31) rotate(180)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"></path>
							</svg>
						</div>
					</div>
					<div class="item compare-item" data-hover="h3">
						<div class="info">
							<svg xmlns="http://www.w3.org/2000/svg" width="17.383" height="17.383" viewBox="0 0 17.383 17.383">
							  <path id="MenuClaims" d="M445,8.691a8.692,8.692,0,1,1,8.692,8.692A8.691,8.691,0,0,1,445,8.691Zm1.365,0a7.326,7.326,0,1,0,7.326-7.326A7.322,7.322,0,0,0,446.365,8.691Zm6.849,4.3a.619.619,0,0,1-.2-.478.654.654,0,0,1,.2-.478.7.7,0,0,1,.955,0,.619.619,0,0,1,.2.478.654.654,0,0,1-.2.478.619.619,0,0,1-.478.2A.757.757,0,0,1,453.214,12.992Zm-.2-2.844V4.869a.682.682,0,1,1,1.365,0v5.279a.682.682,0,1,1-1.365,0Z" transform="translate(-445)" fill="#292562"></path>
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17">
							  <g id="Group_3474" data-name="Group 3474" transform="translate(-4363 -1896)">
							    <circle id="Ellipse_105" data-name="Ellipse 105" cx="8.5" cy="8.5" r="8.5" transform="translate(4363 1896)" fill="#ee2a7b"></circle>
							    <path id="MenuClaims" d="M453.214,12.992a.619.619,0,0,1-.2-.478.654.654,0,0,1,.2-.478.7.7,0,0,1,.955,0,.619.619,0,0,1,.2.478.654.654,0,0,1-.2.478.619.619,0,0,1-.478.2A.757.757,0,0,1,453.214,12.992Zm-.2-2.844V4.869a.682.682,0,1,1,1.365,0v5.279a.682.682,0,1,1-1.365,0Z" transform="translate(3917.821 1895.861)" fill="#fff"></path>
							  </g>
							</svg>
							<div class="popup">
								სამკურნალო მანიპულაციები
							</div>
						</div>
						<div class="description">
							<span>გეგმიური ამბულატორიული მომსახურება პირადი ექიმის სამსახურის ბაზაზე  	
								გეგმიური ამბულატორიული მომსახურება პირადი ექიმის სამსახურის ბაზაზე  	
								 	
							 </span>
							<svg xmlns="http://www.w3.org/2000/svg" width="1" height="25.032" viewBox="0 0 0.5 25.032">
							  <path id="Path_6241" data-name="Path 6241" d="M655-7923.56h24.532" transform="translate(-7923.31 -654.75) rotate(90)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"></path>
							</svg>
						</div>
						<div class="svg-wrap">
						 	<svg xmlns="http://www.w3.org/2000/svg" width="1555.746" height="1" viewBox="0 0 1555.746 0.5">
							  <path id="Path_6197" data-name="Path 6197" d="M655-7923.56H2210.246" transform="translate(-654.75 7923.81)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"></path>
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" width="25.032" height="1" viewBox="0 0 25.032 0.5">
							  <path id="Path_10495" data-name="Path 10495" d="M655-7923.56h24.532" transform="translate(679.782 -7923.31) rotate(180)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"></path>
							</svg>
						</div>
					</div>
				</div>
				<div class="bottom">
					
				</div>
			</div>
	


			<div class="packages-slider">
				<div class="swiper-wrapper">



				  <div class="policy-item swiper-slide">
				  	<div class="top">
				  		<div class="fira-bold font-21 ttl">ბაზისური</div>
				  		<div class="amount">
							<div class="noto-bold">55</div>
							<div>₾</div>
						</div>
				  	</div>
					<!-- რომელიც არჩეულია list დივს ვადებთ კლასს active -->
					<div class="list">
						<div class="item compare-item" data-hover="h1">
							<div class="info">
								 <svg xmlns="http://www.w3.org/2000/svg" width="17.383" height="17.383" viewBox="0 0 17.383 17.383">
								  <path id="MenuClaims" d="M445,8.691a8.692,8.692,0,1,1,8.692,8.692A8.691,8.691,0,0,1,445,8.691Zm1.365,0a7.326,7.326,0,1,0,7.326-7.326A7.322,7.322,0,0,0,446.365,8.691Zm6.849,4.3a.619.619,0,0,1-.2-.478.654.654,0,0,1,.2-.478.7.7,0,0,1,.955,0,.619.619,0,0,1,.2.478.654.654,0,0,1-.2.478.619.619,0,0,1-.478.2A.757.757,0,0,1,453.214,12.992Zm-.2-2.844V4.869a.682.682,0,1,1,1.365,0v5.279a.682.682,0,1,1-1.365,0Z" transform="translate(-445)" fill="#292562"></path>
								</svg>
							</div>
							<div class="description">
								<div>
									<span>ჰოსპიტალური მომსახურება უბედური შემთხვევის გამო</span>
								</div>
								<div>
									<span>100% ულიმიტო წ.ე</span>
								</div>
							</div>
							<svg xmlns="http://www.w3.org/2000/svg" width="25.032" height="1" viewBox="0 0 25.032 0.5">
							  <path id="Path_10495" data-name="Path 10495" d="M655-7923.56h24.532" transform="translate(679.782 -7923.31) rotate(180)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"></path>
							</svg>
						</div>
						<div class="item compare-item" data-hover="h2">
							<div class="info">
								 <svg xmlns="http://www.w3.org/2000/svg" width="17.383" height="17.383" viewBox="0 0 17.383 17.383">
								  <path id="MenuClaims" d="M445,8.691a8.692,8.692,0,1,1,8.692,8.692A8.691,8.691,0,0,1,445,8.691Zm1.365,0a7.326,7.326,0,1,0,7.326-7.326A7.322,7.322,0,0,0,446.365,8.691Zm6.849,4.3a.619.619,0,0,1-.2-.478.654.654,0,0,1,.2-.478.7.7,0,0,1,.955,0,.619.619,0,0,1,.2.478.654.654,0,0,1-.2.478.619.619,0,0,1-.478.2A.757.757,0,0,1,453.214,12.992Zm-.2-2.844V4.869a.682.682,0,1,1,1.365,0v5.279a.682.682,0,1,1-1.365,0Z" transform="translate(-445)" fill="#292562"></path>
								</svg>
							</div>
							<div class="description">
								<div>
									<span>ჰოსპიტალური მომსახურება </span>
								</div>
								<div>
									<span>
										<svg xmlns="http://www.w3.org/2000/svg" width="16.657" height="16.657" viewBox="0 0 16.657 16.657">
										  <g id="Group_1652" data-name="Group 1652" transform="translate(-6286.872 -1697.942)">
										    <line id="Line_211" data-name="Line 211" x2="11" y2="11" transform="translate(6289.7 1700.77)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-miterlimit="10" stroke-width="4"></line>
										    <line id="Line_212" data-name="Line 212" x1="11" y2="11" transform="translate(6289.7 1700.77)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-miterlimit="10" stroke-width="4"></line>
										  </g>
										</svg>
									</span>
								</div>
							</div>
							<svg xmlns="http://www.w3.org/2000/svg" width="25.032" height="1" viewBox="0 0 25.032 0.5">
							  <path id="Path_10495" data-name="Path 10495" d="M655-7923.56h24.532" transform="translate(679.782 -7923.31) rotate(180)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"></path>
							</svg>
						</div>
						<div class="item compare-item" data-hover="h3">
							<div class="info">
								 <svg xmlns="http://www.w3.org/2000/svg" width="17.383" height="17.383" viewBox="0 0 17.383 17.383">
								  <path id="MenuClaims" d="M445,8.691a8.692,8.692,0,1,1,8.692,8.692A8.691,8.691,0,0,1,445,8.691Zm1.365,0a7.326,7.326,0,1,0,7.326-7.326A7.322,7.322,0,0,0,446.365,8.691Zm6.849,4.3a.619.619,0,0,1-.2-.478.654.654,0,0,1,.2-.478.7.7,0,0,1,.955,0,.619.619,0,0,1,.2.478.654.654,0,0,1-.2.478.619.619,0,0,1-.478.2A.757.757,0,0,1,453.214,12.992Zm-.2-2.844V4.869a.682.682,0,1,1,1.365,0v5.279a.682.682,0,1,1-1.365,0Z" transform="translate(-445)" fill="#292562"></path>
								</svg>
							</div>
							<div class="description">
								<div>
									<span>გეგმიური ამბულატორიული მომსახურება პირადი ექიმის სამსახურის ბაზაზე  	
										გეგმიური ამბულატორიული მომსახურება პირადი ექიმის სამსახურის ბაზაზე  	
										 	
									 </span>
								</div>
								<div>
									<span>
										15% 800 ₾
									</span>
								</div>
							</div>
							<svg xmlns="http://www.w3.org/2000/svg" width="25.032" height="1" viewBox="0 0 25.032 0.5">
							  <path id="Path_10495" data-name="Path 10495" d="M655-7923.56h24.532" transform="translate(679.782 -7923.31) rotate(180)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"></path>
							</svg>
						</div>
					</div>

				  	<div class="bottom">
				  		<a href="#" class="buy-btn">
							<span class="noto-bold">შეძენა</span>
						</a>
				  	</div>
				  </div>


				 


				  

				  <div class="policy-item swiper-slide active">
				  	<div class="top">
				  		<div class="fira-bold font-21 ttl">ბაზისური</div>
				  		<div class="amount">
							<div class="noto-bold">11</div>
							<div>₾</div>
						</div>
				  	</div>
					
					<div class="list">
						<div class="item compare-item" data-hover="h1">
							<div class="info">
								 <svg xmlns="http://www.w3.org/2000/svg" width="17.383" height="17.383" viewBox="0 0 17.383 17.383">
								  <path id="MenuClaims" d="M445,8.691a8.692,8.692,0,1,1,8.692,8.692A8.691,8.691,0,0,1,445,8.691Zm1.365,0a7.326,7.326,0,1,0,7.326-7.326A7.322,7.322,0,0,0,446.365,8.691Zm6.849,4.3a.619.619,0,0,1-.2-.478.654.654,0,0,1,.2-.478.7.7,0,0,1,.955,0,.619.619,0,0,1,.2.478.654.654,0,0,1-.2.478.619.619,0,0,1-.478.2A.757.757,0,0,1,453.214,12.992Zm-.2-2.844V4.869a.682.682,0,1,1,1.365,0v5.279a.682.682,0,1,1-1.365,0Z" transform="translate(-445)" fill="#292562"></path>
								</svg>
							</div>
							<div class="description">
								<div>
									<span>ჰოსპიტალური მომსახურება უბედური შემთხვევის გამო</span>
								</div>
								<div>
									<span>100% ულიმიტო წ.ე</span>
								</div>
							</div>
							<svg xmlns="http://www.w3.org/2000/svg" width="25.032" height="1" viewBox="0 0 25.032 0.5">
							  <path id="Path_10495" data-name="Path 10495" d="M655-7923.56h24.532" transform="translate(679.782 -7923.31) rotate(180)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"></path>
							</svg>
						</div>
						<div class="item compare-item" data-hover="h2">
							<div class="info">
								 <svg xmlns="http://www.w3.org/2000/svg" width="17.383" height="17.383" viewBox="0 0 17.383 17.383">
								  <path id="MenuClaims" d="M445,8.691a8.692,8.692,0,1,1,8.692,8.692A8.691,8.691,0,0,1,445,8.691Zm1.365,0a7.326,7.326,0,1,0,7.326-7.326A7.322,7.322,0,0,0,446.365,8.691Zm6.849,4.3a.619.619,0,0,1-.2-.478.654.654,0,0,1,.2-.478.7.7,0,0,1,.955,0,.619.619,0,0,1,.2.478.654.654,0,0,1-.2.478.619.619,0,0,1-.478.2A.757.757,0,0,1,453.214,12.992Zm-.2-2.844V4.869a.682.682,0,1,1,1.365,0v5.279a.682.682,0,1,1-1.365,0Z" transform="translate(-445)" fill="#292562"></path>
								</svg>
							</div>
							<div class="description">
								<div>
									<span>ჰოსპიტალური მომსახურება </span>
								</div>
								<div>
									<span>100% ულიმიტო</span>
								</div>
							</div>
							<svg xmlns="http://www.w3.org/2000/svg" width="25.032" height="1" viewBox="0 0 25.032 0.5">
							  <path id="Path_10495" data-name="Path 10495" d="M655-7923.56h24.532" transform="translate(679.782 -7923.31) rotate(180)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"></path>
							</svg>
						</div>
						<div class="item compare-item" data-hover="h3">
							<div class="info">
								 <svg xmlns="http://www.w3.org/2000/svg" width="17.383" height="17.383" viewBox="0 0 17.383 17.383">
								  <path id="MenuClaims" d="M445,8.691a8.692,8.692,0,1,1,8.692,8.692A8.691,8.691,0,0,1,445,8.691Zm1.365,0a7.326,7.326,0,1,0,7.326-7.326A7.322,7.322,0,0,0,446.365,8.691Zm6.849,4.3a.619.619,0,0,1-.2-.478.654.654,0,0,1,.2-.478.7.7,0,0,1,.955,0,.619.619,0,0,1,.2.478.654.654,0,0,1-.2.478.619.619,0,0,1-.478.2A.757.757,0,0,1,453.214,12.992Zm-.2-2.844V4.869a.682.682,0,1,1,1.365,0v5.279a.682.682,0,1,1-1.365,0Z" transform="translate(-445)" fill="#292562"></path>
								</svg>
							</div>
							<div class="description">
								<div>
									<span>გეგმიური ამბულატორიული მომსახურება პირადი ექიმის სამსახურის ბაზაზე  	
										გეგმიური ამბულატორიული მომსახურება პირადი ექიმის სამსახურის ბაზაზე  	
										  	
									 </span>
								</div>
								<div>
									<span>
										15% 800 ₾
									</span>
								</div>
							</div>
							<svg xmlns="http://www.w3.org/2000/svg" width="25.032" height="1" viewBox="0 0 25.032 0.5">
							  <path id="Path_10495" data-name="Path 10495" d="M655-7923.56h24.532" transform="translate(679.782 -7923.31) rotate(180)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"></path>
							</svg>
						</div>
					</div>

				  	<div class="bottom">
				  		<a href="#" class="buy-btn">
							<span class="noto-bold">შეძენა</span>
						</a>
				  	</div>
				  </div>




				<!--   <div class="policy-item swiper-slide">
				  	<div class="top">
				  		<div class="fira-bold font-21 ttl">ბაზისური</div>
				  		<div class="amount">
							<div class="noto-bold">55</div>
							<div>₾</div>
						</div>
				  	</div>
					<div class="list">
						<div class="item compare-item" data-hover="h1">
							<div class="info">
								 <svg xmlns="http://www.w3.org/2000/svg" width="17.383" height="17.383" viewBox="0 0 17.383 17.383">
								  <path id="MenuClaims" d="M445,8.691a8.692,8.692,0,1,1,8.692,8.692A8.691,8.691,0,0,1,445,8.691Zm1.365,0a7.326,7.326,0,1,0,7.326-7.326A7.322,7.322,0,0,0,446.365,8.691Zm6.849,4.3a.619.619,0,0,1-.2-.478.654.654,0,0,1,.2-.478.7.7,0,0,1,.955,0,.619.619,0,0,1,.2.478.654.654,0,0,1-.2.478.619.619,0,0,1-.478.2A.757.757,0,0,1,453.214,12.992Zm-.2-2.844V4.869a.682.682,0,1,1,1.365,0v5.279a.682.682,0,1,1-1.365,0Z" transform="translate(-445)" fill="#292562"></path>
								</svg>
							</div>
							<div class="description">
								<div>
									<span>ჰოსპიტალური მომსახურება უბედური შემთხვევის გამო</span>
								</div>
								<div>
									<span>100% ულიმიტო წ.ე</span>
								</div>
							</div>
							<svg xmlns="http://www.w3.org/2000/svg" width="25.032" height="1" viewBox="0 0 25.032 0.5">
							  <path id="Path_10495" data-name="Path 10495" d="M655-7923.56h24.532" transform="translate(679.782 -7923.31) rotate(180)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"></path>
							</svg>
						</div>
						<div class="item compare-item" data-hover="h2">
							<div class="info">
								 <svg xmlns="http://www.w3.org/2000/svg" width="17.383" height="17.383" viewBox="0 0 17.383 17.383">
								  <path id="MenuClaims" d="M445,8.691a8.692,8.692,0,1,1,8.692,8.692A8.691,8.691,0,0,1,445,8.691Zm1.365,0a7.326,7.326,0,1,0,7.326-7.326A7.322,7.322,0,0,0,446.365,8.691Zm6.849,4.3a.619.619,0,0,1-.2-.478.654.654,0,0,1,.2-.478.7.7,0,0,1,.955,0,.619.619,0,0,1,.2.478.654.654,0,0,1-.2.478.619.619,0,0,1-.478.2A.757.757,0,0,1,453.214,12.992Zm-.2-2.844V4.869a.682.682,0,1,1,1.365,0v5.279a.682.682,0,1,1-1.365,0Z" transform="translate(-445)" fill="#292562"></path>
								</svg>
							</div>
							<div class="description">
								<div>
									<span>ჰოსპიტალური მომსახურება </span>
								</div>
								<div>
									<span>
										<svg xmlns="http://www.w3.org/2000/svg" width="16.657" height="16.657" viewBox="0 0 16.657 16.657">
										  <g id="Group_1652" data-name="Group 1652" transform="translate(-6286.872 -1697.942)">
										    <line id="Line_211" data-name="Line 211" x2="11" y2="11" transform="translate(6289.7 1700.77)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-miterlimit="10" stroke-width="4"></line>
										    <line id="Line_212" data-name="Line 212" x1="11" y2="11" transform="translate(6289.7 1700.77)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-miterlimit="10" stroke-width="4"></line>
										  </g>
										</svg>
									</span>
								</div>
							</div>
							<svg xmlns="http://www.w3.org/2000/svg" width="25.032" height="1" viewBox="0 0 25.032 0.5">
							  <path id="Path_10495" data-name="Path 10495" d="M655-7923.56h24.532" transform="translate(679.782 -7923.31) rotate(180)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"></path>
							</svg>
						</div>
						<div class="item compare-item" data-hover="h3">
							<div class="info">
								 <svg xmlns="http://www.w3.org/2000/svg" width="17.383" height="17.383" viewBox="0 0 17.383 17.383">
								  <path id="MenuClaims" d="M445,8.691a8.692,8.692,0,1,1,8.692,8.692A8.691,8.691,0,0,1,445,8.691Zm1.365,0a7.326,7.326,0,1,0,7.326-7.326A7.322,7.322,0,0,0,446.365,8.691Zm6.849,4.3a.619.619,0,0,1-.2-.478.654.654,0,0,1,.2-.478.7.7,0,0,1,.955,0,.619.619,0,0,1,.2.478.654.654,0,0,1-.2.478.619.619,0,0,1-.478.2A.757.757,0,0,1,453.214,12.992Zm-.2-2.844V4.869a.682.682,0,1,1,1.365,0v5.279a.682.682,0,1,1-1.365,0Z" transform="translate(-445)" fill="#292562"></path>
								</svg>
							</div>
							<div class="description">
								<div>
									<span>გეგმიური ამბულატორიული მომსახურება პირადი ექიმის სამსახურის ბაზაზე  	
										გეგმიური ამბულატორიული მომსახურება პირადი ექიმის სამსახურის ბაზაზე  	
										 	
									 </span>
								</div>
								<div>
									<span>
										15% 800 ₾
									</span>
								</div>
							</div>
							<svg xmlns="http://www.w3.org/2000/svg" width="25.032" height="1" viewBox="0 0 25.032 0.5">
							  <path id="Path_10495" data-name="Path 10495" d="M655-7923.56h24.532" transform="translate(679.782 -7923.31) rotate(180)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"></path>
							</svg>
						</div>
					</div>

				  	<div class="bottom">
				  		<a href="#" class="buy-btn">
							<span class="noto-bold">შეძენა</span>
						</a>
				  	</div>
				  </div>
 -->

				 

				  <!-- <div class="policy-item swiper-slide">
				  	<div class="top">
				  		<div class="fira-bold font-21 ttl">სტანდარტი</div>
				  		<div class="amount">
							<div class="noto-bold">55</div>
							<div>₾</div>
						</div>
				  	</div>
					<div class="list">
						<div class="item compare-item" data-hover="h1">
							<div class="info">
								 <svg xmlns="http://www.w3.org/2000/svg" width="17.383" height="17.383" viewBox="0 0 17.383 17.383">
								  <path id="MenuClaims" d="M445,8.691a8.692,8.692,0,1,1,8.692,8.692A8.691,8.691,0,0,1,445,8.691Zm1.365,0a7.326,7.326,0,1,0,7.326-7.326A7.322,7.322,0,0,0,446.365,8.691Zm6.849,4.3a.619.619,0,0,1-.2-.478.654.654,0,0,1,.2-.478.7.7,0,0,1,.955,0,.619.619,0,0,1,.2.478.654.654,0,0,1-.2.478.619.619,0,0,1-.478.2A.757.757,0,0,1,453.214,12.992Zm-.2-2.844V4.869a.682.682,0,1,1,1.365,0v5.279a.682.682,0,1,1-1.365,0Z" transform="translate(-445)" fill="#292562"></path>
								</svg>
							</div>
							<div class="description">
								<div>
									<span>ჰოსპიტალური მომსახურება უბედური შემთხვევის გამო</span>
								</div>
								<div>
									<span>100% ულიმიტო წ.ე</span>
								</div>
							</div>
							<svg xmlns="http://www.w3.org/2000/svg" width="25.032" height="1" viewBox="0 0 25.032 0.5">
							  <path id="Path_10495" data-name="Path 10495" d="M655-7923.56h24.532" transform="translate(679.782 -7923.31) rotate(180)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"></path>
							</svg>
						</div>
						<div class="item compare-item" data-hover="h2">
							<div class="info">
								 <svg xmlns="http://www.w3.org/2000/svg" width="17.383" height="17.383" viewBox="0 0 17.383 17.383">
								  <path id="MenuClaims" d="M445,8.691a8.692,8.692,0,1,1,8.692,8.692A8.691,8.691,0,0,1,445,8.691Zm1.365,0a7.326,7.326,0,1,0,7.326-7.326A7.322,7.322,0,0,0,446.365,8.691Zm6.849,4.3a.619.619,0,0,1-.2-.478.654.654,0,0,1,.2-.478.7.7,0,0,1,.955,0,.619.619,0,0,1,.2.478.654.654,0,0,1-.2.478.619.619,0,0,1-.478.2A.757.757,0,0,1,453.214,12.992Zm-.2-2.844V4.869a.682.682,0,1,1,1.365,0v5.279a.682.682,0,1,1-1.365,0Z" transform="translate(-445)" fill="#292562"></path>
								</svg>
							</div>
							<div class="description">
								<div>
									<span>ჰოსპიტალური მომსახურება </span>
								</div>
								<div>
									<span>
										<svg xmlns="http://www.w3.org/2000/svg" width="16.657" height="16.657" viewBox="0 0 16.657 16.657">
										  <g id="Group_1652" data-name="Group 1652" transform="translate(-6286.872 -1697.942)">
										    <line id="Line_211" data-name="Line 211" x2="11" y2="11" transform="translate(6289.7 1700.77)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-miterlimit="10" stroke-width="4"></line>
										    <line id="Line_212" data-name="Line 212" x1="11" y2="11" transform="translate(6289.7 1700.77)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-miterlimit="10" stroke-width="4"></line>
										  </g>
										</svg>
									</span>
								</div>
							</div>
							<svg xmlns="http://www.w3.org/2000/svg" width="25.032" height="1" viewBox="0 0 25.032 0.5">
							  <path id="Path_10495" data-name="Path 10495" d="M655-7923.56h24.532" transform="translate(679.782 -7923.31) rotate(180)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"></path>
							</svg>
						</div>
						<div class="item compare-item" data-hover="h3">
							<div class="info">
								 <svg xmlns="http://www.w3.org/2000/svg" width="17.383" height="17.383" viewBox="0 0 17.383 17.383">
								  <path id="MenuClaims" d="M445,8.691a8.692,8.692,0,1,1,8.692,8.692A8.691,8.691,0,0,1,445,8.691Zm1.365,0a7.326,7.326,0,1,0,7.326-7.326A7.322,7.322,0,0,0,446.365,8.691Zm6.849,4.3a.619.619,0,0,1-.2-.478.654.654,0,0,1,.2-.478.7.7,0,0,1,.955,0,.619.619,0,0,1,.2.478.654.654,0,0,1-.2.478.619.619,0,0,1-.478.2A.757.757,0,0,1,453.214,12.992Zm-.2-2.844V4.869a.682.682,0,1,1,1.365,0v5.279a.682.682,0,1,1-1.365,0Z" transform="translate(-445)" fill="#292562"></path>
								</svg>
							</div>
							<div class="description">
								<div>
									<span>გეგმიური ამბულატორიული მომსახურება პირადი ექიმის სამსახურის ბაზაზე  	
										გეგმიური ამბულატორიული მომსახურება პირადი ექიმის სამსახურის ბაზაზე  	
										 	
									 </span>
								</div>
								<div>
									<span>
										15% 800 ₾
									</span>
								</div>
							</div>
							<svg xmlns="http://www.w3.org/2000/svg" width="25.032" height="1" viewBox="0 0 25.032 0.5">
							  <path id="Path_10495" data-name="Path 10495" d="M655-7923.56h24.532" transform="translate(679.782 -7923.31) rotate(180)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"></path>
							</svg>
						</div>
					</div>

				  	<div class="bottom">
				  		<a href="#" class="buy-btn">
							<span class="noto-bold">შეძენა</span>
						</a>
				  	</div>
				  </div> -->


			


			
			
				 <!--  <div class="policy-item swiper-slide">
				  	<div class="top">
				  		<div class="fira-bold font-21 ttl">ბაზისური</div>
				  		<div class="amount">
							<div class="noto-bold">55</div>
							<div>₾</div>
						</div>
				  	</div>
					<div class="list">
						<div class="item compare-item" data-hover="h1">
							<div class="info">
								 <svg xmlns="http://www.w3.org/2000/svg" width="17.383" height="17.383" viewBox="0 0 17.383 17.383">
								  <path id="MenuClaims" d="M445,8.691a8.692,8.692,0,1,1,8.692,8.692A8.691,8.691,0,0,1,445,8.691Zm1.365,0a7.326,7.326,0,1,0,7.326-7.326A7.322,7.322,0,0,0,446.365,8.691Zm6.849,4.3a.619.619,0,0,1-.2-.478.654.654,0,0,1,.2-.478.7.7,0,0,1,.955,0,.619.619,0,0,1,.2.478.654.654,0,0,1-.2.478.619.619,0,0,1-.478.2A.757.757,0,0,1,453.214,12.992Zm-.2-2.844V4.869a.682.682,0,1,1,1.365,0v5.279a.682.682,0,1,1-1.365,0Z" transform="translate(-445)" fill="#292562"></path>
								</svg>
							</div>
							<div class="description">
								<div>
									<span>ჰოსპიტალური მომსახურება უბედური შემთხვევის გამო</span>
								</div>
								<div>
									<span>100% ულიმიტო წ.ე</span>
								</div>
							</div>
							<svg xmlns="http://www.w3.org/2000/svg" width="25.032" height="1" viewBox="0 0 25.032 0.5">
							  <path id="Path_10495" data-name="Path 10495" d="M655-7923.56h24.532" transform="translate(679.782 -7923.31) rotate(180)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"></path>
							</svg>
						</div>
						<div class="item compare-item" data-hover="h2">
							<div class="info">
								 <svg xmlns="http://www.w3.org/2000/svg" width="17.383" height="17.383" viewBox="0 0 17.383 17.383">
								  <path id="MenuClaims" d="M445,8.691a8.692,8.692,0,1,1,8.692,8.692A8.691,8.691,0,0,1,445,8.691Zm1.365,0a7.326,7.326,0,1,0,7.326-7.326A7.322,7.322,0,0,0,446.365,8.691Zm6.849,4.3a.619.619,0,0,1-.2-.478.654.654,0,0,1,.2-.478.7.7,0,0,1,.955,0,.619.619,0,0,1,.2.478.654.654,0,0,1-.2.478.619.619,0,0,1-.478.2A.757.757,0,0,1,453.214,12.992Zm-.2-2.844V4.869a.682.682,0,1,1,1.365,0v5.279a.682.682,0,1,1-1.365,0Z" transform="translate(-445)" fill="#292562"></path>
								</svg>
							</div>
							<div class="description">
								<div>
									<span>ჰოსპიტალური მომსახურება </span>
								</div>
								<div>
									<span>
										<svg xmlns="http://www.w3.org/2000/svg" width="16.657" height="16.657" viewBox="0 0 16.657 16.657">
										  <g id="Group_1652" data-name="Group 1652" transform="translate(-6286.872 -1697.942)">
										    <line id="Line_211" data-name="Line 211" x2="11" y2="11" transform="translate(6289.7 1700.77)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-miterlimit="10" stroke-width="4"></line>
										    <line id="Line_212" data-name="Line 212" x1="11" y2="11" transform="translate(6289.7 1700.77)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-miterlimit="10" stroke-width="4"></line>
										  </g>
										</svg>
									</span>
								</div>
							</div>
							<svg xmlns="http://www.w3.org/2000/svg" width="25.032" height="1" viewBox="0 0 25.032 0.5">
							  <path id="Path_10495" data-name="Path 10495" d="M655-7923.56h24.532" transform="translate(679.782 -7923.31) rotate(180)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"></path>
							</svg>
						</div>
						<div class="item compare-item" data-hover="h3">
							<div class="info">
								 <svg xmlns="http://www.w3.org/2000/svg" width="17.383" height="17.383" viewBox="0 0 17.383 17.383">
								  <path id="MenuClaims" d="M445,8.691a8.692,8.692,0,1,1,8.692,8.692A8.691,8.691,0,0,1,445,8.691Zm1.365,0a7.326,7.326,0,1,0,7.326-7.326A7.322,7.322,0,0,0,446.365,8.691Zm6.849,4.3a.619.619,0,0,1-.2-.478.654.654,0,0,1,.2-.478.7.7,0,0,1,.955,0,.619.619,0,0,1,.2.478.654.654,0,0,1-.2.478.619.619,0,0,1-.478.2A.757.757,0,0,1,453.214,12.992Zm-.2-2.844V4.869a.682.682,0,1,1,1.365,0v5.279a.682.682,0,1,1-1.365,0Z" transform="translate(-445)" fill="#292562"></path>
								</svg>
							</div>
							<div class="description">
								<div>
									<span>გეგმიური ამბულატორიული მომსახურება პირადი ექიმის სამსახურის ბაზაზე  	
										გეგმიური ამბულატორიული მომსახურება პირადი ექიმის სამსახურის ბაზაზე  	
										 	
									 </span>
								</div>
								<div>
									<span>
										15% 800 ₾
									</span>
								</div>
							</div>
							<svg xmlns="http://www.w3.org/2000/svg" width="25.032" height="1" viewBox="0 0 25.032 0.5">
							  <path id="Path_10495" data-name="Path 10495" d="M655-7923.56h24.532" transform="translate(679.782 -7923.31) rotate(180)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"></path>
							</svg>
						</div>
					</div>

				  	<div class="bottom">
				  		<a href="#" class="buy-btn">
							<span class="noto-bold">შეძენა</span>
						</a>
				  	</div>
				  </div> -->


			

				  
				</div>
				<div class="swiper-button-prev"></div>
    			<div class="swiper-button-next"></div>
			</div>
		</div>
	</div>
</div>




@endsection
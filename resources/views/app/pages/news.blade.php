@extends('app.layout.app')
@section('pageName')news @endsection
@section('content')

@include('app.layout.components.directionTabHead')
<div class="directHeadContainer">
	<div class="directHeadInner">
		<div class="top">
			<h2 class="fira-bold font-34 ttl">უახლესი ამბები</h2>
			
			<div class="date-wrap">
				 <input type="text" id="rangeDate" placeholder="აირჩიეთ თარიღი" data-input>
				 <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23">
				  <g id="Group_2495" data-name="Group 2495" transform="translate(0 1)">
				    <g id="Rectangle_1287" data-name="Rectangle 1287" transform="translate(0 1)" fill="none" stroke="#292562" stroke-width="2">
				      <rect width="23" height="21" rx="2" stroke="none"/>
				      <rect x="1" y="1" width="21" height="19" rx="1" fill="none"/>
				    </g>
				    <path id="Path_6058" data-name="Path 6058" d="M-15450.782,140.979v3.779" transform="translate(15455.002 -140.979)" fill="none" stroke="#292562" stroke-linecap="round" stroke-width="2"/>
				    <path id="Path_6059" data-name="Path 6059" d="M-15450.782,140.979v3.779" transform="translate(15457.355 -140.979)" fill="none" stroke="#292562" stroke-linecap="round" stroke-width="2"/>
				    <path id="Path_6062" data-name="Path 6062" d="M0,0V20.012" transform="translate(21.558 6.597) rotate(90)" fill="none" stroke="#292562" stroke-linecap="round" stroke-width="2"/>
				    <path id="Path_6060" data-name="Path 6060" d="M-15450.782,140.979v3.779" transform="translate(15466.768 -140.979)" fill="none" stroke="#292562" stroke-linecap="round" stroke-width="2"/>
				    <path id="Path_6061" data-name="Path 6061" d="M-15450.782,140.979v3.779" transform="translate(15469.119 -140.979)" fill="none" stroke="#292562" stroke-linecap="round" stroke-width="2"/>
				  </g>
				</svg>
			</div>
			
		</div>

		<div class="list">
			<a href="#" class="item" >
				<div class="img-box">
					<picture>
	                  <source media="(max-width: 767px)" srcset="http://gpi.test/assets/img/img (30).jpg">
	                  <source media="(max-width: 1023px)" srcset="http://gpi.test/assets/img/img (30).jpg">
	                  <img src="http://gpi.test/assets/img/img (30).jpg" class="img-absolute" alt="">
	                </picture>
					<div class="img-layer"></div>
					<span>
						<span class="noto-bold ttl">ვრცლად</span>
						<svg xmlns="http://www.w3.org/2000/svg" width="7.215" height="12.814" viewBox="0 0 7.215 12.814">
						  <g id="Group_875" data-name="Group 875" transform="translate(-1510.793 -2727.14)">
						    <line id="Line_90" data-name="Line 90" x2="5.649" y2="5.6" transform="translate(1511.652 2727.847)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1"></line>
						    <line id="Line_91" data-name="Line 91" y1="5.801" x2="5.801" transform="translate(1511.5 2733.446)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1"></line>
						  </g>
						</svg>
					</span>
				</div>
				<time class="noto-medium font-21">25 dec 2020</time>
				<span class="noto-bold font-21 ttl">ჯიპიაი ჰოლდინგი ვენის სადაზღვევო ჯგუფის წევრებს საქართველოში მოგზაურობისკენ მოუწოდებს.</span>
			</a>

			<a href="#" class="item" >
				<div class="img-box">
					<picture>
	                  <source media="(max-width: 767px)" srcset="http://gpi.test/assets/img/img (30).jpg">
	                  <source media="(max-width: 1023px)" srcset="http://gpi.test/assets/img/img (30).jpg">
	                  <img src="http://gpi.test/assets/img/img (30).jpg" class="img-absolute" alt="">
	                </picture>
					<div class="img-layer"></div>
					<span>
						<span class="noto-bold ttl">ვრცლად</span>
						<svg xmlns="http://www.w3.org/2000/svg" width="7.215" height="12.814" viewBox="0 0 7.215 12.814">
						  <g id="Group_875" data-name="Group 875" transform="translate(-1510.793 -2727.14)">
						    <line id="Line_90" data-name="Line 90" x2="5.649" y2="5.6" transform="translate(1511.652 2727.847)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1"></line>
						    <line id="Line_91" data-name="Line 91" y1="5.801" x2="5.801" transform="translate(1511.5 2733.446)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1"></line>
						  </g>
						</svg>
					</span>
				</div>
				<time class="noto-medium font-21">25 dec 2020</time>
				<span class="noto-bold font-21 ttl">ჯიპიაი ჰოლდინგი ვენის სადაზღვევო ჯგუფის წევრებს საქართველოში მოგზაურობისკენ მოუწოდებს.</span>
			</a>

			<a href="#" class="item" >
				<div class="img-box">
					<picture>
	                  <source media="(max-width: 767px)" srcset="http://gpi.test/assets/img/img (30).jpg">
	                  <source media="(max-width: 1023px)" srcset="http://gpi.test/assets/img/img (30).jpg">
	                  <img src="http://gpi.test/assets/img/img (30).jpg" class="img-absolute" alt="">
	                </picture>
					<div class="img-layer"></div>
					<span>
						<span class="noto-bold ttl">ვრცლად</span>
						<svg xmlns="http://www.w3.org/2000/svg" width="7.215" height="12.814" viewBox="0 0 7.215 12.814">
						  <g id="Group_875" data-name="Group 875" transform="translate(-1510.793 -2727.14)">
						    <line id="Line_90" data-name="Line 90" x2="5.649" y2="5.6" transform="translate(1511.652 2727.847)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1"></line>
						    <line id="Line_91" data-name="Line 91" y1="5.801" x2="5.801" transform="translate(1511.5 2733.446)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1"></line>
						  </g>
						</svg>
					</span>
				</div>
				<time class="noto-medium font-21">25 dec 2020</time>
				<span class="noto-bold font-21 ttl">ჯიპიაი ჰოლდინგი ვენის სადაზღვევო ჯგუფის წევრებს საქართველოში მოგზაურობისკენ მოუწოდებს.</span>
			</a>


		</div>
		@include('app.layout.components.pagination')
		


	</div>
</div>

@endsection
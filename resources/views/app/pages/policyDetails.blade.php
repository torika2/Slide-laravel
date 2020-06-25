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
		  <g id="Group_3508" data-name="Group 3508" transform="translate(-1334 -139.979)">
		    <g id="Rectangle_1287" data-name="Rectangle 1287" transform="translate(1334 142)" fill="none" stroke="#fff" stroke-width="2">
		      <rect width="29" height="27" rx="2" stroke="none"/>
		      <rect x="1" y="1" width="27" height="25" rx="1" fill="none"/>
		    </g>
		    <path id="Path_6058" data-name="Path 6058" d="M-15450.782,140.979V145.8" transform="translate(16790)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
		    <path id="Path_6059" data-name="Path 6059" d="M-15450.782,140.979V145.8" transform="translate(16793)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
		    <path id="Path_6062" data-name="Path 6062" d="M-15450.782,120.282V145.8" transform="translate(1481.605 15600.17) rotate(90)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
		    <path id="Path_6060" data-name="Path 6060" d="M-15450.782,140.979V145.8" transform="translate(16805)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
		    <path id="Path_6061" data-name="Path 6061" d="M-15450.782,140.979V145.8" transform="translate(16808)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
		  </g>
		</svg>

		<span class="noto-semibold white">ექიმთან ჩაეწერე</span>
    </a>

    <a href="#" class="price-box">
    	<div class="top">
    		<div class="noto-bold num">
    			11
    		</div>
    		<div class="price">
    			₾
    		</div>
    	</div>
    	<div class="bottom">
    		<svg xmlns="http://www.w3.org/2000/svg" width="25.641" height="25.605" viewBox="0 0 25.641 25.605">
			  <path id="shedzena" d="M27.235,7.74h0a.849.849,0,0,0-.768-.41L10.978,6.646a.992.992,0,0,0-.067,1.983l14.221.615L22.4,18H10.01L7.774,5.415a.981.981,0,0,0-.6-.752l-3.739-1.5a.963.963,0,0,0-1.269.547,1.033,1.033,0,0,0,.534,1.3L5.938,6.3l2.3,12.854a.977.977,0,0,0,.968.82h.134l-.8,2.29a1.041,1.041,0,0,0,.1.889.807.807,0,0,0,.668.376h.434a3.037,3.037,0,0,0-.734,1.949,2.838,2.838,0,1,0,4.94-1.949h4.607a3.037,3.037,0,0,0-.734,1.949,2.838,2.838,0,1,0,4.94-1.949H23.1a.848.848,0,0,0,.835-.957.837.837,0,0,0-.835-.855H10.545l.6-1.709H23.1a.974.974,0,0,0,.935-.684L27.369,8.663A1.247,1.247,0,0,0,27.235,7.74ZM11.88,26.611a1.2,1.2,0,1,1,1.168-1.2A1.2,1.2,0,0,1,11.88,26.611Zm8.813,0a1.2,1.2,0,1,1,1.168-1.2A1.2,1.2,0,0,1,20.693,26.611Z" transform="translate(-1.91 -2.933)" fill="#ee2a7b" stroke="#fff" stroke-width="0.3"/>
			</svg>


			<span class="noto-bold">შეძენა</span>
    	</div>
    </a>
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
		
		@include('app.layout.components.packageDetails')
		
	</div>
</div>

@include('app.layout.components.directionSlider')

@include('app.layout.components.serviceScheme')




@include('app.layout.components.findAgent')



@endsection
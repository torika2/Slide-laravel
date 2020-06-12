@extends('app.layout.app')

@section('content')


<div class="container ecoist-page-container">
	<div class="heading">
		<div class="side">
			<h2 class="font-21 fira-bold uppercase">გახდი</h2>
			<h3 class="font-55 fira-bold uppercase">#ეკოისტი</h3>
			<div class="text">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore inventore est, perspiciatis soluta et veniam vel cum odio vero, doloremque quae quibusdam sunt aliquid, libero pariatur nisi earum. Corrupti, saepe!
			</div>
		</div>	
		<div class="side">
			<div class="image">
				<img src="{{asset('assets/img/img (17).jpg')}}" alt="">
			</div>
		</div>
	</div>
	<div class="main-container lg_gallery">
		<div class="row">
			<div class="side">
				<div class="image">
					<img src="{{asset('assets/img/img (17).jpg')}}" alt="">
				</div>
			</div>
			<div class="side">
				<h2 class="font-55 uppercase fira-bold">ფეხით დადიხარ?</h2>
				<h3 class="font-55 uppercase fira-bold"><span class="font-55 uppercase fira-bold">ეკოისტი</span> ხარ!</h2>
				<div class="text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel at numquam explicabo maiores inventore culpa repellendus similique sapiente. Eligendi corporis numquam hic odio, culpa ducimus, quibusdam molestiae aliquam neque eaque.
				</div>
				<a class="lg" href="https://www.youtube.com/watch?v=meBbDqAXago">
					<div class="circle">
						<svg xmlns="http://www.w3.org/2000/svg" width="11.185" height="20.617" viewBox="0 0 11.185 20.617">
						  <g id="Group_845" data-name="Group 845" transform="translate(0.707 0.707)">
						    <line id="Line_90" data-name="Line 90" x2="9.515" y2="9.432" transform="translate(0.256 0)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="1"/>
						    <line id="Line_91" data-name="Line 91" y1="9.771" x2="9.771" transform="translate(0 9.432)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="1"/>
						  </g>
						</svg>
					</div>
					<span class="font-16 noto-bold">ნახეთ ვიდეო</span>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="side">
				<div class="image">
					<img src="{{asset('assets/img/img (17).jpg')}}" alt="">
				</div>
			</div>
			<div class="side">
				<h2 class="font-55 uppercase fira-bold">ფეხით დადიხარ?</h2>
				<h3 class="font-55 uppercase fira-bold"><span class="font-55 uppercase fira-bold">ეკოისტი</span> ხარ!</h2>
				<div class="text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel at numquam explicabo maiores inventore culpa repellendus similique sapiente. Eligendi corporis numquam hic odio, culpa ducimus, quibusdam molestiae aliquam neque eaque.
				</div>
				<a class="lg" href="https://www.youtube.com/watch?v=meBbDqAXago">
					<div class="circle">
						<svg xmlns="http://www.w3.org/2000/svg" width="11.185" height="20.617" viewBox="0 0 11.185 20.617">
						  <g id="Group_845" data-name="Group 845" transform="translate(0.707 0.707)">
						    <line id="Line_90" data-name="Line 90" x2="9.515" y2="9.432" transform="translate(0.256 0)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="1"/>
						    <line id="Line_91" data-name="Line 91" y1="9.771" x2="9.771" transform="translate(0 9.432)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="1"/>
						  </g>
						</svg>
					</div>
					<span class="font-16 noto-bold">ნახეთ ვიდეო</span>
				</a>
			</div>
		</div>
	</div>
</div>


@endsection

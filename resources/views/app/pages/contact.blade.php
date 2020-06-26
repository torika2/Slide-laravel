@extends('app.layout.app')
@section('pageName')contact @endsection
@section('content')


<div class="head">
	<div class="img-box">
		<picture>
          <source media="(max-width: 767px)" srcset="{{asset('assets/img/img (30).jpg')}}">
          <source media="(max-width: 1023px)" srcset="{{asset('assets/img/img (30).jpg')}}">
          <img src="{{asset('assets/img/img (30).jpg')}}" class="img-absolute" alt="">
        </picture>
		<div class="img-layer"></div>
	</div>
	<h1 class="fira-bold font-55 white ttl">კონტაქტი</h1>
</div>
<div class="contact-cont">
	<div class="contact-inner">
		<div class="top">
			<div class="left">
				<div class="fira-bold font-34 ttl">საკონტაქტო ინფორმაცია</div>
				<div class="contact-details">
					<div class="left">
						<div>
							<span>მისამართი:</span>
							<span class="noto-bold">თბილისი, 0171 კოსტავას ქ. 67</span>
						</div>
						<div>
							<span>სამუშაო საათები</span>
							<span class="noto-bold">ორშაბათი - პარასკევი: 9:30 - 18:30</span>
						</div>
						<a href="#" class="direction-btn">
							<svg id="pin" xmlns="http://www.w3.org/2000/svg" width="10.341" height="12.611" viewBox="0 0 10.341 12.611">
							  <path id="Path_5185" data-name="Path 5185" d="M5.17,12.611C2.83,10.655,0,8.419,0,5.17a5.17,5.17,0,0,1,10.341,0C10.341,8.419,7.511,10.655,5.17,12.611Zm0-9.782A2.341,2.341,0,1,1,2.83,5.17,2.341,2.341,0,0,1,5.17,2.83Z" fill="#cc004a" fill-rule="evenodd"/>
							</svg>

							<span class="noto-bold">მიმართულება</span>
						</a>
					</div>
					<div class="right">
						<div class="mail-tel">
							<div>
								<span>ცხელი ხაზი::</span>
								<a href="tel:+0322505111" class="noto-bold">032 2 505 111</a>
							</div>
							<div>
								<span>სამუშაო საათები</span>
								<a href="mailto:info@gpih.ge" class="noto-bold">info@gpih.ge</a>
							</div>
						</div>
						<div class="contact-soc">
							<span class="ttl">სოციალური ქსელები</span>
							<a href="#">
								<div>
									<svg xmlns="http://www.w3.org/2000/svg" width="16.002" height="15.998" viewBox="0 0 16.002 15.998">
									  <path id="Subtraction_41" data-name="Subtraction 41" d="M18326-2478.5h-12a2,2,0,0,1-2-2v-12a2,2,0,0,1,2-2h12a2,2,0,0,1,2,2v12A2,2,0,0,1,18326-2478.5Zm-7.641-9.411a.361.361,0,0,0-.359.363v1.417a.352.352,0,0,0,.1.262.356.356,0,0,0,.258.115h.617a.107.107,0,0,1,.105.106v3.864a.361.361,0,0,0,.357.364h1.408a.363.363,0,0,0,.363-.364v-3.868a.108.108,0,0,1,.105-.106h1.027a.356.356,0,0,0,.354-.308l.234-1.417a.335.335,0,0,0-.078-.3.339.339,0,0,0-.27-.129h-1.207a.168.168,0,0,1-.166-.17v-.9a.328.328,0,0,1,.092-.271.341.341,0,0,1,.234-.093h1.1a.361.361,0,0,0,.363-.359v-1.435a.361.361,0,0,0-.363-.359h-1.264a2.361,2.361,0,0,0-1.738.592,2.1,2.1,0,0,0-.553,1.554v1.336a.1.1,0,0,1-.105.106Z" transform="translate(-18311.998 2494.499)" fill="#292562"/>
									</svg>
								</div>
								<span>facebook</span>
							</a>
							<a href="#">
								<div>
									<svg xmlns="http://www.w3.org/2000/svg" width="17.003" height="17.003" viewBox="0 0 17.003 17.003">
									  <path id="Path_8308" data-name="Path 8308" d="M12.481,25h8.041A4.545,4.545,0,0,0,25,20.426v-7.85A4.545,4.545,0,0,0,20.522,8H12.481A4.545,4.545,0,0,0,8,12.577v7.85A4.545,4.545,0,0,0,12.481,25Zm8.98-14.169A1.063,1.063,0,1,1,20.419,11.9a1.063,1.063,0,0,1,1.041-1.063ZM16.5,12.251A4.251,4.251,0,1,1,12.339,16.5,4.208,4.208,0,0,1,16.5,12.251Z" transform="translate(-8 -8)" fill="#292562"/>
									</svg>
								</div>
								<span>Instagram</span>
							</a>
							<a href="#">
								<div>
									<svg xmlns="http://www.w3.org/2000/svg" width="18.957" height="16.249" viewBox="0 0 18.957 16.249">
									  <path id="Path_8307" data-name="Path 8307" d="M7.047,23.822a47.917,47.917,0,0,0,6.432.427,47.918,47.918,0,0,0,6.432-.423,3.517,3.517,0,0,0,3.047-3.48V11.906a3.517,3.517,0,0,0-3.047-3.48,48.708,48.708,0,0,0-12.864,0A3.517,3.517,0,0,0,4,11.906v8.436A3.517,3.517,0,0,0,7.047,23.822ZM11.3,14.567a1.158,1.158,0,0,1,1.784-.975l2.654,1.693a.982.982,0,0,1,0,1.652l-2.654,1.693a1.158,1.158,0,0,1-1.784-.975Z" transform="translate(-4 -8)" fill="#292562"/>
									</svg>
								</div>
								<span>Youtube</span>
							</a>
							<a href="#">
								<div>
									<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17">
									  <path id="icons8-linkedin" d="M19.455,4H5.545A1.545,1.545,0,0,0,4,5.545V19.455A1.545,1.545,0,0,0,5.545,21H19.455A1.545,1.545,0,0,0,21,19.455V5.545A1.545,1.545,0,0,0,19.455,4ZM9.374,17.909H7.094V10.574h2.28ZM8.211,9.526A1.329,1.329,0,1,1,9.539,8.2,1.329,1.329,0,0,1,8.211,9.526Zm9.7,8.383H15.634V14.342c0-.851-.015-1.945-1.185-1.945-1.186,0-1.369.926-1.369,1.883v3.629H10.8V10.574H12.99v1h.031a2.4,2.4,0,0,1,2.157-1.185c2.308,0,2.735,1.519,2.735,3.494Z" transform="translate(-4 -4)" fill="#292562"/>
									</svg>
								</div>
								<span>Linkin</span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="right">
				<div class="fira-bold font-34 ttl">მოგვწერეთ</div>
				<form >
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
							<input class="v-mail" type="email">
							<div class="placeholder">
								<span>ელ.ფოსტა</span>
								<span>*</span>
							</div>
						</div>
						<div class="error-msg">
							<span>მიუთითეთ ელ ფოსტა</span>
						</div>
					</div>

					<div class="input-wrap">
						<div class="placeholder-wrap">
							<input type="text">
							<div class="placeholder">
								<span>დანიშნულება</span>
								<span></span>
							</div>
						</div>
					</div>

					<div class="input-wrap">
						<div class="placeholder-wrap">
							<input type="text">
							<div class="placeholder">
								<span>სათაური</span>
								<span></span>
							</div>
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
	                    <button class="noto-bold" id="contact-btn">გაგზავნა</button>
					</div>

					<div class="success-msg">
						<h2 class="noto-bold ttl">თქვენი შეტყობინება გაგზავნილია!</h2>
						<div class="text">მიმდინარეობს შეტყობინების განხილვა, უახლოეს პერიოდში
							დაგიკავშირდებათ ჩვენი აგენტი.
						</div>
						<span>გმადლობთ</span>	
						<button class="noto-bold" id="new-msg">ახალი შეტყობინება</button>
					</div>
				</form>
			</div>
		</div>
		<div class="branches">
			<div class="noto-bold font-21 ttl">რეგიონალური ფილიალი</div>
			<div class="font-13 color-prim subtitle">შეარჩიე შენთვის მოსახერხებელი ლოკაცია</div>
			<div class="tabs">
				<div class="active" data-branch = "branches-1">
					<span class="noto-bold">გაყიდვების დეპარტამენტი</span>
					<span class="noto-bold">გაყიდვები</span>
				</div>
				<div data-branch = "branches-2">
					<span class="noto-bold">სამედიცინო დეპარტამენტი</span>
					<span class="noto-bold">სამედიცინო</span>
				</div>
				<div class="bg">
					
				</div>
			</div>

			<div id="branches-grid-wrap">
				<div class="branches-grid" id="branches-1">
					<a href="#" class="list">
						<div class="item">
							<span>გორი</span>
							<svg xmlns="http://www.w3.org/2000/svg" width="1" height="25.032" viewBox="0 0 0.5 25.032">
							  <path id="Path_6241" data-name="Path 6241" d="M655-7923.56h24.532" transform="translate(-7923.31 -654.75) rotate(90)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"/>
							</svg>
						</div>
						<div class="item">
							<span>ჭავჭავაძის ქ. 8 კლინიკა "ნოვა მედი"</span>
						</div>
						<span class="item">
							<span>08:00 - 20:00</span>
							<svg xmlns="http://www.w3.org/2000/svg" width="1" height="25.032" viewBox="0 0 0.5 25.032">
							  <path id="Path_6241" data-name="Path 6241" d="M655-7923.56h24.532" transform="translate(-7923.31 -654.75) rotate(90)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"/>
							</svg>
						</span>
						<div class="item">
							<span class="noto-bold">0 370 27 94 22</span>
							<svg xmlns="http://www.w3.org/2000/svg" width="1" height="25.032" viewBox="0 0 0.5 25.032">
							  <path id="Path_6241" data-name="Path 6241" d="M655-7923.56h24.532" transform="translate(-7923.31 -654.75) rotate(90)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"/>
							</svg>
						</div>
						<div class="item">
							<span>
								<svg id="pin" xmlns="http://www.w3.org/2000/svg" width="19.546" height="23.838" viewBox="0 0 19.546 23.838">
								  <path id="Path_8939" data-name="Path 8939" d="M9.773,23.838C5.349,20.14,0,15.914,0,9.773a9.773,9.773,0,0,1,19.546,0C19.546,15.914,14.2,20.14,9.773,23.838Zm0-18.489A4.424,4.424,0,1,1,5.349,9.773,4.424,4.424,0,0,1,9.773,5.349Z" fill="#ee2a7b" fill-rule="evenodd"/>
								</svg>
								<span>მიმართულება</span>
							</span>
						</div>
						<svg xmlns="http://www.w3.org/2000/svg" width="1555.746" height="1" viewBox="0 0 1555.746 0.5">
						  <path id="Path_6197" data-name="Path 6197" d="M655-7923.56H2210.246" transform="translate(-654.75 7923.81)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"/>
						</svg>
					</a>
					<a href="#" class="list">
						<div class="item">
							<span>გორი</span>
							<svg xmlns="http://www.w3.org/2000/svg" width="1" height="25.032" viewBox="0 0 0.5 25.032">
							  <path id="Path_6241" data-name="Path 6241" d="M655-7923.56h24.532" transform="translate(-7923.31 -654.75) rotate(90)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"/>
							</svg>
						</div>
						<div class="item">
							<span>ჭავჭავაძის ქ. 8 კლინიკა "ნოვა მედი"</span>
						</div>
						<span class="item">
							<span>08:00 - 20:00</span>
							<svg xmlns="http://www.w3.org/2000/svg" width="1" height="25.032" viewBox="0 0 0.5 25.032">
							  <path id="Path_6241" data-name="Path 6241" d="M655-7923.56h24.532" transform="translate(-7923.31 -654.75) rotate(90)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"/>
							</svg>
						</span>
						<div class="item">
							<span class="noto-bold">0 370 27 94 22</span>
							<svg xmlns="http://www.w3.org/2000/svg" width="1" height="25.032" viewBox="0 0 0.5 25.032">
							  <path id="Path_6241" data-name="Path 6241" d="M655-7923.56h24.532" transform="translate(-7923.31 -654.75) rotate(90)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"/>
							</svg>
						</div>
						<div class="item">
							<span>
								<svg id="pin" xmlns="http://www.w3.org/2000/svg" width="19.546" height="23.838" viewBox="0 0 19.546 23.838">
								  <path id="Path_8939" data-name="Path 8939" d="M9.773,23.838C5.349,20.14,0,15.914,0,9.773a9.773,9.773,0,0,1,19.546,0C19.546,15.914,14.2,20.14,9.773,23.838Zm0-18.489A4.424,4.424,0,1,1,5.349,9.773,4.424,4.424,0,0,1,9.773,5.349Z" fill="#ee2a7b" fill-rule="evenodd"/>
								</svg>
								<span>მიმართულება</span>
							</span>
						</div>
						<svg xmlns="http://www.w3.org/2000/svg" width="1555.746" height="1" viewBox="0 0 1555.746 0.5">
						  <path id="Path_6197" data-name="Path 6197" d="M655-7923.56H2210.246" transform="translate(-654.75 7923.81)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"/>
						</svg>
					</a>
				</div>
				<div class="branches-grid" id="branches-2">
					<a href="#" class="list">
						<div class="item">
							<span>გორი</span>
							<svg xmlns="http://www.w3.org/2000/svg" width="1" height="25.032" viewBox="0 0 0.5 25.032">
							  <path id="Path_6241" data-name="Path 6241" d="M655-7923.56h24.532" transform="translate(-7923.31 -654.75) rotate(90)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"/>
							</svg>
						</div>
						<div class="item">
							<span>ჭავჭავაძის ქ. 8 კლინიკა "ნოვა მედი"</span>
						</div>
						<span class="item">
							<span>08:00 - 20:00</span>
							<svg xmlns="http://www.w3.org/2000/svg" width="1" height="25.032" viewBox="0 0 0.5 25.032">
							  <path id="Path_6241" data-name="Path 6241" d="M655-7923.56h24.532" transform="translate(-7923.31 -654.75) rotate(90)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"/>
							</svg>
						</span>
						<div class="item">
							<span class="noto-bold">0 370 27 94 22</span>
							<svg xmlns="http://www.w3.org/2000/svg" width="1" height="25.032" viewBox="0 0 0.5 25.032">
							  <path id="Path_6241" data-name="Path 6241" d="M655-7923.56h24.532" transform="translate(-7923.31 -654.75) rotate(90)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"/>
							</svg>
						</div>
						<div class="item">
							<span>
								<svg id="pin" xmlns="http://www.w3.org/2000/svg" width="19.546" height="23.838" viewBox="0 0 19.546 23.838">
								  <path id="Path_8939" data-name="Path 8939" d="M9.773,23.838C5.349,20.14,0,15.914,0,9.773a9.773,9.773,0,0,1,19.546,0C19.546,15.914,14.2,20.14,9.773,23.838Zm0-18.489A4.424,4.424,0,1,1,5.349,9.773,4.424,4.424,0,0,1,9.773,5.349Z" fill="#ee2a7b" fill-rule="evenodd"/>
								</svg>
								<span>მიმართულება</span>
							</span>
						</div>
						<svg xmlns="http://www.w3.org/2000/svg" width="1555.746" height="1" viewBox="0 0 1555.746 0.5">
						  <path id="Path_6197" data-name="Path 6197" d="M655-7923.56H2210.246" transform="translate(-654.75 7923.81)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"/>
						</svg>
					</a>
					<a href="#" class="list">
						<div class="item">
							<span>გორი</span>
							<svg xmlns="http://www.w3.org/2000/svg" width="1" height="25.032" viewBox="0 0 0.5 25.032">
							  <path id="Path_6241" data-name="Path 6241" d="M655-7923.56h24.532" transform="translate(-7923.31 -654.75) rotate(90)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"/>
							</svg>
						</div>
						<div class="item">
							<span>ჭავჭავაძის ქ. 8 კლინიკა "ნოვა მედი"</span>
						</div>
						<span class="item">
							<span>08:00 - 20:00</span>
							<svg xmlns="http://www.w3.org/2000/svg" width="1" height="25.032" viewBox="0 0 0.5 25.032">
							  <path id="Path_6241" data-name="Path 6241" d="M655-7923.56h24.532" transform="translate(-7923.31 -654.75) rotate(90)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"/>
							</svg>
						</span>
						<div class="item">
							<span class="noto-bold">0 370 27 94 22</span>
							<svg xmlns="http://www.w3.org/2000/svg" width="1" height="25.032" viewBox="0 0 0.5 25.032">
							  <path id="Path_6241" data-name="Path 6241" d="M655-7923.56h24.532" transform="translate(-7923.31 -654.75) rotate(90)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"/>
							</svg>
						</div>
						<div class="item">
							<span>
								<svg id="pin" xmlns="http://www.w3.org/2000/svg" width="19.546" height="23.838" viewBox="0 0 19.546 23.838">
								  <path id="Path_8939" data-name="Path 8939" d="M9.773,23.838C5.349,20.14,0,15.914,0,9.773a9.773,9.773,0,0,1,19.546,0C19.546,15.914,14.2,20.14,9.773,23.838Zm0-18.489A4.424,4.424,0,1,1,5.349,9.773,4.424,4.424,0,0,1,9.773,5.349Z" fill="#ee2a7b" fill-rule="evenodd"/>
								</svg>
								<span>მიმართულება</span>
							</span>
						</div>
						<svg xmlns="http://www.w3.org/2000/svg" width="1555.746" height="1" viewBox="0 0 1555.746 0.5">
						  <path id="Path_6197" data-name="Path 6197" d="M655-7923.56H2210.246" transform="translate(-654.75 7923.81)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"/>
						</svg>
					</a>
					<a href="#" class="list">
						<div class="item">
							<span>გორი</span>
							<svg xmlns="http://www.w3.org/2000/svg" width="1" height="25.032" viewBox="0 0 0.5 25.032">
							  <path id="Path_6241" data-name="Path 6241" d="M655-7923.56h24.532" transform="translate(-7923.31 -654.75) rotate(90)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"/>
							</svg>
						</div>
						<div class="item">
							<span>ჭავჭავაძის ქ. 8 კლინიკა "ნოვა მედი"</span>
						</div>
						<span class="item">
							<span>08:00 - 20:00</span>
							<svg xmlns="http://www.w3.org/2000/svg" width="1" height="25.032" viewBox="0 0 0.5 25.032">
							  <path id="Path_6241" data-name="Path 6241" d="M655-7923.56h24.532" transform="translate(-7923.31 -654.75) rotate(90)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"/>
							</svg>
						</span>
						<div class="item">
							<span class="noto-bold">0 370 27 94 22</span>
							<svg xmlns="http://www.w3.org/2000/svg" width="1" height="25.032" viewBox="0 0 0.5 25.032">
							  <path id="Path_6241" data-name="Path 6241" d="M655-7923.56h24.532" transform="translate(-7923.31 -654.75) rotate(90)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"/>
							</svg>
						</div>
						<div class="item">
							<span>
								<svg id="pin" xmlns="http://www.w3.org/2000/svg" width="19.546" height="23.838" viewBox="0 0 19.546 23.838">
								  <path id="Path_8939" data-name="Path 8939" d="M9.773,23.838C5.349,20.14,0,15.914,0,9.773a9.773,9.773,0,0,1,19.546,0C19.546,15.914,14.2,20.14,9.773,23.838Zm0-18.489A4.424,4.424,0,1,1,5.349,9.773,4.424,4.424,0,0,1,9.773,5.349Z" fill="#ee2a7b" fill-rule="evenodd"/>
								</svg>
								<span>მიმართულება</span>
							</span>
						</div>
						<svg xmlns="http://www.w3.org/2000/svg" width="1555.746" height="1" viewBox="0 0 1555.746 0.5">
						  <path id="Path_6197" data-name="Path 6197" d="M655-7923.56H2210.246" transform="translate(-654.75 7923.81)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"/>
						</svg>
					</a>
					<a href="#" class="list">
						<div class="item">
							<span>გორი</span>
							<svg xmlns="http://www.w3.org/2000/svg" width="1" height="25.032" viewBox="0 0 0.5 25.032">
							  <path id="Path_6241" data-name="Path 6241" d="M655-7923.56h24.532" transform="translate(-7923.31 -654.75) rotate(90)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"/>
							</svg>
						</div>
						<div class="item">
							<span>ჭავჭავაძის ქ. 8 კლინიკა "ნოვა მედი"</span>
						</div>
						<span class="item">
							<span>08:00 - 20:00</span>
							<svg xmlns="http://www.w3.org/2000/svg" width="1" height="25.032" viewBox="0 0 0.5 25.032">
							  <path id="Path_6241" data-name="Path 6241" d="M655-7923.56h24.532" transform="translate(-7923.31 -654.75) rotate(90)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"/>
							</svg>
						</span>
						<div class="item">
							<span class="noto-bold">0 370 27 94 22</span>
							<svg xmlns="http://www.w3.org/2000/svg" width="1" height="25.032" viewBox="0 0 0.5 25.032">
							  <path id="Path_6241" data-name="Path 6241" d="M655-7923.56h24.532" transform="translate(-7923.31 -654.75) rotate(90)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"/>
							</svg>
						</div>
						<div class="item">
							<span>
								<svg id="pin" xmlns="http://www.w3.org/2000/svg" width="19.546" height="23.838" viewBox="0 0 19.546 23.838">
								  <path id="Path_8939" data-name="Path 8939" d="M9.773,23.838C5.349,20.14,0,15.914,0,9.773a9.773,9.773,0,0,1,19.546,0C19.546,15.914,14.2,20.14,9.773,23.838Zm0-18.489A4.424,4.424,0,1,1,5.349,9.773,4.424,4.424,0,0,1,9.773,5.349Z" fill="#ee2a7b" fill-rule="evenodd"/>
								</svg>
								<span>მიმართულება</span>
							</span>
						</div>
						<svg xmlns="http://www.w3.org/2000/svg" width="1555.746" height="1" viewBox="0 0 1555.746 0.5">
						  <path id="Path_6197" data-name="Path 6197" d="M655-7923.56H2210.246" transform="translate(-654.75 7923.81)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"/>
						</svg>
					</a>
					<a href="#" class="list">
						<div class="item">
							<span>გორი</span>
							<svg xmlns="http://www.w3.org/2000/svg" width="1" height="25.032" viewBox="0 0 0.5 25.032">
							  <path id="Path_6241" data-name="Path 6241" d="M655-7923.56h24.532" transform="translate(-7923.31 -654.75) rotate(90)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"/>
							</svg>
						</div>
						<div class="item">
							<span>ჭავჭავაძის ქ. 8 კლინიკა "ნოვა მედი"</span>
						</div>
						<span class="item">
							<span>08:00 - 20:00</span>
							<svg xmlns="http://www.w3.org/2000/svg" width="1" height="25.032" viewBox="0 0 0.5 25.032">
							  <path id="Path_6241" data-name="Path 6241" d="M655-7923.56h24.532" transform="translate(-7923.31 -654.75) rotate(90)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"/>
							</svg>
						</span>
						<div class="item">
							<span class="noto-bold">0 370 27 94 22</span>
							<svg xmlns="http://www.w3.org/2000/svg" width="1" height="25.032" viewBox="0 0 0.5 25.032">
							  <path id="Path_6241" data-name="Path 6241" d="M655-7923.56h24.532" transform="translate(-7923.31 -654.75) rotate(90)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"/>
							</svg>
						</div>
						<div class="item">
							<span>
								<svg id="pin" xmlns="http://www.w3.org/2000/svg" width="19.546" height="23.838" viewBox="0 0 19.546 23.838">
								  <path id="Path_8939" data-name="Path 8939" d="M9.773,23.838C5.349,20.14,0,15.914,0,9.773a9.773,9.773,0,0,1,19.546,0C19.546,15.914,14.2,20.14,9.773,23.838Zm0-18.489A4.424,4.424,0,1,1,5.349,9.773,4.424,4.424,0,0,1,9.773,5.349Z" fill="#ee2a7b" fill-rule="evenodd"/>
								</svg>
								<span>მიმართულება</span>
							</span>
						</div>
						<svg xmlns="http://www.w3.org/2000/svg" width="1555.746" height="1" viewBox="0 0 1555.746 0.5">
						  <path id="Path_6197" data-name="Path 6197" d="M655-7923.56H2210.246" transform="translate(-654.75 7923.81)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"/>
						</svg>
					</a>
					<a href="#" class="list">
						<div class="item">
							<span>გორი</span>
							<svg xmlns="http://www.w3.org/2000/svg" width="1" height="25.032" viewBox="0 0 0.5 25.032">
							  <path id="Path_6241" data-name="Path 6241" d="M655-7923.56h24.532" transform="translate(-7923.31 -654.75) rotate(90)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"/>
							</svg>
						</div>
						<div class="item">
							<span>ჭავჭავაძის ქ. 8 კლინიკა "ნოვა მედი"</span>
						</div>
						<span class="item">
							<span>08:00 - 20:00</span>
							<svg xmlns="http://www.w3.org/2000/svg" width="1" height="25.032" viewBox="0 0 0.5 25.032">
							  <path id="Path_6241" data-name="Path 6241" d="M655-7923.56h24.532" transform="translate(-7923.31 -654.75) rotate(90)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"/>
							</svg>
						</span>
						<div class="item">
							<span class="noto-bold">0 370 27 94 22</span>
							<svg xmlns="http://www.w3.org/2000/svg" width="1" height="25.032" viewBox="0 0 0.5 25.032">
							  <path id="Path_6241" data-name="Path 6241" d="M655-7923.56h24.532" transform="translate(-7923.31 -654.75) rotate(90)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"/>
							</svg>
						</div>
						<div class="item">
							<span>
								<svg id="pin" xmlns="http://www.w3.org/2000/svg" width="19.546" height="23.838" viewBox="0 0 19.546 23.838">
								  <path id="Path_8939" data-name="Path 8939" d="M9.773,23.838C5.349,20.14,0,15.914,0,9.773a9.773,9.773,0,0,1,19.546,0C19.546,15.914,14.2,20.14,9.773,23.838Zm0-18.489A4.424,4.424,0,1,1,5.349,9.773,4.424,4.424,0,0,1,9.773,5.349Z" fill="#ee2a7b" fill-rule="evenodd"/>
								</svg>
								<span>მიმართულება</span>
							</span>
						</div>
						<svg xmlns="http://www.w3.org/2000/svg" width="1555.746" height="1" viewBox="0 0 1555.746 0.5">
						  <path id="Path_6197" data-name="Path 6197" d="M655-7923.56H2210.246" transform="translate(-654.75 7923.81)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"/>
						</svg>
					</a>
				</div>
			</div>
			
		</div>
	</div>
</div>




@endsection
@extends('app.layout.app')

@section('content')

<section class="directionTabHead career-head">
    <img src="http://gpi.loc/assets/img/businessHead.jpg" alt="">
    <div class="directionTabHeadInner">
        <div class="breadcrumb">
            <a href="" class="noto-semibold">კომპანიის შესახებ</a>
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="8" viewBox="0 0 6 8">
                  <path id="Polygon_16" data-name="Polygon 16" d="M4,0,8,6H0Z" transform="translate(6) rotate(90)" fill="#fff" opacity="0.8"></path>
                </svg>
            </span>
            <a href="" class="noto-semibold">ისტორია</a>
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="8" viewBox="0 0 6 8">
                  <path id="Polygon_16" data-name="Polygon 16" d="M4,0,8,6H0Z" transform="translate(6) rotate(90)" fill="#fff" opacity="0.8"></path>
                </svg>
            </span>
            <a href="" class="noto-semibold active">GPI-ის ისტორია</a>
        </div>
        <div class="directionHeadTabsCont">
            <h1 class="fira-bold font-55 text-center white">კარიერა ჯიპიაიში</h1>
            <div class="directionHeadTabs flex-box justify-center">
                <a href="##" class="directionHeadTab active fira-bold uppercase">
                    <i></i>
                    IT
                </a>
                <a href="##" class="directionHeadTab fira-bold uppercase">
                    <i></i>
                    Sales
                </a>
                <a href="##" class="directionHeadTab fira-bold uppercase">
                    <i></i>
                    მომსახურება
                </a>
                <a href="##" class="directionHeadTab fira-bold uppercase">
                    <i></i>
                    სადაზღვევო სპეციფიკაცია
                </a>
            </div>
        </div>
    </div>
</section>



@endsection

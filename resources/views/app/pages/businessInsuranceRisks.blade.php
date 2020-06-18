@extends('app.layout.app')
@section('pageName')business-risks @endsection
@section('content')
    @include('app.layout.components.directionTabHead')

    <section class="businessGallery directHeadContainer">
        <div class="businessGalleryInner directHeadInner">
            <h3 class="font-34 fira-bold">დაეზღვიე ბიზნეს რისკებიდან</h3>
             <div class="busTabs">
                 <div class="busTab noto-semibold">მცირე ბიზნესი</div>
                 <div class="busTab noto-semibold">მსხვილი მეწარმე</div>
                 <div class="busTab noto-semibold">ყველა ბიზნესს</div>
             </div>
        </div>

    </section>

@endsection

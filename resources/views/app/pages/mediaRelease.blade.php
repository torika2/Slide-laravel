@extends('app.layout.app')
@section('pageName')business-risks-inner @endsection
@section('content')
    @include('app.layout.components.directionTabHead')

    <section class="businessInner directHeadContainer">
        <div class="businessGalleryInner directHeadInner">
            <div class="directHeadCalendar">
                <h3 class="font-34 fira-bold">GPI-ის ისტორია</h3>
                <div class="date-wrap">
                    <input type="text" id="rangeDate" placeholder="აირჩიეთ თარიღი" data-input="" class="flatpickr-input active" readonly="readonly">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23">
                        <g id="Group_2495" data-name="Group 2495" transform="translate(0 1)">
                            <g id="Rectangle_1287" data-name="Rectangle 1287" transform="translate(0 1)" fill="none" stroke="#292562" stroke-width="2">
                                <rect width="23" height="21" rx="2" stroke="none"></rect>
                                <rect x="1" y="1" width="21" height="19" rx="1" fill="none"></rect>
                            </g>
                            <path id="Path_6058" data-name="Path 6058" d="M-15450.782,140.979v3.779" transform="translate(15455.002 -140.979)" fill="none" stroke="#292562" stroke-linecap="round" stroke-width="2"></path>
                            <path id="Path_6059" data-name="Path 6059" d="M-15450.782,140.979v3.779" transform="translate(15457.355 -140.979)" fill="none" stroke="#292562" stroke-linecap="round" stroke-width="2"></path>
                            <path id="Path_6062" data-name="Path 6062" d="M0,0V20.012" transform="translate(21.558 6.597) rotate(90)" fill="none" stroke="#292562" stroke-linecap="round" stroke-width="2"></path>
                            <path id="Path_6060" data-name="Path 6060" d="M-15450.782,140.979v3.779" transform="translate(15466.768 -140.979)" fill="none" stroke="#292562" stroke-linecap="round" stroke-width="2"></path>
                            <path id="Path_6061" data-name="Path 6061" d="M-15450.782,140.979v3.779" transform="translate(15469.119 -140.979)" fill="none" stroke="#292562" stroke-linecap="round" stroke-width="2"></path>
                        </g>
                    </svg>
                </div>
            </div>

            <div class="directInnerLinksContainer">

                <div class="directInnerLinkFooter">
                    <div class="mediaReleaseContainer">
                        <div class="mediaRelease">
                            <div class="mediaImg">
                                <img src="https://via.placeholder.com/510x395" alt="" class="img-absolute">
                            </div>
                            <h4 class="ttl">
                                <div class="ttlInn noto-bold">ბიზნესის კონკურსზე, ორმა პროექტმა ორ ნომინაციაში გაიმარჯვა!</div>
                            </h4>
                            <div class="mediaRelDescr">
                                <div class="noto-medium">01 Jan 2020</div>
                                <div class="noto-medium">26.3 MB</div>
                                <a href="##" class="noto-bold">გადმოწერა</a>
                            </div>
                        </div>
                        <div class="mediaRelease">
                            <div class="mediaImg">
                                <img src="https://via.placeholder.com/510x395" alt="" class="img-absolute">
                            </div>
                            <h4 class="ttl">
                                <div class="ttlInn noto-bold">ბიზნესის კონკურსზე, ორმა პროექტმა ორ ნომინაციაში გაიმარჯვა!ბიზნესის კონკურსზე, ორმა პროექტმა ორ ნომინაციაში გაიმარჯვა!</div>
                            </h4>
                            <div class="mediaRelDescr">
                                <div class="noto-medium">01 Jan 2020</div>
                                <div class="noto-medium">26.3 MB</div>
                                <a href="##" class="noto-bold">გადმოწერა</a>
                            </div>
                        </div>
                        <div class="mediaRelease">
                            <div class="mediaImg">
                                <img src="https://via.placeholder.com/510x395" alt="" class="img-absolute">
                            </div>
                            <h4 class="ttl">
                                <div class="ttlInn noto-bold">ორ ნომინაციაში გაიმარჯვა!</div>
                            </h4>
                            <div class="mediaRelDescr">
                                <div class="noto-medium">01 Jan 2020</div>
                                <div class="noto-medium">26.3 MB</div>
                                <a href="##" class="noto-bold">გადმოწერა</a>
                            </div>
                        </div>
                        <div class="mediaRelease">
                            <div class="mediaImg">
                                <img src="https://via.placeholder.com/510x395" alt="" class="img-absolute">
                            </div>
                            <h4 class="ttl">
                                <div class="ttlInn noto-bold">პროექტმა ორ ნომინაციაში გაიმარჯვა!</div>
                            </h4>
                            <div class="mediaRelDescr">
                                <div class="noto-medium">01 Jan 2020</div>
                                <div class="noto-medium">26.3 MB</div>
                                <a href="##" class="noto-bold">გადმოწერა</a>
                            </div>
                        </div>

                    </div>
                    <div class="pagginationContainer">
                        <a href="" class="active noto-medium">1</a>
                        <a href="" class="noto-medium">2</a>
                        <a href="" class="noto-medium">3</a>
                        <a href="" class="noto-medium">4</a>
                    </div>
                </div>
            </div>

        </div>

    </section>
    @include('app.layout.components.teamContainer')
@endsection

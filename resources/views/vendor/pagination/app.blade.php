@if ($paginator->hasPages())
    <div class="container">
        <div class="col-lg-12">
            <ul class="list-unstyled page-numbers shop_page_number">

            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                 {{-- <li>
                        <a  href="javascript::void(0)" class="prev page-numbers">
                            <img src="{{asset('assets/img/left-arrow.svg')}}" alt="">
                        </a>
                    </li>--}}
            @else
                    <li>
                        <a  href="{{ $paginator->previousPageUrl() }}" class="prev page-numbers">
                            <img src="{{asset('assets/img/left-arrow.svg')}}" alt="">
                        </a>
                    </li>

            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                        <li><a class="page-numbers" href="#">{{ $element }}</a></li>

                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                                <li><span aria-current="page" class="page-numbers current">{{ $page }}</span></li>

                        @else
                                <li><a class="page-numbers" href="{{ $url }}">{{ $page }}</a></li>

                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())

                    <li>
                        <a class="next page-numbers" href="{{ $paginator->nextPageUrl() }}">
                            <img src="{{asset('assets/img/right-arrow.svg')}}" alt="">
                        </a>
                    </li>

            @else

                   {{-- <li>
                        <a class="next page-numbers disa" href="javascript::void(0)">
                            <img src="{{asset('assets/img/right-arrow.svg')}}" alt="">
                        </a>
                    </li>--}}



            @endif

            </ul>

        </div>
    </div>
@endif

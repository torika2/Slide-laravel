<ul class="nav nav-tabs" role="tablist">
    @php $activator = 0; $locales = getLocales(); @endphp
    @if(!isset($class))
        @php $class = ''; @endphp
        @endif
    @foreach($locales as $loc)
        <li class="nav-item" style="color:{{$errors->any() ? 'red' : ''}}"><a
                class="nav-link @if($activator == 0)  active @endif"
                data-toggle="tab" href="#{{$class}}locale-{{$loc->locale}}"
                role="tab" aria-selected="false">{{$loc->name}}
                @if ($loc->active == 1) <i class="fal fa-check"
                                           style="color: #00cb00"></i>
                @else <i class="fal fa-check" style="color: #cb2300"></i>  @endif
            </a></li>
        @php $activator++ @endphp
    @endforeach
</ul>

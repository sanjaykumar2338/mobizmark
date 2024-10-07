@isset($menus)
<ul class="menu pt-2 w-80 bg-base-100 text-base-content min-h-full">
    <li class="mb-2 font-semibold text-xl">
        <a href="{{ route('admin.dashboard') }}">
            {{env('APP_NAME')}}
        </a>
    </li>
    <br>
    @foreach($menus as $menu)
    <li>
        <a href="{{ $menu['link'] }}" class="{{ (request()->is(ltrim($menu['link'], '/'))) ? 'active' : '' }}">
            @if($menu['icon'])
            <x-admin.base-icon path="{{$menu['icon']}}" />
            @endif
            {{ $menu['name'] }}
        </a>
        @isset($menu['children'])
        <ul class="bg-base-100 p-2">
            @foreach($menu['children'] as $child)
            <li><a href="{{ $child['link'] }}" class="{{ (request()->is(ltrim($child['link'], '/'))) ? 'active' : '' }}">{{ $child['name'] }}</a></li>
            @endforeach
        </ul>
        @endisset
    </li>
    @endforeach
</ul>
@endisset
    
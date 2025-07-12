@props(['url' => '/', 'active' => false, 'icon' => null, 'mobile' => false])

@if($mobile)
    <a href="{{ $url }}" class="block px-4 py-2 hover:bg-blue-700 {{ $active ? 'text-pink-700' : 'text-white' }}">
        {{$slot}}</a>
@else

<a href="{{ $url }}" class="nav-link {{ $active ? 'text-pink-700' : '' }}">
    @if($icon)
        <i class="fa fa-{{$icon}}" mr-1"></i>
    @endif
    {{ $slot }}
</a>
@endif
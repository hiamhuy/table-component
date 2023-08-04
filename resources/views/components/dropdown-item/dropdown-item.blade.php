@props([
    'href'=>'#',
])

<li>
    <a href="{{ $href?$href:'#' }}" class="block px-4 py-2 hover:bg-gray-600 text-white">
        {{ $slot }}
    </a>
</li>
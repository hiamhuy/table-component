@props([
    'align' => 'left',
    'width' => '',
    ])

@php
    $widthClasses = $with??'';
    $textAlignClass = [
        'left' => 'text-left',
        'right' => 'text-right',
        'center' => 'text-center',
    ][$align] ?? 'text-left';

@endphp

<td @if($widthClasses != null) style="width:{{ $widthClasses }}" @endif {{ $attributes->merge(['class' => 'px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900 ' .$textAlignClass])->only('class') }}>
    {{ $slot }}
</td>
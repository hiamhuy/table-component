@props([
    'align' => 'left',
    'width' => '',
    'fixLeft'=> false,
    'fixRight'=> false,
    ])

@php
    $widthClasses = $with??'';
    $textAlignClass = [
        'left' => 'text-left',
        'right' => 'text-right',
        'center' => 'text-center',
    ][$align] ?? 'text-left';

    $styleClasses = "";
    if($widthClasses != null){
        $styleClasses .= "width:$widthClasses;";
    }
    if($fixLeft){
        $styleClasses .= "position:sticky; left:0; z-index:1; background-color: #FFFFFF;";
    }
    // if($fixRight){
    //     $styleClasses .= "position:sticky; right:0; z-index:1; background-color: #FFFFFF;";
    // }

@endphp

<td @if($styleClasses != null) style="{{ $styleClasses }}" @endif {{ $attributes->merge(['class' => 'px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900 ' .$textAlignClass])->only('class') }}>
    {{ $slot }}
</td>
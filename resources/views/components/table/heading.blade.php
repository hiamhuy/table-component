@props([
    'align' => 'left',
    'width' => '',
    'fixLeft'=> false,
    'fixRight'=> false,
    'sortable' => false,
])

@php
    $widthClass=$width??'';
    $_sortable = $sortable??false;
    $textAlignClass = [
        'left' => 'text-left',
        'right' => 'text-right',
        'center' => 'text-center',
    ][$align] ?? 'text-left';

    $styleClasses = "";
    if($widthClass != null){
        $styleClasses .= "width:$widthClass;";
    }
    if($fixLeft){
        $styleClasses .= "position:sticky; left:0; z-index:1";
    }
    if($fixRight){
        $styleClasses .= "position:sticky; right:0; z-index:1";
    }

@endphp

<th @if($styleClasses != null) 
        style="{{ $styleClasses }}" 
    @endif 
    {{ $attributes->merge(['class' => 'px-6 py-3 bg-gray-400 ' .$textAlignClass])->only('class') }}>
    @if (!$_sortable)
        <span class="text-xs font-bold leading-4 text-black uppercase tracking-wider">
            {{ $slot }}
        </span>
    @else
        <button {{ $attributes->except('class')}} class="space-x-1 font-bold text-xs leading-4 text-black uppercase tracking-wider">
           
          <div class="flex items-center">
            <span>{{ $slot }}</span>
            <span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                </svg>
               </span>
          </div>
           
        </button>
    @endif

</th>
@props([
    'idButton'=>'',
])
<button id="{{ 'actionButton'.$idButton }}" data-dropdown-toggle="{{ 'action'.$idButton }}" class="text-black border-solid border focus:ring-4 focus:outline-none font-medium rounded-lg text-sm p-2 text-center inline-flex items-center" type="button">
    <i class="fa-solid fa-ellipsis-vertical"></i>
</button>
<div id="{{ 'action'.$idButton }}" class="z-10 hidden bg-gray-700 divide-y divide-gray-100 rounded-lg shadow w-max">
    <ul class="py-2 text-sm text-gray-200" aria-labelledby="{{ 'actionButton'.$idButton }}">
        {{ $slot }}
    </ul>
</div>
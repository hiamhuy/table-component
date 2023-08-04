@props([
    'header',
    'body',
])
<div class="align-middle min-w-full overflow-x-auto shadow overflow-hidden sm:rounded-lg">
    <table class="relative min-w-full divide-y divide-violet-50 table-fixed">
        <thead>
            {{-- @if($isMulti)
                <x-table.heading width="70px" align="center">
                    <input value="{{ $checkAll }}" indeterminate="{{ $isIndeterminate }}" wire:change="checkSelectedAll()" type="checkbox" class="form-checkbox indeterminate:bg-gray-300 rounded text-blue-500" />
                </x-table.heading>
            @endif
                @foreach ($headers as $item)
                    <x-table.heading    width="{{ $item['width'] }}" 
                                        align="{{ $item['classes'] }}"
                                        direction="{{ $direction }}"
                                        @if($item['name'])
                                            sortable="{{ $sortable }}"  
                                        @endif
                    >

                        {{ $item['name'] }}

                    </x-table.heading>

                @endforeach --}}

                {{ $header }}
           
        </thead>

        <tbody class="bg-white divide-y divide-violet-50">

            {{ $body }}

        </tbody>
    </table>
</div>
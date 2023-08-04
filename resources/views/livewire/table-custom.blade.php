<div class="p-6">
    <x-table.table>
        <x-slot:header>
            <x-table.heading sortable>Id</x-table.heading>
            <x-table.heading sortable>name</x-table.heading>
            <x-table.heading sortable>age</x-table.heading>
        </x-slot>

        <x-slot:body>
            @foreach($datas as $dt)
                <x-table.row>

                    <x-table.cell>
                        {{ $dt['id'] }}
                    </x-table.cell>

                    <x-table.cell>
                        {{ $dt['name'] }}
                    </x-table.cell>

                    <x-table.cell>
                        {{ $dt['age'] }}
                    </x-table.cell>

                </x-table.row>


            @endforeach
        </x-slot:body>

    </x-table.table>
</div>
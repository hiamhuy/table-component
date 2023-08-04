<div class="p-6">
    <x-table.table>
        <x-slot:header>
            <x-table.heading sortable width="80px" fixLeft>Id</x-table.heading>
            <x-table.heading sortable>name</x-table.heading>
            <x-table.heading sortable width="180px" align="center">age</x-table.heading>
            <x-table.heading width="120px" align="center"></x-table.heading>
        </x-slot:header>

        <x-slot:body>
            @foreach($datas as $dt)
                <x-table.row>

                    <x-table.cell fixLeft>
                        {{ $dt['id'] }}
                    </x-table.cell>

                    <x-table.cell>
                        {{ $dt['name'] }}
                    </x-table.cell>

                    <x-table.cell align="center">
                        {{ $dt['age'] }}
                    </x-table.cell>

                    <x-table.cell align="center">

                        <x-button-dropdown idButton="{{ $dt['id'] }}">
                            <x-dropdown-item.dropdown-item wclick="getById({{ $dt['id'] }}, '{{ $dt['name'] }}', '{{ $dt['age'] }}')">
                                <i class="fa-regular fa-pen-to-square"></i> Sửa
                            </x-dropdown-item.dropdown-item>

                            <x-dropdown-item.dropdown-item href="#">
                                <i class="fa-regular fa-trash-can"></i> Xóa
                            </x-dropdown-item.dropdown-item>

                        </x-button-dropdown>
                    </x-table.cell>

                </x-table.row>
            @endforeach
        </x-slot:body>
    </x-table.table>
</div>
 
 <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-m text-gray-800 leading-tight">
            {{ __('Menu Makanan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <h3>Edit Data Menu Makanan</h3>
        <form action="{{ url('/menu/'. $row->menu_id) }}" method="POST">
            @method('PATCH')
        @csrf
        <div class="grid grid-cols-2 gap-6">
        <div class="grid grid-rows-2 gap-6">
        <div>
        <x-label>NAMA MAKANAN</x-label>
        <x-input type="text" class="block mt-1 w-full" name="menu_nama" value="{{ $row->menu_nama }}"></x-input>
        </div>
        <div>
        <x-label>HARGA MAKANAN</x-label>
        <x-input type="text" class="block mt-1 w-full" name="menu_harga" value="{{ $row->menu_harga }}"></x-input>
        </div>
        <div>
        <x-label>STOK MAKANAN</x-label>
        <x-input type="text" class="block mt-1 w-full" name="menu_stok"value="{{ $row->menu_stok }}"></x-input>
        </div>
 <div>
    <x-button class="ml-3">
    {{ __('Edit') }}
    </x-button>
    </div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>

                
</x-app-layout>

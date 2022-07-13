 
 <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-m text-gray-800 leading-tight">
            {{ __('Data Pasien') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <h3>Edit Data Menu Pasien</h3>
        <form action="{{ url('/pasien') }}" method="POST">
        @csrf
        <div class="grid grid-cols-2 gap-6">
        <div class="grid grid-rows-2 gap-6">
        <div>
        <x-label>NAMA PASIEN</x-label>
        <x-input type="text" class="block mt-1 w-full" name="pasien_nama"></x-input>
        </div>
        <div>
        <x-label>ALAMAT</x-label>
        <x-input type="text" class="block mt-1 w-full" name="pasien_alamat"></x-input>
        </div>
        <div>
        <x-label>KELUHAN</x-label>
        <x-input type="text" class="block mt-1 w-full" name="pasien_keluhan"></x-input>
        </div>
 <div>
    <x-button class="ml-3">
    {{ __('EDIT') }}
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

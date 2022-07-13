 
 <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-m text-gray-800 leading-tight">
            {{ __('DATA PASIEN') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                <h3>Daftar Pasien</h3> 
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                   <a href="{{ url('pasien/create') }}"> <x-button class="ml">Tambah Data</x-button></a>
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
        <tr> 
         <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
        <td>NAMA PASIEN</td> 
        <td>ALAMAT</td> 
        <td>KELUHAN</td> 
         <td>Edit</td> 
          <td>Hapus</td> 
        </tr> 
    </thead>
        @foreach($rows as $row) 
        <tr> 
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $row->pasien_id }}</td> 
        <td>{{ $row->pasien_nama }}</td> 
        <td>{{ $row->pasien_alamat }}</td> 
        <td>{{ $row->pasien_keluhan }}</td> 
        <td><a href="{{ url('pasien/' . $row->pasien_id . '/edit') }}"><x-button class="ml" >Edit</x-button></a></td>
        <td><a href="{{ url('pasien/' . $row->pasien_id . '/delete') }}"><x-button class="ml" >Hapus</x-button></a></td>
        </tr>
        @endforeach 
        </table> 
    </div>
</div>
</div>
</div>
</div>
</div>
    </div>
</div>
</x-app-layout>

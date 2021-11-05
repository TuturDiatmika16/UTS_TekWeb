@extends('layouts.admin')
@section('content')

<table class="min-w-full border-collapse block md:table">
<a href="tambahLokasi" class="bg-purple-500 text-white active:bg-purple-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="submit">Tambah Lokasi</a>
    <thead class="block md:table-header-group">
        <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-middle block md:table-cell">Nama Lokasi</th>
            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-middle block md:table-cell">Actions</th>
        </tr>
        @foreach ($lokasi as $item)
        <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
            <td>{{$item->nm_lokasi}}</td>
            <td class="p-2 md:border md:border-grey-500 text-middle block md:table-cell">
                <span class="inline-block w-1/3 md:hidden font-bold">Actions</span>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">Edit</button>
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">Delete</button>
            </td>
        </tr>
        @endforeach
        
    </thead>
</table>
@endsection
@extends('layouts.admin')
@section('content')

<table class="min-w-full border-collapse block md:table">
    <thead class="block md:table-header-group">
        <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-middle block md:table-cell">Berangkat</th>
            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-middle block md:table-cell">Tujuan</th>
            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-middle block md:table-cell">Tanggal Keberangkatan</th>
            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-middle block md:table-cell">Tanggal Pulang</th>
            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-middle block md:table-cell">Total Penumpang</th>
        </tr>
    </thead>
    <tbody class="block md:table-row-group">
        @foreach ($penerbangan as $item)
        <tr class="bg-white border border-grey-500 md:border-none block md:table-row">
            <td class="p-2 md:border md:border-grey-500 text-middle block md:table-cell">{{$item->asalLokasi->nm_lokasi}}</td>
            <td class="p-2 md:border md:border-grey-500 text-middle block md:table-cell">{{$item->tujuanLokasi->nm_lokasi}}</td>
            <td class="p-2 md:border md:border-grey-500 text-middle block md:table-cell">{{$item->tanggal_keberangkatan}}</td>
            <td class="p-2 md:border md:border-grey-500 text-middle block md:table-cell">{{$item->tanggal_pulang}}</td>
            <td class="p-2 md:border md:border-grey-500 text-middle block md:table-cell">{{$item->jumlah_penumpang}}</td>
        </tr>	
        @endforeach		
    </tbody>
</table>
    
@endsection

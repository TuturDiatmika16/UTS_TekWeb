@extends('layouts.admin')
@section('content')

<form action="saveLokasi">
    <div class="bg-blue p-4 shadow-md rounded-md text-left" style="max-width: 400px">
      <label class="block">
        <span class="text-gray-700">Tambahkan Lokasi Disini</span>
        <input id="lokasi" name="lokasi" class="form-input mt-1 block w-full" placeholder="Masukkan Lokasi" />
        <button class="bg-purple-700 text-white active:bg-purple-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="submit">Save</button>
      </label>
    </div>
</form>


@endsection
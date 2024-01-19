@extends('layouts.main')

@section('content')
    <div class="mt-8">
        {{-- untuk bingkai foto --}}
        <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                class="w-32 h-32 mx-auto">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg>
        </div>
        <div class="w-5/12 mx-auto">
            <table class="text-left">
                <tr>
                    <th>Nama</th>
                    <td class="px-6">:</td>
                    <td>{{ $data->nama }}</td>
                </tr>
                <tr>
                    <th>NIK</th>
                    <td class="px-6">:</td>
                    <td>{{ $data->nik }}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td class="px-6">:</td>
                    <td>{{ $data->alamat }} RT {{ $data->rt }} RW {{ $data->rw }} Desa {{ $data->desa }} Kecamatan
                        {{ $data->kecamatan }}</td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td class="px-6">:</td>
                    <td>{{ $data->agama }}</td>
                </tr>
                <tr>
                    <th>status</th>
                    <td class="px-6">:</td>
                    <td>{{ $data->status }}</td>
                </tr>
                <tr>
                    <th>pekerjaan</th>
                    <td class="px-6">:</td>
                    <td>{{ $data->pekerjaan }}</td>
                </tr>
                <tr>
                    <th>Kewarganegaraan</th>
                    <td class="px-6">:</td>
                    <td>{{ $data->kewarganegaraan }}</td>
                </tr>
                <tr>
                    <th>Telepon</th>
                    <td class="px-6">:</td>
                    <td>{{ $data->telepon }}</td>
                </tr>
            </table>
        </div>
    </div>
    <div id="map" class="my-8 h-80 w-8/12 mx-auto border border-black"></div>
@endsection

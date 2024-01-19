@extends('layouts.main')

@section('content')
    <div class="w-3/12 mx-auto mt-10 text-center">
        <h1 class="text-3xl text-red-500">Data warga</h1>
    </div>
    <table class="w-7/12 mx-auto mt-5">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis kelamin</th>
            <th>Alamat</th>
            <th>Agama</th>
            <th>Kewarganegaraan</th>
            <th>Aksi</th>
        </tr>
        @foreach ($data as $d)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->jenis_kelamin }}</td>
                <td>{{ $d->alamat }}</td>
                <td>{{ $d->agama }}</td>
                <td>{{ $d->kewarganegaraan }}</td>
                <td>
                    <a href="{{ route('ronda.warga', $d->id) }}"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">Detail</a>
                    <a href="#"
                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded">Lapor</a>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="w-2/12 mx-auto mt-8">
        <a href="#"
            class="bg-cyan-500 hover:bg-cyan-700 text-white font-bold py-2 px-4 border border-cyan-700 rounded">Jadwal
            Ronda</a>
    </div>
@endsection

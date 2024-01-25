@extends('layouts.main')

@section('content')
    <table>
        <tr>
            <th>NIK</th>
            <th>Nama</th>
            <th>Tempat/tanggal lahir</th>
            <th>Jenis_kelamin</th>
            <th>Alamat</th>
            <th>RT</th>
            <th>RW</th>
            <th>Desa</th>
            <th>Kecamatan</th>
            <th>Agama</th>
            <th>Status</th>
            <th>Pekerjaan</th>
            <th>Kewarganegaraan</th>
            <th>Telepon</th>
            <th>Opsi</th>
        </tr>
        <tr>
            @foreach ($detail as $d)
                <td>{{ $d->nik }}</td>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->ttl }}</td>
                <td>{{ $d->jenis_kelamin }}</td>
                <td>{{ $d->alamat }}</td>
                <td>{{ $d->rt }}</td>
                <td>{{ $d->rw }}</td>
                <td>{{ $d->desa }}</td>
                <td>{{ $d->kecamatan }}</td>
                <td>{{ $d->agama }}</td>
                <td>{{ $d->status }}</td>
                <td>{{ $d->pekerjaan }}</td>
                <td>{{ $d->kewarganegaraan }}</td>
                <td>{{ $d->telepon }}</td>
                <td>
                    <a href="{{ route('ronda.warga.update', $d->id) }}"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">Lengkapi
                        data</a>
                </td>
            @endforeach
        </tr>
    </table>
@endsection

@extends('layouts.main')

@section('content')
    <table class="border-2 border-black">
        <tr class="border-2 border-black">
            <th class="p-3">Senin</th>
            <th class="p-3">Selasa</th>
            <th class="p-3">Rabu</th>
            <th class="p-3">Kamis</th>
            <th class="p-3">Jumat</th>
            <th class="p-3">Sabtu</th>
            <th class="p-3">Minggu</th>
            <th class="p-3">Dari</th>
            <th class="p-3">Sampai</th>
        </tr>
        <tr class="border-2 border-black">
            @foreach ($jadwal as $j)
                <td>
                    <ol>
                        @foreach ($j as $user)
                            <li>{{ $user }}</li>
                        @endforeach
                    </ol>
                </td>
            @endforeach
            <td>7 Januari 2023</td>
            <td>7 Januari 2024</td>
        </tr>
    </table>
    <div class="mt-8">
        <a href="#" class="border-2 p-3 bg-red-500 text-white hover:bg-red-600">Pilih manual</a>
        <a href="{{ route('ronda.jadwal.acak') }}" class="border-2 p-3 bg-blue-500 text-white hover:bg-blue-600">Pilih
            otomatis</a>
    </div>
@endsection

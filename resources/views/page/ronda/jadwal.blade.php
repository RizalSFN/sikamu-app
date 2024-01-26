@extends('layouts.main')

@section('content')
    <form action="" method="POST">
        <table>
            <tr>
                <th>Senin</th>
                <th>Selasa</th>
                <th>Rabu</th>
                <th>Kamis</th>
                <th>Jumat</th>
                <th>Sabtu</th>
                <th>Minggu</th>
                <th>Dari</th>
                <th>Sampai</th>
            </tr>
            <tr class="border-2 border-black">
                @foreach ($hasil as $h)
                    <td class="mt-4">
                        <ul class="list-disc">
                            @foreach ($h as $d)
                                <li>{{ $d }}</li>
                            @endforeach
                        </ul>
                    </td>
                @endforeach
            </tr>
        </table>
    </form>
    <div class="mt-8">
        <a href="{{ route('ronda.jadwal.acak') }}" class="border-2 p-3 bg-blue-500 text-white hover:bg-blue-600"></a>
        <a href="{{ route('ronda.jadwal.acak') }}" class="border-2 p-3 bg-green-500 text-white hover:bg-green-600">Simpan</a>
    </div>
@endsection

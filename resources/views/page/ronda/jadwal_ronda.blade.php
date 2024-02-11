@extends('layouts.main')

@section('content')
    <div class="bg-fixed overflow-hidden text-center bg-cover bg-center object-cover h-screen"
        style="background-image: url('/img/bekgron.png');  width: auto;  ">
        <div class="mx-auto mt-32 text-center">
            <h1 class="text-3xl text-black font-semibold">JADWAL RONDA</h1>
        </div>
        <div class="container max-w-min mx-auto inline-flex space-x-3">
            <a href="{{ route('ronda', ['data' => 'senin']) }}"
                class="rounded-md mt-5 px-2 py-2 md:rounded-md md:text-1xl md:py-2 md:px-2 md:mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 {{ $hari == 'senin' ? 'text-cyan-400' : 'hover:text-cyan-400' }}">Sen</a>
            <a href="{{ route('ronda', ['data' => 'selasa']) }}"
                class="rounded-md text-1xl py-2 px-2 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 {{ $hari == 'selasa' ? 'text-cyan-400' : 'hover:text-cyan-400' }}">Sel</a>
            <a href="{{ route('ronda', ['data' => 'rabu']) }}"
                class="rounded-md text-1xl py-2 px-2 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 {{ $hari == 'rabu' ? 'text-cyan-400' : 'hover:text-cyan-400' }}">Rab</a>
            <a href="{{ route('ronda', ['data' => 'kamis']) }}"
                class="rounded-md text-1xl py-2 px-2 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 {{ $hari == 'kamis' ? 'text-cyan-400' : 'hover:text-cyan-400' }}">Kam</a>
            <a href="{{ route('ronda', ['data' => 'jumat']) }}"
                class="rounded-md text-1xl py-2 px-2 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 {{ $hari == 'jumat' ? 'text-cyan-400' : 'hover:text-cyan-400' }}">Jum</a>
            <a href="{{ route('ronda', ['data' => 'sabtu']) }}"
                class="rounded-md text-1xl py-2 px-2 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 {{ $hari == 'sabtu' ? 'text-cyan-400' : 'hover:text-cyan-400' }}">Sab</a>
            <a href="{{ route('ronda', ['data' => 'minggu']) }}"
                class="rounded-md text-1xl py-2 px-2 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 {{ $hari == 'minggu' ? 'text-cyan-400' : 'hover:text-cyan-400' }}">Min</a>
        </div>
        <table class="table-auto table-collapse w-11/12 mx-auto mt-5 bg-slate-200 ">
            <tr>
                <th class="border border-black px-1 py-1 bg-cyan-950 text-white">No</th>
                <th class="border border-black px-1 py-1 bg-cyan-950 text-white">Nama</th>
                <th class="border border-black px-1 py-1 bg-cyan-950 text-white">Alamat</th>
                <th class="border border-black px-1 py-1 bg-cyan-950 text-white">Kehadiran</th>
            </tr>

            @if ($message == '')
                @foreach ($data as $d)
                    <tr>
                        <td class="border border-black px-1 py-1 bg-cyan-950 text-white">{{ $loop->iteration }}</td>
                        <td class="border border-black px-1 py-1">{{ $d->nama }}</td>
                        <td class="border border-black px-1 py-1">{{ $d->warga->alamat }}</td>
                        <td class="border border-black px-1 py-1">-</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="4" class="border border-black px-1 py-1">{{ $message }}</td>
                </tr>
            @endif
        </table>
    </div>
@endsection

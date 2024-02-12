@extends('layouts.main-admin')

@section('content')
    <div class="bg-fixed  text-center bg-cover bg-center object-cover h-screen "
        style="background-image: url('/img/bekgron.png'); width: auto; overflow-x:hidden; ">
        <div class="mx-auto mt-32 text-center">
            <h1 class="text-3xl text-black font-semibold">Jadwal Ronda</h1>
        </div>
        <div class="container max-w-min mx-auto inline-flex space-x-3">
            <a href="#"
                class="rounded-md mt-5 px-2 py-2 md:rounded-md md:text-1xl md:py-2 md:px-2 md:mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400 ">Sen</a>
            <a href="#"
                class="rounded-md text-1xl py-2 px-2 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400 ">Sel</a>
            <a href="#"
                class="rounded-md text-1xl py-2 px-2 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400 ">Rab</a>
            <a href="#"
                class="rounded-md text-1xl py-2 px-2 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400 ">Kam</a>
            <a href="#"
                class="rounded-md text-1xl py-2 px-2 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400 ">Jum</a>
            <a href="#"
                class="rounded-md text-1xl py-2 px-2 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400 ">Sab</a>
            <a href="#"
                class="rounded-md text-1xl py-2 px-2 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400 ">Min</a>
        </div>
        <table class="w-11/12 mx-auto mt-5 bg-slate-200 ">
            <tr>
                <th class="border border-black px-1 py-1 bg-cyan-950 text-white">No</th>
                <th class="border border-black px-1 py-1 bg-cyan-950 text-white">Nama</th>
                <th class="border border-black px-1 py-1 bg-cyan-950 text-white">Hari</th>
                <th class="border border-black px-1 py-1 bg-cyan-950 text-white">Aksi</th>
            </tr>
            @foreach ($data as $d)
                <tr>
                    <td class="border border-black px-1 py-1 bg-cyan-950 text-white">{{ $start++ }}</td>
                    <td class="border border-black px-1 py-1">{{ $d->nama }}</td>
                    <td class="border border-black px-1 py-1">{{ $d->hari }}</td>
                    <td class="border border-black px-1 py-1">
                        <a href="{{ route('admin.ronda.update', $d->id) }}"
                            class="ml-2 bg-yellow-500 hover:bg-yellow-700 text-white text-sm font-bold py-1 px-4 border border-yellow-700 rounded">Ubah</a>
                    </td>
                </tr>
            @endforeach
            @if ($message)
                <tr>
                    <td colspan="4">{{ $message }}</td>
                </tr>
            @endif

            <tr>
                <td colspan="4">
                    {{ $data->links() }}
                </td>
            </tr>
        </table>

        <div class="mx-auto my-8">
            <button>
                <a href="{{ route('admin.ronda.create') }}"
                    class="rounded-md text-sm py-2 px-2 w-10 md:text-base md:font-semibold md:rounded-md md:py-3 md:px-3 md:text-1xl mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400 ">Buat
                    Jadwal
                    Ronda
                </a>
            </button>
        </div>
    </div>
@endsection

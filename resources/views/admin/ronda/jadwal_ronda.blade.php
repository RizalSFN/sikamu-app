@extends('layouts.main-admin')

@section('content')
    <div class="bg-fixed  text-center bg-cover bg-center object-cover h-screen "
        style="background-image: url('/img/bekgron.png'); width: auto; overflow-x:hidden; ">
        <div class="mx-auto mt-32 text-center">
            <h1 class="text-3xl text-black font-semibold">Jadwal Ronda</h1>
        </div>
        @if (session('success'))
            <div class="w-3/12 mx-auto mt-4 flex items-center p-4 text-sm text-green-600 rounded-lg bg-green-200 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="flex-shrink-0 inline w-6 h-6 me-3">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>

                <div>
                    <span class="text-sm font-medium text-black">{{ session('success') }}</span>
                </div>
            </div>
        @endif
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

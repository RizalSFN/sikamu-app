@extends('layouts.main-admin')

@section('content')
    <div class="bg-fixed text-center bg-cover bg-center object-cover h-screen "
        style="background-image: url('/img/bekgron.png'); width: auto; overflow-x:hidden; ">
        <div class="mt-40"></div>

        @if (session('success'))
            <div class="w-6/12 mx-auto flex items-center mb-5 p-4 text-sm text-green-600 rounded-lg bg-green-200 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="flex-shrink-0 inline w-6 h-6 me-3">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>

                <div>
                    <span class="text-sm">{{ session('success') }}</span>
                </div>
            </div>
        @endif

        @if (!$ket)
            @foreach ($lapor as $l)
                <div
                    class="block  rounded-lg bg-slate-200  h-max pb-8 w-11/12 mb-10 p-3 mx-auto md:h-auto md:w-11/12 md:mx-auto md:mb-3 md:pb-8 md:py-10 md:px-20">
                    <h1 class="text-left font-semibold text-3xl">Laporan Terkini!!</h1>
                    <!--munculkan waktu kejadian-->
                    <p class="text-left font-basic text-1xl">{{ $l->created_at }}</p>
                    <!-- Munculin Kategori Minta bantuannya-->
                    <h2 class="text-left font-basic text-2xl mt-3">Kategori : <b>{{ $l->kategori_bencana->nama }}</b></h2>
                    <!-- Munculkan nama warga-->
                    <p class="text-left font-basic text-1xl">Pelapor : <b>{{ $l->warga->nama }}</b></p>
                    <!-- Munculkan alamat warga bukan no.rumah rt rw desanya saja-->
                    <p class="text-left font-basic text-1xl">Alamat pelapor :
                        <b>{{ 'RT ' . $l->warga->rt . ' RW ' . $l->warga->rw . ' Desa ' . $l->warga->desa }}</b>
                    </p>
                    <!-- Munculkan note yang di isi warga-->
                    <p class="text-left font-basic text-1xl">Catatan : <b>{{ $l->catatan }}</b></p>
                    <div class="text-right mt-4 flex justify-end">
                        <a href="{{ 'https://maps.google.com/?q=' . $l->koordinat }}" target="_blank"
                            class="rounded-md text-sm py-2 px-2 w-25 md:text-base md:font-semibold md:rounded-md md:py-3 md:px-3 md:text-1xl mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400 ">Lokasi</a>
                        <form action="{{ route('admin.laporan.selesai', $l->id) }}" method="POST" class="">
                            @csrf
                            @method('PUT')
                            <button type="submit"
                                class="rounded-md text-sm py-2 px-2 w-25 mx-3 md:text-base md:font-semibold md:rounded-md md:py-3 md:px-3 md:text-1xl mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400 ">Selesai</button>
                        </form>
                    </div>
                </div>
            @endforeach
        @endif

        <table class="w-8/12 lg:w-11/12 mx-auto {{ !$ket ? 'mt-7' : 'mt-60' }} mb-16 bg-slate-200 ">
            <tr>
                <th class="border border-black px-1 py-1 bg-cyan-950 text-white">No</th>
                <th class="border border-black px-1 py-1 bg-cyan-950 text-white">Pelapor</th>
                <th class="border border-black px-1 py-1 bg-cyan-950 text-white">Lokasi</th>
                <th class="border border-black px-1 py-1 bg-cyan-950 text-white">Kasus</th>
                <th class="border border-black px-1 py-1 bg-cyan-950 text-white">Waktu</th>
                <th class="border border-black px-1 py-1 bg-cyan-950 text-white">Status</th>
            </tr>
            @foreach ($selesai as $s)
                <tr>
                    <td class="border border-black px-1 py-1 bg-cyan-950 text-white">{{ $loop->iteration }}</td>
                    <td class="border border-black px-1 py-1">{{ $s->warga->nama }}</td>
                    <td class="border border-black px-1 py-1">
                        <a href="{{ 'https://maps.google.com/?q=' . $s->koordinat }}" target="_blank"
                            class="px-2 py-1 bg-blue-500 text-white text-medium">Lokasi</a>
                    </td>
                    <td class="border border-black px-1 py-1">{{ $s->kategori_bencana->nama }}</td>
                    <td class="border border-black px-1 py-1">{{ $s->created_at }}</td>
                    <td class="border border-black px-1 py-1">{{ $s->status }}</td>
                </tr>
            @endforeach
            @if ($ket2)
                <tr>
                    <td colspan="6">Tidak ada data laporan selesai</td>
                </tr>
            @endif
        </table>
    </div>
@endsection

@extends('layouts.main')
@section('content')
    <div class="relative overflow-hidden bg-cover  text-center bg-center bg-fixed h-screen"
        style="background-image: url('/img/bekgron.png'); height:auto; width:auto;  ">

        <div class="block rounded-lg bg-slate-200 px-10 py-10 md:h-auto md:w-8/12 md:mt-40  md:mx-auto md:mb-16 md:pb-8">
            <div class="pt-24 md:pt-8">
                <h1 class="text-center font-bold text-3xl">
                    PROFIL ANDA
                </h1>
                @if (session('success'))
                    <div id="toast-success"
                        class="flex items-center w-8/12 max-w-x p-4 mt-8 text-black bg-green-300 rounded-lg shadow mx-auto dark:text-white dark:bg-green-300 border-1 border-green-600"
                        role="alert">
                        <div
                            class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span class="sr-only">Check icon</span>
                        </div>
                        <div class="ms-3 text-sm font-bold">{{ session('success') }}</div>
                        <button type="button"
                            class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                            data-dismiss-target="#toast-success" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                @endif
                <img class="mx-auto h-60 w-60 rounded-full mt-6" src="{{ asset('images/' . $data->foto) }}"
                    alt="profil anda">

                <table class="mt-6 text-left mx-10 ">
                    <tr>
                        <td>
                            NIK
                        </td>
                        <td class="px-2">
                            :
                        </td>
                        <td class="px-2 py-1">
                            {{ $data->nik }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Nama
                        </td>
                        <td class="px-2">
                            :
                        </td>
                        <td class="px-2 py-1">
                            {{ $data->nama }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Tempat/Tgl Lahir
                        </td>
                        <td class="px-2">
                            :
                        </td>
                        <td class="px-2 py-1">
                            {{ $tempat . ', ' . $tanggal }}
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Alamat Lengkap
                        </td>
                        <td class="px-2">
                            :
                        </td>
                        <td class="px-2 py-1">
                            {{ $data->alamat . ', RT ' . $rt . ' RW ' . $rw . ', Desa ' . $data->desa . ', Kec. ' . $data->kecamatan }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            No.Hp
                        </td>
                        <td class="px-2">
                            :
                        </td>
                        <td class="px-2 py-1">
                            {{ $data->telepon }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Titik Koordinat
                        </td>
                        <td class="px-2">
                            :
                        </td>
                        <td class="px-2 py-1" id="koordinat">
                            {{ $data->koordinat }}
                        </td>
                    </tr>
                </table>
                <h1 class="text-center font-bold text-2xl mt-10">LOKASI ANDA</h1>
                <div id="map" class="mt-8 mb-8 h-60 w-6/12 mx-auto border border-black"></div>
                <a href="{{ route('profil.edit') }}"
                    class="rounded-md py-5 px-5 mt-10 bg-gradient-to-r from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400">Ubah
                    Dan Lengkapi Data Diri Anda !!!</a>
            </div>
        </div>

    </div>
    <script>
        const koordinat = document.getElementById("koordinat").innerText;
        if (koordinat !== "") {
            const exKoor = koordinat.split(", ");
            const lat = exKoor[0];
            const long = exKoor[1];

            let mymap = L.map("map").setView([lat, long], 14);

            L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
                attribution: "SiKaMU - App",
            }).addTo(mymap);

            let marker = L.marker([lat, long]).addTo(mymap);
            marker.bindPopup("Lokasimu").openPopup();
        }
    </script>
@endsection

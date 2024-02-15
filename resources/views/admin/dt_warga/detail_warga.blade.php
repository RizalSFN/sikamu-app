@extends('layouts.main-admin')

@section('content')
    <div class="relative bg-cover  text-center bg-center bg-fixed h-screen"
        style="background-image: url('/img/bekgron.png'); height:auto; width:auto; overflow-x:hidden; ">
        <div class="block rounded-lg bg-slate-200 px-10 py-10 md:h-auto md:w-8/12 md:mt-40  md:mx-auto md:mb-16 md:pb-8">
            <div class="pt-24 md:pt-8">
                <h1 class="text-center font-bold text-3xl">
                    DETAIL WARGA
                </h1>
                <img class="mx-auto h-60 w-60 rounded-full mt-6"
                    src="{{ $warga->foto ? asset('images/' . $warga->foto) : asset('images/profil.jpg') }}" alt="profil anda">
                <table class="mt-6 text-left mx-10 ">
                    <tr>
                        <td>
                            NIK
                        </td>
                        <td class="px-2">
                            :
                        </td>
                        <td class="px-2 py-1">
                            {{ $warga->nik }}
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
                            {{ $warga->nama }}
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
                            {{ $warga->ttl ? $warga->ttl : '-' }}
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
                            {{ $warga->alamat . ' RT ' . $rt . ' RW ' . $rw . ' Desa ' . $warga->desa . ' Kec. ' . $warga->kecamatan }}
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
                            {{ $warga->telepon ? $warga->telepon : '-' }}
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
                            {{ $warga->koordinat ? $warga->koordinat : '-' }}
                        </td>
                    </tr>
                </table>
                <h1 class="text-center font-bold text-2xl mt-10 ">LOKASI WARGA</h1>
                <div id="map" class="mt-8 h-60 w-6/12 mx-auto border border-black mb-10"></div>
            </div>
        </div>

    </div>
    <script>
        const koordinat = document.getElementById("koordinat").innerText;
        const exKoor = koordinat.split(", ");
        const lat = exKoor[0];
        const long = exKoor[1];

        let mymap = L.map("map").setView([lat, long], 14);

        L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
            attribution: "SiKaMU - App",
        }).addTo(mymap);

        let marker = L.marker([lat, long]).addTo(mymap);
        marker.bindPopup("Lokasi warga").openPopup();
    </script>
@endsection

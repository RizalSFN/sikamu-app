@extends('layouts.main')
@section('content')
    <div class="bg-fixed overflow-hidden bg-cover  text-center bg-center h-screen"
        style="background-image: url('/img/bg.png'); height:auto; width:auto; z-index:-10;">
        <div
            class="container block rounded-lg bg-slate-200 mx-auto  px-3 py-10 h-full  w-full md:max-h-min md:mt-40 md:mb-28 md:max-w-2xl md:mx-auto lg:max-h-min lg:max-w-4xl ">
            <h1 class="text-center font-bold text-3xl pt-10">MINTA BANTUAN</h1>
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
            <form method="post" action="{{ route('bantuan.lapor') }}">
                @csrf
                <div class="my-4 mt-12">
                    <select class="rounded-xl w-8/12 h-14 px-3" name="kategoriBantuan" id="kategoriBantuan">
                        <option value="">-- Kategori Bantuan --</option>
                        @foreach ($kategori as $kat)
                            <option value="{{ $kat->id . '-' . $kat->nama }}">{{ $kat->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="my-4 ">
                    <input type="text" name="patokanLokasi" class="rounded-xl w-8/12 h-14 px-3"
                        placeholder="Masukan patokan lokasi kejadian!">
                </div>
                <div class="my-4">
                    <textarea class="rounded-xl w-8/12 h-24 pt-2 px-4 mt-4" name="catatan" placeholder="Tambah Catatan..."></textarea>
                </div>
                <input type="text" name="koordinat" class="rounded-xl w-3/12 h-14 px-3 text-center" id="koordinat"
                    onchange="showPosition(position)" placeholder="---, ---">
                <input type="hidden" id="koordinat-database" name="koordinat-database" value="{{ $warga->koordinat }}">
                <h1 class="text-center font-bold text-3xl pt-8">LOKASI KEJADIAN</h1>
                <div id="map" class="mt-8 h-60 w-6/12 mx-auto border border-black"></div>
                <button type="submit"
                    class="rounded-md text-1xl py-5 px-5 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400">Minta
                    Bantuan !!</button>
            </form>

        </div>
    </div>
    <script>
        const koordinat_db = document.getElementById("koordinat-database").value;
        const exKoor = koordinat_db.split(", ");
        const lat = exKoor[0];
        const long = exKoor[1];

        let mymap = L.map("map").setView([lat, long], 14);

        L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
            attribution: "SiKaMU - App",
        }).addTo(mymap);

        let marker = L.marker([lat, long]).addTo(mymap);
        marker.bindPopup("Lokasimu").openPopup();

        let currentMarker;

        function onMapClick(e) {
            let newLatLng = e.latlng.toString();
            let splits = newLatLng.split("(");
            let split2 = splits[1].split(")");
            let hasil = split2[0].split(", ");
            let newLat = hasil[0];
            let newLng = hasil[1];

            if (currentMarker) {
                mymap.removeLayer(currentMarker);
            }

            currentMarker = L.marker(e.latlng).addTo(mymap);

            document.getElementById("koordinat").value = `${newLat}, ${newLng}`;
        }
        mymap.on("click", onMapClick);
    </script>
@endsection

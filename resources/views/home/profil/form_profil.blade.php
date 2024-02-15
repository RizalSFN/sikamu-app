@extends('layouts.app')
@section('component')
    <div class="contaier">
        <div class="relative overflow-hidden text-center bg-cover bg-center bg-fixed h-screen"
            style="background-image: url('/img/bekgron.png'); height:auto; width: auto;  ">

            <div
                class="container block rounded-lg bg-gray-100 mx-auto  px-10 py-10  h-full  w-full md:max-h-min md:mt-16 md:mb-28 md:max-w-2xl md:mx-auto lg:max-h-min lg:max-w-4xl ">
                <div class="pt-8">
                    <h1 class="text-center font-bold text-3xl">
                        BUAT PROFIL ANDA
                    </h1>
                    <img class="mx-auto max-w-xs max-h-full w-60 h-60 rounded-full mb-8 mt-6 md:max-w-5xl md:max-h-full "
                        src="{{ $data->foto ? asset('images/' . $data->foto) : asset('images/profil.jpg') }}"
                        alt="profil anda" id="imagePreview">
                    <form method="POST" action="{{ route('profil.edit.proses') }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class=" text-left w-8/12 mx-auto">
                            <label for="imageInput" class="block text-sm font-medium leading-6 text-gray-900">Foto
                                Profil</label>
                            <div class="mt-1">
                                <input type="file"
                                    value="{{ $data->foto ? asset('images/' . $data->foto) : asset('images/profil.jpg') }}"
                                    name="image" id="imageInput" autofocus
                                    class="block w-full px-6 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6">
                            </div>
                            @error('image')
                                <label class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                            @enderror
                        </div>
                        <div class=" text-left w-8/12 mx-auto mt-4">
                            <label for="nama" class="block text-sm font-medium leading-6 text-gray-900">Nama</label>
                            <div class="mt-1">
                                <input type="text" name="nama" id="nama" value="{{ $data->nama }}"
                                    placeholder="Lengkapi Nama Anda" required
                                    class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6">
                            </div>
                            @error('nama')
                                <label class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                            @enderror
                        </div>
                        <div class=" text-left w-8/12 mx-auto mt-4">
                            <label for="nik" class="block text-sm font-medium leading-6 text-gray-900">NIK</label>
                            <div class="mt-1">
                                <input type="number" name="nik" value="{{ $data->nik }}" id="nik"
                                    placeholder="Lengkapi No.NIK Anda" readonly
                                    class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class=" text-left w-8/12 mx-auto mt-4">
                            <label for="no_kk" class="block text-sm font-medium leading-6 text-gray-900">No. KK</label>
                            <div class="mt-1">
                                <input type="number" name="no_kk" value="{{ $data->no_kk }}" id="no_kk"
                                    placeholder="Lengkapi No. KK Anda" readonly
                                    class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="flex w-8/12 mx-auto mt-4 justify-between">
                            <div class=" text-left w-6/12 mx-auto">
                                <label for="tempat" class="block text-sm font-medium leading-6 text-gray-900">Tempat
                                    Lahir</label>
                                <div class="mt-1">
                                    <input type="text" name="tempat" id="tempat"
                                        value="{{ $tempat == '' ? '' : $tempat }}" placeholder="Lengkapi Tempat Lahir Anda"
                                        required
                                        class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6">
                                </div>
                                @error('tempat')
                                    <label class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                                @enderror
                            </div>
                            <div class=" text-left w-6/12 ml-2 mx-auto">
                                <label for="tanggal" class="block text-sm font-medium leading-6 text-gray-900">Tanggal
                                    Lahir</label>
                                <div class="mt-1">
                                    <input type="date" name="tanggal" id="tanggal"
                                        value="{{ $tanggal == '' ? '' : $tanggal }}"
                                        placeholder="Lengkapi Tanggal Lahir Anda" required
                                        class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6">
                                </div>
                                @error('tanggal')
                                    <label class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                                @enderror
                            </div>
                        </div>
                        <div class=" text-left w-8/12 mx-auto mt-4">
                            <label for="alamat" class="block text-sm font-medium leading-6 text-gray-900">Alamat</label>
                            <div class="mt-1">
                                <input type="text" name="alamat" id="alamat" value="{{ $data->alamat }}"
                                    placeholder="Lengkapi Alamat Anda" required
                                    class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6">
                            </div>
                            @error('alamat')
                                <label class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                            @enderror
                        </div>
                        <div class="w-8/12 mx-auto mt-4 flex">
                            <div class=" text-left w-6/12">
                                <label for="rt" class="block text-sm font-medium leading-6 text-gray-900">RT</label>
                                <div class="mt-1">
                                    <input type="number" name="rt" id="rt" value="{{ $data->rt }}"
                                        placeholder="RT" required
                                        class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6">
                                </div>
                                @error('rt')
                                    <label class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                                @enderror
                            </div>
                            <div class=" text-left ml-2 w-6/12">
                                <label for="rw" class="block text-sm font-medium leading-6 text-gray-900">RW</label>
                                <div class="mt-1">
                                    <input type="number" name="rw" id="rw" value="{{ $data->rw }}"
                                        placeholder="RW" required
                                        class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6">
                                </div>
                                @error('rw')
                                    <label
                                        class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                                @enderror
                            </div>
                        </div>
                        <div class=" text-left w-8/12 mx-auto mt-4">
                            <label for="desa" class="block text-sm font-medium leading-6 text-gray-900">Desa</label>
                            <div class="mt-1">
                                <input type="text" name="desa" id="desa" value="{{ $data->desa }}"
                                    placeholder="Lengkapi desa anda" required
                                    class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6">
                            </div>
                            @error('desa')
                                <label class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                            @enderror
                        </div>
                        <div class=" text-left w-8/12 mx-auto mt-4">
                            <label for="kecamatan"
                                class="block text-sm font-medium leading-6 text-gray-900">Kecamatan</label>
                            <div class="mt-1">
                                <input type="text" name="kecamatan" value="{{ $data->kecamatan }}" id="kecamatan"
                                    placeholder="Lengkapi kecamatan anda" required
                                    class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6">
                            </div>
                            @error('kecamatan')
                                <label class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                            @enderror
                        </div>
                        <div class=" text-left w-8/12 mx-auto mt-4">
                            <label for="telepon" class="block text-sm font-medium leading-6 text-gray-900">No.Tlp</label>
                            <div class="mt-1">
                                <input type="number" name="telepon" value="{{ $data->telepon }}" id="telepon"
                                    placeholder="Lengkapi No. Telepon (aktif)" required
                                    class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6">
                            </div>
                            @error('telepon')
                                <label class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                            @enderror
                        </div>
                        <div class=" text-left w-8/12 mx-auto mt-4">
                            <label for="koordinat"
                                class="block text-sm font-medium leading-6 text-gray-900">koordinat</label>
                            <div class="mt-1">
                                <input type="text" name="koordinat" id="koordinat" value="{{ $data->koordinat }}"
                                    placeholder="---, ---" required
                                    class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6">
                            </div>
                            @error('koordinat')
                                <label class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                            @enderror
                        </div>
                        <h1 class="text-center font-bold mt-6 text-2xl">LOKASI ANDA</h1>
                        <label class="font-semibold">(<i>klik pada peta dibawah ini</i>)</label>
                        <div id="map" class="mt-8 h-80 w-8/12 mx-auto border border-black"></div>
                        <button
                            class="rounded-md py-5 px-5 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400">Submit!!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        const koordinat = document.getElementById("koordinat").value;
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

            let currentMarker;

            function onMapClick(e) {
                console.log(e.latlng.lat)
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

        } else if (navigator.geolocation) {
            navigator.geolocation.watchPosition(showPosition);
        }

        function showPosition(position) {
            let mymap = L.map("map").setView(
                [position.coords.latitude, position.coords.longitude],
                14
            );

            L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
                attribution: "SiKaMU - App",
            }).addTo(mymap);

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
        }

        let imageInput = document.getElementById("imageInput");
        let imagePreview = document.getElementById("imagePreview");

        imageInput.addEventListener("change", function() {
            let file = imageInput.files[0];

            if (file) {
                let reader = new FileReader();

                reader.onload = function(e) {
                    // Resize the image preview
                    resizeImagePreview(e.target.result);
                };

                reader.readAsDataURL(file);
            }
        });

        function resizeImagePreview(imageDataURL) {
            let img = new Image();
            img.src = imageDataURL;

            img.onload = function() {
                // Resize the image to a specific width (e.g., 300 pixels)
                let maxWidth = 200;
                let aspectRatio = img.width / img.height;
                let newWidth = Math.min(maxWidth, img.width);
                let newHeight = newWidth / aspectRatio;

                // Set the resized image dimensions
                imagePreview.width = newWidth;
                imagePreview.height = newHeight;

                // Set the resized image source
                imagePreview.src = imageDataURL;
            };
        }
    </script>
@endsection

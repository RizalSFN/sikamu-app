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
                    <img class="mx-auto max-w-xs max-h-full w-60 h-60 rounded-full mt-6 md:max-w-5xl md:max-h-full "
                        src="{{ $data->foto ? asset('images/' . $data->foto) : '/img/profil.jpg' }}" id="imagePreview"
                        alt="profil anda">
                    <form action="{{ route('profil.edit.proses') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <table class="mt-6 text-left mx-auto ">
                            <tr>
                                <td>
                                    Foto Profil
                                </td>
                                <td class="p-2">
                                    :
                                </td>
                                <td>
                                    <input type="file" id="imageInput" name="image"
                                        placeholder="Lengkapi foto profil Anda" class="max-w-min">
                                    @error('image')
                                        <label
                                            class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    NIK
                                </td>
                                <td class="p-2">
                                    :
                                </td>
                                <td>
                                    <input type="number" value="{{ $data->nik }}" class="max-w-min" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    NO.KK
                                </td>
                                <td class="p-2">
                                    :
                                </td>
                                <td>
                                    <input type="text" value="{{ $data->no_kk }}" class="max-w-min" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Nama
                                </td>
                                <td class="p-2">
                                    :
                                </td>
                                <td>
                                    <input type="text" name="nama" value="{{ $data->nama }}"
                                        placeholder="Lengkapi Nama Anda">
                                    @error('nama')
                                        <label
                                            class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Tempat Lahir
                                </td>
                                <td class="p-2">
                                    :
                                </td>
                                <td>
                                    <input type="text" name="tempat" value="{{ $tempat }}"
                                        placeholder="Lengkapi tempat lahir Anda ">
                                    @error('tempat')
                                        <label
                                            class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Tanggal Lahir
                                </td>
                                <td class="p-2">
                                    :
                                </td>
                                <td>
                                    <input type="date" name="tanggal" value="{{ $tanggal }}"
                                        placeholder="Lengkapi tanggal lahir Anda ">
                                    @error('tanggal')
                                        <label
                                            class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Alamat
                                </td>
                                <td class="p-2">
                                    :
                                </td>
                                <td>
                                    <textarea type="text" name="alamat" placeholder="Lengkapi Alamat Anda">{{ $data->alamat }}</textarea>
                                    @error('alamat')
                                        <label
                                            class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    RT
                                </td>
                                <td class="p-2">
                                    :
                                </td>
                                <td>
                                    <input type="number" value="{{ $rt }}" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    RW
                                </td>
                                <td class="p-2">
                                    :
                                </td>
                                <td>
                                    <input type="number" value="{{ $rw }}" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Desa
                                </td>
                                <td class="p-2">
                                    :
                                </td>
                                <td>
                                    <input type="text" value="{{ $data->desa }}" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Kecamatan
                                </td>
                                <td class="p-2">
                                    :
                                </td>
                                <td>
                                    <input type="text" value="{{ $data->kecamatan }}" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Titik Koordinat
                                </td>
                                <td class="p-2">
                                    :
                                </td>
                                <td>
                                    <input type="text" name="koordinat" id="koordinat" value="{{ $data->koordinat }}"
                                        placeholder="---, ---">
                                    @error('koordinat')
                                        <label
                                            class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                                    @enderror
                                </td>
                            </tr>
                        </table>
                        <h1 class="text-center font-bold mt-6 text-2xl">PILIH LOKASI ANDA</h1>
                        <label class="font-semibold">(<i>klik pada peta dibawah ini</i>)</label>
                        <div id="map" class="mt-8 h-80 w-8/12 mx-auto border border-black"></div>
                        <button type="submit"
                            class="rounded-md py-5 px-5 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400">
                            Submit !!
                        </button>
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

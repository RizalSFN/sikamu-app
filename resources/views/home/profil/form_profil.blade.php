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
                    <img class="mx-auto max-w-xs max-h-full rounded-full mt-6 md:max-w-5xl md:max-h-full "
                        src="/img/profil.jpg" id="imagePreview" alt="profil anda">
                    <form method="" action="">
                        @csrf
                        <table class="mt-6 text-left mx-auto ">
                            <tr>
                                <td>
                                    Foto Profil
                                </td>
                                <td class="p-2">
                                    :
                                </td>
                                <td>
                                    <input type="file" id="imageInput" accept="image/*" onchange="previewImage(event)"
                                        placeholder="Lengkapi foto profil Anda" class="max-w-min">
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
                                    <input type="text" value="{{ $data->nama }}" placeholder="Lengkapi Nama Anda">
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
                                    <input type="text" value="{{ $tempat }}" placeholder="Lengkapi TTL Anda ">
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
                                    <input type="date" value="{{ $tanggal }}" placeholder="Lengkapi TTL Anda ">
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
                                    <textarea type=text placeholder="Lengkapi Alamat Anda">{{ $data->alamat }}</textarea>
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
                                    <input type="text" value="{{ $rt }}" placeholder="Lengkapi TTL Anda ">
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
                                    <input type="text" value="{{ $rw }}" placeholder="Lengkapi TTL Anda ">
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
                                    <input type="text" value="{{ $data->desa }}" placeholder="Lengkapi TTL Anda ">
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
                                    <input type="text" value="{{ $data->kecamatan }}" placeholder="Lengkapi TTL Anda ">
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
                                    <input type=text placeholder="Lengkapi koordinat lokasi Anda ">
                                </td>
                            </tr>

                        </table>
                        <h1 class="text-center font-bold mt-6 text-2xl">LOKASI ANDA</h1>
                        <div id="map" class="mt-8 h-80 w-8/12 mx-auto border border-black"></div>
                        <button
                            class="rounded-md py-5 px-5 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400">
                            Submit !!
                        </button>
                </div>
            </div>
            </form>
        </div>
    </div>
    <script>
        function previewImage(event) {
            const input = event.target;
            const reader = new FileReader();

            reader.onload = function() {
                const dataURL = reader.result;

                kompresDanResizeGambar(dataURL, 50, 'image/jpeg', function(compressedDataUrl) {
                    $('#imagePreview').attr('src', compressedDataUrl).show();
                });
            }

            reader.readAsDataURL(input.files[0]);
        }

        function kompresDanResizeGambar(dataURL, kualitas, jenisOutput, callback) {
            const gambar = new Image();

            gambar.onload = function() {
                const kanvas = document.createElement('canvas');
                const konteks = kanvas.getContext('2d');

                // Atur dimensi kanvas sesuai dengan ukuran yang diinginkan
                kanvas.width = 800; // Atur lebar sesuai kebutuhan
                kanvas.height = (kanvas.width / gambar.width) * gambar.height;

                // Gambar gambar pada kanvas dengan dimensi baru
                konteks.drawImage(gambar, 0, 0, kanvas.width, kanvas.height);

                // Konversi kanvas menjadi data URL
                const dataUrlTerkompresi = kanvas.toDataURL(jenisOutput, kualitas / 100);

                callback(dataUrlTerkompresi);
            };

            gambar.src = dataURL;
        }
    </script>
@endsection

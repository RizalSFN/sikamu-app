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
                        src="/img/profil.jpg" alt="profil anda">
                    <form method="" action="">
                        @csrf
                        <table class="mt-6 text-left mx-auto ">
                            <tr>
                                <td>
                                    Foto Profil
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    <input type="file" placeholder="Lengkapi foto profil Anda" class="max-w-min">
                                </td>
                            </tr>
                            <tr>
                            <tr>
                                <td>
                                    NIK
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    <input type=text value="{{ $warga->nik }}" class="max-w-min" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Nama
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    <input type=text value="{{ $warga->nama }}" placeholder="Lengkapi Nama Anda">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Tempat Lahir
                                </td>
                                <td>
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
                                <td>
                                    :
                                </td>
                                <td>
                                    <input type=date value="{{ $tanggal }}" placeholder="Lengkapi TTL Anda ">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Jenis Kelamin
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    <input type="radio" id="laki-laki" name="jenis_kelamin" value="laki-laki"
                                        {{ $warga->jenis_kelamin == 'laki-laki' ? 'checked' : '' }}>
                                    <label for="laki-laki">Laki-laki</label>
                                    <input type="radio" id="perempuan" name="jenis_kelamin" value="perempuan"
                                        {{ $warga->jenis_kelamin == 'perempuan' ? 'checked' : '' }}>
                                    <label for="perempuan">Perempuan</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Alamat Lengkap
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    <textarea type=text placeholder="Lengkapi Alamat Anda">{{ $warga->alamat . ' RT ' . $warga->rt . ' RW ' . $warga->rw . ', ' . $warga->desa . ', ' . $warga->kecamatan }}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Agama
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    <select name="" id="">
                                        <option value="">-- Pilih Agama --</option>
                                        <option value="islam" {{ $warga->agama == 'islam' ? 'selected' : '' }}>islam
                                        </option>
                                        <option value="protestan" {{ $warga->agama == 'protestan' ? 'selected' : '' }}>
                                            Protestan</option>
                                        <option value="katholik" {{ $warga->agama == 'katholik' ? 'selected' : '' }}>
                                            Katholik</option>
                                        <option value="hindu" {{ $warga->agama == 'hindu' ? 'selected' : '' }}>Hindu
                                        </option>
                                        <option value="buddha" {{ $warga->agama == 'buddha' ? 'selected' : '' }}>Buddha
                                        </option>
                                        <option value="kong hu cu" {{ $warga->agama == 'kong hu cu' ? 'selected' : '' }}>
                                            Kong hu cu</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Status Perkawinan
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    <input type="radio" name="status_perkawinan" id="kawin"
                                        {{ $warga->status == 'kawin' ? 'checked' : '' }}>
                                    <label for="kawin">Kawin</label>
                                    <input type="radio" name="status_perkawinan" id="belum_kawin"
                                        {{ $warga->status == 'belum kawin' ? 'checked' : '' }}>
                                    <label for="belum_kawin">Belum Kawin</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Pekerjaan
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    <input type=text value="{{ $warga->pekerjaan }}" name="pekerjaan"
                                        placeholder="Lengkapi Pekerjaan Anda  ">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Kewarganegaraan
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    <input type="radio" id="wni" name="kewarganegaraan"
                                        {{ $warga->kewarganegaraan == 'wni' ? 'checked' : '' }}>
                                    <label for="wni">WNI</label>
                                    <input type="radio" id="wna" name="kewarganegaraan"
                                        {{ $warga->kewarganegaraan == 'wna' ? 'checked' : '' }}>
                                    <label for="wna">WNA</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Titik Koordinat
                                </td>
                                <td>
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
                            class="rounded-md py-5 px-5 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400">Submit!!</button>
                </div>
            </div>
            </form>
        </div>
    </div>
@endsection

@extends('layouts.main')
@section('content')
<div class="relative overflow-hidden bg-cover  text-center bg-center"
  style="background-image: url('/img/bg.png'); height:auto; width:auto;  ">

  <div class="block rounded-lg bg-gray-100 h-auto w-8/12 mt-28 ml-52 pb-10 mb-28">
  <div class="pt-8">
      <h1 class="text-center font-bold text-3xl">
        PROFIL ANDA
      </h1>
      <img class="mx-auto h-60 w-60 rounded-full mt-6" src="/img/warga.jpg" alt="profil anda">

      <table class="mt-6 text-left ml-20 ">
        <tr >
          <td>
            NIK
          </td>
          <td>
            :
          </td>
          <td>
            xxxxxxxxxxxxxxxx
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
            warga
          </td>
        </tr>
        <tr>
          <td>
            Tempat/Tgl Lahir
          </td>
          <td>
            :
          </td>
          <td>
            Bandung, 25 september 2006
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
            Laki-laki
          </td>
        </tr>
        <tr>
          <td>
            Gol.Darah
          </td>
          <td>
            :
          </td>
          <td>
            O
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
            kp.xx, rt/rw: 01/01, ds.xx, kota, provinsi, kode_pos
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
            Islam
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
            Belum Kawin
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
            Wirausaha
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
            WNI
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
            xxxxxxxxxxxxxxxx
          </td>
        </tr>
        
      </table>
      <h1 class="text-center font-bold text-2xl">LOKASI ANDA</h1>
      <div id="map" class="mt-8 h-80 w-8/12 mx-auto border border-black"></div>
      <button class="rounded-md py-5 px-5 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400">Ubah Dan Lengkapi Data Diri Anda !!!</button>
    </div>
</div>

</div>
@endsection
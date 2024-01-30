@extends('layouts.main')
@section('content')
<div class="relative overflow-hidden bg-cover  text-center bg-center bg-fixed"
  style="background-image: url('/img/bg.png'); height:auto; width:auto;  ">

  <div class="block rounded-lg bg-slate-200 px-10 py-10 md:h-auto md:w-8/12 md:mt-14 md:mx-auto md:mb-16 md:pb-8">
  <div class="pt-8">
      <h1 class="text-center font-bold text-3xl">
        PROFIL ANDA
      </h1>
      <img class="mx-auto h-60 w-60 rounded-full mt-6" src="/img/warga.jpg" alt="profil anda">

      <table class="mt-6 text-left mx-10 ">
        <tr  >
          <td>
            NIK
          </td>
          <td class="px-2">
            :
          </td>
          <td class="px-2 py-1" >
            xxxxxxxxxxxxxxxx
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
            warga
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
            Bandung, 25 september 2006
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
            kp.xx, rt/rw: 01/01, ds.xx, kota, provinsi, kode_pos
          </td>
        </tr>
        <tr>
          <td>
            Agama
          </td>
          <td class="px-2">
            :
          </td>
          <td class="px-2 py-1">
            Islam
          </td>
        </tr>
        <tr>
          <td>
            Status Perkawinan
          </td>
          <td class="px-2">
            :
          </td>
          <td class="px-2 py-1">
            Belum Kawin
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
            xxxxxxxxxxxxxxxx
          </td>
        </tr>
        <tr>
          <td>
            Titik Koordinat
          </td>
          <td class="px-2">
            :
          </td>
          <td class="px-2 py-1">
            xxxxxxxxxxxxxxxx
          </td>
        </tr>
        
      </table>
      <h1 class="text-center font-bold text-2xl mt-10">LOKASI ANDA</h1>
      <div id="map" class="mt-8 h-60 w-6/12 mx-auto border border-black"></div>
      <button class="rounded-md py-5 px-5 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400">Ubah Dan Lengkapi Data Diri Anda !!!</button>
    </div>
</div>

</div>
@endsection
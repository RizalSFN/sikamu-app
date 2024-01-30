@extends('layouts.app')
@section('component')
<div class="contaier">
<div class="relative overflow-hidden text-center bg-cover bg-center bg-fixed"
  style="background-image: url('/img/bekgron.png'); height:auto; width: auto;  ">

  <div class="container block rounded-lg bg-slate-200 mx-auto  px-10 py-3 h-full  w-full md:max-h-min md:mt-16 md:mb-28 md:max-w-2xl md:mx-auto lg:max-h-min lg:max-w-4xl ">
    <div class="pt-8">
      <h1 class="text-center font-bold text-3xl">
       BUAT PROFIL ANDA
      </h1>
      <img class="mx-auto max-w-xs max-h-full rounded-full mt-6 md:max-w-5xl md:max-h-full " src="/img/profil.jpg" alt="profil anda">
        <form method=""  action="">
            @csrf
      <table class="mt-6 text-left mx-auto ">
      <tr >
          <td>
            Foto Profil
          </td>
          <td class="px-2">
            :
          </td>
          <td class="px-2 py-1">
            <input type=file placeholder="Lengkapi foto profil Anda" class="max-w-min px-3"></input>
          </td>
        </tr>
        <tr>
        <tr >
          <td>
            NIK
          </td>
          <td class="px-2">
            :
          </td>
          <td class="px-2 py-1">
            <input type=text placeholder="Lengkapi NIK Anda" class="max-w-min px-3"></input>
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
          <input type=text placeholder="Lengkapi Nama" class="max-w-min px-3"></input>
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
          <input type=date placeholder="Lengkapi TTL Anda " class="max-w-min px-3"></input>
          </td>
        </tr>
        <tr>
          <td >
            Alamat Lengkap
          </td>
          <td class="px-2">
            :
          </td>
          <td class="px-2 py-1">
          <input type=text placeholder="Lengkapi Alamat" class="max-w-min px-3"></input>
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
          <input type=text placeholder="Lengkapi Agama" class="max-w-min px-3"></input>
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
          <input type=text placeholder="Lengkapi Status Kawin" class="max-w-min px-3"></input>
          </td>
        </tr>
        <tr>
          <td>
            No.HP
          </td>
          <td class="px-2">
            :
          </td>
          <td class="px-2 py-1">
          <input type=text placeholder="Lengkapi No. HP" class="max-w-min px-3"></input>
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
          <input type=text placeholder="Lengkapi koordinat lokasi Anda " class="max-w-min px-3"></input>
          </td>
        </tr>
        
      </table>
      <h1 class="text-center font-bold mt-6 text-2xl">LOKASI ANDA</h1>
      <div id="map" class="mt-8 h-80 w-8/12 mx-auto border border-black"></div>
      <button class="rounded-md py-5 px-5 mt-5 bg-gradient-to-r mb-10 from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400">Submit!!</button>
    </div>
</div>
</form>
</div>
</div>
@endsection
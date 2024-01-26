@extends('layouts.app')
@section('component')
<div class="contaier">
<div class="hidden overflow-hidden text-center bg-cover bg-center bg-fixed "
  style="background-image: url('/img/bekgron.png'); height:auto; width: auto;  ">

  <div class="container block rounded-lg bg-gray-100 mx-auto mt-16 pb-10 mb-28 max-h-min min-w-0 md:max-h-min md:max-w-2xl lg:max-h-min lg:max-w-4xl ">
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
          <td>
            :
          </td>
          <td>
            <input type=file placeholder="Lengkapi foto profil Anda" class="max-w-min"></input>
          </td>
        </tr>
        <tr>
        <tr >
          <td>
            NIK
          </td>
          <td>
            :
          </td>
          <td>
            <input type=text placeholder="Lengkapi NIK Anda" class="max-w-min"></input>
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
          <input type=text placeholder="Lengkapi Nama Anda" ></input>
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
          <input type=date placeholder="Lengkapi TTL Anda "></input>
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
          <input type=text placeholder="Lengkapi Jenis Kelamin Anda"></input>
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
          <input type="text" placeholder="Lengkapi Golongan Darah Anda" class="max-w-xs"></input>
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
          <input type=text placeholder="Lengkapi Alamat Anda "></input>
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
          <input type=text placeholder="Lengkapi Agama Anda"></input>
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
          <input type=text placeholder="Lengkapi Styatus Kawin Anda "></input>
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
          <input type=text placeholder="Lengkapi Pekerjaan Anda  "></input>
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
          <input type=text placeholder="Lengkapi Kewarganegaraan Anda "></input>
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
          <input type=text placeholder="Lengkapi koordinat lokasi Anda "></input>
          </td>
        </tr>
        
      </table>
      <h1 class="text-center font-bold text-2xl">LOKASI ANDA</h1>
      <div id="map" class="mt-8 h-80 w-8/12 mx-auto border border-black"></div>
      <button class="rounded-md py-5 px-5 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400">Submit!!</button>
    </div>
</div>
</form>
</div>
</div>
@endsection
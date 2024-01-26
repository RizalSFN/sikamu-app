@extends('layouts.main')

@section('content')
<div class="bg-fixed overflow-hidden text-center bg-cover bg-center object-cover"
  style="background-image: url('/img/bekgron.png'); height:auto; width: auto;  ">
    <div class="w-3/12 mx-auto mt-20 text-center">
        <h1 class="text-3xl text-black font-semibold">JADWAL RONDA</h1>
    </div>
    <div class="w-auto mx-auto inline-flex justify-items-center space-x-5">
        <a href="#"
            class="rounded-md mx-auto text-1xl py-5 px-5 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400 ">Senin</a>
        <a href="#"
            class="rounded-md text-1xl py-5 px-5 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400 ">Selasa</a>
        <a href="#"
            class="rounded-md text-1xl py-5 px-5 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400 ">Rabu</a>
        <a href="#"
            class="rounded-md text-1xl py-5 px-5 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400 ">Kamis</a>
        <a href="#"
            class="rounded-md text-1xl py-5 px-5 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400 ">Jum'at</a>
        <a href="#"
            class="rounded-md text-1xl py-5 px-5 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400 ">Sabtu</a>
        <a href="#"
            class="rounded-md text-1xl py-5 px-5 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400 ">Minggu</a>
        </div>
    <table class="w-7/12 mx-auto mt-5 bg-slate-200 ">
        <tr>
            <th class="border border-black px-1 py-1 bg-cyan-950 text-white">No</th>
            <th class="border border-black px-1 py-1 bg-cyan-950 text-white">Nama</th>
            <th class="border border-black px-1 py-1 bg-cyan-950 text-white">Alamat</th>
            <th class="border border-black px-1 py-1 bg-cyan-950 text-white">Kehadiran</th>
        </tr>
        
            <tr>
            <td class="border border-black px-1 py-1 bg-cyan-950 text-white"></td>
            <td class="border border-black px-1 py-1"></td>
            <td class="border border-black px-1 py-1"></td> 
            <td class="border border-black px-1 py-1"></td>
            </tr>
      
    </table>
   <div class="block justify-center px-5 py-5"></div>
   <a href="#"
            class="block w-24 mx-auto rounded-md text-1xl py-5 px-5 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400 ">Hadir</a>
        <a href="#"
        class="block w-32 mb-5 mx-auto rounded-md text-1xl py-5 px-5 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400 ">Tidak Hadir</a>
        
    </div>
</div>
@endsection

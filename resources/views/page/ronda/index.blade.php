@extends('layouts.main')

@section('content')
<div class="bg-fixed overflow-hidden text-center bg-cover bg-center object-cover h-screen "
  style="background-image: url('/img/bekgron.png'); width: auto; opacity ">
    <div class="mx-auto mt-32 text-center">
        <h1 class="text-3xl text-black font-semibold">Data warga</h1>
    </div>
                <form action="" method="" enctype="multipart/form-data">
                    @csrf
                      <input type="text" name="search" class="mt-4  w-6/12 h-10 text-gray-400 bg-slate-200 rounded-l-xl px-3 " placeholder="Temukan Kampung Anda..." value="">
                      <button type="submit" class="absolute mt-4 text-black hover:text-cyan-600 font-bold  bg-slate-200 w-auto h-10 rounded-r-xl px-3">
                         Cari
                        </button>
                </form>
                
    <table class="w-11/12 mx-auto mt-5 bg-slate-200 ">
        <tr>
            <th class="border border-black px-1 py-1 bg-cyan-950 text-white">No</th>
            <th class="border border-black px-1 py-1 bg-cyan-950 text-white">Nama</th>
            <th class="border border-black px-1 py-1 bg-cyan-950 text-white">Alamat</th>
            <th class="border border-black px-1 py-1 bg-cyan-950 text-white">Aksi</th>
        </tr>
        
            <tr>
            <td class="border border-black px-1 py-1 bg-cyan-950 text-white"></td>
            <td class="border border-black px-1 py-1"></td>
            <td class="border border-black px-1 py-1"></td>
               
               
                <td class="border border-black px-1 py-1">
                    <a href=""
                        class="ml-2 bg-green-500 hover:bg-green-700 text-white text-sm font-bold py-1 px-4 border border-green-700 rounded">Detail</a>
                    
                </td>
            </tr>
      
    </table>

    <div class="mx-auto mt-4 mb-8">
        <button><a href="#"
            class="rounded-md text-sm py-2 px-2 w-10 md:text-base md:font-semibold md:rounded-md md:py-3 md:px-3 md:text-1xl mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400 ">Jadwal Ronda</a></button>
    </div>
</div>
@endsection

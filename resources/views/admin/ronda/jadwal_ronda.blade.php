@extends('layouts.main-admin')

@section('content')
<div class="bg-fixed  text-center bg-cover bg-center object-cover h-screen "
  style="background-image: url('/img/bekgron.png'); width: auto; overflow-x:hidden; ">
    <div class="mx-auto mt-32 text-center">
        <h1 class="text-3xl text-black font-semibold">Jadwal Ronda</h1>
</div>
    <table class="w-11/12 mx-auto mt-5 bg-slate-200 ">
        <tr>
            <th class="border border-black px-1 py-1 bg-cyan-950 text-white">No</th>
            <th class="border border-black px-1 py-1 bg-cyan-950 text-white">Nama</th>
            <th class="border border-black px-1 py-1 bg-cyan-950 text-white">Hari</th>
            <th class="border border-black px-1 py-1 bg-cyan-950 text-white">Aksi</th>
        </tr>

            
                <tr>
                    <td class="border border-black px-1 py-1 bg-cyan-950 text-white"></td>
                    <td class="border border-black px-1 py-1"></td>
                    <td class="border border-black px-1 py-1"></td>
                    <td class="border border-black px-1 py-1">
                        <a href=""
                            class="ml-2 bg-yellow-500 hover:bg-yellow-700 text-white text-sm font-bold py-1 px-4 border border-yellow-700 rounded">Ubah</a>
                    </td>
                </tr>
           
            <tr>
                <td colspan="4">
                    
                </td>
            </tr>
        </table>

        <div class="mx-auto mt-4 mb-8">
            <button><a href="#"
                    class="rounded-md text-sm py-2 px-2 w-10 md:text-base md:font-semibold md:rounded-md md:py-3 md:px-3 md:text-1xl mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400 ">Buat Jadwal
                    Ronda</a></button>
        </div>
    </div>
@endsection
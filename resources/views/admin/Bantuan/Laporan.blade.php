@extends('layouts.main-admin')

@section('content')
<div class="bg-fixed text-center bg-cover bg-center object-cover h-screen "
  style="background-image: url('/img/bekgron.png'); width: auto; overflow-x:hidden; ">

  <div class="block  rounded-lg bg-slate-200  h-max pb-8 w-11/12 mt-40 p-3 mx-auto md:h-auto md:w-11/12 md:mt-40  md:mx-auto md:mb-3 md:pb-8 md:py-10 md:px-20">
    <h1 class="text-left font-semibold text-3xl">Laporan Terkini!!</h1>
    <!--munculkan waktu kejadian-->
    <p class="text-left font-basic text-1xl">11-02-24 15.17 pm</p>
    <!-- Munculin Kategori Minta bantuannya-->
    <h2 class="text-left font-basic text-2xl mt-3">Pencurian</h2>
    <!-- Munculkan nama warga-->
    <p class="text-left font-basic text-1xl">setyo </p>
    <!-- Munculkan alamat warga bukan no.rumah rt rw desanya saja-->
    <p class="text-left font-basic text-1xl">No.13 rt10 rw 01 ds.ishigami </p>
    <!-- Munculkan note yang di isi warga-->
    <p class="text-left font-basic text-1xl">Note: pencuri 2 orang dengan senjata api</p>
    <div class="text-right mt-4">
    <button><a href="#"
                    class="rounded-md text-sm py-2 px-2 w-10 md:text-base md:font-semibold md:rounded-md md:py-3 md:px-3 md:text-1xl mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400 ">Lokasi</a></button>
    <button><a href="#"
                    class="rounded-md text-sm py-2 px-2 w-10 md:text-base md:font-semibold md:rounded-md md:py-3 md:px-3 md:text-1xl mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400 ">Selesai</a></button>
    </div>
    </div>
    <table class="w-11/12 mx-auto mt-2 mb-16 bg-slate-200 ">
        <tr>
            <th class="border border-black px-1 py-1 bg-cyan-950 text-white">No</th>
            <th class="border border-black px-1 py-1 bg-cyan-950 text-white">Nama</th>
            <th class="border border-black px-1 py-1 bg-cyan-950 text-white">Lokasi</th>
            <th class="border border-black px-1 py-1 bg-cyan-950 text-white">Kasus</th>
            <th class="border border-black px-1 py-1 bg-cyan-950 text-white">Waktu</th>
            <th class="border border-black px-1 py-1 bg-cyan-950 text-white">Status</th>
        </tr>
                <tr>
                    <td class="border border-black px-1 py-1 bg-cyan-950 text-white">a</td>
                    <td class="border border-black px-1 py-1">a</td>
                    <td class="border border-black px-1 py-1">a</td>
                    <td class="border border-black px-1 py-1">a</td>
                    <td class="border border-black px-1 py-1">a</td>
                    <td class="border border-black px-1 py-1">a</td>
                </tr>
                <tr>
                    <td class="border border-black px-1 py-1 bg-cyan-950 text-white">a</td>
                    <td class="border border-black px-1 py-1">a</td>
                    <td class="border border-black px-1 py-1">a</td>
                    <td class="border border-black px-1 py-1">a</td>
                    <td class="border border-black px-1 py-1">a</td>
                    <td class="border border-black px-1 py-1">a</td>
                </tr>
                <tr>
                    <td class="border border-black px-1 py-1 bg-cyan-950 text-white">a</td>
                    <td class="border border-black px-1 py-1">a</td>
                    <td class="border border-black px-1 py-1">a</td>
                    <td class="border border-black px-1 py-1">a</td>
                    <td class="border border-black px-1 py-1">a</td>
                    <td class="border border-black px-1 py-1">a</td>
                </tr>
                <tr>
                    <td class="border border-black px-1 py-1 bg-cyan-950 text-white">a</td>
                    <td class="border border-black px-1 py-1">a</td>
                    <td class="border border-black px-1 py-1">a</td>
                    <td class="border border-black px-1 py-1">a</td>
                    <td class="border border-black px-1 py-1">a</td>
                    <td class="border border-black px-1 py-1">a</td>
                </tr>
                <tr>
                    <td class="border border-black px-1 py-1 bg-cyan-950 text-white">a</td>
                    <td class="border border-black px-1 py-1">a</td>
                    <td class="border border-black px-1 py-1">a</td>
                    <td class="border border-black px-1 py-1">a</td>
                    <td class="border border-black px-1 py-1">a</td>
                    <td class="border border-black px-1 py-1">a</td>
                </tr>
                <tr>
                    <td class="border border-black px-1 py-1 bg-cyan-950 text-white">a</td>
                    <td class="border border-black px-1 py-1">a</td>
                    <td class="border border-black px-1 py-1">a</td>
                    <td class="border border-black px-1 py-1">a</td>
                    <td class="border border-black px-1 py-1">a</td>
                    <td class="border border-black px-1 py-1">a</td>
                </tr>
                <tr>
                    <td class="border border-black px-1 py-1 bg-cyan-950 text-white">a</td>
                    <td class="border border-black px-1 py-1">a</td>
                    <td class="border border-black px-1 py-1">a</td>
                    <td class="border border-black px-1 py-1">a</td>
                    <td class="border border-black px-1 py-1">a</td>
                    <td class="border border-black px-1 py-1">a</td>
                </tr>
           
                    </table>

</div>
@endsection

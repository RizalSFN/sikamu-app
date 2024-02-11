@extends('layouts.main')
@section('content')
<div class="bg-fixed  bg-cover  text-center bg-center h-screen" 
  style="background-image: url('/img/bekgron.png'); height:auto; width:auto; z-index:-10; overflow-x:hidden;">
  <div class="container block rounded-lg bg-slate-200 mx-auto  px-3 py-10 h-full  w-full md:max-h-min md:mt-40 md:mb-28 md:max-w-2xl md:mx-auto lg:max-h-min lg:max-w-4xl ">
  <h1 class="text-center font-bold text-3xl pt-10">MINTA BANTUAN</h1>
  <form>
 <div class="my-4 mt-8 p-3"> <select class="p-3" name="" id="">
                                        <option value="">-- Kategori Bantuan --</option>
                                        <option value="kriminl" >kriminal
</option>
                                    </select></div>
    <div class="my-4 "><input type="text" class="rounded-xl w-8/12 h-14 px-3 " placeholder="Masukan patokan lokasi anda berada!"></input></div>
    <div class="my-4"><textarea class="rounded-xl w-8/12 h-24 px-4 mt-4" placeholder="Tambah Catatan..."></textarea></div>
    <h1 class="text-center font-bold text-3xl pt-8">LOKASI ANDA</h1>
    <div id="map" class="mt-8 h-60 w-6/12 mx-auto border  border-black"  ></div>
    <button class="rounded-md text-1xl py-5 px-5 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400">Minta Bantuan !!</button>
</form>

</div>
</div>
@endsection
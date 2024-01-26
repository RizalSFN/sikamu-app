@extends('layouts.main')
@section('content')
<div class="bg-fixed overflow-hidden bg-cover  text-center bg-center" 
  style="background-image: url('/img/bg.png'); height:auto; width:auto; z-index:-10;">
  <div class=" container block rounded-lg bg-slate-200 mx-auto mt-20 pb-10 mb-28 max-h-min min-w-0 md:max-h-min md:max-w-2xl lg:max-h-min lg:max-w-4xl "style="z-index:-5;" >
  <h1 class="text-center font-bold text-3xl pt-10">MINTA BANTUAN</h1>
  <form>
    <div class="my-4 "><input type="text" class="rounded-xl w-8/12 h-14 px-3 mt-8" placeholder="Masukan patokan lokasi anda berada!"></input></div>
    <div class="my-4"><textarea class="rounded-xl w-8/12 h-24 px-4 mt-4" placeholder="Tambah Catatan..."></textarea></div>
    <h1 class="text-center font-bold text-3xl pt-8">LOKASI ANDA</h1>
    <div id="map" class="mt-8 h-60 w-6/12 mx-auto border  border-black"  ></div>
    <button class="rounded-md text-1xl py-5 px-5 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400">Minta Bantuan !!</button>
</form>

</div>
</div>
@endsection
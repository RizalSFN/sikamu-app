@extends('layouts.main')
@section('content')
<div class=" bg-fixed overflow-hidden bg-cover  text-center bg-center "
  style="background-image: url('/img/bg.png'); height:auto; width:auto;  ">
  <div class="container block rounded-lg bg-slate-200 mx-auto   px-3 py-10 h-full  w-full md:max-h-min md:mt-16 md:mb-28 md:max-w-2xl md:mx-auto lg:max-h-min lg:max-w-4xl ">
  <form CLASS="pt-8 my-auto">
    <div class="my-4 "><span>Hari/Tanggal: </span><input type="text" class="rounded-md w-6/12 h-10 px-3"></input></div>
    <div class="my-4"><textarea class="rounded-md w-8/12 h-96 px-3" placeholder="Tambah Catatan..."></textarea></div>
    <button class="rounded-md justify-items-end text-1xl px-2 py-2 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400">Kirim!</button></form>
</div>
</div>
@endsection
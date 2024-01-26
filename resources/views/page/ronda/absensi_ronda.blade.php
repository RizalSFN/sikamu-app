@extends('layouts.main')
@section('content')
<div class=" bg-fixed overflow-hidden bg-cover  text-center bg-center "
  style="background-image: url('/img/bg.png'); height:auto; width:auto;  ">
  <div class="block rounded-lg bg-gray-100 h-auto w-8/12 mt-28 ml-52 pb-10 mb-28">
  <form CLASS="pt-8">
    <div class="my-4 "><span>Hari/Tanggal: </span><input type="text" class="rounded-xl w-6/12 h-10 px-3"></input></div>
    <div class="my-4"><textarea class="rounded-xl w-8/12 h-20 px-3" placeholder="Tambah Catatan..."></textarea></div>
    <button class="rounded-md justify-items-end text-1xl px-2 py-2 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400">Kirim!</button></form>
</div>
</div>
@endsection
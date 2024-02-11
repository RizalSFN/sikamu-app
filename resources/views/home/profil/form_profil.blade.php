@extends('layouts.app')
@section('component')
<div class="contaier">
<div class="relative overflow-hidden text-center bg-cover bg-center bg-fixed h-screen"
  style="background-image: url('/img/bekgron.png'); height:auto; width: auto;  ">

            <div
                class="container block rounded-lg bg-gray-100 mx-auto  px-10 py-10  h-full  w-full md:max-h-min md:mt-16 md:mb-28 md:max-w-2xl md:mx-auto lg:max-h-min lg:max-w-4xl ">
                <div class="pt-8">
                    <h1 class="text-center font-bold text-3xl">
                        BUAT PROFIL ANDA
                    </h1>
                    <img class="mx-auto max-w-xs max-h-full rounded-full mb-8 mt-6 md:max-w-5xl md:max-h-full "
                        src="/img/profil.jpg" alt="profil anda">
                    <form method="" action="">
                        @csrf
                        <div class=" text-left w-8/12 mx-auto">
                    <label for="profil" class="block text-sm font-medium leading-6 text-gray-900">Foto Profil</label>
                    <div class="mt-1">
                        <input  type="file"
                            required autofocus
                            class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('profil')
                        <label class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                    @enderror
                </div>
                <div class=" text-left w-8/12 mx-auto mt-4">
                    <label for="nama" class="block text-sm font-medium leading-6 text-gray-900">Nama</label>
                    <div class="mt-1">
                        <input  type="text" placeholder="Lengkapi Nama Anda"
                            required autofocus
                            class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('nama')
                        <label class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                    @enderror
                </div>
                <div class=" text-left w-8/12 mx-auto mt-4">
                    <label for="NIK" class="block text-sm font-medium leading-6 text-gray-900">NIK</label>
                    <div class="mt-1">
                        <input  type="text" placeholder="Lengkapi No.NIK Anda"
                            required autofocus
                            class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('NIK')
                        <label class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                    @enderror
                </div>
                <div class=" text-left w-8/12 mx-auto mt-4">
                    <label for="ttl" class="block text-sm font-medium leading-6 text-gray-900">Tempat Tanggal Lahir</label>
                    <div class="mt-1">
                        <input  type="text" placeholder="Lengkapi Tempat Tanggal Lahir Anda"
                            required autofocus
                            class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('ttl')
                        <label class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                    @enderror
                </div>
                <div class=" text-left w-8/12 mx-auto mt-4">
                    <label for="alamat" class="block text-sm font-medium leading-6 text-gray-900">Alamat</label>
                    <div class="mt-1">
                        <input  type="text" placeholder="Lengkapi Alamat Anda"
                            required autofocus
                            class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('alamat')
                        <label class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                    @enderror
                </div>
                <div class=" text-left w-8/12 mx-auto mt-4">
                    <label for="tlp" class="block text-sm font-medium leading-6 text-gray-900">No.Tlp</label>
                    <div class="mt-1">
                        <input  type="text" placeholder="Lengkapi No.Tlp Aktif"
                            required autofocus
                            class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('tlp')
                        <label class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                    @enderror
                </div>
                <div class=" text-left w-8/12 mx-auto mt-4">
                    <label for="koordinat" class="block text-sm font-medium leading-6 text-gray-900">koordinat</label>
                    <div class="mt-1">
                        <input  type="text" placeholder="Lengkapi Koordinat Lokasi Anda"
                            required autofocus
                            class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('Koordinat')
                        <label class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                    @enderror
                </div>
                        <h1 class="text-center font-bold mt-6 text-2xl">LOKASI ANDA</h1>
                        <div id="map" class="mt-8 h-80 w-8/12 mx-auto border border-black"></div>
                        <button
                            class="rounded-md py-5 px-5 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400">Submit!!</button>
                </div>
            </div>
            </form>
        </div>
    </div>
@endsection

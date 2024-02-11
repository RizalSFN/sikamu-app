@extends('layouts.admin-app')
@section('component')
<div class="contaier">
<div class="relative overflow-hidden text-center bg-cover bg-center bg-fixed h-screen"
  style="background-image: url('/img/bekgron.png');  width: auto;  ">

            <div
                class="container block rounded-lg bg-gray-100 mx-auto  px-10 py-10  h-full  w-full md:h-auto md:mt-16  md:max-w-2xl md:mx-auto lg:h-auto lg:max-w-4xl ">
                <div class="pt-8">
                    <h1 class="text-center font-bold text-3xl">
                        TAMBAH WARGA
                    </h1>
                    <form method="" action="">
                        @csrf
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
                <div class="text-left w-8/12 mx-auto mt-4">
                <label for="No.KK" class="block text-sm font-medium leading-6 text-gray-900">No.KK</label>
                    <div class="mt-1">
                        <input  type="text" placeholder="Lengkapi No.KK Anda"
                            required autofocus
                            class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('NIK')
                        <label class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                    @enderror
                </div>
                <div class=" text-left w-8/12 mx-auto mt-4">
                    <label for="nama" class="block text-sm font-medium leading-6 text-gray-900">Nama</label>
                    <div class="mt-1">
                        <input  type="text" placeholder="Lengkapi Tempat Tanggal Lahir Anda"
                            required autofocus
                            class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('nama')
                        <label class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                    @enderror
                </div>

                        <button
                            class="rounded-md py-5 px-5 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400">Submit!!</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection

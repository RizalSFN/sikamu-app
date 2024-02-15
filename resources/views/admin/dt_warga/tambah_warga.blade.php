@extends('layouts.admin-app')
@section('component')
    <div class="contaier">
        <div class="relative text-center bg-cover bg-center bg-fixed h-screen"
            style="background-image: url('/img/bekgron.png');  width: auto; overflow-x: hidden; ">
            <div
                class="container block rounded-lg bg-gray-100 mb-16 mx-auto px-10 py-10 h-full w-full md:h-auto md:mt-16 md:max-w-2xl md:mx-auto lg:h-auto lg:max-w-4xl ">
                <div class="pt-8">
                    <h1 class="text-center font-bold text-3xl">
                        TAMBAH WARGA
                    </h1>
                    @if (session('success'))
                        <div class="w-5/12 mx-auto mt-4 flex items-center p-4 text-sm text-green-600 rounded-lg bg-green-200 dark:bg-gray-800 dark:text-green-400"
                            role="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="flex-shrink-0 inline w-6 h-6 me-3">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>

                            <div>
                                <span class="text-sm">{{ session('success') }}</span>
                            </div>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('admin.warga.create.proses') }}">
                        @csrf
                        <div class=" text-left w-8/12 mx-auto mt-4">
                            <label for="nik" class="block text-sm font-medium leading-6 text-gray-900">NIK</label>
                            <div class="mt-1">
                                <input type="number" id="nik" name="nik" placeholder="Masukkan nomor NIK"
                                    required autofocus
                                    class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6">
                            </div>
                            @error('nik')
                                <label class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                            @enderror
                        </div>
                        <div class="text-left w-8/12 mx-auto mt-4">
                            <label for="no_kk" class="block text-sm font-medium leading-6 text-gray-900">No.KK</label>
                            <div class="mt-1">
                                <input type="number" id="no_kk" name="no_kk" placeholder="Masukkan nomor KK" required
                                    autofocus
                                    class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6">
                            </div>
                            @error('no_kk')
                                <label class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                            @enderror
                        </div>
                        <div class=" text-left w-8/12 mx-auto mt-4">
                            <label for="nama" class="block text-sm font-medium leading-6 text-gray-900">Nama</label>
                            <div class="mt-1">
                                <input type="text" name="nama" id="nama" placeholder="Masukkan nama" required
                                    autofocus
                                    class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6">
                            </div>
                            @error('nama')
                                <label class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                            @enderror
                        </div>
                        <div class=" text-left w-8/12 mx-auto mt-4">
                            <label for="keterangan"
                                class="block text-sm font-medium leading-6 text-gray-900">Keterangan</label>
                            <div class="mt-1">
                                <select name="keterangan" id="keterangan"
                                    class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6">
                                    <option value="" disable selected>-- Pilih keterangan --</option>
                                    <option value="kepala keluarga">Kepala Keluarga</option>
                                    <option value="anggota keluarga">Anggota Keluarga</option>
                                </select>
                            </div>
                            @error('keterangan')
                                <label class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                            @enderror
                        </div>
                        <a href="{{ route('admin.dashboard') }}"
                            class="mr-4 rounded-md py-2.5 px-3 mt-5 bg-gradient-to-t  from-cyan-700 to-cyan-400 text-white hover:text-cyan-950">Back</a>
                        <button
                            class="rounded-md py-2 px-3 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400">Submit!!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

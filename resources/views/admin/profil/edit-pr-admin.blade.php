@extends('layouts.main-admin')
@section('content')
    <div class="relative  bg-cover  text-center bg-center bg-fixed h-screen"
        style="background-image: url('/img/bekgron.png'); height:auto; width:auto;  overflow-x:hidden; ">

        <div class="block rounded-lg bg-slate-200 px-10 py-10 md:h-auto md:w-8/12 md:mt-40  md:mx-auto md:mb-16 md:pb-8">
            <div class="pt-24 md:pt-8">
                <h1 class="text-center font-bold text-3xl">
                    ADMIN SIKAMU
                </h1>
                <img class="mx-auto h-52 w-52 rounded-full mt-6" src="/img/profil.jpg" alt="profil anda">

                <form action="{{ route('admin.profil.edit.proses') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class=" text-left w-8/12 mx-auto mt-4">
                        <label for="nama" class="block text-sm font-medium leading-6 text-gray-900">Nama</label>
                        <div class="mt-1">
                            <input type="text" name="name" id="name" value="{{ $data->name }}"
                                placeholder="Lengkapi Alamat Anda" required
                                class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6">
                        </div>
                        @error('nama')
                            <label class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                        @enderror
                    </div>
                    <div class=" text-left w-8/12 mx-auto mt-4">
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                        <div class="mt-1">
                            <input type="email" name="email" id="email" value="{{ $data->email }}"
                                placeholder="Lengkapi Alamat Anda" required
                                class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6">
                        </div>
                        @error('alamat')
                            <label class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                        @enderror
                    </div>
                    <div class=" text-left w-8/12 mx-auto mt-4">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                        <div class="mt-1">
                            <input type="password" name="password" id="password" value="{{ $data->password }}"
                                placeholder="Lengkapi Alamat Anda" required
                                class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6">
                        </div>
                        @error('password')
                            <label class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                        @enderror
                    </div>

                    <button type="submit"
                        class="rounded-md py-3 cursor-pointer px-3 mb-8 mt-10 bg-gradient-to-r   from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400">Submit!</button>
                </form>
            </div>
        </div>
    </div>
@endsection

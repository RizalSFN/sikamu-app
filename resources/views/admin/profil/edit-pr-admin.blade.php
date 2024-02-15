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
                    <table class="mt-6 text-left mx-auto mb-4">
                        <tr>
                            <td>
                                Nama
                            </td>
                            <td class="px-2">
                                :
                            </td>
                            <td class="px-2 py-1">
                                <input type="text" value="{{ $data->name }}" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Email
                            </td>
                            <td class="px-2">
                                :
                            </td>
                            <td class="px-2 py-1">
                                <input type="email" name="email" value="{{ $data->email }}">
                                @error('email')
                                    <label class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Password
                            </td>
                            <td class="px-2">
                                :
                            </td>
                            <td class="px-2 py-1">
                                <input type="password" name="password" value="{{ $data->password }}">
                                @error('password')
                                    <label class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                                @enderror
                            </td>
                        </tr>
                    </table>
                    <button type="submit"
                        class="rounded-md py-3 cursor-pointer px-3 mb-8 bg-gradient-to-r   from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400">Submit!</button>
                </form>
            </div>
        </div>
    </div>
@endsection

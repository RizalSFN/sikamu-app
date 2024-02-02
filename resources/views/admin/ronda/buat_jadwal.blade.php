@extends('layouts.admin-app')
@section('component')
<div class="contaier">
<div class="relative overflow-hidden text-center bg-cover bg-center bg-fixed h-screen"
  style="background-image: url('/img/bekgron.png');  width: auto;  ">

            <div
                class="container block rounded-lg bg-gray-100 mx-auto  px-10 py-10  h-full  w-full md:h-auto md:mt-16  md:max-w-2xl md:mx-auto lg:h-auto lg:max-w-4xl ">
                <div class="pt-8">
                    <h1 class="text-center font-bold text-3xl">
                        Buat Jadwal Ronda
                    </h1>
                    <form method="" action="">
                        @csrf
                        <table class="mt-6 text-left mx-auto ">
                            <tr>
                                <td>
                                    Hari
                                </td>
                                <td class="px-2">
                                    :
                                </td>
                                <td>
                                <select class="p-3" name="" id="">
                                        <option value="">-- Pilih Nama Warga --</option>
                                        <option value="kriminl" >Rzal</option>
                                        
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Nama
                                </td>
                                <td class="px-2">
                                    :
                                </td>
                                <td>
                                <select class="p-3" name="" id="">
                                        <option value="">-- Pilih Nama Warga --</option>
                                        <option value="kriminl" >Rzal</option>
                                        
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Alamat
                                </td>
                                <td class="px-2">
                                    :
                                </td>
                                <td>
                                    <input type=text placeholder="Lengkapi Alamat">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Nomor Telepon
                                </td>
                                <td class="px-2">
                                    :
                                </td>
                                <td>
                                    <input type=number placeholder="Lengkapi No Telepon">
                                </td>
                            </tr>

                        </table>
                        <button
                            class="rounded-md py-5 px-5 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400">Submit!!</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection

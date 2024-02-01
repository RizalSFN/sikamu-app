@extends('layouts.app')

@section('component')
    <div class="relative overflow-hidden bg-cover  text-center bg-center bg-fixed"
        style="background-image: url('/img/bg.png'); height:auto; width:auto;">
        <div
            class="container block rounded-lg bg-gray-100 mx-auto mt-16 pb-10 mb-28 max-h-min min-w-0 md:max-h-min md:max-w-2xl lg:max-h-min lg:max-w-4xl ">
            <div class="block mx-auto py-auto px-5 py-5">
                <a href="#"
                    class="block w-8/12 mx-auto rounded-md text-1xl py-5 px-5 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400 ">Profil
                    Anda</a>
                <a href="#"
                    class="block w-8/12 mb-5 mx-auto rounded-md text-1xl py-5 px-5 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400 ">Minta
                    Bantuan </a>
                <a href="#"
                    class="block w-8/12 mx-auto rounded-md text-1xl py-5 px-5 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400 ">Jadwal
                    Ronda</a>


            </div>

        </div>
    </div>
@endsection

@extends('layouts.main')

@section('content')
    <div class="bg-fixed overflow-hidden text-center bg-cover bg-center object-cover h-screen"
        style="background-image: url('/img/bekgron.png');  width: auto;  ">
        <div class="mx-auto mt-32 text-center">
            <h1 class="text-3xl text-black font-semibold">JADWAL RONDA</h1>
        </div>
        <div class="container max-w-min mx-auto inline-flex space-x-3">
            <a href="#"
                class="rounded-md mt-5 px-2 py-2 md:rounded-md md:text-1xl md:py-2 md:px-2 md:mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400 ">Sen</a>
            <a href="#"
                class="rounded-md text-1xl py-2 px-2 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400 ">Sel</a>
            <a href="#"
                class="rounded-md text-1xl py-2 px-2 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400 ">Rab</a>
            <a href="#"
                class="rounded-md text-1xl py-2 px-2 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400 ">Kam</a>
            <a href="#"
                class="rounded-md text-1xl py-2 px-2 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400 ">Jum</a>
            <a href="#"
                class="rounded-md text-1xl py-2 px-2 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400 ">Sab</a>
            <a href="#"
                class="rounded-md text-1xl py-2 px-2 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400 ">Min</a>
        </div>
        <table class="table-auto table-collapse w-11/12 mx-auto mt-5 bg-slate-200 ">
            <tr>
                <th class="border border-black px-1 py-1 bg-cyan-950 text-white">No</th>
                <th class="border border-black px-1 py-1 bg-cyan-950 text-white">Nama</th>
                <th class="border border-black px-1 py-1 bg-cyan-950 text-white">Alamat</th>
                <th class="border border-black px-1 py-1 bg-cyan-950 text-white">Kehadiran</th>
            </tr>

            <tr>
                <td class="border border-black px-1 py-1 bg-cyan-950 text-white"></td>
                <td class="border border-black px-1 py-1"></td>
                <td class="border border-black px-1 py-1"></td>
                <td class="border border-black px-1 py-1"></td>
            </tr>

        </table>
        <div class="block justify-center px-5 py-5"></div>
        <a href="#"
            class="block max-w-min mx-auto rounded-md text-1xl py-2 px-2 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400 ">Hadir</a>
        <a href="#"
            class="block w-32 mb-5 mx-auto rounded-md text-1xl py-2 px-2 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400 ">Tidak
            Hadir</a>

    </div>
    </div>

    <script>
        $(document).ready(function() {
            var d = new Date().toISOString();
            d = moment.tz(d, "Asia/Jakarta").format();
            var minDate = d.substring(0, 11) + "00:00";
            console.log(minDate);

            $(".datetimepicker").attr({
                "value": minDate,
                "min": minDate,
            });
        });
    </script>
@endsection

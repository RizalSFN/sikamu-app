@extends('layouts.admin-app')
@section('component')
    <div class="contaier">
        <div class="relative text-center bg-cover bg-center bg-fixed h-screen"
            style="background-image: url('/img/bekgron.png');  width: auto;  ">

            <div
                class="container block rounded-lg bg-gray-100 mx-auto px-10 py-10  h-full  w-full md:h-auto md:mt-16  md:max-w-2xl md:mx-auto lg:h-auto lg:max-w-4xl ">
                <div class="pt-8">
                    <h1 class="text-center font-bold text-3xl">
                        Buat Jadwal Ronda
                    </h1>
                    <form method="POST" action="{{ route('ronda.create.proses') }}">
                        @csrf
                        @if (session('success'))
                            {{ session('success') }}
                        @endif
                        <table>
                            <tr class="border border-black">
                                <th class="border border-black">Senin</th>
                                <th>Selasa</th>
                                <th>Rabu</th>
                                <th>Kamis</th>
                                <th>Jumat</th>
                                <th>Sabtu</th>
                                <th>Minggu</th>
                            </tr>
                            <tr class="border border-black">
                                <td class="border border-black p-4">
                                    <div id="input-container">
                                        <div class="input-group">
                                            <select name="select_name[]" class="px-2">
                                                <option value="" selected disabled>Pilih warga</option>
                                                @foreach ($data as $d)
                                                    <option value="{{ $d->nama }}">{{ $d->nama }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <select name="select_day[]" class="px-2">
                                                <option value="" selected disabled>Pilih hari</option>
                                                <option value="senin">Senin</option>
                                                <option value="selasa">Selasa</option>
                                                <option value="rabu">Rabu</option>
                                                <option value="kamis">Kamis</option>
                                                <option value="jumat">Jumat</option>
                                                <option value="sabtu">Sabtu</option>
                                                <option value="minggu">Minggu</option>
                                            </select>
                                            <button type="button"
                                                class="ml-4 border border-black bg-red-500 px-1 text-white"
                                                disabled>Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border border-black">
                                <td class="border border-black">
                                    <button type="button" id="add-input"
                                        class="ml-4 border border-black bg-green-500 hover:bg-green-700 px-1 text-white">Tambah</button>
                                </td>
                            </tr>
                        </table>
                        <button type="submit"
                            class="rounded-md py-5 px-5 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400">Submit!!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#add-input").click(function() {
                $("#input-container").append('<div class="input-group mt-4">' +
                    '<select name="select_name[]">' +
                    '<option value="" selected disabled>Pilih warga</option>' +
                    '@foreach ($data as $d)' +
                    '<option value="{{ $d->nama }}">{{ $d->nama }}</option>' +
                    '@endforeach' +
                    '</select>' +
                    '<select name="select_day[]" class="px-2"> ' +
                    '<option value="" selected disabled>Pilih hari</option>' +
                    '<option value="senin">Senin</option>' +
                    '<option value="selasa">Selasa</option>' +
                    '<option value="rabu">Rabu</option>' +
                    '<option value="kamis">Kamis</option>' +
                    '<option value="jumat">Jumat</option>' +
                    '<option value="sabtu">Sabtu</option>' +
                    '<option value="minggu">Minggu</option>' +
                    '</select>' +
                    '<button type="button" id="remove-input" class="ml-4 border border-black bg-red-500 hover:bg-red-700 px-1 text-white" >Hapus</button>' +
                    '</div>');
            });

            $(document).on("click", "#remove-input", function() {
                $(this).parent().remove();
            });
        });

        // $(document).ready(function() {
        //     var d = new Date().toISOString();
        //     d = moment.tz(d, "Asia/Jakarta").format();
        //     var minDate = d.substring(0, 11) + "00:00";
        //     console.log(minDate);

        //     $("#datetimepicker").attr({
        //         "min": minDate,
        //     });
        // });
    </script>
@endsection

@extends('layouts.admin-app')

@section('component')
    <div class="relative bg-cover bg-center bg-fixed h-screen"
        style="background-image: url('/img/bekgron.png');  width:full; overflow-x:hidden;  ">
        <div
            class="block  rounded-lg bg-slate-200  h-full  md:h-auto md:w-8/12 md:mt-10  md:mx-auto md:mb-16 md:pb-8 md:py-20 md:px-20">
            <br />
            <h2 class="text-3xl font-semibold text-center mb-4">Jadwal Ronda</h2>
            <div class="form-group">
                <form method="POST" action="{{ route('admin.ronda.create.proses') }}">
                    @csrf
                    <div class="mx-auto text-center">
                        <table class="mx-auto w-8/12 mb-16" id="dynamic_field">
                            <tr>
                                <td>
                                    <select class="w-auto mt-3 mr-3 py-1 px-2" name="nama[]"
                                        class="form-control name_list col-sm col-md-7">
                                        <option value="" disabled selected>-- Pilih Warga --</option>
                                        @foreach ($data as $d)
                                            <option value="{{ $d->nama }}">{{ $d->nama }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <select class="w-auto mt-3 py-1 px-2" name="hari[]"
                                        class="form-control day_list col-sm col-md-7" placeholder="PILIH HARI">
                                        <option value="" disabled selected>-- Pilih Hari --</option>
                                        <option value="senin">Senin</option>
                                        <option value="selasa">Selasa</option>
                                        <option value="rabu">Rabu</option>
                                        <option value="kamis">Kamis</option>
                                        <option value="jumat">Jumat</option>
                                        <option value="sabtu">Sabtu</option>
                                        <option value="minggu">Minggu</option>
                                    </select>
                                </td>
                                <td>
                                    <button type="button" name="add" id="add"
                                        class="rounded-md py-1 px-1 mt-3 bg-gradient-to-r ml-3  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400">Tambah</button>
                                </td>
                            </tr>
                        </table>
                        <a href="{{ route('admin.dashboard') }}"
                            class="mr-4 rounded-md py-2.5 px-3 mt-5 bg-gradient-to-t  from-cyan-700 to-cyan-400 text-white hover:text-cyan-950">Back</a>
                        <button type="submit"
                            class="rounded-md px-3 py-2 mt-3 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            var i = 1;
            $('#add').click(function() {
                i++;
                $('#dynamic_field').append('<tr id="row' + i +
                    '"><td><select class="w-auto mr-3 py-1 px-2" name="nama[]"><option value="" disable selected>-- Pilih Warga --</option>' +
                    '@foreach ($data as $d)' +
                    '<option value="{{ $d->nama }}">{{ $d->nama }}</option>' +
                    '@endforeach' +
                    '</td><td></select><select class="w-auto mt-3 py-1 px-2" name="hari[]"><option value="" disable selected>-- Pilih Hari --</option><option value="senin">Senin</option><option value="selasa">Selasa</option><option value="rabu">Rabu</option><option value="kamis">Kamis</option><option value="jumat">Jumat</option><option value="sabtu">Sabtu</option><option value="minggu">Minggu</option></select></td><td><button type="button" name="remove" id="' +
                    i +
                    '" class="btn_remove rounded-md py-1 px-1 mt-3 bg-gradient-to-r ml-3  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400">Urungkan</button></td></tr>'
                );
            });
            $(document).on('click', '.btn_remove', function() {
                var button_id = $(this).attr("id");
                $('#row' + button_id + '').remove();
            });
            $('#submit').click(function() {
                $.ajax({
                    url: "name.php",
                    method: "POST",
                    data: $('#add_name').serialize(),
                    success: function(data) {
                        alert(data);
                        $('#add_name')[0].reset();
                    }
                });
            });
        });
    </script>
@endsection

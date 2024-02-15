@extends('layouts.admin-app')

@section('component')
    <div class="relative bg-cover bg-center bg-fixed h-screen"
        style="background-image: url('/img/bekgron.png');  width:full; overflow-x:hidden;  ">
        <div
            class="block  rounded-lg bg-slate-200  h-full  md:h-auto md:w-8/12 md:mt-10  md:mx-auto md:mb-16 md:pb-8 md:py-20 md:px-20">
            <br />
            <h2 class="text-3xl font-semibold text-center mb-4">Ubah Jadwal Ronda</h2>
            <div class="form-group">
                <form name="add_name" id="add_name" action="{{ route('admin.ronda.update.proses', $data->id) }}"
                    method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mx-auto text-center">
                        <table class="mx-auto w-11/12 mb-16" id="dynamic_field">
                            <tr>
                                <td>
                                    <select class="w-auto mt-3 mr-3 py-1 px-2" name="nama">
                                        <option value="" disabled selected>-- Pilih Warga --</option>
                                        @foreach ($ronda as $d)
                                            <option value="{{ $d->nama }}"
                                                {{ $d->nama == $data->nama ? 'selected' : '' }}>
                                                {{ $d->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <select class="w-auto mt-3 py-1 px-2" name="hari"
                                        class="form-control day_list col-sm col-md-7">
                                        <option value="" disabled selected>-- Pilih Hari --</option>
                                        <option value="senin" {{ $data->hari == 'senin' ? 'selected' : '' }}>Senin</option>
                                        <option value="selasa" {{ $data->hari == 'selasa' ? 'selected' : '' }}>Selasa
                                        </option>
                                        <option value="rabu" {{ $data->hari == 'rabu' ? 'selected' : '' }}>Rabu</option>
                                        <option value="kamis" {{ $data->hari == 'kamis' ? 'selected' : '' }}>Kamis</option>
                                        <option value="jumat" {{ $data->hari == 'jumat' ? 'selected' : '' }}>Jumat</option>
                                        <option value="sabtu" {{ $data->hari == 'sabtu' ? 'selected' : '' }}>Sabtu</option>
                                        <option value="minggu" {{ $data->hari == 'minggu' ? 'selected' : '' }}>Minggu
                                        </option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <a href="{{ route('admin.ronda') }}"
                            class="rounded-md py-1.5 px-2 mr-4 mt-3 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400">Back</a>
                        <button type="submit"
                            class="rounded-md py-1 px-2 mt-3 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

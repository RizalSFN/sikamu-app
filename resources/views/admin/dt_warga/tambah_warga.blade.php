@extends('layouts.admin-app')
@section('component')
    <div class="contaier">
        <div class="relative text-center bg-cover bg-center h-screen"
            style="background-image: url('/img/bekgron.png');  width: auto;  ">
            <div
                class="container block rounded-lg bg-gray-100 mx-auto  px-10 py-10 h-full w-full md:h-auto md:mt-16  md:max-w-2xl md:mx-auto lg:h-auto lg:max-w-4xl ">
                <div class="pt-8">
                    <h1 class="text-center font-bold text-3xl">
                        TAMBAH WARGA
                    </h1>
                    @if (session('success'))
                        <div id="toast-success"
                            class="flex items-center w-8/12 max-w-x p-4 mt-8 text-black bg-green-300 rounded-lg shadow mx-auto dark:text-white dark:bg-green-300 border-1 border-green-600"
                            role="alert">
                            <div
                                class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                <span class="sr-only">Check icon</span>
                            </div>
                            <div class="ms-3 text-sm font-bold">{{ session('success') }}</div>
                            <button type="button"
                                class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                                data-dismiss-target="#toast-success" aria-label="Close">
                                <span class="sr-only">Close</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                            </button>
                        </div>
                    @endif
                    <form action="{{ route('admin.warga.create.proses') }}" method="post">
                        @csrf
                        <table class="mt-6 text-left mx-auto ">
                            <tr>
                                <td>
                                    NIK
                                </td>
                                <td class="px-2">
                                    :
                                </td>
                                <td>
                                    <input type="number" name="nik" placeholder="Masukkan NIK">
                                    @error('nik')
                                        <label
                                            class="block text-sm font-medium leading-6 text-red-600">{{ __($message) }}</label>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    NO.KK
                                </td>
                                <td class="px-2">
                                    :
                                </td>
                                <td>
                                    <input type="number" name="no_kk" placeholder="Masukkan nomor KK">
                                    @error('no_kk')
                                        <label
                                            class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                                    @enderror
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
                                    <input type="text" name="nama" placeholder="Masukkan nama">
                                    @error('nama')
                                        <label
                                            class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    RT
                                </td>
                                <td class="px-2">
                                    :
                                </td>
                                <td>
                                    <input type="number" name="rt" placeholder="Masukkan rt">
                                    @error('rt')
                                        <label
                                            class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>RW</td>
                                <td class="px-2">:</td>
                                <td>
                                    <input type="number" name="rw" placeholder="Masukkan rw">
                                    @error('rw')
                                        <label
                                            class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Desa
                                </td>
                                <td class="px-2">
                                    :
                                </td>
                                <td>
                                    <input type="text" name="desa" placeholder="masukkan desa">
                                    @error('desa')
                                        <label
                                            class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Kecamatan
                                </td>
                                <td class="px-2">
                                    :
                                </td>
                                <td>
                                    <input type="text" name="kecamatan" placeholder="masukkan kecamatan">
                                    @error('kecamatan')
                                        <label
                                            class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Nomor Telepon (aktif)
                                </td>
                                <td class="px-2">
                                    :
                                </td>
                                <td>
                                    <input type="number" name="telepon" placeholder="masukkan No Telepon (aktif)">
                                    @error('telepon')
                                        <label
                                            class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td class="px-2">:</td>
                                <td>
                                    <select name="keterangan" class="p-2 w-full" required>
                                        <option value="" selected disabled>-- pilih keterangan --</option>
                                        <option value="kepala keluarga">Kepala keluarga</option>
                                        <option value="anggota keluarga">Anggota keluarga</option>
                                    </select>
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
@endsection

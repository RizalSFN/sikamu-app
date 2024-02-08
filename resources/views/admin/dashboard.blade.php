@extends('layouts.main-admin')

@section('content')
    <div class="bg-fixed overflow-hidden text-center bg-cover bg-center object-cover h-auto"
        style="background-image: url('/img/bekgron.png'); width: auto; opacity ">
        <div class="mx-auto mt-32 text-center">

            <h1 class="text-3xl text-black font-semibold">Data warga</h1>
        </div>
        <input type="text" name="search" id="search"
            class="mt-4  w-6/12 h-10 text-gray-400 bg-slate-200 rounded-xl px-3 " placeholder="Cari warga ...">

        <div class="mx-auto">
            <ul class="block mx-auto sm:flex justify-between  ">
                <li
                    class="block w-5/12 mx-auto rounded-md text-1xl sm:w-3/12 py-5 px-5 mt-5 bg-gradient-to-tr  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400 ">
                    <svg class="h-20 p-3 mx-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                        <path fill="#ffffff"
                            d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z" />
                    </svg>Total Warga ({{ count($data) }})
                </li>
                <li
                    class="block w-5/12 mx-auto rounded-md text-1xl sm:w-3/12 py-5 px-5 mt-5 bg-gradient-to-tr  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400 ">
                    <svg class="h-20 p-3 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                        <path fill="#ffffff"
                            d="M240 32a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM192 48a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32 80c17.7 0 32 14.3 32 32h8c13.3 0 24 10.7 24 24v16c0 1.7-.2 3.4-.5 5.1C280.3 229.6 320 286.2 320 352c0 88.4-71.6 160-160 160S0 440.4 0 352c0-65.8 39.7-122.4 96.5-146.9c-.4-1.6-.5-3.3-.5-5.1V184c0-13.3 10.7-24 24-24h8c0-17.7 14.3-32 32-32zm0 320a96 96 0 1 0 0-192 96 96 0 1 0 0 192zm192-96c0-25.9-5.1-50.5-14.4-73.1c16.9-32.9 44.8-59.1 78.9-73.9c-.4-1.6-.5-3.3-.5-5.1V184c0-13.3 10.7-24 24-24h8c0-17.7 14.3-32 32-32s32 14.3 32 32h8c13.3 0 24 10.7 24 24v16c0 1.7-.2 3.4-.5 5.1C600.3 229.6 640 286.2 640 352c0 88.4-71.6 160-160 160c-62 0-115.8-35.3-142.4-86.9c9.3-22.5 14.4-47.2 14.4-73.1zm224 0a96 96 0 1 0 -192 0 96 96 0 1 0 192 0zM368 0a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm80 48a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                    </svg>Kejahatan ({{ count($kejahatan) }})
                </li>
                <li
                    class="block w-5/12 mx-auto rounded-md text-1xl sm:w-3/12 py-5 px-5 mt-5 bg-gradient-to-tr  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400 ">
                    <svg class="h-20 p-3 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                        <path fill="#ffffff"
                            d="M72 88a56 56 0 1 1 112 0A56 56 0 1 1 72 88zM64 245.7C54 256.9 48 271.8 48 288s6 31.1 16 42.3V245.7zm144.4-49.3C178.7 222.7 160 261.2 160 304c0 34.3 12 65.8 32 90.5V416c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V389.2C26.2 371.2 0 332.7 0 288c0-61.9 50.1-112 112-112h32c24 0 46.2 7.5 64.4 20.3zM448 416V394.5c20-24.7 32-56.2 32-90.5c0-42.8-18.7-81.3-48.4-107.7C449.8 183.5 472 176 496 176h32c61.9 0 112 50.1 112 112c0 44.7-26.2 83.2-64 101.2V416c0 17.7-14.3 32-32 32H480c-17.7 0-32-14.3-32-32zm8-328a56 56 0 1 1 112 0A56 56 0 1 1 456 88zM576 245.7v84.7c10-11.3 16-26.1 16-42.3s-6-31.1-16-42.3zM320 32a64 64 0 1 1 0 128 64 64 0 1 1 0-128zM240 304c0 16.2 6 31 16 42.3V261.7c-10 11.3-16 26.1-16 42.3zm144-42.3v84.7c10-11.3 16-26.1 16-42.3s-6-31.1-16-42.3zM448 304c0 44.7-26.2 83.2-64 101.2V448c0 17.7-14.3 32-32 32H288c-17.7 0-32-14.3-32-32V405.2c-37.8-18-64-56.5-64-101.2c0-61.9 50.1-112 112-112h32c61.9 0 112 50.1 112 112z" />
                    </svg>Total Keluarga ({{ count($warga) }})
                </li>
            </ul>
        </div>
        <table class="w-11/12 mx-auto mt-10 bg-slate-200 " id="dataTable">
            <thead>
                <tr>
                    <th class="border border-black px-1 py-1 bg-cyan-950 text-white">No</th>
                    <th class="border border-black px-1 py-1 bg-cyan-950 text-white">Nama</th>
                    <th class="border border-black px-1 py-1 bg-cyan-950 text-white">Alamat</th>
                    <th class="border border-black px-1 py-1 bg-cyan-950 text-white">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
                    <tr>
                        <td class="border border-black px-1 py-1 bg-cyan-950 text-white">{{ $start++ }}</td>
                        <td class="border border-black px-1 py-1">{{ $d->nama }}</td>
                        <td class="border border-black px-1 py-1">{{ $d->alamat }}</td>
                        <td class="border border-black px-1 py-1">
                            <a href="{{ route('admin.warga.detail', $d->id) }}"
                                class="ml-2 bg-green-500 hover:bg-green-700 text-white text-sm font-bold py-1 px-4 border border-green-700 rounded">Detail</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4" class="px-4">
                        {{ $data->links() }}
                    </td>
                </tr>
            </tfoot>
        </table>

        <div class="mx-auto mt-8 mb-8">
            <button>
                <a href=""
                    class="rounded-md text-sm py-2 px-2 w-10 md:text-base md:font-semibold md:rounded-md md:py-3 md:px-3 md:text-1xl mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400 ">Jadwal
                    Ronda</a>'
            </button>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#search').on('keyup', function() {
                let keyword = $(this).val().toLowerCase();
                $('#dataTable tbody tr').filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(keyword) > -1);
                })
                resetNomor();
            })
        })

        function resetNomor() {
            let angka = 1;
            $('#dataTable tbody tr:visible').each(function() {
                $(this).find('td:first').text(angka);
                angka++;
            })
        }
    </script>
@endsection

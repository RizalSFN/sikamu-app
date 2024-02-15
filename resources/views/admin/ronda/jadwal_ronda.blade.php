@extends('layouts.main-admin')

@section('content')
    <div class="bg-fixed  text-center bg-cover bg-center object-cover h-screen "
        style="background-image: url('/img/bekgron.png'); width: auto; overflow-x:hidden; ">
        <div class="mx-auto mt-32 text-center">
            <h1 class="text-3xl text-black font-semibold">Jadwal Ronda</h1>
        </div>
        @if (session('success'))
            <div class="w-5/12 mx-auto mt-4 flex items-center p-4 text-sm text-green-600 rounded-lg bg-green-200 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="flex-shrink-0 inline w-6 h-6 me-3">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>

                <div>
                    <span class="text-sm">{{ session('success') }}</span>
                </div>
            </div>
        @endif
        <div class="container max-w-min mx-auto inline-flex space-x-3 overflow-x-auto">
            <a href="{{ route('admin.ronda', ['hari' => 'senin']) }}"
                class="rounded-md mt-5 px-2 py-2 md:rounded-md md:text-1xl md:py-2 md:px-2 md:mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 {{ $hari == 'senin' ? 'text-cyan-400' : 'text-cyan-100 hover:text-cyan-400' }} ">Senin</a>
            <a href="{{ route('admin.ronda', ['hari' => 'selasa']) }}"
                class="rounded-md text-1xl py-2 px-2 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 {{ $hari == 'selasa' ? 'text-cyan-400' : 'text-cyan-100 hover:text-cyan-400' }}">Selasa</a>
            <a href="{{ route('admin.ronda', ['hari' => 'rabu']) }}"
                class="rounded-md text-1xl py-2 px-2 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 {{ $hari == 'rabu' ? 'text-cyan-400' : 'text-cyan-100 hover:text-cyan-400' }}">Rabu</a>
            <a href="{{ route('admin.ronda', ['hari' => 'kamis']) }}"
                class="rounded-md text-1xl py-2 px-2 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 {{ $hari == 'kamis' ? 'text-cyan-400' : 'text-cyan-100 hover:text-cyan-400' }} ">Kamis</a>
            <a href="{{ route('admin.ronda', ['hari' => 'jumat']) }}"
                class="rounded-md text-1xl py-2 px-2 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 {{ $hari == 'jumat' ? 'text-cyan-400' : 'text-cyan-100 hover:text-cyan-400' }}">Jumat</a>
            <a href="{{ route('admin.ronda', ['hari' => 'sabtu']) }}"
                class="rounded-md text-1xl py-2 px-2 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 {{ $hari == 'sabtu' ? 'text-cyan-400' : 'text-cyan-100 hover:text-cyan-400' }}">Sabtu</a>
            <a href="{{ route('admin.ronda', ['hari' => 'minggu']) }}"
                class="rounded-md text-1xl py-2 px-2 mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 {{ $hari == 'minggu' ? 'text-cyan-400' : 'text-cyan-100 hover:text-cyan-400' }}">Minggu</a>
        </div>
        <table class="w-11/12 mx-auto mt-5 bg-slate-200 ">
            <tr>
                <th class="border border-black px-1 py-1 bg-cyan-950 text-white">No</th>
                <th class="border border-black px-1 py-1 bg-cyan-950 text-white">Nama</th>
                <th class="border border-black px-1 py-1 bg-cyan-950 text-white">Hari</th>
                <th class="border border-black px-1 py-1 bg-cyan-950 text-white">Aksi</th>
            </tr>
            @foreach ($data as $d)
                <tr>
                    <td class="border border-black px-1 py-1 bg-cyan-950 text-white">{{ $start++ }}</td>
                    <td class="border border-black px-1 py-1">{{ $d->nama }}</td>
                    <td class="border border-black px-1 py-1">{{ $d->hari }}</td>
                    <td class="border border-black px-1 py-1">
                        <a href="{{ route('admin.ronda.update', $d->id) }}"
                            class="ml-2 bg-yellow-500 hover:bg-yellow-700 text-white text-sm font-bold py-1 px-4 border border-yellow-700 rounded">Ubah</a>
                        <button id="openButton"
                            class="ml-2 bg-red-500 hover:bg-red-700 text-white text-sm font-bold py-1 px-4 border border-red-700 rounded">Hapus</button>
                    </td>
                </tr>

                {{-- modal delete --}}
                <div id="overlay" class="fixed hidden z-40 w-screen h-screen inset-0 bg-gray-900 bg-opacity-60"></div>

                <div id="dialog"
                    class="hidden fixed z-50 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 bg-white rounded-md px-8 py-6 space-y-5 drop-shadow-lg">
                    <h1 class="text-2xl font-semibold mb-7">Yakin ingin menghapus data?</h1>
                    <form class="flex" action="{{ route('admin.ronda.delete', $d->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="text-white bg-red-400 hover:bg-red-500 rounded-md px-5 py-2">Hapus</button>
                        <a id="close"
                            class="ml-4 px-5 py-2 bg-gray-100 hover:bg-gray-200 text-black cursor-pointer rounded-md">Batal</a>
                    </form>
                </div>
            @endforeach
            @if ($message)
                <tr>
                    <td colspan="4">{{ $message }}</td>
                </tr>
            @endif

            <tr>
                <td colspan="4">
                    {{ $data->links() }}
                </td>
            </tr>
        </table>

        <div class="mx-auto my-8">
            <button>
                <a href="{{ route('admin.ronda.create') }}"
                    class="rounded-md text-sm py-2 px-2 w-10 md:text-base md:font-semibold md:rounded-md md:py-3 md:px-3 md:text-1xl mt-5 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400 ">Buat
                    Jadwal
                    Ronda
                </a>
            </button>
        </div>
    </div>
    <script>
        const openBtn = document.getElementById('openButton');
        const modal = document.getElementById('dialog');
        const overlay = document.getElementById('overlay')
        const closeBtn = document.getElementById('close')

        openBtn.addEventListener('click', function() {
            modal.classList.remove('hidden');
            overlay.classList.remove('hidden');
        })

        closeBtn.addEventListener('click', function() {
            modal.classList.add('hidden');
            overlay.classList.add('hidden')
        })
    </script>
@endsection

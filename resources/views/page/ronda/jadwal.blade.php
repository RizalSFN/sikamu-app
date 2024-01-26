@extends('layouts.main')

@section('content')
    <form action="" method="POST">
        @foreach ($hasil as $h)
            <div class="mt-4">
                <ul class="list-disc">
                    @foreach ($h as $d)
                        <li>{{ $d }}</li>
                    @endforeach
                </ul>
            </div>
        @endforeach
        <div>
            <label>Senin</label>
            <div>
                <input type="text" disabled name="senin1" value=>
                <input type="text" disabled name="senin2">
                <input type="text" disabled name="senin3">
                <input type="text" disabled name="senin4">
                <input type="text" disabled name="senin5">
            </div>
        </div>
        <div>
            <label>Selasa</label>
            <div>
                <input type="text" disabled name="selasa1">
                <input type="text" disabled name="selasa2">
                <input type="text" disabled name="selasa3">
                <input type="text" disabled name="selasa4">
                <input type="text" disabled name="selasa5">
            </div>
        </div>
    </form>
    <div class="mt-8">
        <a href="{{ route('ronda.jadwal.acak') }}" class="border-2 p-3 bg-blue-500 text-white hover:bg-blue-600">Pilih
            otomatis</a>
        <a href="{{ route('ronda.jadwal.acak') }}"
            class="border-2 p-3 bg-green-500 text-white hover:bg-green-600">Simpan</a>
    </div>
@endsection

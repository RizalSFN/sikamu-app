@extends('layouts.main')

@section('content')
    <form action="{{ route('ronda.warga.updateproses', $data[0]->id) }}" method="PUT">
        @csrf
        @method('PUT');
        @foreach ($data as $d)
            {{-- TODO BESOK BERESIN FILE INI --}}
            <div>
                <label for="nik">nik</label>
                <input type="number" id="nik" name="nik" value="{{ $d->nik }}" placeholder="input nik" disabled>
            </div>
            <div>
                <label for="nama">nama</label>
                <input type="text" id="nama" name="nama" value="{{ $d->nama }}" placeholder="input nama">
            </div>
            <div>
                <label for="tempat">tempat lahir</label>
                <input type="text" id="tempat" name="tempat" value="{{ $ttl[0] }}"
                    placeholder="input tempat lahir">
            </div>
            <div>
                <label for="tanggal">tanggal lahir</label>
                <input type="date" id="tanggal" name="tanggal" value="{{ $tanggal }}"
                    placeholder="input tanggal lahir">
            </div>
            <div>
                <label>Jenis kelamin</label>
                <div>
                    <div>
                        <label for="laki-laki">laki-laki</label>
                        <input type="radio" id="laki-laki" name="jenis_kelamin"
                            {{ $d->jenis_kelamin == 'laki-laki' ? 'checked' : '' }}>
                    </div>
                    <div>
                        <label for="perempuan">perempuan</label>
                        <input type="radio" id="perempuan" name="jenis_kelamin"
                            {{ $d->jenis_kelamin == 'perempuan' ? 'checked' : '' }}>
                    </div>
                </div>
            </div>
            <div>
                <label for="rt">rt</label>
                <input type="number" id="rt" name="rt" value="{{ $d->rt }}" placeholder="input rt">
            </div>
            <div>
                <label for="rw">rw</label>
                <input type="text" id="rw" name="rw" value="{{ $d->rw }}" placeholder="input rw">
            </div>
            <div>
                <label for="desa">desa</label>
                <input type="text" id="desa" name="desa" value="{{ $d->desa }}" placeholder="input desa">
            </div>
            <div>
                <label for="kecamatan">kecamatan</label>
                <input type="text" id="kecamatan" name="kecamatan" value="{{ $d->kecamatan }}"
                    placeholder="input kecamatan">
            </div>
            <div>
                <select name="agama" id="agama">
                    <option value="">-- select agama --</option>
                    <option value="islam" {{ $d->agama == 'islam' ? 'selected' : '' }}>Islam</option>
                    <option value="protestan" {{ $d->agama == 'protestan' ? 'selected' : '' }}>Protestan</option>
                    <option value="katholik" {{ $d->agama == 'katholik' ? 'selected' : '' }}>Katholik</option>
                    <option value="hindu" {{ $d->agama == 'hindu' ? 'selected' : '' }}>Hindu</option>
                    <option value="buddha" {{ $d->agama == 'buddha' ? 'selected' : '' }}>Buddha</option>
                    <option value="kong hu cu" {{ $d->agama == 'kong hu cu' ? 'selected' : '' }}>Kong hu cu</option>
                </select>
            </div>
            <div>
                <label for="pekerjaan">Pekerjaan</label>
                <input type="text" name="pekerjaan" value="{{ $d->pekerjaan }}" id="pekerjaan">
            </div>
            <div>
                <label>Kewarganegaraan</label>
                <div>
                    <div>
                        <label for="wni">WNI</label>
                        <input type="radio" id="wni" name="kewarganegaraan"
                            {{ $d->kewarganegaraan == 'WNI' ? 'checked' : '' }}>
                    </div>
                    <div>
                        <label for="wna">WNA</label>
                        <input type="radio" id="wna" name="kewarganegaraan"
                            {{ $d->kewarganegaraan == 'WNA' ? 'checked' : '' }}>
                    </div>
                </div>
            </div>
            <div>
                <label for="telepon">Telepon (aktif)</label>
                <input type="number" id="telepon" name="telepon" value="{{ $d->telepon }}">
            </div>
            <button type="submit">Kirim</button>
        @endforeach
    </form>
@endsection

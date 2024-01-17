<div>
    <ul class="list-none text-slate-500 font-medium flex w-5/12 mx-auto">
        <li class="mx-5"><a href="{{ route('home') }}"
                class="{{ $title == 'beranda' ? 'text-cyan-500' : 'hover:text-cyan-500' }}">beranda</a></li>
        <li class="mx-5"><a href="#"
                class="{{ $title == 'bantuan' ? 'text-cyan-500' : 'hover:text-cyan-500' }}">bantuan</a></li>
        <li class="mx-5"><a href="#"
                class="{{ $title == 'jadwal ronda' ? 'text-cyan-500' : 'hover:text-cyan-500' }}">jadwal ronda</a></li>
        <li class="mx-5"><a href="#"
                class="{{ $title == 'panggilan darurat' ? 'text-cyan-500' : 'hover:text-cyan-500' }}">panggilan
                darurat</a>
        </li>
    </ul>
</div>

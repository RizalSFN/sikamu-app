<div class="navbar bg-Myprimary flex justify-around">
    <div class="flex">
        <img src="/img/logo-app.png" alt="logo sikamu app" class="m-1 absolute" width="60">
        <h3 class="text-Mysecondary font-mono text-2xl ml-16">SiKaMU</h3>
    </div>
    <ul class="list-none text-Mysecondary font-medium">
        <li class="mx-5"><a href="#"
                class="{{ $title == 'beranda' ? 'text-accent' : 'hover:text-accent' }}">beranda</a></li>
        <li class="mx-5"><a href="#"
                class="{{ $title == 'bantuan' ? 'text-accent' : 'hover:text-accent' }}">bantuan</a></li>
        <li class="mx-5"><a href="#"
                class="{{ $title == 'jadwal ronda' ? 'text-accent' : 'hover:text-accent' }}">jadwal ronda</a></li>
        <li class="mx-5"><a href="#"
                class="{{ $title == 'panggilan darurat' ? 'text-accent' : 'hover:text-accent' }}">panggilan darurat</a>
        </li>
    </ul>
</div>

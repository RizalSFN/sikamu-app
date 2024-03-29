<nav class="bg-gradient-to-tr  from-cyan-500 to-cyan-800 fixed top-0 z-10 w-full">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="/img/lg.png" class="h-20" alt="SIKAMU Logo" />
            <span
                class="bg-clip-text text-transparent bg-gradient-to-r from-cyan-900 to-cyan-700 font-mono font-bold text-3xl my-auto">SIKAMU</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul
                class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-transparant md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
                <li>
                    <a href="{{ route('admin.dashboard') }}"
                        class="block py-2 px-3 {{ $title == 'dashboard' ? 'text-cyan-950' : 'text-white hover:text-cyan-950' }} bg-cyan-700 rounded md:bg-transparent md:p-0 dark:text-white md:dark:text-white transition duration-1000 ease-in-out">DASHBOARD</a>
                </li>
                <li>
                    <a href="{{ route('admin.warga.create') }}"
                        class="block py-2 px-3 {{ $title == 'tambah' ? 'text-cyan-950' : 'text-white hover:text-cyan-950' }} rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 dark:text-white md:dark:hover:text-cyan-500 dark:hover:bg-cyan-700 dark:hover:text-white md:dark:hover:bg-transparent transition duration-1000 ease-in-out">TAMBAH
                        WARGA </a>
                </li>
                <li>
                    <a href="{{ route('admin.ronda') }}"
                        class="block py-2 px-3 {{ $title == 'ronda' ? 'text-cyan-950' : 'text-white hover:text-cyan-950' }} rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 dark:text-white md:dark:hover:text-cyan-500 dark:hover:bg-cyan-700 dark:hover:text-white md:dark:hover:bg-transparent transition duration-1000 ease-in-out">RONDA</a>
                </li>
                <li>
                    <a href="{{ route('admin.laporan') }}"
                        class="block py-2 px-3 {{ $title == 'laporan' ? 'text-cyan-950' : 'text-white hover:text-cyan-950' }} rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 dark:text-white md:dark:hover:text-cyan-500 dark:hover:bg-cyan-700 dark:hover:text-white md:dark:hover:bg-transparent transition duration-1000 ease-in-out">LAPORAN</a>
                </li>
                <li>
                    <a href="{{ route('admin.profil') }}"
                        class="block py-2 px-3 {{ $title == 'profil' ? 'text-cyan-950' : 'text-white hover:text-cyan-950' }} rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 dark:text-white md:dark:hover:text-cyan-500 dark:hover:bg-cyan-700 dark:hover:text-white md:dark:hover:bg-transparent transition duration-1000 ease-in-out">PROFIL</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

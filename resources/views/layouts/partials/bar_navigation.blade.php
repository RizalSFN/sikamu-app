<nav class="bg-gradient-to-r  from-cyan-500 to-cyan-800 fixed top-0 z-10 w-full">
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
                class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-transparant md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 ">
                <li>
                    <a href="{{ route('home') }}"
                        class="block py-2 px-3 text-white hover:text-cyan-950 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 dark:text-white md:dark:hover:text-cyan-500 dark:hover:bg-cyan-700 dark:hover:text-white md:dark:hover:bg-transparent transition duration-1000 ease-in-out"
                        aria-current="page">HOME</a>
                </li>
                <li>
                    <a href="{{ route('profil') }}"
                        class="block py-2 px-3 {{ $title == 'profil' ? 'text-cyan-950' : 'text-white hover:text-cyan-950' }} rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 dark:text-white md:dark:hover:text-cyan-500 dark:hover:bg-cyan-700 dark:hover:text-white md:dark:hover:bg-transparent transition duration-1000 ease-in-out">PROFIL</a>
                </li>
                <li>
                    <a href="{{ route('bantuan') }}"
                        class="block py-2 px-3 {{ $title == 'bantuan' ? 'text-cyan-950' : 'text-white hover:text-cyan-950' }} rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 dark:text-white md:dark:hover:text-cyan-500 dark:hover:bg-cyan-700 dark:hover:text-white md:dark:hover:bg-transparent transition duration-1000 ease-in-out">BANTUAN</a>
                </li>
                <li>
                    <a href="{{ route('ronda') }}"
                        class="block py-2 px-3 {{ $title == 'ronda' ? 'text-cyan-950' : 'text-white hover:text-cyan-950' }} rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 dark:text-white md:dark:hover:text-cyan-500 dark:hover:bg-cyan-700 dark:hover:text-white md:dark:hover:bg-transparent transition duration-1000 ease-in-out">JADWAL
                        RONDA</a>
                </li>
                <li>
                    <a data-modal-target="static-modal" data-modal-toggle="static-modal"
                        class="block py-2 px-3 cursor-pointer text-white hover:text-cyan-950 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 dark:text-white md:dark:hover:text-cyan-500 dark:hover:bg-cyan-700 dark:hover:text-white md:dark:hover:bg-transparent transition duration-1000 ease-in-out">LOGOUT</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-4/12 mx-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Yakin ingin logout?
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="static-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <a data-modal-hide="static-modal" href="{{ route('logoutProses') }}"
                    class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Logout</a>
                <button data-modal-hide="static-modal" type="button"
                    class="ms-5 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
            </div>
        </div>
    </div>
</div>

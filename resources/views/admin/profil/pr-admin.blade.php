@extends('layouts.main-admin')
@section('content')
    <div class="relative  bg-cover  text-center bg-center bg-fixed h-screen"
        style="background-image: url('/img/bekgron.png'); height:auto; width:auto;  overflow-x:hidden; ">

        <div class="block rounded-lg bg-slate-200 px-10 py-10 md:h-auto md:w-8/12 md:mt-40  md:mx-auto md:mb-16 md:pb-8">
            <div class="pt-24 md:pt-8">
                <h1 class="text-center font-bold text-3xl">
                    ADMIN SIKAMU
                </h1>
                <img class="mx-auto h-52 w-52 rounded-full mt-6" src="/img/profil.jpg" alt="profil anda">

                <table class="mt-6 text-left mx-auto mb-4 ">
                    <tr>
                        <td>
                            Nama
                        </td>
                        <td class="px-2">
                            :
                        </td>
                        <td class="px-2 py-1">
                            <input type="email" value="{{ $data[0]->name }}"></input>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email
                        </td>
                        <td class="px-2">
                            :
                        </td>
                        <td class="px-2 py-1">
                            <input type="email" value="{{ $data[0]->email }}" readonly></input>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Password
                        </td>
                        <td class="px-2">
                            :
                        </td>
                        <td class="px-2 py-1">
                            <input type="password" value="{{ $data[0]->password }}" readonly></input>
                        </td>
                    </tr>
                </table>
                <a data-modal-target="static-modal" data-modal-toggle="static-modal"
                    class="rounded-md py-3 cursor-pointer px-3 mb-8 bg-gradient-to-r   from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400">LOGOUT!</a>
            </div>
        </div>
    </div>
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
                <div class="flex w-3/12 items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <a data-modal-hide="static-modal" href="{{ route('logoutProses') }}"
                        class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Logout</a>
                    <button data-modal-hide="static-modal" type="button"
                        class="ms-5 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('component')
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-28 w-28" src="/img/lg.png" alt="SiKaMU logo">
            <h2 class="mt-5 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-cyan-800 to-cyan-400">SiKaMU</span>
            </h2>
        </div>

        @if (session('error'))
            <div class="w-3/12 mx-auto mt-4 flex items-center p-4 text-sm text-red-600 rounded-lg bg-red-200 dark:bg-gray-800 dark:text-red-400"
                role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="flex-shrink-0 inline w-6 h-6 me-3">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                </svg>

                <div>
                    <span class="text-sm">{{ session('error') }}</span>
                </div>
            </div>
        @elseif (session('success'))
            <div class=" w-8/12 lg:w-3/12 mx-auto mt-4 flex items-center p-4 text-sm text-green-600 rounded-lg bg-green-200 dark:bg-gray-800 dark:text-green-400"
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

        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{ route('loginProses') }}" method="POST">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" placeholder="Enter your email"
                            autocomplete="off" required autofocus
                            class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                        <div class="text-sm">
                            <a href="{{ route('forgot-password') }}"
                                class="font-semibold text-cyan-600 hover:text-cyan-500">Forgot
                                password?</a>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div class="relative">
                            <input type="password" id="password" name="password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Enter your password">
                            <div class="absolute end-0 inset-y-0 flex items-center pe-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="w-5 h-5 cursor-pointer text-gray-600 dark:text-gray-400" onclick="hideClick()"
                                    id="hide">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="w-5 h-5 cursor-pointer text-gray-600 dark:text-gray-400 hidden"
                                    onclick="showClick()" id="show">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center my-3.5">
                        <input id="rememberMe" type="checkbox" name="remember"
                            class="w-4 h-4 text-cyan-600 bg-gray-100 border-gray-300 rounded focus:ring-cyan-500 dark:focus:ring-cyan-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="rememberMe" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember
                            me</label>
                    </div>

                    <div>
                        <button type="submit"
                            class="flex w-full justify-center rounded-md bg-cyan-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-cyan-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-cyan-600">Sign
                            in</button>
                    </div>

                    <p class="mt-10 text-center text-sm text-gray-500">
                        Don't have account?
                        <a href="{{ route('register') }}"
                            class="font-semibold leading-6 text-cyan-600 hover:text-cyan-500">Sign Up</a> now!
                    </p>
            </form>
        </div>
    </div>
    <script>
        let hide = document.getElementById('hide');
        let show = document.getElementById('show');
        let input = document.getElementById('password')

        function hideClick() {
            hide.classList.add('hidden')
            show.classList.remove('hidden');
            input.type = 'text'
        }

        function showClick() {
            show.classList.add('hidden')
            hide.classList.remove('hidden');
            input.type = 'password'
        }
    </script>
@endsection

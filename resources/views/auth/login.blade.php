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
            <div class="w-3/12 mx-auto mt-4 flex items-center p-4 text-sm text-green-600 rounded-lg bg-green-200 dark:bg-gray-800 dark:text-green-400"
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
                <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                    <form class="space-y-6" action="{{ route('loginProses') }}" method="POST">
                        @csrf
                        <div>
                            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email
                                address</label>
                            <div class="mt-2">
                                <input id="email" name="email" value="{{ old('email') }}" type="email"
                                    autocomplete="email" required autofocus
                                    class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="mt-6">
                            <div class="flex items-center justify-between">
                                <label for="password"
                                    class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                                <div class="text-sm">
                                    <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot
                                        password?</a>
                                </div>
                            </div>
                            <div class="mt-2">
                                <input id="password" name="password" value="{{ old('password') }}" type="password"
                                    autocomplete="current-password" required
                                    class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="flex items-center my-5">
                            <input id="rememberMe" type="checkbox" name="remember"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="rememberMe"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember
                                me</label>
                        </div>

                        <div>
                            <button type="submit"
                                class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign
                                in</button>
                        </div>
                    </form>

                    <p class="mt-10 text-center text-sm text-gray-500">
                        Don't have account?
                        <a href="{{ route('register') }}"
                            class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Register</a> now!
                    </p>
                </div>
        </div>
    </div>
    </div>
@endsection

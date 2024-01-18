@extends('layouts.main')

@section('component')
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-28 w-28" src="/img/logo-app.png" alt="SiKaMU logo">
            <h2 class="mt-5 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign up to
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
                    <span class="text-sm">{{ dd(session('error')) }}</span>
                </div>
            </div>
        @endif

        <div class="mt-5 sm:mx-auto sm:w-full sm:max-w-sm">
            <form action="{{ route('registerProses') }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label for="nik" class="block text-sm font-medium leading-6 text-gray-900">NIK</label>
                    <div class="mt-2">
                        <input id="nik" name="nik" value="{{ old('nik') }}" type="number" autocomplete="off"
                            required autofocus
                            class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('nik')
                        <label class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                    @enderror
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                    <div class="mt-2">
                        <input id="email" name="email" value="{{ old('email') }}" type="email" autocomplete="off"
                            required
                            class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('email')
                        <label class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                    @enderror
                </div>

                <div>
                    <label for="Password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                    <div class="mt-2">
                        <input id="Password" name="password" value="{{ old('password') }}" type="password"
                            autocomplete="off" required
                            class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('password')
                        <label class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                    @enderror
                </div>
                <div>
                    <label for="confirm-password" class="block text-sm font-medium leading-6 text-gray-900">Confirm
                        Password</label>
                    <div class="mt-2">
                        <input id="confirm-password" name="confirm-password" value="{{ old('confirm-password') }}"
                            type="password" autocomplete="off" required
                            class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('confirm-password')
                        <label class="block text-sm font-medium leading-6 text-red-600">{{ $message }}</label>
                    @enderror
                </div>

                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign
                        up</button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm text-gray-500">
                Have account?
                <a href="{{ route('login') }}"
                    class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Login</a> now!
            </p>
        </div>
    </div>
@endsection

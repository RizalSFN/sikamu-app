@extends('layouts.main')

@section('component')
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-28 w-28" src="/img/logo-app.png" alt="SiKaMU logo">
            <h2 class="mt-5 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign up to
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-cyan-800 to-cyan-400">SiKaMU</span>
            </h2>
        </div>

        <div class="mt-5 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{ route('registerProses') }}" method="POST">
                @csrf
                <div>
                    <label for="nik" class="block text-sm font-medium leading-6 text-gray-900">NIK</label>
                    <div class="mt-2">
                        <input id="nik" name="nik" value="{{ old('nik') }}" type="number" autocomplete="off"
                            required autofocus
                            class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                    <div class="mt-2">
                        <input id="email" name="email" value="{{ old('email') }}" type="email" autocomplete="off"
                            required
                            class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                    <div class="mt-2">
                        <input id="password" name="password" value="{{ old('password') }}" type="password"
                            autocomplete="off" required
                            class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <label for="confirm-password" class="block text-sm font-medium leading-6 text-gray-900">Confirm
                        Password</label>
                    <div class="mt-2">
                        <input id="confirm-password" name="confirm-password" value="{{ old('confirm-password') }}"
                            type="password" autocomplete="off" required
                            class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
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

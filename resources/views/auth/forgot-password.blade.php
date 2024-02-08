@extends('layouts.app')

@section('component')
    <div class="sm:mx-auto sm:w-full sm:max-w-sm mt-44 border-2 border-slate-600 rounded-md p-4">
        @if (session('error'))
            <div class="w-full mx-auto my-3 flex items-center p-4 text-sm text-red-600 rounded-lg bg-red-200 dark:bg-gray-800 dark:text-red-400"
                role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="flex-shrink-0qa inline w-6 h-6 me-3">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                </svg>

                <div>
                    <span class="text-sm">{{ session('error') }}</span>
                </div>
            </div>
        @endif
        <form class="space-y-6" action="{{ route('forgot-password.create.proses', ['token-forgot' => $tokenD[0]->token]) }}"
            method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="password" class="block text-sm font-medium leading-6 text-gray-900">New password</label>
                <div class="mt-2">
                    <input id="password" name="password" type="password" autocomplete="off"
                        placeholder="Enter your new password" required autofocus
                        class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <label for="confirm-password" class="block text-sm font-medium leading-6 text-gray-900">Confirm
                    password</label>
                <div class="mt-2">
                    <input id="confirm-password" name="confirm-password" type="password" autocomplete="off"
                        placeholder="Enter your confirm password" required
                        class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <input type="hidden" name="id" value="{{ $id }}">
            <input type="hidden" name="token_id" value="{{ $tokenId }}">
            <div>
                <button type="submit"
                    class="flex w-full justify-center rounded-md bg-cyan-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-cyan-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-cyan-600">Send</button>
            </div>
        </form>
    </div>
@endsection

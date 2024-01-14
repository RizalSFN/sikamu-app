@extends('layouts.main')

@section('component')
    <div class="border rounded-lg w-4/12 m-auto pb-6 mt-2">
        <h3 class="text-3xl text-center font-bold my-6">Register</h3>
        @if (session('error'))
            <div role="alert" class="alert alert-error">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                </svg>
                <span>Error! Register failed, please try again!</span>
            </div>
        @endif
        <form action="{{ route('loginProses') }}" method="POST" autocomplete="off">
            @csrf
            <label class="form-control w-9/12 m-auto max-w-xs">
                <div class="label">
                    <span class="label-text">NIK</span>
                </div>
                <input type="number" name="nik" placeholder="Enter your NIK"
                    class="input input-bordered w-full max-w-xs" required autofocus />
            </label>
            <label class="form-control w-9/12 m-auto max-w-xs">
                <div class="label">
                    <span class="label-text">Email</span>
                </div>
                <input type="email" name="email" placeholder="Enter your email"
                    class="input input-bordered w-full max-w-xs" required />
            </label>
            <label class="form-control w-9/12 m-auto max-w-xs mt-4">
                <div class="label">
                    <span class="label-text">Password</span>
                </div>
                <input type="password" name="password" placeholder="Enter your password"
                    class="input input-bordered w-full max-w-xs" required />
            </label>
            <label class="form-control w-9/12 m-auto max-w-xs mt-4">
                <div class="label">
                    <span class="label-text">Confirm Password</span>
                </div>
                <input type="password" name="password2" placeholder="Enter your confirm password"
                    class="input input-bordered w-full max-w-xs" required />
            </label>
            <div class="text-center">
                <button type="submit" class="btn btn-accent w-full max-w-xs mt-8">Register</button>
            </div>
            <h3 class="mt-8 text-center">Have account? <a href="{{ route('login') }}"
                    class="italic text-primary hover:underline">Login</a> now</h3>
        </form>
    </div>
@endsection

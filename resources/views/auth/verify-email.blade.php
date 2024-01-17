@extends('layouts.app')

@section('component')
    <form action="{{ route('verification.send') }}" method="POST">
        @csrf
        <button type="submit">Verify</button>
    </form>
@endsection

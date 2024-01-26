@extends('layouts.main')

@section('content')
    <form action="">
        <div>
            <label>Senin</label>
            <div>
                <input type="text" disabled name="senin1" value=>
                <input type="text" disabled name="senin2">
                <input type="text" disabled name="senin3">
                <input type="text" disabled name="senin4">
                <input type="text" disabled name="senin5">
            </div>
        </div>
        <div>
            <label>Selasa</label>
            <div>
                <input type="text" disabled name="selasa1">
                <input type="text" disabled name="selasa2">
                <input type="text" disabled name="selasa3">
                <input type="text" disabled name="selasa4">
                <input type="text" disabled name="selasa5">
            </div>
        </div>
    </form>
@endsection
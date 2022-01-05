@extends('layouts.index')

@section('content')
    <p>Klik tombol dibawah</p>
    <form method="POST" action="{{ url('home/contoh') }}">
        {{-- CSRF: gunakan untuk keamanan --}}
        @csrf
        <input type="text" name="nama" id="">
        <button type="submit">SUBMIT</button>
    </form>
@endsection



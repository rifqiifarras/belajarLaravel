@extends('layouts.master')

@section('content')
<div class="alert alert-primary" role="alert">
    <h1>Selamat datang!!</h1>
	<p> Perkenalkan saya {{ $nama }}, dari kelas {{ $kelas }}, dengan NIM {{ $nim }}.</p>
</div>

@endsection
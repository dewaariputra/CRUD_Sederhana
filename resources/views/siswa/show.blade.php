@extends('siswa.layout')

@section('content')

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Halaman Siswa</div>
                <div class="card-body">

                    <div class="card-body">
                        <h5 class="card-title">Nama : {{ $siswa->nama }}</h5>
                        <p class="card-text">Alamat : {{ $siswa->alamat }}</p>
                        <p class="card-text">Telepon : {{ $siswa->telepon }}</p>
                    </div>

                    <hr>

                    <a href="{{ url('/siswa') }}" class="btn btn-secondary">Kembali</a>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@extends('siswa.layout')

@section('content')

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header bg-primary text-white">
                <div class="card-header">Halaman Kontak</div>
                <div class="card-body">

                    <form action="{{ url('siswa/' .$siswa->id) }}" method="post">
                        @csrf
                        @method('PATCH')

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" id="nama" value="{{ $siswa->nama }}" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" name="alamat" id="alamat" value="{{ $siswa->alamat }}" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="telepon" class="form-label">Telepon</label>
                            <input type="text" name="telepon" id="telepon" value="{{ $siswa->telepon }}" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-success">Update</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

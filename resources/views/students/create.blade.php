@extends('layout.main')

@section('title', 'Form Tambah Data Mahasiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h3 class="mt-3">Form Tambah Data Mahasiswa</h3>

                <form method="post" action="/students">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <!-- penggunaan required kurang aman, meski data nama bisa di isi, tapi required bisa dihapus di inspeksi  -->
                        <!-- <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" required> -->
                        <!-- old()->berfungsi untuk menyimpan data yg sudah diketikkan atau yg terdapat pd value sebelumnya -->
                        <!-- validasi nama kalau terjadi error -->
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ old('nama') }}">
                        @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="npm">NPM</label>
                        <input type="text" class="form-control @error('npm') is-invalid @enderror" id="npm" placeholder="Masukkan NPM" name="npm" value="{{ old('npm') }}">
                        @error('npm')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Masukkan Email" name="email"  value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control" id="jurusan" placeholder="Masukkan Jurusan" name="jurusan"  value="{{ old('jurusan') }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>

            </div>
        </div>
    </div>
@endsection


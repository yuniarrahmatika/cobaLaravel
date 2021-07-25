@extends('layout.main')

@section('title', 'Detail Mahasiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3 class="mt-3">Detail Mahasiswa</h3>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $student->nama }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $student->npm }}</h6>
                        <p class="card-text">{{ $student->email }}</p>
                        <p class="card-text">{{ $student->student }}</p>
                        <a href="{{ $student->id}}/edit" class="btn btn-success">Edit</a>
                        <form action="/students/{{ $student->id }}" method="post" class="d-inline">
                            <!-- untuk mengelabui method post agar menjadi delete -->
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="/students" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


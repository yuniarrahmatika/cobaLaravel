@extends('layout.main')

@section('title', 'Daftar Mahasiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3 class="mt-3">Daftar Mahasiswa</h3>
                
                <a href="/students/create" class="btn btn-primary my-3">Tambah Data Mahasiswa</a>
                @if (session('status'))
                    @php
                        $status = session('status')
                    @endphp
                    @if($status=='Data Mahasiswa Berhasil Ditambahkan')
                        <div class="alert alert-primary">
                            <!-- {{ session('status') }} -->
                            {{ $status }}
                        </div>
                    @elseif($status=='Data Mahasiswa Berhasil Dihapus!')
                        <div class="alert alert-danger">
                            <!-- {{ session('status') }} -->
                            {{ $status }}
                        </div>
                    @elseif($status=='Data Mahasiswa Berhasil Diubah!')
                        <div class="alert alert-success">
                            <!-- {{ session('status') }} -->
                            {{ $status }}
                        </div>
                    @endif
                @endif

                <ul class="list-group">
                    @foreach( $students as $students )
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $students->nama }}
                        <a href="/students/{{ $students->id }}" class="badge badge-info">Detail</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection


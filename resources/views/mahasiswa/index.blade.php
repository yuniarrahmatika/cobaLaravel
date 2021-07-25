@extends('layout.main')

@section('title', 'Daftar Mahasiswa')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <h3 class="mt-3 text-center">Daftar Mahasiswa</h3>

                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Email</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $mahasiswa as $mhs)
                        <tr>
                            <!-- var/object loop yg didalamnya terdapat property yg namanya iteration -->
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $mhs->nama }}</td>
                            <td>{{ $mhs->npm }}</td>
                            <td>{{ $mhs->email }}</td>
                            <td>{{ $mhs->jurusan }}</td>
                            <td>
                                <a href="" class="badge rounded-pill bg-success">Edit</a>
                                <a href="" class="badge rounded-pill bg-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


<!-- folder views -> folder layout -> main.blade.php -->
@extends('layout/main')

<!-- kalau section hanya sebaris -->
<!-- kalau ada section (title) maka diisi (belajar laravel) -->
@section('title', 'Belajar Laravel')

<!-- kalau lebih dari dua baris -->
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Hello World</h1>
            </div>
        </div>
    </div>
@endsection



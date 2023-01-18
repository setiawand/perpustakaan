@extends('layouts.app')

@section('title', 'Input Buku')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card p-4">
                <div class="card-header">
                    <h2 class="text-center">Form Input Buku</h2>
                </div>
                <div class="card-body">
                    <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input name="judul" id="judul" type="text" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" cols="10" rows="10"
                                class="form-control"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="author" class="form-label">Author</label>
                            <input name="author" id="author" type="text" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="cover" class="form-label">Foto Sampul Buku</label>
                            <input name="cover" id="cover" type="file" class="form-control">
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-md btn-success">Simpan Data</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
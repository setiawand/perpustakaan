@extends('layouts.app')

@section('title', 'Input Siswa')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card p-4">
                <div class="card-header">
                    <h2 class="text-center">Form Input Siswa</h2>
                </div>
                <div class="card-body">
                    <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="nis" class="form-label">NIS</label>
                            <input name="nis" id="nis" type="text" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input name="nama" id="nama" type="text" class="form-control">
                        </div>

                        <div class="col-2 mb-3">
                            <label for="kelas" class="form-label">Kelas</label>
                            <input name="kelas" id="kelas" type="number" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto Siswa</label>
                            <input name="foto" id="foto" type="file" class="form-control">
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
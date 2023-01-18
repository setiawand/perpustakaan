@extends('layouts.app')

@section('title', 'Daftar Siswa')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <a href="{{url('/students/create')}}" class="btn btn-md btn-primary my-2">Tambah Data Baru</a>
        </div>
    </div>
    <div class="row">
        <div class="card p-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Siswa
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$student->nis}}</td>
                            <td>{{$student->nama}}</td>
                            <td>{{$student->kelas}}</td>
                            <td>{{$student->alamat}}</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-md text-white">Edit</a>
                                <a href="#" class="btn btn-danger btn-md">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
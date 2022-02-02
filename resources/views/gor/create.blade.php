@extends('adminlte::page')
@section('title', 'Tambah GOR')
@section('content_header')
    <h1 class="m-0 text-dark">Tambah GOR</h1>
@stop
@section('content')
    <form action="{{route('gor.store')}}" method="post">
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputnama_gor">Nama GOR</label>
                        <input type="text" class="form-control @error('nama_gor') is-invalid @enderror" id="exampleInputnama_gor" placeholder="Masukkan Nama GOR" name="nama_gor" value="{{old('nama_gor')}}">
                        @error('nama_gor') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputjumlah_tempat">Jumlah Tempat / Lapangan</label>
                        <input type="text" class="form-control @error('jumlah_tempat') is-invalid @enderror" id="exampleInputjumlah_tempat" placeholder="Masukkan Jumlah Tempat" name="jumlah_tempat" value="{{old('jumlah_tempat')}}">
                        @error('jumlah_tempat') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputalamat_gedung">Alamat Gedung</label>
                        <input type="text" class="form-control @error('alamat_gedung') is-invalid @enderror" id="exampleInputalamat_gedung" placeholder="Masukkan Alamat GOR" name="alamat_gedung" value="{{old('alamat_gedung')}}">
                        @error('alamat_gedung') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputfasilitas">Fasilitas</label>
                        <input type="text" class="form-control @error('fasilitas') is-invalid @enderror" id="exampleInputfasilitas" placeholder="Masukkan Fasilitas GOR" name="fasilitas" value="{{old('fasilitas')}}">
                        @error('fasilitas') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputkapasitas_penonton">Kapasitas Penonton</label>
                        <input type="text" class="form-control @error('kapasitas_penonton') is-invalid @enderror" id="exampleInputkapasitas_penonton" placeholder="Masukkan Kapasitas Penonton" name="kapasitas_penonton" value="{{old('kapasitas_penonton')}}">
                        @error('kapasitas_penonton') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputspesifikasi_gedung">Spesifikasi GOR</label>
                        <input type="text" class="form-control @error('spesifikasi_gedung') is-invalid @enderror" id="exampleInputspesifikasi_gedung" placeholder="Masukkan Spesifikasi GOR" name="spesifikasi_gedung" value="{{old('spesifikasi_gedung')}}">
                        @error('spesifikasi_gedung') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputfungsi_gedung">Fungsi GOR</label>
                        <input type="text" class="form-control @error('fungsi_gedung') is-invalid @enderror" id="exampleInputfungsi_gedung" placeholder="Masukkan Fungsi GOR" name="fungsi_gedung" value="{{old('fungsi_gedung')}}">
                        @error('fungsi_gedung') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('gor.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop
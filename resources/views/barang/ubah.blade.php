@extends('navbar.navbar')
@section('title',"Ubah Data Barang")
@section('content')
<div class="container mt-3">
    <h2>Mengubah Data</h2>
    <p>Silahkan ubah data dibawah ini:</p>
    <form method="POST" action="/{{ $barang->id }}">
        @method('put')
        @csrf
        <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control input-color" id="kode_barang" placeholder="Masukkan Kode Barang" 
            name="kode_barang" value="{{ $barang->kode_barang }}">
            <label for="kode_barang">Kode Barang</label>
        </div>
        <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control input-color" id="nama" placeholder="Masukkan Nama" 
            name="nama" value="{{ $barang->nama }}">
            <label for="nama">Nama</label>
        </div>
        <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control input-color" id="jenis" placeholder="Masukkan Jenis Barang" 
            name="jenis" value="{{ $barang->jenis }}">
            <label for="jenis">Jenis Barang</label>
        </div>
        <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control input-color" id="jumlah" placeholder="Masukkan Jumlah Barang" 
            name="jumlah" value="{{ $barang->jumlah }}">
            <label for="jumlah">Jumlah</label>
        </div>
          <button type="submit" class="btn btn-primary" name="submit">Ubah</button>
        </form>
@endsection
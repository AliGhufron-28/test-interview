@extends('navbar.navbar')
@section('title',"Tambah Data Barang")
@section('content')
<div class="container mt-3">
    <h2>Menambahkan Data</h2>
    <p>Silahkan masukkan data dibawah ini:</p>
    <form method="post" action="/save">
        @csrf
        <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control input-color" id="kode_barang" placeholder="Masukkan Kode Barang" name="kode_barang" required>
            <label for="kode_barang">Kode Barang</label>
        </div>
        <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control input-color" id="nama" placeholder="Masukkan Nama" name="nama" required>
            <label for="nama">Nama</label>
        </div>
        <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control input-color" id="jenis" placeholder="Masukkan Jenis Barang" name="jenis" required>
            <label for="jenis">Jenis</label>
        </div>
        <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control input-color" id="jumlah" placeholder="Masukkan Jumlah Barang" name="jumlah" required>
            <label for="jumlah">Jumlah</label>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Kirim</button>
    </form>
  </div>
@endsection
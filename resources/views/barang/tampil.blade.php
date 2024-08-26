@extends('navbar.navbar')

@section('title',"Daftar Nama Barang")
@section('content')

<h1>Daftar Nama Barang</h1>
</form>
<table class="table table-striped text-center" style="width: 99%; background-color: white">
    <tr>
        <th>No.</th>
        <th>Kode Barangg</th>
        <th>Nama</th>
        <th>Jenis Barang</th>
        <th>Jumlah</th>
        <th>Action</th>
    </tr>
    @php
        $i = 1;
    @endphp
    @foreach ($barang as $brg)
    <tr>
        <td>{{ $i++ }}</td>
        <td>{{ $brg->kode_barang }}</td>
        <td>{{ $brg->nama }}</td>
        <td>{{ $brg->jenis }}</td>
        <td>{{ $brg->jumlah }}</td>
        <td style="display: flex; justify-content: center;">
            <a class="btn btn-warning" style="text-decoration: none; width: 40px;" href="/{{ $brg['id'] }}/ubah">
                <i class="bi bi-box-arrow-in-down-left"></i>
            </a>
        <form action="/{{ $brg['id'] }}" method="POST">
            @csrf
            @method('delete')
            <button style="width: 40px;" type="submit" class="btn btn-danger"  onclick="return confirm('Apakah Anda Yakin?');"><i class="fas fa-trash-alt"></i></button>
        </form>
        </td>
    </tr>  
    @endforeach
</table>
<a class="btn btn-primary" href="/tambah">Tambah Barang</a>
@endsection
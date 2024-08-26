<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function tampil(){
        $barang = barang::all();
        return view('barang.tampil',compact(['barang']));
    }
    public function tambah(){
        return view('barang.tambah');
    }
    public function save(Request $request){
        barang::create($request->except(['_token','submit']));
        return redirect('/');
    }
    public function ubah($id){
        $barang= barang::find($id);
        return view('barang.ubah',compact(['barang']));
        return redirect('/');
    }
    public function update($id,Request $request){
        $barang= barang::find($id);
        $barang->update($request->except(['_token','submit']));
        return redirect('/');
    }
    public function hapus($id){
        $barang=barang::find($id);
        $barang->delete();
        return redirect('/');
    }
}

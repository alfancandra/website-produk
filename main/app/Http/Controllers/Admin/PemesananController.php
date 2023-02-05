<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pemesanan;

class PemesananController extends Controller
{
    public function index()
    {
        $data = Pemesanan::join('produks','produks.id','=','pemesanans.id_produk')
        ->select('produks.nama','pemesanans.id','pemesanans.nama as nama_pemesan','pemesanans.qty','pemesanans.status','pemesanans.created_at')
        ->get();
        return view('admin.pemesanan.index',compact('data'));
    }

    public function show($id)
    {
        $data = Pemesanan::join('produks','produks.id','=','pemesanans.id_produk')
        ->select('produks.nama as nama_produk','produks.harga','pemesanans.*')
        ->where('pemesanans.id',$id)
        ->first();
        return view('admin.pemesanan.show',compact('data'));
    }

    public function set($id,$status)
    {
        $data = Pemesanan::find($id);
        $data->status = $status;
        $data->save();

        return redirect()->route('adm.pemesanan.index')
                        ->with('success','Pemesanan Berhasil Diubah');
    }
}

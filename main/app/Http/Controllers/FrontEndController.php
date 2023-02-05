<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Info;

class FrontEndController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function produk()
    {
        $data = Produk::all();
        return view('produk',compact('data'));
    }

    public function detail_produk($id)
    {
        $data = Produk::find($id);
        return view('detail-produk',compact('data'));
    }

    public function about()
    {
        return view('about');
    }

    public function info()
    {
        $data = Info::first();
        return view('info',compact('data'));
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $data = Produk::where('nama','LIKE','%'.$cari.'%')->get();
        return view('produk',compact('data'));
    }
}

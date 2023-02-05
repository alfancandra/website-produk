<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Info;
use App\Models\Pemesanan;
use Illuminate\Support\Facades\Auth;

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
        session()->forget('link');
        return view('detail-produk',compact('data'));
    }

    public function buy_produk($id)
    {
        if(Auth::user()){
            $data = Produk::find($id);
            return view('buy-produk',compact('data'));
        }else{
            session(['link' => url()->previous()]);
            return redirect('/login');
        }
    }

    public function buy_produk_action(Request $request, $id)
    {
        Pemesanan::create([
            'id_user' => Auth::user()->id,
            'id_produk' => $id,
            'qty' => $request->qty,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'hp' => $request->hp,
            'pembayaran' => $request->pembayaran,
            'status' => 'PENDING',
        ]);

        return redirect('/pemesanan')->with('success','Sukses Checkout');
    }

    public function pemesanan()
    {
        $data = Pemesanan::join('produks','produks.id','=','pemesanans.id_produk')
        ->select('produks.nama as nama_produk','produks.harga','pemesanans.qty','pemesanans.status','pemesanans.created_at')
        ->where('id_user',Auth::user()->id)->get();
        return view('pemesanan',compact('data'));
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

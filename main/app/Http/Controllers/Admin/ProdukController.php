<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Produk::all();
        return view('admin.produk.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.produk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'nama' =>  'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'img' => 'required',
            'img.*' => 'mimes:jpeg,jpg,png,gif'
        ]);

        $filename = time() . '.' . $request->img->extension();
        $request->img->move(public_path('images'), $filename);

        $data = new Produk();
        $data->nama = $request->nama;
        $data->harga = $request->harga;
        $data->deskripsi = $request->deskripsi;
        $data->foto = $filename;
        $data->save();

        return redirect()->route('adm.produk.index')
                        ->with('success','Produk Berhasil Dibuat');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Produk::find($id);
        return view('admin.produk.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validasi
        $request->validate([
            'nama' =>  'required',
            'harga' => 'required',
            'deskripsi' => 'required'
        ]);
        $data = Produk::find($id);

        if($request->img != null){
            $filename = time() . '.' . $request->img->extension();
            $request->img->move(public_path('images'), $filename);
            $data->foto = $filename;
        }
        $data->nama = $request->nama;
        $data->harga = $request->harga;
        $data->deskripsi = $request->deskripsi;
        $data->update();
        return redirect()->route('adm.produk.index')
                        ->with('success','Produk Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Produk::find($id);
        $data->delete();
        return redirect()->route('adm.produk.index')
        ->with('success','Produk Berhasil Dihapus');
    }
}

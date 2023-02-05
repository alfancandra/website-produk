<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Info;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Info::first();
        return view('admin.info.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // Validasi
        $request->validate([
            'nama' =>  'required',
            'deskripsi' => 'required',
            'alamat' => 'required',
            'alamat_link' => 'required',
            'whatsapp' => 'required',
            'instagram' => 'required',
        ]);

        $data = Info::first();
        $data->nama = $request->nama;
        $data->deskripsi = $request->deskripsi;
        $data->alamat = $request->alamat;
        $data->alamat_link = $request->alamat_link;
        $data->whatsapp = $request->whatsapp;
        $data->instagram = $request->instagram;
        $data->save();

        return redirect()->route('adm.info.index')->with(['success' => 'Success membuat user']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

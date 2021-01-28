<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Kota;
use Illuminate\Http\Request;
use Session;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kecamatan = Kecamatan::with('Kota')->get();
        return view('admin.kecamatan.index', compact('kecamatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kota = Kota::all();
        return view('admin.kecamatan.create', compact('kota'));   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_kecamatan' => 'required|max:9|unique:kecamatans',
            'nama_kecamatan' => 'required|unique:kecamatans'
        ], [
            'kode_kecamatan.required' => 'Kode kecamatan tidak boleh kosong',
            'kode_kecamatan.max' => 'Kode maximal 7 karakter',
            'kode_kecamatan.unique' => 'Kode kecamatan sudah terdaftar',
            'nama_kecamatan.required' => 'Nama kecamatan tidak boleh kosong',
            'nama_kecamatan.unique' => 'Nama kecamatan sudah terdaftar'
        ]);
        $kecamatan = new Kecamatan();
        $kecamatan ->id_kota = $request->id_kota;
        $kecamatan ->kode_kecamatan = $request->kode_kecamatan;
        $kecamatan ->nama_kecamatan = $request->nama_kecamatan;
        $kecamatan ->save();
        return redirect()->route('kecamatan.index')->with(['success'=>'Data <b>'.$kecamatan->nama_kecamatan,'</b> berhasil di input']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kecamatan = Kecamatan::findOrFail($id);
        return view('admin.kecamatan.show', compact('kecamatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kota = Kota::all();
        $kecamatan = Kecamatan::findOrFail($id);
        return view('admin.kecamatan.edit', compact('kecamatan','kota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'kode_kecamatan' => 'required|max:9',
            'nama_kecamatan' => 'required'
        ], [
            'kode_kecamatan.required' => 'Kode kecamatan tidak boleh kosong',
            'kode_kecamatan.max' => 'Kode maximal 9 karakter',
            'nama_kecamatan.required' => 'Nama kecamatan tidak boleh kosong'
        ]);
        $kecamatan = Kecamatan::findOrFail($id);
        $kecamatan ->id_kota = $request->id_kota;
        
        $kecamatan ->nama_kecamatan = $request->nama_kecamatan;
        $kecamatan ->save();
        return redirect()->route('kecamatan.index')->with(['success'=>'Data <b>'.$kecamatan->nama_kecamatan,'</b> berhasil di edit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kecamatan = Kecamatan::findOrFail($id);
        $kecamatan ->delete();
        return redirect()->route('kecamatan.index')->with(['success'=>'Data <b>'.$kecamatan->nama_kecamatan,'</b> berhasil di hapus']);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Kecamatan;
use Illuminate\Http\Request;

class DesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $desa = Desa::with('kecamatan')->get();
        return view('admin.desa.index' , compact('desa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kecamatan = Kecamatan::all();
        return view('admin.desa.create', compact('kecamatan'));
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
            'kode_desa' => 'required|max:11|unique:desas',
            'nama' => 'required|unique:desas'
        ], [
            'kode_desa.required' => 'Kode desa tidak boleh kosong',
            'kode_desa.max' => 'Kode maximal 11 karakter',
            'kode_desa.unique' => 'Kode desa sudah terdaftar',
            'nama.required' => 'Nama desa tidak boleh kosong',
            'nama.unique' => 'Nama desa sudah terdaftar'
        ]);
        $desa = new Desa();
        $desa->id_kecamatan = $request->id_kecamatan;
        
        $desa->nama = $request->nama;
        $desa->save();
        return redirect()->route('desa.index')->with(['success'=>'Data <b>', $desa->nama, '</b> berhasil di input']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $desa = Desa::findOrFail($id);
        return view('admin.desa.show', compact('desa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kecamatan = Kecamatan::all();
        $desa = Desa::findOrFail($id);
        return view('admin.desa.edit', compact('desa' ,'kecamatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_desa' => 'required|max:11|unique:desas',
            'nama' => 'required|unique:desas'
        ], [
            'kode_desa.required' => 'Kode desa tidak boleh kosong',
            'kode_desa.max' => 'Kode maximal 11 karakter',
            'kode_desa.unique' => 'Kode desa sudah terdaftar',
            'nama.required' => 'Nama desa tidak boleh kosong',
            'nama.unique' => 'Nama desa sudah terdaftar'
        ]);
        $desa = Desa::findOrFail($id);
        $desa->id_kecamatan = $request->id_kecamatan;
        $desa->kode_desa = $request->kode_desa;
        $desa->nama = $request->nama;
        $desa->save();
        return redirect()->route('desa.index')->with(['success'=>'Data <b>', $desa->nama_desa, '</b> berhasil di edit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $desa = Desa::findOrFail($id);
        $desa->delete();
        return redirect()->route('desa.index')->with(['success'=>'Data <b>', $desa->nama_desa, '</b> berhasil hapus']);
    }
}

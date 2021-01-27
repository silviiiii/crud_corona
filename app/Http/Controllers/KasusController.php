<?php

namespace App\Http\Controllers;

use App\Models\Kasus;
use App\Models\Rw;
use Illuminate\Http\Request;

class KasusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kasus = Kasus::with('Rw')->get();
        return view('admin.kasus.index' , compact('kasus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rw = Rw::all();
        return view('admin.kasus.create', compact('rw'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rw = new Kasus();
        $kasus->positif = $request->positif;
        $kasus->id_rw = $request->id_rw;
        $kasus->meninggal = $request->meninggal;
        $kasus->sembuh = $request->sembuh;
        $kasus->tanggal = $request->tanggal;
        $kasus->save();
        return redirect()->route('kasus.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kasus  $rw
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kasus = Kasus::findOrFail($id);
        return view('admin.kasus.show', compact('kasus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kasus  $kasus
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rw = Rw::all();
        $kasus = Kasus::findOrFail($id);
        return view('admin.kasus.edit', compact('kasus' ,'rw'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kasus  $rw
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kasus= new Kasus();
        $kasus->positif = $request->positif;
        $kasus->id_rw = $request->id_rw;
        $kasus->meninggal = $request->meninggal;
        $kasus->sembuh = $request->sembuh;
        $kasus->tanggal = $request->tanggal;
        $kasus->save();
        return redirect()->route('kasus.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kasus  $rw
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kasus = Kasus::findOrFail($id)->delete();
        return redirect()->route('kasus.index');
    }
}

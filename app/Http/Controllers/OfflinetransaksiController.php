<?php

namespace App\Http\Controllers;

use App\offlinetransaksi;
use Illuminate\Http\Request;

class OfflinetransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offlinetransaksis = Offlinetransaksi::all();
        return view('backend.offlinetransaksi.index', compact('offlinetransaksis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.offlinetransaksi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $offlinetransaksis = New Offlinetransaksi;
        $offlinetransaksis->nama = $request->nama;
        $offlinetransaksis->alamat = $request->alamat;
        $offlinetransaksis->nominal = $request->nominal;
        $offlinetransaksis->keterangan = $request->keterangan;
        
        $offlinetransaksis->save();
        return redirect()->action('OfflinetransaksiController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\offlinetransaksi  $offlinetransaksi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $offlinetransaksi = Offlinetransaksi::find($id);
        return view('backend.offlinetransaksi.show', compact('offlinetransaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\offlinetransaksi  $offlinetransaksi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offlinetransaksi = Offlinetransaksi::find($id);
        return view('backend.offlinetransaksi.edit', compact('offlinetransaksi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\offlinetransaksi  $offlinetransaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $offlinetransaksis = Offlinetransaksi::find($id);
        $offlinetransaksis->nama = $request->nama;
        $offlinetransaksis->alamat = $request->alamat;
        $offlinetransaksis->nominal = $request->nominal;
        $offlinetransaksis->keterangan = $request->keterangan;
        
        $offlinetransaksis->save();
        return redirect()->action('OfflinetransaksiController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\offlinetransaksi  $offlinetransaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $offlinetransaksis = Offlinetransaksi::find($id);
        $offlinetransaksis->delete();

        $offlinetransaksis = Offlinetransaksi::all();
        return redirect()->action('OfflinetransaksiController@index');
    }
}

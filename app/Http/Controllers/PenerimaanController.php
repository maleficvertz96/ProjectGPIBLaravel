<?php

namespace App\Http\Controllers;

use Auth;
use App\penerimaan;
use Illuminate\Http\Request;

class PenerimaanController extends Controller
{
    /**
     * Create a new controller instance.
     *
     *@return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penerimaans = Penerimaan::all();
        return view('backend.penerimaan.index', compact('penerimaans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.penerimaan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $penerimaans = New Penerimaan;
        $penerimaans->tanggal = $request->tanggal;
        $penerimaans->nama = $request->nama;
        $penerimaans->jenis = $request->jenis;
        $penerimaans->jumlah = $request->jumlah;
        $penerimaans->keterangan = $request->keterangan;

        $penerimaans->save();
        return redirect()->action('PenerimaanController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\penerimaan  $penerimaan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penerimaan = Penerimaan::find($id);
        return view('backend.penerimaan.show', compact('penerimaan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\penerimaan  $penerimaan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penerimaan = Penerimaan::find($id);
        return view('backend.penerimaan.edit', compact('penerimaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\penerimaan  $penerimaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $penerimaans = Penerimaan::find($id);
        $penerimaans->tanggal = $request->tanggal;
        $penerimaans->nama = $request->nama;
        $penerimaans->jenis = $request->jenis;
        $penerimaans->jumlah = $request->jumlah;
        $penerimaans->keterangan = $request->keterangan;

        $penerimaans->save();
        return redirect()->action('PenerimaanController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\penerimaan  $penerimaan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penerimaans = Penerimaan::find($id);
        $penerimaans->delete();

        $penerimaans = Penerimaan::all();
        return redirect()->action('PenerimaanController@index');
    }
}

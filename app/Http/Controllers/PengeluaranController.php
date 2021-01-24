<?php

namespace App\Http\Controllers;

use Auth;
use App\pengeluaran;
use Illuminate\Http\Request;

class PengeluaranController extends Controller
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
        $pengeluarans = Pengeluaran::all();
        return view('backend.pengeluaran.index', compact('pengeluarans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pengeluaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pengeluarans = New Pengeluaran;
        $pengeluarans->tanggal = $request->tanggal;
        $pengeluarans->nama = $request->nama;
        $pengeluarans->jenis = $request->jenis;
        $pengeluarans->jumlah = $request->jumlah;
        $pengeluarans->keterangan = $request->keterangan;

        $pengeluarans->save();
        return redirect()->action('PengeluaranController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pengeluaran  $pengeluaran
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengeluaran = Pengeluaran::find($id);
        return view('backend.pengeluaran.show', compact('pengeluaran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pengeluaran  $pengeluaran
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengeluaran = Pengeluaran::find($id);
        return view('backend.pengeluaran.edit', compact('pengeluaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pengeluaran  $pengeluaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pengeluarans = Pengeluaran::find($id);
        $pengeluarans->tanggal = $request->tanggal;
        $pengeluarans->nama = $request->nama;
        $pengeluarans->jenis = $request->jenis;
        $pengeluarans->jumlah = $request->jumlah;
        $pengeluarans->keterangan = $request->keterangan;

        $pengeluarans->save();
        return redirect()->action('PengeluaranController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pengeluaran  $pengeluaran
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengeluarans = Pengeluaran::find($id);
        $pengeluarans->delete();

        $pengeluarans = Pengeluaran::all();
        return redirect()->action('PengeluaranController@index');
    }
}

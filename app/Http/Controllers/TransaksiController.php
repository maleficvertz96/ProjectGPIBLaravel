<?php

namespace App\Http\Controllers;

use App\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksis = Transaksi::all();
        return view('backend.transaksi.index', compact('transaksis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front.transaksi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transaksis = New Transaksi;
        $transaksis->nama = $request->nama;
        $transaksis->alamat = $request->alamat;
        $transaksis->nominal = $request->nominal;
        $transaksis->keterangan = $request->keterangan;
        $transaksis->status = $request->status;

        $transaksis->save();
        return view('front.transaksi.detail', compact('request'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaksi = Transaksi::find($id);
        return view('backend.transaksi.show', compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaksi = Transaksi::find($id);
        return view('backend.transaksi.edit', compact('transaksi'));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $transaksis = Transaksi::find($id);
        $transaksis->status = $request->status;

        $transaksis->save();
        return redirect()->action('TransaksiController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksis = Transaksi::find($id);
        $transaksis->delete();

        $transaksis = Transaksi::all();
        return redirect()->action('TransaksiController@index');
    }
}

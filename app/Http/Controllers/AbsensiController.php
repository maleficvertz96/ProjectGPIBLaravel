<?php

namespace App\Http\Controllers;

use App\absensi;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absensis = Absensi::all();
        return view('backend.absensi.index', compact('absensis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front.absensi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $absensis = New Absensi;
        $absensis->nama = $request->nama;
        $absensis->sektor = $request->sektor;
        $absensis->alamat = $request->alamat;
        $absensis->umur = $request->umur;
        $absensis->waktu = $request->waktu;
        $absensis->suhu = $request->suhu;
        $absensis->keterangan = $request->keterangan;

        $absensis->save();
        // dd($request);
        return redirect()->action('Front\DetailabsensiController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $absensi = Absensi::find($id);
        return view('backend.absensi.show', compact('absensi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $absensi = Absensi::find($id);
        return view('backend.absensi.edit', compact('absensi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $absensis = Absensi::find($id);
        $absensis->suhu = $request->suhu;
        $absensis->keterangan = $request->keterangan;

        $absensis->save();
        return redirect()->action('AbsensiController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $absensis = Absensi::find($id);
        $absensis->delete();

        $absensis = Absensi::all();
        return redirect()->action('AbsensiController@index');
    }
}

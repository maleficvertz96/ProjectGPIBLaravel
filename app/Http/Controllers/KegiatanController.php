<?php

namespace App\Http\Controllers;

use Auth;
use App\kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kegiatans = Kegiatan::all();
        return view('backend.kegiatan.index', compact('kegiatans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.kegiatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kegiatans = New Kegiatan;
        $kegiatans->tanggal = $request->tanggal;
        $kegiatans->nama_kegiatan = $request->nama_kegiatan;
        $kegiatans->isi_kegiatan = $request->isi_kegiatan;


        $kegiatans->save();
        return redirect()->action('KegiatanController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kegiatan = Kegiatan::find($id);
        return view('backend.kegiatan.show', compact('kegiatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kegiatan = Kegiatan::find($id);
        return view('backend.kegiatan.edit', compact('kegiatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kegiatans = Kegiatan::find($id);
        $kegiatans->tanggal = $request->tanggal;
        $kegiatans->nama_kegiatan = $request->nama_kegiatan;
        $kegiatans->isi_kegiatan = $request->isi_kegiatan;


        $kegiatans->save();
        return redirect()->action('KegiatanController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kegiatans = Kegiatan::find($id);
        $kegiatans->delete();

        $kegiatans = Kegiatan::all();
        return redirect()->action('KegiatanController@index');
    }
}

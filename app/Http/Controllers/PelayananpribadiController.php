<?php

namespace App\Http\Controllers;

use App\pelayananpribadi;
use Illuminate\Http\Request;

class PelayananpribadiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelayananpribadis = Pelayananpribadi::all();
        return view('backend.pelayananpribadi.index', compact('pelayananpribadis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front.pelayananpribadi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pelayananpribadis = New Pelayananpribadi;
        $pelayananpribadis->nama = $request->nama;
        $pelayananpribadis->deskripsi = $request->deskripsi;
        $pelayananpribadis->telpon = $request->telpon;
        $pelayananpribadis->status = $request->status;

        $pelayananpribadis->save();
        return redirect()->action('Front\DetailpelayananpribadiController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pelayananpribadi  $pelayananpribadi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pelayananpribadi = Pelayananpribadi::find($id);
        return view('backend.pelayananpribadi.show', compact('pelayananpribadi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pelayananpribadi  $pelayananpribadi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelayananpribadi = Pelayananpribadi::find($id);
        return view('backend.pelayananpribadi.edit', compact('pelayananpribadi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pelayananpribadi  $pelayananpribadi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pelayananpribadis = Pelayananpribadi::find($id);
        $pelayananpribadis->status = $request->status;

        $pelayananpribadis->save();
        return redirect()->action('PelayananpribadiController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pelayananpribadi  $pelayananpribadi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelayananpribadis = Pelayananpribadi::find($id);
        $pelayananpribadis->delete();

        $pelayananpribadis = Pelayananpribadi::all();
        return redirect()->action('PelayananpribadiController@index');
    }
}

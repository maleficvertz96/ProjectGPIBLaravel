<?php

namespace App\Http\Controllers;

use App\hut;
use Illuminate\Http\Request;

class HutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hut = Hut::all();
        return view('backend.hut.index', compact('hut'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.hut.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $huts = New Hut;
        $huts->nama = $request->nama;
        $huts->tanggal = $request->tanggal;
        $huts->sektor = $request->sektor;
        $huts->hut = $request->hut;


        $huts->save();
        return redirect()->action('HutController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\hut  $hut
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hut = Hut::find($id);
        return view('backend.hut.show', compact('hut'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\hut  $hut
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hut = Hut::find($id);
        return view('backend.hut.edit', compact('hut'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\hut  $hut
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $huts = Hut::find($id);
        $huts->nama = $request->nama;
        $huts->tanggal = $request->tanggal;
        $huts->sektor = $request->sektor;
        $huts->hut = $request->hut;


        $huts->save();
        return redirect()->action('HutController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\hut  $hut
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $huts = Hut::find($id);
        $huts->delete();

        $huts = hut::all();
        return redirect()->action('HutController@index');
    }
}

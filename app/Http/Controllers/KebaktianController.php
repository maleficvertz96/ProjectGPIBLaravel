<?php

namespace App\Http\Controllers;

use Auth;
use App\kebaktian;
use Illuminate\Http\Request;

class KebaktianController extends Controller
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
        $kebaktians = Kebaktian::all();
        return view('backend.kebaktian.index', compact('kebaktians'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.kebaktian.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kebaktians = New Kebaktian;
        $kebaktians->tanggal = $request->tanggal;
        $kebaktians->waktu = $request->waktu;
        $kebaktians->sektor = $request->sektor;
        $kebaktians->tempat = $request->tempat;
        $kebaktians->alamat = $request->alamat;
        $kebaktians->pf = $request->pf;
        $kebaktians->pl = $request->pl;
        $kebaktians->bacaan = $request->bacaan;
        $kebaktians->tema = $request->tema;
        $kebaktians->pembukaan = $request->pembukaan;
        $kebaktians->salam = $request->salam;
        $kebaktians->respon_firman = $request->respon_firman;
        $kebaktians->persembahan = $request->persembahan;
        $kebaktians->pengutusan = $request->pengutusan;

        $kebaktians->save();
        return redirect()->action('KebaktianController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kebaktian  $kebaktian
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kebaktian = Kebaktian::find($id);
        return view('backend.kebaktian.show', compact('kebaktian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kebaktian  $kebaktian
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kebaktian = Kebaktian::find($id);
        return view('backend.kebaktian.edit', compact('kebaktian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kebaktian  $kebaktian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kebaktians = Kebaktian::find($id);
        $kebaktians->tanggal = $request->tanggal;
        $kebaktians->waktu = $request->waktu;
        $kebaktians->sektor = $request->sektor;
        $kebaktians->tempat = $request->tempat;
        $kebaktians->alamat = $request->alamat;
        $kebaktians->pf = $request->pf;
        $kebaktians->pl = $request->pl;
        $kebaktians->bacaan = $request->bacaan;
        $kebaktians->tema = $request->tema;
        $kebaktians->pembukaan = $request->pembukaan;
        $kebaktians->salam = $request->salam;
        $kebaktians->respon_firman = $request->respon_firman;
        $kebaktians->persembahan = $request->persembahan;
        $kebaktians->pengutusan = $request->pengutusan;

        $kebaktians->save();
        return redirect()->action('KebaktianController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kebaktian  $kebaktian
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kebaktians = Kebaktian::find($id);
        $kebaktians->delete();

        $kebaktians = Kebaktian::all();
        return redirect()->action('KebaktianController@index');
    }
}

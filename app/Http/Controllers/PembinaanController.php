<?php

namespace App\Http\Controllers;

use App\pembinaan;
use Illuminate\Http\Request;
use Auth;

class PembinaanController extends Controller
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
        $pembinaans = Pembinaan::all();
        return view('backend.pembinaan.index', compact('pembinaans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pembinaan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pembinaans = New Pembinaan;
        $pembinaans->tanggal = $request->tanggal;
        $pembinaans->pukul = $request->pukul;
        $pembinaans->kategori = $request->kategori;
        $pembinaans->pembina = $request->pembina;
        $pembinaans->pelayan = $request->pelayan;
        

        $pembinaans->save();
        return redirect()->action('PembinaanController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pembinaan  $pembinaan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pembinaan = Pembinaan::find($id);
        return view('backend.pembinaan.show', compact('pembinaan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pembinaan  $pembinaan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pembinaan = Pembinaan::find($id);
        return view('backend.pembinaan.edit', compact('pembinaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pembinaan  $pembinaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pembinaans = Pembinaan::find($id);
        $pembinaans->tanggal = $request->tanggal;
        $pembinaans->pukul = $request->pukul;
        $pembinaans->kategori = $request->kategori;
        $pembinaans->pembina = $request->pembina;
        $pembinaans->pelayan = $request->pelayan;
        
        $pembinaans->save();
        return redirect()->action('PembinaanController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pembinaan  $pembinaan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembinaans = Pembinaan::find($id);
        $pembinaans->delete();

        $pembinaans = Pembinaan::all();
        return redirect()->action('PembinaanController@index');
    }
}

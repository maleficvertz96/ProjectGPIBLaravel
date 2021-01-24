<?php

namespace App\Http\Controllers;

use Auth;
use App\ibadahminggu;
use Illuminate\Http\Request;
use Hash;

class IbadahmingguController extends Controller
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
        $ibadahminggus = Ibadahminggu::all();
        return view('backend.ibadahminggu.index', compact('ibadahminggus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.ibadahminggu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ibadahminggus = New Ibadahminggu;
        $ibadahminggus->nama = $request->nama;
        $ibadahminggus->tanggal = $request->tanggal;
        $ibadahminggus->ibadah = $request->ibadah;
        $ibadahminggus->waktu = $request->waktu;
        $ibadahminggus->acara = $request->acara;
        $ibadahminggus->pf = $request->pf;
        $ibadahminggus->jabatan = $request->jabatan;
        $ibadahminggus->p1 = $request->p1;
        $ibadahminggus->p2 = $request->p2;
        $ibadahminggus->p3 = $request->p3;
        $ibadahminggus->p4 = $request->p4;
        $ibadahminggus->p5 = $request->p5;
        $ibadahminggus->p6 = $request->p6;
        $ibadahminggus->p7 = $request->p7;
        $ibadahminggus->p8 = $request->p8;
        $ibadahminggus->kolekte1 = $request->kolekte1;
        $ibadahminggus->kolekte2 = $request->kolekte2;
        $ibadahminggus->kolekte3 = $request->kolekte3;
        $ibadahminggus->kolekte4 = $request->kolekte4;
        $ibadahminggus->organist = $request->organist;
        $ibadahminggus->kantoria1 = $request->kantoria1;
        $ibadahminggus->kantoria2 = $request->kantoria2;
        $ibadahminggus->operator = $request->operator;
        $ibadahminggus->vocalgroup = $request->vocalgroup;
        $ibadahminggus->soundman = $request->soundman;


        $ibadahminggus->save();
        return redirect()->action('IbadahmingguController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ibadahminggu  $ibadahminggu
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ibadahminggu = Ibadahminggu::find($id);
        return view('backend.ibadahminggu.show', compact('ibadahminggu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ibadahminggu  $ibadahminggu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ibadahminggu = Ibadahminggu::find($id);
        return view('backend.ibadahminggu.edit', compact('ibadahminggu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ibadahminggu  $ibadahminggu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ibadahminggus = Ibadahminggu::find($id);
        $ibadahminggus->nama = $request->nama;
        $ibadahminggus->tanggal = $request->tanggal;
        $ibadahminggus->ibadah = $request->ibadah;
        $ibadahminggus->waktu = $request->waktu;
        $ibadahminggus->acara = $request->acara;
        $ibadahminggus->pf = $request->pf;
        $ibadahminggus->jabatan = $request->jabatan;
        $ibadahminggus->p1 = $request->p1;
        $ibadahminggus->p2 = $request->p2;
        $ibadahminggus->p3 = $request->p3;
        $ibadahminggus->p4 = $request->p4;
        $ibadahminggus->p5 = $request->p5;
        $ibadahminggus->p6 = $request->p6;
        $ibadahminggus->p7 = $request->p7;
        $ibadahminggus->p8 = $request->p8;
        $ibadahminggus->kolekte1 = $request->kolekte1;
        $ibadahminggus->kolekte2 = $request->kolekte2;
        $ibadahminggus->kolekte3 = $request->kolekte3;
        $ibadahminggus->kolekte4 = $request->kolekte4;
        $ibadahminggus->organist = $request->organist;
        $ibadahminggus->kantoria1 = $request->kantoria1;
        $ibadahminggus->kantoria2 = $request->kantoria2;
        $ibadahminggus->operator = $request->operator;
        $ibadahminggus->vocalgroup = $request->vocalgroup;
        $ibadahminggus->soundman = $request->soundman;


        $ibadahminggus->save();
        return redirect()->action('IbadahmingguController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ibadahminggu  $ibadahminggu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ibadahminggus = Ibadahminggu::find($id);
        $ibadahminggus->delete();

        $ibadahminggus = Ibadahminggu::all();
        return redirect()->action('IbadahmingguController@index');
    }
}

<?php 

namespace App\Http\Controllers;

use Auth;
use App\ibadahpelkat;
use Illuminate\Http\Request;

class IbadahpelkatController extends Controller
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
        $ibadahpelkat = Ibadahpelkat::all();
        return view('backend.ibadahpelkat.index', compact('ibadahpelkat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.ibadahpelkat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ibadahpelkats = New Ibadahpelkat;
        $ibadahpelkats->tanggal = $request->tanggal;
        $ibadahpelkats->waktu = $request->waktu;
        $ibadahpelkats->pelkat = $request->pelkat;
        $ibadahpelkats->tempat = $request->tempat;
        $ibadahpelkats->alamat = $request->alamat;
        $ibadahpelkats->pelayan = $request->pelayan;
        $ibadahpelkats->bacaan = $request->bacaan;
        $ibadahpelkats->tema = $request->tema;
        $ibadahpelkats->pembukaan = $request->pembukaan;
        $ibadahpelkats->pembacaan_mazmur = $request->pembacaan_mazmur;
        $ibadahpelkats->nyanyian_pujian = $request->nyanyian_pujian;
        $ibadahpelkats->respon_firman = $request->respon_firman;
        $ibadahpelkats->persembahan = $request->persembahan;
        $ibadahpelkats->pengutusan = $request->pengutusan;


        $ibadahpelkats->save();
        return redirect()->action('IbadahpelkatController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ibadahpelkat  $ibadahpelkat
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ibadahpelkat = Ibadahpelkat::find($id);
        return view('backend.ibadahpelkat.show', compact('ibadahpelkat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ibadahpelkat  $ibadahpelkat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ibadahpelkat = Ibadahpelkat::find($id);
        return view('backend.ibadahpelkat.edit', compact('ibadahpelkat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ibadahpelkat  $ibadahpelkat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ibadahpelkats = Ibadahpelkat::find($id);
        $ibadahpelkats->tanggal = $request->tanggal;
        $ibadahpelkats->waktu = $request->waktu;
        $ibadahpelkats->pelkat = $request->pelkat;
        $ibadahpelkats->tempat = $request->tempat;
        $ibadahpelkats->alamat = $request->alamat;
        $ibadahpelkats->pelayan = $request->pelayan;
        $ibadahpelkats->bacaan = $request->bacaan;
        $ibadahpelkats->tema = $request->tema;
        $ibadahpelkats->pembukaan = $request->pembukaan;
        $ibadahpelkats->pembacaan_mazmur = $request->pembacaan_mazmur;
        $ibadahpelkats->nyanyian_pujian = $request->nyanyian_pujian;
        $ibadahpelkats->respon_firman = $request->respon_firman;
        $ibadahpelkats->persembahan = $request->persembahan;
        $ibadahpelkats->pengutusan = $request->pengutusan;


        $ibadahpelkats->save();
        return redirect()->action('IbadahpelkatController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ibadahpelkat  $ibadahpelkat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ibadahpelkats = Ibadahpelkat::find($id);
        $ibadahpelkats->delete();

        $ibadahpelkats = Ibadahpelkat::all();
        return redirect()->action('IbadahpelkatController@index');
    }
}

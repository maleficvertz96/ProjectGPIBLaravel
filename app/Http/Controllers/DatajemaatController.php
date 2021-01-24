<?php

namespace App\Http\Controllers;

use Auth;
use App\datajemaat;
use Illuminate\Http\Request;
use Hash;

class DatajemaatController extends Controller
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
        $datajemaats = Datajemaat::all();
        return view('backend.datajemaat.index', compact('datajemaats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.datajemaat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datajemaats = New Datajemaat;
        $datajemaats->name = $request->name;
        $datajemaats->email = $request->email;
        if ($request->password != "") {
           $datajemaats->password = Hash::make($request->password);
        }
        $datajemaats->alamat = $request->alamat;
        $datajemaats->phone = $request->phone;
        $datajemaats->sektor = $request->sektor;
        $datajemaats->gender = $request->gender;
        $datajemaats->tmptlahir = $request->tmptlahir;
        $datajemaats->tgllahir = $request->tgllahir;
        $datajemaats->baptis = $request->baptis;
        $datajemaats->nikah = $request->nikah;
        $datajemaats->pendidikan = $request->pendidikan;
        $datajemaats->pekerjaan = $request->pekerjaan;
        $datajemaats->status = $request->status;
        $datajemaats->role = $request->role;
        if ($request->hasFile('photo')){
            $file = $request->file('photo');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $location = public_path('/img');
            $file->move($location, $filename);
            $datajemaats->photo = $filename;
        }

        $datajemaats->save();
        return redirect()->action('DatajemaatController@index');
    }
     

    /**
     * Display the specified resource.
     *
     * @param  \App\datajemaat  $datajemaat
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datajemaat = Datajemaat::find($id);
        return view('backend.datajemaat.show', compact('datajemaat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\datajemaat  $datajemaat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datajemaat = Datajemaat::find($id);
        return view('backend.datajemaat.edit', compact('datajemaat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\datajemaat  $datajemaat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datajemaats = Datajemaat::find($id);
        $datajemaats->name = $request->name;
        $datajemaats->email = $request->email;
        if ($request->password != "") {
           $datajemaats->password = Hash::make($request->password);
        }
        $datajemaats->alamat = $request->alamat;
        $datajemaats->phone = $request->phone;
        $datajemaats->sektor = $request->sektor;
        $datajemaats->gender = $request->gender;
        $datajemaats->tmptlahir = $request->tmptlahir;
        $datajemaats->tgllahir = $request->tgllahir;
        $datajemaats->baptis = $request->baptis;
        $datajemaats->nikah = $request->nikah;
        $datajemaats->pendidikan = $request->pendidikan;
        $datajemaats->pekerjaan = $request->pekerjaan;
        $datajemaats->status = $request->status;
        $datajemaats->role = $request->role;
        if ($request->hasFile('photo')){
            $file = $request->file('photo');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $location = public_path('/img');
            $file->move($location, $filename);
            $oldImage = $datajemaats->photo;
            \Storage::delete($oldImage);
            $datajemaats->photo = $filename;
        }

        $datajemaats->save();
        return redirect()->action('DatajemaatController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\datajemaat  $datajemaat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datajemaat = Datajemaat::find($id);
        $datajemaat->delete();

        $datajemaats = Datajemaat::all();
        return redirect()->action('DatajemaatController@index');
    }
}

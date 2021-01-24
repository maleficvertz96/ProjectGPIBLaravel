<?php

namespace App\Http\Controllers\Front;

use App\kebaktian;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JadwalkebaktianController extends Controller
{
    public function index(Request $request)
    {
        if ($request->sektor == null) {
            $kebaktians = Kebaktian::where('sektor','1')->get();
        } elseif ($request->sektor == '1') {
            $kebaktians = Kebaktian::where('sektor','1')->get();
        } elseif ($request->sektor == '2') {
            $kebaktians = Kebaktian::where('sektor','2')->get();
        } elseif ($request->sektor == '3') {
            $kebaktians = Kebaktian::where('sektor','3')->get();
        } elseif ($request->sektor == '4') {
            $kebaktians = Kebaktian::where('sektor','4')->get();
        } else {
            $kebaktians = Kebaktian::where('sektor','5')->get();
        }

        return view('front.jadwalkebaktian', compact('kebaktians'));
    }
}

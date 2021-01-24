<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ibadahpelkat;

class JadwalpelkatController extends Controller
{
    public function index(Request $request)
    {
        if ($request->pelkat == null) {
            $ibadahpelkats = Ibadahpelkat::where('pelkat','PA')->get();
        } elseif ($request->pelkat == 'PA') {
            $ibadahpelkats = Ibadahpelkat::where('pelkat','PA')->get();
        } elseif ($request->pelkat == 'PT') {
            $ibadahpelkats = Ibadahpelkat::where('pelkat','PT')->get();
        } elseif ($request->pelkat == 'GP') {
            $ibadahpelkats = Ibadahpelkat::where('pelkat','GP')->get();
        } elseif ($request->pelkat == 'PKP') {
            $ibadahpelkats = Ibadahpelkat::where('pelkat','PKP')->get();
        } elseif ($request->pelkat == 'PKB') {
            $ibadahpelkats = Ibadahpelkat::where('pelkat','PKB')->get();
        } else {
            $ibadahpelkats = Ibadahpelkat::where('pelkat','PKLU')->get();
        }

        return view('front.jadwalpelkat', compact('ibadahpelkats'));
    }
}

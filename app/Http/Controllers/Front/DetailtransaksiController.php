<?php

namespace App\Http\Controllers\Front;

use App\transaksi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DetailtransaksiController extends Controller
{
    public function index(Request $request)
    {
        $transaksi = Transaksi::all();
        return view('front.transaksi.detail', compact('request'));
    }
}

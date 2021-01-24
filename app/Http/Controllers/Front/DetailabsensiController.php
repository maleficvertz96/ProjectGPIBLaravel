<?php

namespace App\Http\Controllers\Front;

use App\absensi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DetailabsensiController extends Controller
{
    public function index(Request $request)
    {
        $absensi = Absensi::all();
        return view('front.absensi.detail', compact('absensi'));
    }
}

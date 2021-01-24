<?php

namespace App\Http\Controllers\Front;

use App\pelayananpribadi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DetailpelayananpribadiController extends Controller
{
    public function index(Request $request)
    {
        $pelayananpribadi = Pelayananpribadi::all();
        return view('front.pelayananpribadi.detail', compact('pelayananpribadi'));
    }
}

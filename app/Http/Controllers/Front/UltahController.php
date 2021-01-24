<?php

namespace App\Http\Controllers\Front;

use App\hut;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UltahController extends Controller
{
    public function index(Request $request)
    {
        $huts = Hut::all();
        return view('front.ultah', compact('huts'));
    }
}

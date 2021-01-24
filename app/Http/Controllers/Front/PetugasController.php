<?php

namespace App\Http\Controllers\Front;

use App\pembinaan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PetugasController extends Controller
{
    public function index(Request $request)
    {
        $pembinaans = Pembinaan::all();
        return view('front.petugas', compact('pembinaans'));
    }
}

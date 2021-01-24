<?php

namespace App\Http\Controllers\Front;

use App\pengeluaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OutcomeController extends Controller
{
    public function index(Request $request)
    {
        $pengeluarans = Pengeluaran::all();
        return view ('front.outcome', compact('pengeluarans'));
    }
}

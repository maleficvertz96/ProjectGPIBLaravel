<?php

namespace App\Http\Controllers\Front;

use App\penerimaan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IncomeController extends Controller
{
    public function index(Request $request)
    {
        $penerimaans = Penerimaan::all();
        return view ('front.income', compact('penerimaans'));
    }
}

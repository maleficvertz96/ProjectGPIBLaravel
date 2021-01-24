<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Penerimaan;

class PenerimaanController extends Controller
{
    public function penerimaan(){	
        // dd($request->all());die();
        $penerimaan = Penerimaan::all();
        return response()->json([
            'success' => 1,
            'message' => 'Get Penerimaan Berhasil',
            'penerimaans' => $penerimaan
        ]);
    }
}

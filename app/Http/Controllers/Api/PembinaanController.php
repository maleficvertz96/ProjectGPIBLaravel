<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pembinaan;

class PembinaanController extends Controller
{
    public function pembinaan(){	
        // dd($request->all());die();
        $pembinaan = Pembinaan::all();
        return response()->json([
            'success' => 1,
            'message' => 'Get Pembinaan Berhasil',
            'pembinaans' => $pembinaan
        ]);
    }
}
<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ibadahpelkat;

class IbadahpelkatController extends Controller
{
    public function ibadahpelkat(){	
        // dd($request->all());die();
        $ibadahpelkat = Ibadahpelkat::all();
        return response()->json([
            'success' => 1,
            'message' => 'Get Ibadah Pelkat Berhasil',
            'ibadahpelkats' => $ibadahpelkat
        ]);
    }
}

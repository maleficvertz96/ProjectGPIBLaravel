<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ibadahminggu;

class IbadahmingguController extends Controller
{
    public function ibadahminggu(){	
        // dd($request->all());die();
        $ibadahminggu = Ibadahminggu::all();
        return response()->json([
            'success' => 1,
            'message' => 'Get Ibadah Hari Minggu Berhasil',
            'ibadahminggus' => $ibadahminggu
        ]);
    }
}

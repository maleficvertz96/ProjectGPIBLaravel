<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Hut;

class HutController extends Controller
{
    public function hut(){	
        // dd($request->all());die();
        $hut = Hut::all();
        return response()->json([
            'success' => 1,
            'message' => 'Get HUT Berhasil',
            'huts' => $hut
        ]);
    }
}

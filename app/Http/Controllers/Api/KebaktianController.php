<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kebaktian;

class KebaktianController extends Controller
{
    public function kebaktian(){	
        // dd($request->all());die();
        $kebaktian = Kebaktian::all();
        return response()->json([
            'success' => 1,
            'message' => 'Get Kebaktian Berhasil',
            'kebaktians' => $kebaktian
        ]);
    }
}

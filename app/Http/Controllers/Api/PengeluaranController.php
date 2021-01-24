<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pengeluaran;

class PengeluaranController extends Controller
{
    public function pengeluaran(){	
        // dd($request->all());die();
        $pengeluaran = Pengeluaran::all();
        return response()->json([
            'success' => 1,
            'message' => 'Get Pengeluaran Berhasil',
            'pengeluarans' => $pengeluaran
        ]);
    }
}

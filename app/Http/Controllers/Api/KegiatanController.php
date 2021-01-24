<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kegiatan;

class KegiatanController extends Controller
{
    public function kegiatan(){	
        // dd($request->all());die();
        $kegiatan = Kegiatan::all();
        return response()->json([
            'success' => 1,
            'message' => 'Get Kegiatan Berhasil',
            'kegiatans' => $kegiatan
        ]);
    }
}

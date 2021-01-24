<?php

namespace App\Http\Controllers\Front;

use App\kegiatan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AgendaController extends Controller
{
    public function index(Request $request)
    {
        $kegiatans = Kegiatan::all();
        return view('front.agenda', compact('kegiatans'));
    }
}

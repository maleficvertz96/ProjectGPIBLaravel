<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\ibadahminggu;
use App\Http\Controllers\Controller;

class IbadahharimingguController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ibadah == null) {
            $ibadahminggus = Ibadahminggu::where('ibadah','Pagi')->get();
        } elseif ($request->ibadah == 'Pagi') {
            $ibadahminggus = Ibadahminggu::where('ibadah','Pagi')->get();
        } else {
            $ibadahminggus = Ibadahminggu::where('ibadah','Sore')->get();
        }

        return view('front.ibadahhariminggu', compact('ibadahminggus'));
    }
}

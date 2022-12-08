<?php

namespace App\Http\Controllers;
use App\Models\Handphone;

use Illuminate\Http\Request;

class HandphoneController extends Controller
{
    public function show($brand) {
        // $handphone = Handphone::all();
        $handphone = Handphone::where('brand', $brand)->get();
        return view('handphone', ['handphone' => $handphone, 'brand' => $brand]);
    }
}

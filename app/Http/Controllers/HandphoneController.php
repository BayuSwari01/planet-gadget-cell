<?php

namespace App\Http\Controllers;
use App\Models\Handphone;

use Illuminate\Http\Request;

class HandphoneController extends Controller
{
    public function show($brand) {
        $handphone = Handphone::where('brand', $brand)->orderBy('tanggal', 'desc')->get();
        return view('handphone', ['handphone' => $handphone, 'brand' => $brand]);
    }

    public function showHp($brand, $id) {
        // $handphone = Handphone::where('brand', $brand)->orderBy('tanggal', 'desc')->get();
        $handphone = Handphone::find($id);
        return view('detailHandphone', ['handphone' => $handphone, 'brand' => $brand]);
    }
}

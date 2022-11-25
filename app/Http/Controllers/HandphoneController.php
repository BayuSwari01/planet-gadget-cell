<?php

namespace App\Http\Controllers;
use App\Models\Handphone;

use Illuminate\Http\Request;

class HandphoneController extends Controller
{
    public function show() {
        $handphone = Handphone::all();
        return view('handphone', ['handphone' => $handphone]);
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\News;
use App\Models\Handphone;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show() {
        $news = News::orderBy('tanggal', 'desc')->get();
        return view('news', ['news' => $news]);
    }

    public function showBerita($id) {
        $news = News::find($id);
        $pecah = explode("\n", $news->isi_berita);
        return view('berita', ['news' => $news, 'pecah' => $pecah]);
    }

    public function terbaru() {
        $news = News::orderBy('tanggal', 'desc')->limit(3)->get();
        $handphone = Handphone::orderBy('tanggal', 'desc')->limit(3)->get();
        return view('home', ['news' => $news, 'handphone' => $handphone]);
    }

    public function search(Request $request) {
        $news = News::where('judul', 'LIKE', '%'.$request->search.'%')->orderBy('tanggal', 'desc')->get();
        $handphone = Handphone::where('brand', 'LIKE', '%'.$request->search.'%')->orderBy('tanggal', 'desc')->get();
        return view('search', ['news' => $news, 'handphone' => $handphone]);
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\News;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show() {
        $news = News::all();
        return view('news', ['news' => $news]);
    }

    public function showBerita($id) {
        $news = News::find($id);
        $pecah = explode("\n", $news->isi_berita);
        return view('berita', ['news' => $news, 'pecah' => $pecah]);
    }
}

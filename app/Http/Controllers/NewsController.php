<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show($slug){
        $news = News::where('slug', $slug)->first();

        return view('berita.show', compact('news'));
    }
}
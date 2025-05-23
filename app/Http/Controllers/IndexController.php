<?php

namespace App\Http\Controllers;

use App\Models\Aboutme;
use App\Models\Announcement;
use App\Models\Cooperation;
use App\Models\News;
use App\Models\Rector;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $cooperationImg = Cooperation::all();
        $rectors = Rector::all();
        $abouts = Aboutme::first();
        $announcements = Announcement::latest()->take(3)->get();
        $news = News::latest()->get();

        return view('index', compact('cooperationImg', 'rectors', 'abouts', 'announcements', 'news'));
    }
}
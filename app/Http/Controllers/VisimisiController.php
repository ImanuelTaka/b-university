<?php

namespace App\Http\Controllers;

use App\Models\Visimisi;
use Illuminate\Http\Request;

class VisimisiController extends Controller
{
    public function index(){
        $visimisi = Visimisi::first();

        if ($visimisi){
            $visi = $visimisi->vision;
            $misi = $visimisi->mision;
            $visimisiImg = $visimisi->image;
        } else{
            $visi = 'No data available';
            $misi = 'No data available';
            $visimisiImg = [];
        }
        
        return view('visimisi', compact('visi', 'misi', 'visimisiImg', 'visimisi'));
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\AdmissionPathway;
use App\Models\Student;
use App\Models\StudyProgram;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index(){
        $admissionPathways = AdmissionPathway::all(); 
        $studyPrograms = StudyProgram::all(); 
        
        return view('pendaftaran', compact('admissionPathways', 'studyPrograms'));
    }

    public function store(Request $request){
        $validated = $request->validate ([
            'full_name' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'phone' => 'required|string|max:15',
            'image' => 'required|image|mimes:jpg.jpeg,png|max:2048',
            'admission_pathway_id' => 'required|exists:admission_pathways,id',
            'studyprogram_1_id' => 'required|exists:study_programs,id',
            'studyprogram_2_id' => 'required|exists:study_programs,id',
        ]);
        
        $images = null;
        if($request->hasFile('image')){
            $images = time() . '_' . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('', $images, 'public');

            if(!$path){
                return back()->with('error', 'Gambar gagal disimpan!');
            }
        }

        Student::create([
            'full_name' => $request->full_name,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'admission_pathway_id' => $request->admission_pathway_id,
            'image' => $images,
            'studyprogram_1_id' => $request->studyprogram_1_id,
            'studyprogram_2_id' => $request->studyprogram_2_id,
        ]);

        return back()->with('succes', 'Data berhasil ditambahkan!');
    }
}
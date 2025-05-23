<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable= [
        'full_name',
        'name',
        'email',
        'phone',
        'admission_pathway_id',
        'image',
        'studyprogram_1_id',
        'studyprogram_2_id',
    ];

    public function admissionPathway(){
        return $this->belongsTo(AdmissionPathway::class);
    }

    public function studyProgram1(){
        return $this->belongsTo(StudyProgram::class,'studyprogram_1_id');
    }

    public function studyProgram2(){
        return $this->belongsTo(StudyProgram::class,'studyprogram_2_id');
    }
}
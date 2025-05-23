<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudyProgram extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
    ];

    public function studentsProgram1(){
        return $this->hasMany(Student::class, 'studyprogram_1_id');
    }

    public function studentsProgram2(){
        return $this->hasMany(Student::class, 'studyprogram_2_id');
    }
}
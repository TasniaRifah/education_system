<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $fillable=['mark','subject','roll','reg','student_id',];

    public function student()
{
   return $this->belongsTo(Student::class,'student_id');
}
}

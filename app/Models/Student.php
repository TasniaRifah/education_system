<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'roll',
        'reg',
        'class',
        'gender',
        'mobile_number',
        'present_address',
        'permanent_address',
    ];

    public function reults()
{
   return $this->hasMany(Result::class,'student_id');
}
}

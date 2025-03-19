<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'registration_no',
        'name',
        'father_name',
        'mother_name',
        'phone',
        'branch',
        'registration_date',
        'course_completion_date',
        'profile_picture',
        'certificate'
    ];
}

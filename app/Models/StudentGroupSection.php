<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class StudentGroupSection extends Model
{
    use HasFactory;

    
    protected $table = 'student_group_section';

    // Define the relationship with the Student model
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

     // Define the relationship with the GroupSection model
     public function groupSection()
     {
         return $this->belongsTo(GroupSection::class);
     }
}
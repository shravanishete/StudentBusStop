<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class Stops extends Model
{
    protected $table = '_stops';
    use HasFactory;
    public function student(){
        return $this->belongsToMany(Student::class,'_studentstops','stops_id','student_id'); //_studentstops is table name joining(student&stop)
    }
}

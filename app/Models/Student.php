<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Stops;


class Student extends Model
{
    protected $table = '_student';
    use HasFactory;
    public function stops(){
        return $this->belongsToMany(Stops::class,'_studentstops','student_id','stops_id'); //_studentstops is table name joining(student&stop)
    }
}

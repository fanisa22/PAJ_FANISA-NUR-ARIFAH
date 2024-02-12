<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class S_TeacherModel extends Model
{
    use HasFactory;
    //Berinteraksi dengan tabel database yang bernama 's_teacher'
    protected $table = 's_teacher';
}

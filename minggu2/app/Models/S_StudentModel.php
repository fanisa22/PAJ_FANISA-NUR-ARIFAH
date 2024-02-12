<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class S_StudentModel extends Model
{
    use HasFactory;
    //Berinteraksi dengan tabel database yang bernama 's_student'
    protected $table = 's_student';
}

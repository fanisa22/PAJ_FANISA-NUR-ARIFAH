<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class U_StudentModel extends Model
{
    use HasFactory;
    //Berinteraksi dengan tabel database yang bernama 'u_student'
    protected $table = 'u_student';
}

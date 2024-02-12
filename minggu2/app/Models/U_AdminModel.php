<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class U_AdminModel extends Model
{
    use HasFactory;
    //Berinteraksi dengan tabel database yang bernama 'u_admin'
    protected $table = 'u_admin';
}


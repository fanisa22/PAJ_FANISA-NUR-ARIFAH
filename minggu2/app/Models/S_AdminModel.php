<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class S_AdminModel extends Model
{
    use HasFactory;
    //Berinteraksi dengan tabel database yang bernama 's_admin'
    protected $table = 's_admin';
}


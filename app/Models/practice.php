<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class practice extends Model
{
    use HasFactory;

    protected $table = 'practices';
    
    protected $fillable = ['name','age','address'];
}

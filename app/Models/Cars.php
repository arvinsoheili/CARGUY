<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;
    protected $table = 'Cars';
    protected $fillable = [
        'brand', 
        'model', 
        'cylinders',
        'cylinder-type',
        'description',
        'milage',
        'car-image'
    ];
}

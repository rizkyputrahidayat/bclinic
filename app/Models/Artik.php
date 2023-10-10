<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artik extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'description', 'image'
    ];
}

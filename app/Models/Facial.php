<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facial extends Model
{
    protected $table = 'facial';
    use HasFactory;
    protected $fillable = [
        'title', 'description', 'image'
    ];
}

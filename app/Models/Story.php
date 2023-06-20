<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $table = 'story';
    use HasFactory;
    protected $fillable = [
        'title', 'description', 'image'
    ];
}

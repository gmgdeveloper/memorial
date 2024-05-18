<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;
    protected $table = 'story';

    protected $fillable = [
        'title',
        'description',
        'image_one',
        'image_two',
        'user_id',
        'create_by',
        'created_at',
        'updated_at',
    ];

}

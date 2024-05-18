<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transition extends Model
{
    use HasFactory;
    protected $table = "transitions";

    protected $fillable = [
        'title',
        'theme',
        'dress_code',
        'music',
        'extra_music',
        'body',
        'honoured_by',
        'user_id',
    ];

}

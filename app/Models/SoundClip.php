<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoundClip extends Model
{
    use HasFactory;
    protected $table = 'soundclips';
    
    protected $fillable = [
        'title',
        'audio',
        'user_id',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obituary extends Model
{
    use HasFactory;
    protected $table = 'obituary';

    protected $fillable = [
        'full_name',
        'user_id',
        'date_of_birth',
        'birth_place',
        'date_of_transition',
        'place_of_transition',
        'cause_of_transition',
    ];
}

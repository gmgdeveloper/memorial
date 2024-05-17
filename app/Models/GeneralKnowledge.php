<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralKnowledge extends Model
{
    use HasFactory;
    protected $table = 'general_knowledges';
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'brief',
    ];
}

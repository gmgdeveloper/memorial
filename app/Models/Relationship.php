<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relationship extends Model
{
    use HasFactory;
    protected $table = 'relationships';
    protected $fillable = [
        'heading',
        'user_id',
        'sub_heading_first',
        'sub_heading_second',
        'sub_heading_third',
        'sub_heading_fourth',
        'sub_heading_fifth',
        'sub_heading_sixth',
    ];
}

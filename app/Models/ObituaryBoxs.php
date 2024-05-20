<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObituaryBoxs extends Model
{
    use HasFactory;
    protected $table = 'obituary_boxes';
    protected $fillable = ['funeral_home','views','procession','service','wake','final_resting_place',];
}

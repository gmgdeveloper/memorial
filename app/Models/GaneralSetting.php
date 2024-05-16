<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaneralSetting extends Model
{
    use HasFactory;
    public $table ="general_setting";
    protected $fillable = ['user_id', 'body_image'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerImage extends Model
{
    use HasFactory;
    public $table ="banner_image";
    protected $fillable = ['user_id', 'media_id', 'name','over_view'];
    
}

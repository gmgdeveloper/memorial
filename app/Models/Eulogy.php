<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eulogy extends Model
{
    use HasFactory;
    protected $table = 'eulogy';
    protected $fillable = ['content','download_order_of_service','description','video'];
}

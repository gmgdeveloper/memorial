<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tribute extends Model
{
    use HasFactory;
    protected $table= 'tributes';
    protected $fillable = ['name_of_mother','name','description'];
}

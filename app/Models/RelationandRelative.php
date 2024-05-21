<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelationandRelative extends Model
{
    use HasFactory;
    protected $table = 'relative_and_friends';
    protected $fillable = ['image','name','relationship'];
}

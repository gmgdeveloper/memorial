<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestBook extends Model
{
    use HasFactory;
    protected $table = 'guestbooks';
    protected $fillable = ['user_id','name', 'date', 'relationship'];
}

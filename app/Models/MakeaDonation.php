<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MakeaDonation extends Model
{
    use HasFactory;
    protected $table = 'make_a_donations';
    protected $fillable = ['name','url','description','image'];
}

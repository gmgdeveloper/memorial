<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestAccess extends Model
{
    use HasFactory;
    protected $table = 'request_accesses';
    protected $fillable = ['fullname', 'email', 'honouree_email','honouree','legacyurl','relationship','status'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPlan extends Model
{
    use HasFactory;
    public $table = "user_plans";
        protected $fillable = [
        'user_id',
        'plan_id',
        'page_id',
        // Add other fillable attributes here if needed
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPages extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'date_of_death',
        'middle_name',
        'date_of_birth',
        'memorial_web_address',
        'page_type',
        'plan_id',
        'privacy_policy',
        'name_of_card',
        'credit_card',
        'total_amount',
        'name',
        'email',
    ];
}

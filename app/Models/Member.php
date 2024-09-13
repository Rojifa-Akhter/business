<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = [
        'member_type', 'company', 'country_id', 'state_id', 'title', 'name', 'email', 'phonecode','phone','password'
    ];


}

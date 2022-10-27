<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Gender extends Authenticatable
{
    use HasFactory;
    protected $fillable =[
        'firstname',
        'lastname',
        'gender',
        'age',
        'email',
        'address',
        'courses',
        'password'

    ];
}


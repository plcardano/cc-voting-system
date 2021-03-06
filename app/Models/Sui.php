<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Sui extends Authenticatable
{
    use HasFactory, Notifiable;

    // protected $guard = 'sui';

    protected $fillable = [
        'name',
        'password'
    ];
}

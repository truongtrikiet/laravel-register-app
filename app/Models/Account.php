<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\AccountController;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;


class Account extends Authenticatable implements AuthenticatableContract
{
    use HasFactory, AuthenticatableTrait;

    protected $fillable = [
        'fullname',
        'username',
        'password',
        'email',
        'phone',
        'address,'
    ];
    protected $table = 'accounts';
}

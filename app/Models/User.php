<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'level',
        'token_confirm',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($value)
    {
        return $this->attributes['password'] = bcrypt($value);
    }

    public function setTokenConfirmAttribute($value)
    {
        if (!is_null($value)) {
            return $this->attributes['token_confirm'] = md5(uniqid($value, true));
        }

        return $this->attributes['token_confirm'] = null;
    }

    public function isAdmin()
    {
        return $this->attributes['level'] == 1; // 0 is user 1 is admin => config later
    }
}

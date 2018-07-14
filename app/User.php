<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    const GUEST = 1;
    const USER  = 2;
    const ADMIN = 3;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function userGroupId() : int {
        return (int) $this->user_group_id;
    }

    public function isGuest() : bool {
        return $this->userGroupId() >= self::GUEST;
    }

    public function isUser() : bool {
        return $this->userGroupId() >= self::USER;
    }

    public function isAdmin() : bool {
        return $this->userGroupId() >= self::ADMIN;
    }
}

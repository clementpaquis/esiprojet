<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name', 'surname', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    const ADMIN_TYPE = 'admin';
    const DEFAULT_TYPE = 'default';

    public function isAdmin(){        
        return $this->type === self::ADMIN_TYPE;    
    }

    public function isProf(){
        return $this->type === self::PROF_TYPE;
    }
}

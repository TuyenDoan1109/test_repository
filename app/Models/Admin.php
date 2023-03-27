<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable, SoftDeletes;
    protected $guard = "admin";

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

    // One to One Relationship
//    public function info() {
//        return $this->hasOne('App\Models\AdminInfo');
//    }

    public function info() {
        return $this->hasOne('App\Models\AdminInfo', 'admin_id', 'id');
    }

    public function posts() {
        return $this->hasMany('App\Models\Post');
    }
}

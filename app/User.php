<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * App\User
 *
 * @property-read \App\Photo $photo
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Post[] $posts
 * @property-read \App\Role $role
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id', 'photo_id', 'is_active',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function role(){
        return $this->belongsTo('App\Role');
    }
    public function photo(){
        return $this->belongsTo('App\Photo');
    }
    public function isAdmin(){
        if($this->role->name == "administrator" && $this->is_active == 1){
            return true;
        }else{
            return false;
        }

    }
    public function posts(){
        return $this->hasMany('App\Post');
    }
}

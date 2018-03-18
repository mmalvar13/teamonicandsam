<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Organization extends Authenticatable
{


    protected $fillable = [
        'name', 'email', 'password',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];




//DEFINE RELATIONSHIPS

//Get the action associated with this organization
	public function action()
	{
		return $this->hasMany('App\Action');
	}

}
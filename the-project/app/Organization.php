<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Organization extends Model
{

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name',
		'email',
		'password',
		'token'
	];



//DEFINE RELATIONSHIPS

//Get the action associated with this organization
	public function action()
	{
		return $this->hasMany('App\Action');
	}

}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{


    protected $table = 'categories';

    /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name'
	];



//DEFINE RELATIONSHIPS

//Get the action associated with this organization
	public function action()
	{
		return $this->hasOne('App\Action');
	}

}

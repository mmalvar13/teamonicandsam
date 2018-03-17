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

//Get the category associated with this action
	public function action()
	{
		return $this->hasMany('App\Action');
	}

}

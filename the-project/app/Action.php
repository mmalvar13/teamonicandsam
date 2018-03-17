<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Action extends Model
{

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'date',
		'title',
		'description',
		'how_to_help',
		'phone_number',
		'website',
		'organization_id',
		'category_id',
		'type_id'
	];



//DEFINE RELATIONSHIPS

//Get the organization, type, and category associated with this action
	public function organization()
	{
		return $this->hasOne('App\Organization');
	}

	public function type()
	{
		return $this->hasOne('App\Type');
	}

	public function category()
	{
		return $this->hasOne('App\Category');
	}

}
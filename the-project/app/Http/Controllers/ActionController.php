<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use App\Action;
use App\Category;
use App\Type;

class ActionController extends BaseController
{
	public function get_actions_by_type($type_id, $cat_id){
		return Actions::where("type_id", $type_id)->where("cat_id", $cat_id)->get();
	}
}
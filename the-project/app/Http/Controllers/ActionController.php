<?php

namespace App\Http\Controllers;

use App\Action;


class ActionController extends Controller
{
    public function get_actions_by_type($cat_id, $type_id)
    {

        $actions = Action::where("type_id", $type_id)->where("category_id", $cat_id)->get();
        return \View::make('actions')->with('actions', $actions);


    }


    public function get_events($cat_id)
    {

        $actions = Action::where("category_id", $cat_id)->get();
        return \View::make('events')->with('actions', $actions);


    }
}
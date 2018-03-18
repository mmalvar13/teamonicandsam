<?php

namespace App\Http\Controllers;

use App\Action;
use App\Organization;


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



    public function get_actions_by_org($org_id){
        $actions = Action::where('organization_id', $org_id)->get();
        $organization = Organization::where('id', $org_id)->first();

        return \View::make('organizationprofile')->with('actions', $actions)->with('organization', $organization);
    }


    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {

        $makeaction = [];

        $makeaction['date'] = $request->get('date');
        $makeaction['title'] = $request->get('title');
        $makeaction['description'] = $request->get('description');
        $makeaction['how_to_help'] = $request->get('how_to_help');
        $makeaction['phone_number'] = $request->get('phone_number');
        $makeaction['website'] = $request->get('website');
        $makeaction['category_id'] = $request->get('category_id');
        $makeaction['organization_id'] = $request->get('organization_id');
        $makeaction['type_id'] = $request->get('type_id');


        // Mail delivery logic goes here

//        flash('Your message has been sent!')->success();

        return redirect()->route('makeaction.create');



    }




}
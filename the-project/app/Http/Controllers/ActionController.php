<?php

namespace App\Http\Controllers;

use App\Action;
use App\Organization;
use Carbon\Carbon;
//use App\Http\Requests\Request;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class ActionController extends Controller
{
    public function get_actions_by_type($cat_id, $type_id)
    {

        $actions = Action::where("type_id", $type_id)->where("category_id", $cat_id)->orderBy('date', 'asc')->get();
        return \View::make('actions')->with('actions', $actions);


    }


    public function get_events($cat_id)
    {

        $actions = Action::where("category_id", $cat_id)->where('date', '>=', Carbon::now())->orderBy('date', 'asc')->get();
        return \View::make('events')->with('actions', $actions);


    }



    public function get_actions_by_org($org_id){
        $actions = Action::where('organization_id', $org_id)->orderBy('date', 'asc')->get();
        $organization = Organization::where('id', $org_id)->first();

        return \View::make('organizationprofile')->with('actions', $actions)->with('organization', $organization);
    }


    public function create_action(){

        return "Action Created";
    }

    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {

//        $organizations = Organization::get();
//
//        $makeaction = [];
//
//        $makeaction['date'] = $request->get('date');
//        $makeaction['title'] = $request->get('title');
//        $makeaction['description'] = $request->get('description');
//        $makeaction['how_to_help'] = $request->get('how_to_help');
//        $makeaction['phone_number'] = $request->get('phone_number');
//        $makeaction['website'] = $request->get('website');
//        $makeaction['category_id'] = $request->get('category_id');
//        $makeaction['organization_id'] = $request->get('organization_id');
//        $makeaction['type_id'] = $request->get('type_id');


//        var_dump($request);

        $action = new Action();
        $action->date =  $request->input('date');;
        $action->title =$request->input('title');
        $action->description = $request->input('description');
        $action->how_to_help = $request->input('how_to_help');
        $action->phone_number = $request->input('phone_number');
        $action->website =$request->input('website');
        $action->category_id = $request->input('category_id');
        $action->organization_id = $request->input('organization_id');
        $action->type_id =  $request->input('type_id');
        $action->save();
//        return $action;

//        return redirect()->route('actions');
        return redirect('organizations/6');

//        $date = $request->input('date');
//        $title = $request->input('title');
//        $description = $request->input('description');
//        $how_to_help = $request->input('how_to_help');
//        $phone_number = $request->input('phone_number');
//        $website = $request->input('website');
//        $category_id = $request->input('category_id');
//        $organization_id = $request->input('organization_id');
//        $type_id = $request->input('type_id');




        // Mail delivery logic goes here

//        flash('Your message has been sent!')->success();

//        return "user created";



    }




}
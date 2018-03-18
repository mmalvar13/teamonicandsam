<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//use App\Organization;

Route::get('/', function () {


    $types = \App\Type::all();
    $categories = \App\Category::all();


    return view('layouts.master')->with('types', $types)->with('categories', $categories);
});

Route::get('organizations', function()
{
//	$organizations = \App\Organization::all();
//
//	return View::make('organizations')->with('organizations', $organizations);

	$organizations = \App\Organization::find(1);

	return View::make('organizations')->with('organizations', $organizations);
});

//Route::get('categories', function()
//{
//    $categories = \App\Category::all();
//
//    return View::make('categories')->with('categories', $categories);
//});


Route::get('categories/{id}', function($id)
{
    $categories = \App\Category::all();

    return View::make('categories')->with('categories', $categories);
})->name('category');



Route::get('actions', function()
{
    $actions = \App\Action::all();

    return View::make('actions')->with('actions', $actions);
});

Route::get('actions', function()
{
    $actions = \App\Action::all();

    return View::make('actions')->with('actions', $actions);
})->name('get_your_actions');

Route::get('types', function()
{
    $types = \App\Type::all();

    return View::make('types')->with('types', $types);
});

Route::get('users', function()
{
    return 'Users!';
});

//Route::get('actions/{action}/categories/{category}/types/{type}', function ($actions, $type_id, $cat_id) {
//
//	return View::make("type_id", $type_id) && where ("cat_id", $cat_id)->get();
//});
//
//Route::get('actions/categories/{cat_id}/types/{type_id}', function ($type_id, $cat_id) {
//
//	$actions = \App\Action::all();
//
//	return View::make('actions')->with('actions', $actions);
//
//})->name('action');
//
//$url = route('action', ['cat_id'], ['type_id']);





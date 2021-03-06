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



// route to show the login form
Route::get('login', array('uses' => 'HomeController@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'));



Route::get('organizations', function()
{

	$organizations = \App\Organization::all();

	return View::make('organizations')->with('organizations', $organizations);
});


Route::get('categories/{id}', function($id)
{
    $categories = \App\Category::all();

    return View::make('categories')->with('categories', $categories);
})->name('category');



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

Route::get('resources', function()
{
    return View::make('resources');
});




Route::get('/actions/{cat_id}/{type_id}', ['uses' =>'ActionController@get_actions_by_type']);

Route::get('/actions/{cat_id}', ['uses' =>'ActionController@get_events'], function($cat_id){
    return View::make('events');
});

Route::get('/organizations/{org_id}', ['uses' =>'ActionController@get_actions_by_org']);



Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');


Route::get('form', function(){
    //render app/views/form.blade.php
    return View::make('form');
});
Route::post('form-submit', array('before'=>'csrf',function(){
    //form validation come here
}));


//Route::get('makeaction', 'ActionController@create')->name('makeaction.create');
Route::post('form', 'ActionController@store')->name('form.store');




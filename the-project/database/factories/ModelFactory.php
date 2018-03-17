<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Organization::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Action::class, function (Faker\Generator $faker) {
    return [
        'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'title' => $faker->sentence,
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'how_to_help' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'phone_number' => $faker->phoneNumber,
        'website' => $faker->url,
        'category_id' => $faker->randomElement($array = array(1, 2, 3, 4)),
        'type_id' => $faker->randomElement($array = array(1, 2, 3)),
        'organization_id' => $faker->randomElement($array = array(1, 2, 3, 4, 5)),
    ];
});

//$factory->define(App\Type::class, function (Faker\Generator $faker) {
//    return [
//        'name' => $faker->randomElement($array = array('Policy', 'Volunteer', 'Donate'))
//    ];
//});
//
//$factory->define(App\Category::class, function (Faker\Generator $faker) {
//    return [
//        'name' => $faker->randomElement($array = array('Food', 'Education', 'Homelessness', 'Health', 'Event'))
//    ];
//});


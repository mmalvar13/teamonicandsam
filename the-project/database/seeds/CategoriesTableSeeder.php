<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
                'name' => 'Food',
            ]
        );
        DB::table('categories')->insert(
            [
                'name' => 'Education',
            ]
        );
        DB::table('categories')->insert(
            [
                'name' => 'Homelessness',
            ]
        );
        DB::table('categories')->insert(
            [
                'name' => 'Health',
            ]
        );
    }
}

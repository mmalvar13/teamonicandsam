<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert(
            [
                'name' => 'Policy',
            ]
        );
        DB::table('types')->insert(
            [
                'name' => 'Volunteer',
            ]
        );
        DB::table('types')->insert(
            [
                'name' => 'Donate',
            ]
        );

    }
}

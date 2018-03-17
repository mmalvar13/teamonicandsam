<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actions', function($table)
        {
            $table->increments('id');
            $table->date('date');
            $table->string('title');
            $table->string('description');
            $table->string('how_to_help');
            $table->string('phone_number');
            $table->string('website');
//            $table->integer('category_id')->unsigned();
//            $table->foreign('category_id')->references('id')->on('categories');
//            $table->integer('type_id')->unsigned();
//            $table->foreign('type_id')->references('id')->on('types');
//            $table->integer('organization_id')->unsigned();
//            $table->foreign('organization_id')->references('id')->on('organizations');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('actions');
    }
}

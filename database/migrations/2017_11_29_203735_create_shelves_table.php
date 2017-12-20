<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShelvesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::dropIfExists('shelves');
        Schema::create('shelves',function (Blueprint $table){
           $table->increments('id');
           $table->string('shelf_name');
           $table->timestamps();
        });

        DB::table('shelves')->insert(array('shelf_name'=>"Art"));
        DB::table('shelves')->insert(array('shelf_name'=>"Science"));
        DB::table('shelves')->insert(array('shelf_name'=>"Sport"));
        DB::table('shelves')->insert(array('shelf_name'=>"Literature"));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

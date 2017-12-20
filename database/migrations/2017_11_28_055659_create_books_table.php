<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('books');
        Schema::create('books',function (Blueprint $table){
           $table->increments('id');
           $table->string('book_name');
           $table->string('author');
           $table->integer('shelf_id');
           $table->integer('availability')->default(true);
           $table->timestamps();

           $table->foreign('shelf_id')->references('id')->on('shelves');
        });




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

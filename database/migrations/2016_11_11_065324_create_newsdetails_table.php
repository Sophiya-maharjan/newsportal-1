<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newsdetails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('newsTitle');
            $table->string('slug');
            $table->string('newsDescription');
            $table->string('newsImage');
            $table->integer('category_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('newsdetails', function($table) {
           $table->foreign('category_id')->references('id')->on('category')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('newsdetails');
    }
}

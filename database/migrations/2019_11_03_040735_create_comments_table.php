<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('comments', function (Blueprint $table) {
      $table->increments('id');
      $table->string('title');
      $table->string('description');
      $table->integer('confirmations')->default(0);
      $table->integer('image_id')->unsigned();
      $table->integer('person_id')->unsigned();
      $table->integer('supermarket_id')->unsigned();
      $table->boolean('isActive')->default(true);
      $table->timestamps();

      $table->foreign('image_id')->references('id')->on('images');
      $table->foreign('person_id')->references('id')->on('people');
      $table->foreign('supermarket_id')->references('id')->on('supermarkets');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('comments');
  }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('people', function (Blueprint $table) {
      $table->increments('id');
      $table->string('first_name');
      $table->string('last_name');
      $table->datetime('birthday');
      $table->string('home_google_maps_address');
      $table->integer('address_id')->unsigned();
      $table->integer('profile_picture_id')->unsigned();
      $table->timestamps();

      $table->foreign('address_id')->references('id')->on('addresses');
      $table->foreign('profile_picture_id')->references('id')->on('images');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('people');
  }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisementsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('advertisements', function (Blueprint $table) {
      $table->increments('id');
      $table->datetime('start_date');
      $table->integer('duration');
      $table->datetime('end_date');
      $table->boolean('isActive')->default(false);
      $table->integer('supermarket_id')->unsigned();

      $table->timestamps();


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
    Schema::dropIfExists('advertisements');
  }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupermarketsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('supermarkets', function (Blueprint $table) {
      $table->increments('id');
      $table->string('full_name');
      $table->string('short_name');
      $table->string('open_time');
      $table->string('close_time');
      $table->string('google_maps_coordenates');
      $table->string('slug')->unique();
      $table->integer('address_id')->unsigned();
      $table->timestamps();

      $table->foreign('address_id')->references('id')->on('addresses');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('supermarkets');
  }
}

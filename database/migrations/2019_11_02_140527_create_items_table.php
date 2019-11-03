<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('items', function (Blueprint $table) {
      $table->increments('id');
      $table->string('long_name');
      $table->string('short_name');
      $table->float('price');
      $table->string('description');
      $table->boolean('exists')->default(true);
      $table->integer('advertisement_id')->unsigned();
      $table->timestamps();

      $table->foreign('advertisement_id')->references('id')->on('advertisements');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('items');
  }
}

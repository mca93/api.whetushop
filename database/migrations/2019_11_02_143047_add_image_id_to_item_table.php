<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImageIdToItemTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('items', function (Blueprint $table) {
      $table->integer('image_id')->after('exists')->unsigned();

      $table->foreign('image_id')->references('id')->on('images')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('items', function (Blueprint $table) {
      //
    });
  }
}

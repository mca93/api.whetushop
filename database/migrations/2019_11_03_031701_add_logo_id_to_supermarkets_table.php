<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLogoIdToSupermarketsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('supermarkets', function (Blueprint $table) {
      $table->integer('logo_id')->unsigned()->after('slug');

      $table->foreign('logo_id')->references('id')->on('images')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('supermarkets', function (Blueprint $table) {
      //
    });
  }
}

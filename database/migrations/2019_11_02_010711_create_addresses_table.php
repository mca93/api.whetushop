<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('addresses', function (Blueprint $table) {
      $table->increments('id');
      $table->string('country_name')->default('Mozambique');
      $table->string('town')->nullable();
      $table->string('street')->nullable();
      $table->string('builging')->nullable();
      $table->string('google_maps_coordenates')->nullable();
      $table->string('isActive')->default(false);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('addresses');
  }
}

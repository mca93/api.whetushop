<?php

use Illuminate\Database\Seeder;
use App\Models\Address;

class AddressesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $sushiPlace = Address::create(['town' => 'Maputo', 'street' => 'Av. Eduardo Mondlane', 'builging' => '33', 'google_maps_coordenates' => '-25.960631, 32.562223']);
  }
}

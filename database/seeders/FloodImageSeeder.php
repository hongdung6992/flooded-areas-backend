<?php

namespace Database\Seeders;

use App\Models\Floodplain;
use Illuminate\Database\Seeder;

class FloodImageSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $images = [
      [
        ['name' => 'ho-thac-gian.png']
      ],
      [
        ['name' => 'nguyen-van-linh-1.png'],
        ['name' => 'nguyen-van-linh-2.png'],
        ['name' => 'nguyen-van-linh-3.png'],
        ['name' => 'nguyen-van-linh-4.png']
      ],
      [],
      [],
      [],
      [['name' => 'an-xuan.png']],
      [],
      [['name' => 'dong-da.png']],
      [['name' => 'tran-cao-van.png']],
      [['name' => 'ha-huy-tap.png']]
    ];

    foreach ($images as $key => $image) {
      foreach ($image as $value) {
        Floodplain::find($key + 1)->floodImages()->create($value);
      }
    }
  }
}

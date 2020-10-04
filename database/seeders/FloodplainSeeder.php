<?php

namespace Database\Seeders;

use App\Models\Area;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FloodplainSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('floodplains')->insert([
      [
        'name' => 'Hồ Thạc Gián',
        'description' => null,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
      ],
      [
        'name' => '167 Nguyễn Văn Linh',
        'description' => null,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
      ],
      [
        'name' => 'Trần Phú - Hoàng Văn Thụ',
        'description' => null,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
      ],
      [
        'name' => 'Ông Ích Khiêm - Chợ Cồn',
        'description' => null,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
      ],
      [
        'name' => 'Trần Cao Vân - Ông Ích Khiêm',
        'description' => '海抜高度 13m',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
      ],
      [
        'name' => 'An Xuân - Cù Chính Lan',
        'description' => '海抜高度 9m',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
      ],
      [
        'name' => 'Bắc Sơn - Yên Thế',
        'description' => null,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
      ],
      [
        'name' => 'Đống Đa - Lý Tự Trọng',
        'description' => '海抜高度 8m',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
      ],
      [
        'name' => 'Trần Cao Vân',
        'description' => null,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
      ],
      [
        'name' => 'Hà Huy Tập',
        'description' => '海抜高度 8m',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
      ],
    ]);
  }
}

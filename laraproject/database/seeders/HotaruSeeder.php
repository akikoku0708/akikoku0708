<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class HotaruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('customs')->insert([
  [
    'userid' => 'akiyama5',
    'password' => '12345',
    'name' => '秋山5',
  ],
  [
    'userid' => 'akiyama6',
    'password' => '12345',
    'name' => '秋山6',
  ],
  [
    'userid' => 'akiyama7',
    'password' => '12345',
    'name' => '秋山7',
  ],
]);
    }
}

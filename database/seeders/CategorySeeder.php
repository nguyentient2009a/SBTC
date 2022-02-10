<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('categories')->truncate();

        \Illuminate\Support\Facades\DB::table('categories')->insert([
            [
                'id' => 1,
                'category_name' => 'Đồ điện tử',
                'create_by_id' => 1,
                'created_at' => Carbon::now()->subDay(10),
                'updated_at' => Carbon::now()->subDay(9),
            ],
            [
                'id' => 2,
                'category_name' => 'Sách, truyện',
                'create_by_id' => 1,
                'created_at' => Carbon::now()->subDay(8),
                'updated_at' => Carbon::now()->subDay(8),
            ],
            [
                'id' => 3,
                'category_name' => 'Các loại linh tinh',
                'create_by_id' => 1,
                'created_at' => Carbon::now()->subDay(7),
                'updated_at' => Carbon::now()->subDay(6),
            ],

            [
                'id' => 4,
                'category_name' => 'Xe cộ',
                'create_by_id' => 1,
                'created_at' => Carbon::now()->subDay(7),
                'updated_at' => Carbon::now()->subDay(6),
            ],
            [
                'id' => 5,
                'category_name' => 'Đồng hồ',
                'create_by_id' => 1,
                'created_at' => Carbon::now()->subDay(7),
                'updated_at' => Carbon::now()->subDay(6),
            ],
        ]);
    }
}

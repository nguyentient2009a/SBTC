<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('comments')->truncate();
        \Illuminate\Support\Facades\DB::table('comments')->insert([
            [
                'id' => 1,
                'trade_id' => 1,
                'account_id' => 5,
                'content' => 'Ông rảnh lúc mấy giờ ?',
                'created_at' => Carbon::create(2021, 8, 21, 21, 40, 16), //->diffForHumans(Carbon::now()),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'trade_id' => 3,
                'account_id' => 5,
                'content' => 'Đổi đồ khác được không bạn ?',
                'created_at' => Carbon::create(2021, 8, 21, 17, 40, 16), //->diffForHumans(Carbon::now()),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 3,
                'trade_id' => 4,
                'account_id' => 5,
                'content' => 'Ông rảnh lúc mấy giờ ?',
                'created_at' => Carbon::create(2021, 8, 21, 15, 40, 16), //, //->diffForHumans(Carbon::now()),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 4,
                'trade_id' => 2,
                'account_id' => 5,
                'content' => 'Ông rảnh lúc mấy giờ ?',
                'created_at' => Carbon::create(2021, 8, 22, 21, 40, 16), //->diffForHumans(Carbon::now()),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 5,
                'trade_id' => 1,
                'account_id' => 5,
                'content' => 'Ông rảnh lúc mấy giờ ?',
                'created_at' => Carbon::create(2021, 8, 21, 11, 40, 16), //->diffForHumans(Carbon::now()),
                'updated_at' => Carbon::now()
            ]


        ]);
    }
}

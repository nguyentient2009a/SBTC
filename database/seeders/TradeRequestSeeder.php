<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TradeRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('trade_requests')->truncate();
        \Illuminate\Support\Facades\DB::table('trade_requests')->insert([
//            [
//                'id' => 1,
//                'trade_id' => 2,
//                'trade_request_id' => 1,
//                'account_id' => 2,
//                'messenger_request' => 'Trade with me',
//                'status_request' => 1,
//                'created_at' => Carbon::now()->subDay(5),
//                'updated_at' => Carbon::now()->subDay(1)
//            ],
//            [
//                'id' => 2,
//                'trade_id' => 1,
//                'trade_request_id' => 3,
//                'account_id' => 2,
//                'messenger_request' => 'Trade with me',
//                'status_request' => 1,
//                'created_at' => Carbon::now()->subDay(2),
//                'updated_at' => Carbon::now()->subDay(1)
//            ],
//            [
//                'id' => 3,
//                'trade_id' => 2,
//                'trade_request_id' => 4,
//                'account_id' => 2,
//                'messenger_request' => 'Trade with me',
//                'status_request' => 1,
//                'created_at' => Carbon::now()->subDay(4),
//                'updated_at' => Carbon::now()->subDay(1)
//            ],
//            [
//                'id' => 4,
//                'trade_id' => 1,
//                'trade_request_id' => 5,
//                'account_id' => 2,
//                'messenger_request' => 'Trade with me',
//                'status_request' => 1,
//                'created_at' => Carbon::now()->subDay(7),
//                'updated_at' => Carbon::now()->subDay(1)
//            ],
        ]);
    }
}

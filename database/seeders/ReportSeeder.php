<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('reports')->truncate();
        \Illuminate\Support\Facades\DB::table('reports')->insert([
            [
                'id' => 1,
                'account_id' => 1,
                'messenger_report' => 'tố cáo abc',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'account_id' => 2,
                'messenger_report' => 'tố cáo abc',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'account_id' => 3,
                'messenger_report' => 'tố cáo abc',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 4,
                'account_id' => 4,
                'messenger_report' => 'tố cáo abc',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 5,
                'account_id' => 5,
                'messenger_report' => 'tố cáo abc',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

        ]);


    }
}

<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('admins')->truncate();
        \Illuminate\Support\Facades\DB::table('admins')->insert([
            [
                'id' => '1',
                'username' => 'huyphuc',
                'password' => '$2y$10$XeDBxXpoCHxj7GHSNpaCQuOB3n44XOHsrpr.Gnw.yQYqX5.tTMHdW',
                'gmail' => 'phuc@gmail.com',
                'full_name' => 'Điều Huy Phúc',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => '2',
                'username' => 'minhtu',
                'password' => '$2y$10$XeDBxXpoCHxj7GHSNpaCQuOB3n44XOHsrpr.Gnw.yQYqX5.tTMHdW',
                'gmail' => 'tu@gmail.com',
                'full_name' => 'Nguyễn Minh Tú',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => '3',
                'username' => 'quanghuy',
                'password' => '$2y$10$XeDBxXpoCHxj7GHSNpaCQuOB3n44XOHsrpr.Gnw.yQYqX5.tTMHdW',
                'gmail' => 'huy@gmail.com',
                'full_name' => 'Nguyễn Quang Huy',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => '4',
                'username' => 'iamraw',
                'password' => '$2y$10$XeDBxXpoCHxj7GHSNpaCQuOB3n44XOHsrpr.Gnw.yQYqX5.tTMHdW',
                'gmail' => 'duc@gmail.com',
                'full_name' => 'Trần Tiến Đức',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => '5',
                'username' => 'manhtri',
                'password' => '$2y$10$XeDBxXpoCHxj7GHSNpaCQuOB3n44XOHsrpr.Gnw.yQYqX5.tTMHdW',
                'gmail' => 'tri@gmail.com',
                'full_name' => 'Đinh Mạnh Trí',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => '6',
                'username' => 'admin',
                'password' => '$2y$10$XeDBxXpoCHxj7GHSNpaCQuOB3n44XOHsrpr.Gnw.yQYqX5.tTMHdW',
                'gmail' => 'admin@gmail.com',
                'full_name' => 'Admin',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
        // admin / 123456
    }
}

<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AdminRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('admin_roles')->truncate();
        \Illuminate\Support\Facades\DB::table('admin_roles')->insert([
            [
                'id' => 1,
                'admin_id' => 1,
                'name_role' => 'Quản lý nội dung',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'admin_id' => 2,
                'name_role' => 'Quản lý thành viên',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'admin_id' => 3,
                'name_role' => 'Theo dõi website',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 4,
                'admin_id' => 4,
                'name_role' => 'Admin template',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 5,
                'admin_id' => 5,
                'name_role' => 'Quản lý danh mục',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}

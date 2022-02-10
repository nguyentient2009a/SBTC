<?php

namespace Database\Seeders;

use App\Http\Controllers\AccountTable;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminSeeder::class);
        $this->call(AccountSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ReportSeeder::class);
        $this->call(AdminRoleSeeder::class);
        $this->call(TradeSeeder::class);
        $this->call(TradeRequestSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(ConfigSeeder::class);

    }
}

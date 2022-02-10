<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('account_clients')->truncate();
        \Illuminate\Support\Facades\DB::table('account_clients')->insert([
            [
                'id' => 1,
                'username' => 'user1 ',
                'password_salt' => '4fIQTyOqjzFI5JByx3ck31dmvXkUr9RtcDzmbwXsWb2NkNC6NeDgwn9x3p6GkAfW',
                'password_hash' => '$2y$10$XeDBxXpoCHxj7GHSNpaCQuOB3n44XOHsrpr.Gnw.yQYqX5.tTMHdW',
                'gmail' => 'dieuhuyphuc@gmail.com',
                'gender' => 1,
                'full_name' => 'User 1',
                'phone' => '124365478',
                'image_avatar' => 'https://png.pngtree.com/png-clipart/20190903/original/pngtree-couple-boy-cute-avatar-png-image_4445471.jpg',
                'image_id' => 'https://cdn.luatminhkhue.vn/lmk/articles/12/61370/huong-dan-thu-tuc-cap-lai-chung-minh-thu--cmnd---the-can-cuoc-khi-bi-mat-theo-quy-dinh-moi-nhat---61370.jpg',
                'id_number' => '1244134324',
                'status' => 2,
                'created_at' =>'2021-09-08 10:09:11',
                'updated_at' =>'2021-09-08 10:10:11',
            ],
            [
                'id' => 2,
                'username' => 'user2',
                'password_salt' => '4fIQTyOqjzFI5JByx3ck31dmvXkUr9RtcDzmbwXsWb2NkNC6NeDgwn9x3p6GkAfW',
                'password_hash' => '$2y$10$XeDBxXpoCHxj7GHSNpaCQuOB3n44XOHsrpr.Gnw.yQYqX5.tTMHdW',
                'gmail' => 'tranduc72729@gmail.com',
                'gender' => 1,
                'full_name' => 'User 2',
                'phone' => '124365473',
                'image_avatar' => 'https://png.pngtree.com/png-clipart/20190903/original/pngtree-couple-boy-cute-avatar-png-image_4445471.jpg',
                'image_id' => 'https://cdn.luatminhkhue.vn/lmk/articles/12/61370/huong-dan-thu-tuc-cap-lai-chung-minh-thu--cmnd---the-can-cuoc-khi-bi-mat-theo-quy-dinh-moi-nhat---61370.jpg',
                'id_number' => '1244134324',
                'status' => 2,
                'created_at' =>'2021-09-08 10:09:11',
                'updated_at' =>'2021-09-08 10:10:11',
            ],
            [
                'id' => 3,
                'username' => 'user 3',
                'password_salt' => '4fIQTyOqjzFI5JByx3ck31dmvXkUr9RtcDzmbwXsWb2NkNC6NeDgwn9x3p6GkAfW',
                'password_hash' => '$2y$10$XeDBxXpoCHxj7GHSNpaCQuOB3n44XOHsrpr.Gnw.yQYqX5.tTMHdW',
                'gmail' => 'nguyenminhtu@gmail.com',
                'gender' => 1,
                'full_name' => 'User 3',
                'phone' => '124365475',
                'image_avatar' => 'https://png.pngtree.com/png-clipart/20190903/original/pngtree-couple-boy-cute-avatar-png-image_4445471.jpg',
                'image_id' => 'https://cdn.luatminhkhue.vn/lmk/articles/12/61370/huong-dan-thu-tuc-cap-lai-chung-minh-thu--cmnd---the-can-cuoc-khi-bi-mat-theo-quy-dinh-moi-nhat---61370.jpg',
                'id_number' => '1244134324',
                'status' => 2,
                'created_at' =>'2021-09-08 10:09:11',
                'updated_at' =>'2021-09-08 10:10:11',
            ],
            [
                'id' => 4,
                'username' => 'user4',
                'password_salt' => '4fIQTyOqjzFI5JByx3ck31dmvXkUr9RtcDzmbwXsWb2NkNC6NeDgwn9x3p6GkAfW',
                'password_hash' => '$2y$10$XeDBxXpoCHxj7GHSNpaCQuOB3n44XOHsrpr.Gnw.yQYqX5.tTMHdW',
                'gmail' => 'nguyenquanghuy@gmail.com',
                'gender' => 1,
                'full_name' => 'User 4',
                'phone' => '1243654448',
                'image_avatar' => 'https://png.pngtree.com/png-clipart/20190903/original/pngtree-couple-boy-cute-avatar-png-image_4445471.jpg',
                'image_id' => 'https://cdn.luatminhkhue.vn/lmk/articles/12/61370/huong-dan-thu-tuc-cap-lai-chung-minh-thu--cmnd---the-can-cuoc-khi-bi-mat-theo-quy-dinh-moi-nhat---61370.jpg',
                'id_number' => '1244134324',
                'status' => 2,
                'created_at' =>'2021-09-08 10:09:11',
                'updated_at' =>'2021-09-08 10:10:11',
            ],
            [
                'id' => 5,
                'username' => 'user5',
                'password_salt' => '4fIQTyOqjzFI5JByx3ck31dmvXkUr9RtcDzmbwXsWb2NkNC6NeDgwn9x3p6GkAfW',
                'password_hash' => '$2y$10$XeDBxXpoCHxj7GHSNpaCQuOB3n44XOHsrpr.Gnw.yQYqX5.tTMHdW',
                'gmail' => 'dinhmanhtri@gmail.com',
                'gender' => 1,
                'full_name' => 'User 5',
                'phone' => '124232478',
                'image_avatar' => 'https://png.pngtree.com/png-clipart/20190903/original/pngtree-couple-boy-cute-avatar-png-image_4445471.jpg',
                'image_id' => 'https://cdn.luatminhkhue.vn/lmk/articles/12/61370/huong-dan-thu-tuc-cap-lai-chung-minh-thu--cmnd---the-can-cuoc-khi-bi-mat-theo-quy-dinh-moi-nhat---61370.jpg',
                'id_number' => '1244134324',
                'status' => 2,
                'created_at' =>'2021-09-08 10:09:11',
                'updated_at' =>'2021-09-08 10:10:11',
            ],
            [
                'id' => 6,
                'username' => 'user6',
                'password_salt' => 'znvuVnM/uvl8bUSSoJ3jaN8UY1U991ehXLlvZv10lfH7quzFoC5xzYdrbQ33mMRL',
                'password_hash' => '$2y$10$XeDBxXpoCHxj7GHSNpaCQuOB3n44XOHsrpr.Gnw.yQYqX5.tTMHdW',
                'gmail' => 'tranduc92389@gmail.com',
                'gender' => 1,
                'full_name' => 'User 6',
                'phone' => '124232478',
                'image_avatar' => 'https://png.pngtree.com/png-clipart/20190903/original/pngtree-couple-boy-cute-avatar-png-image_4445471.jpg',
                'image_id' => 'https://cdn.luatminhkhue.vn/lmk/articles/12/61370/huong-dan-thu-tuc-cap-lai-chung-minh-thu--cmnd---the-can-cuoc-khi-bi-mat-theo-quy-dinh-moi-nhat---61370.jpg',
                'id_number' => '1244134324',
                'status' => 2,
                'created_at' =>'2021-09-08 10:09:11',
                'updated_at' =>'2021-09-08 10:10:11',
            ],

        ]);

    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_clients', function (Blueprint $table) {
            $table->id('id');
            $table->string('username');
            $table->string('password_salt');
            $table->string('password_hash');
            $table->string('gmail');
            $table->integer('gender')->default(1); //1 = nam , 2 = nữ
            $table->string('full_name');
            $table->string('phone');
            $table->string('image_avatar')->default('https://thumbs.dreamstime.com/b/default-avatar-profile-icon-vector-social-media-user-portrait-176256935.jpg');
            $table->string('image_id');
            $table->string('id_number');
            $table->integer('status')->default(1); // 1. Đang chờ, 2 đồng ý , 3. Từ chối
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_clients');
    }
}

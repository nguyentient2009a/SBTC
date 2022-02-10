<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradeRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trade_requests', function (Blueprint $table) {
            $table->id('id');
            $table->bigInteger('trade_id')->unsigned();  // id món đồ muôsn trao đổi
            $table->bigInteger('trade_request_id')->unsigned();  // id món đồ của người gửi yêu cầu
            $table->bigInteger('account_id')->unsigned();; // id của người đăng bài
            $table->bigInteger('account_request_id')->unsigned();; // id của người xin
            $table->text('messenger_request');
            $table->integer('status_request');  // 1. Đang chờ, 2. Đã đồng ý, 3. Từ chối, 4. Hoàn thành
            $table->foreign('trade_id')->references('id')->on('trades');
            $table->foreign('trade_request_id')->references('id')->on('trades');
            $table->foreign('account_id')->references('id')->on('account_clients');
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
        Schema::dropIfExists('trade_requests');
    }
}

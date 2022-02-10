<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trades', function (Blueprint $table) {
            $table->id('id');
            $table->bigInteger('account_id')->unsigned();;
            $table->bigInteger('category_id')->unsigned();;
            $table->string('title');
            $table->string('description');
            $table->text('content');
            $table->text('image');
            $table->string('city');
            $table->string('district');
            $table->string('ward');
            $table->string('address');
            $table->integer('status_trade')->default(1);
//           \status_trade:  1 = chua trao doi, 2 = dang trao doi, 3 = da xong
            $table->integer('status')->default(1);
            $table->foreign('account_id')->references('id')->on('account_clients');
            $table->foreign('category_id')->references('id')->on('categories');
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
        Schema::dropIfExists('trades');
    }
}

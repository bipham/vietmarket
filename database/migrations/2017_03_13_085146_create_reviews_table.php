<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rating_user_id')->unsigned();
            $table->foreign('rating_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('rated_user_id')->unsigned();
            $table->foreign('rated_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('rating')->default(5);
            $table->text('comment');
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
        Schema::dropIfExists('reviews');
    }
}

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
            $table->integer('ISBN')->unique();
            $table->integer('user_id')->unique();
            $table->integer('rate');
            $table->text('comment');
            $table->timestamps();   

            $table->primary(['ISBN', 'userID']);

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('ISBN')->references('ISBN')->on('books');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reviews');
    }
}

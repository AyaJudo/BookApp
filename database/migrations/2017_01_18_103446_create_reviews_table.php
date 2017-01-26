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
                $table->string('review');
                $table->timestamps();
                /*
                 ** Creating a foreign key to users table
                 */
                $table->integer('user_id')->unsigned()->index();
                $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
                /*
                 ** Creating a foreign key to books table
                 */
                $table->integer('book_id')->unsigned()->index();
                $table->foreign('book_id')->references('id')->on('books')->onDelete('CASCADE');
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

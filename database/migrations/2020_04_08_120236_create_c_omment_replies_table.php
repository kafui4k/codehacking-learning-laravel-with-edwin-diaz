<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCOmmentRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_omment_replies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('comment_id')->unsigned()->index();
            $table->integer('is_active')->default(0);
            $table->string('author');
            $table->string('photo');
            $table->string('email');
            $table->text('body');
            $table->timestamps();


            $table->foreign('comment_id')->references('id')->on('comments')->delete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('c_omment_replies');
    }
}

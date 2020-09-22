<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBooksTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('review');
            $table->string('cover');
            $table->integer('units');
            $table->integer('qualification');
            $table->integer('author_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign("author_id")->references("id")->on("authors")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('books');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            //qui sitmao facendo una relazione one to many
            $table->id();
            $table->unsignedBigInteger('author_id');
            $table->string('title', 255);
            $table->text('body');

            $table->timestamps();

            $table->foreign('author_id')
                ->references('id')
                ->on('authors');
                //premessa è la tabella AUTHORS che si collega alla tabella  posts...(questa tabella)


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}

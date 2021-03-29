<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('author_id');//con (author_id) abbiamomesso il sigolare di authors_id IL NOME AUTHOR_ID è UN NOME INVENTATO DA NOI!!

            $table->text('bio');
            $table->string('website', 2048);
            $table->string('pic', 2048);


            $table->timestamps();

            $table->foreign('author_id')//questa è la nostra forekey che stiamo collegando alla tabella AUTHORS!!
                ->references('id')//questo è l'id di che si andra a collegare in AUTHOR_TABLE
                ->on('authors');//è il nome della tabella da dove prende appunto l'ID!!
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_details');
    }
}
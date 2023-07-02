<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('genre_id');
            $table->unsignedBigInteger('artists_id');
            $table->string('image_path');
            $table->string('description');
            $table->double('amount', 10, 2);
            $table->datetime('date');
            $table->unsignedBigInteger('venues_id');
            $table->integer('added_by_id')->unsigned();
            $table->integer('updated_by_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('genre_id')->references('id')->on('genres');
            $table->foreign('artists_id')->references('id')->on('artists');
            $table->foreign('venues_id')->references('id')->on('venues');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}

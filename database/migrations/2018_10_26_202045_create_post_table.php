<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Post', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('subject', 255)->default(null);
            $table->longText('text')->default(null);
            $table->integer('views')->default(0);
            $table->integer('likes')->default(0);
            $table->integer('createdAt')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Post');
    }
}

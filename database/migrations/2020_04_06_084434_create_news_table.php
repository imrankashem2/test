<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->integer('category')->nullable();
            $table->integer('headlines')->nullable();
            $table->integer('latestNews')->nullable();
            $table->integer('primeNews')->nullable();
			$table->integer('popularNews')->nullable();
            $table->integer('none')->nullable();
            $table->string('imgTitle')->nullable();
            $table->longText('information')->nullable();
            $table->tinyInteger('publicationStatus')->nullable();
            $table->text('img')->nullable();
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
        Schema::dropIfExists('news');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableActivites202212151851 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 50)->default('');
            $table->string('title_en', 50)->default('');
            $table->text('articles');
            $table->text('articles_en');
            $table->string('image_path1', 100)->default('');
            $table->string('image_path2', 100)->default('');
            $table->string('image_path3', 100)->default('');
            $table->unsignedBigInteger('created_by');
            $table->datetime('created_at');
            $table->unsignedBigInteger('updated_by');
            $table->datetime('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activites');
    }
}

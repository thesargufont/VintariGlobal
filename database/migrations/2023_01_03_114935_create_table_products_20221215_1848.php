<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProducts202212151848 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('categories_id')->nullable();
            $table->unsignedBigInteger('countries_id')->nullable();
            $table->string('title', 50)->default('');
            $table->string('description', 100)->default('');
            $table->string('description_en', 100)->default('');
            $table->boolean('best_selling')->default(0);
            $table->string('image_path1', 100)->default('');
            $table->string('image_path2', 100)->default('');
            $table->string('image_path3', 100)->default('');
            $table->string('image_path4', 100)->default('');
            $table->string('image_path5', 100)->default('');
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
        Schema::dropIfExists('products');
    }
}

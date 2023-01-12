<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAbouts202212272025 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('history');
            $table->text('history_en');
            $table->text('visi');
            $table->text('visi_en');
            $table->text('misi');
            $table->text('misi_en');
            $table->text('image_path');
            $table->string('url_alibaba', 255)->default('');
            $table->string('telp', 50)->default('');
            $table->string('email', 50)->default('');
            $table->integer('product_sold')->default(0);
            $table->integer('countries_sold')->default(0);
            $table->integer('client')->default(0);
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
        Schema::dropIfExists('abouts');
    }
}

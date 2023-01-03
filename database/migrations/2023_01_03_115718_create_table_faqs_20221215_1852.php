<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFaqs202212151852 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faqs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('question', 50)->default('');
            $table->string('question_en', 50)->default('');
            $table->string('answer', 255)->default('');
            $table->string('answer_en', 255)->default('');
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
        Schema::dropIfExists('faqs');
    }
}

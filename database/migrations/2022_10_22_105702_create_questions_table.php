<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('questionText');
            $table->integer('mark');
            $table->unsignedBigInteger('language_id');
            $table->unsignedBigInteger('questionType_id');
            $table->unsignedBigInteger('text_id')->nullable();
            $table->unsignedBigInteger('record_id')->nullable();
            $table->foreign('questionType_id')->references('id')->on('question_types');
            $table->foreign('text_id')->references('id')->on('texts');
            $table->foreign('record_id')->references('id')->on('records');
            $table->foreign('language_id')->references('id')->on('languages');
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
        Schema::dropIfExists('questions');
    }
}

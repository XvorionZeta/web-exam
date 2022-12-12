<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_answer', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_test_id');
            $table->unsignedBigInteger('question_id');
            $table->unsignedBigInteger('answer_id');
            $table->string('answer');
            $table->binary('is_right');
            $table->integer('index_no');
            $table->integer('is_answered');
            $table->timestamps();


            $table->foreign('user_test_id')
                  ->references('id')
                  ->on('user_tests');

            $table->foreign('question_id')
                  ->references('id')
                  ->on('test_questions');

            $table->foreign('answer_id')
                  ->references('id')
                  ->on('test_answer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_answer');
    }
};

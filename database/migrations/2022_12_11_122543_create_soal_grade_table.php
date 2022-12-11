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
        Schema::create('soal_grade', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('soal_category');
            $table->float('grade')->default(0);
            $table->time('remaining_time');
            $table->timestamps();

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');
            $table->foreign('soal_category')
                  ->references('id')
                  ->on('soal_category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('soal_grade');
    }
};

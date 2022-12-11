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
        Schema::create('soal_choices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('soal_id');
            $table->binary('is_right');
            $table->timestamps();

            $table->foreign('soal_id')
                  ->references('id')
                  ->on('soal_details');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('soal_choices');
    }
};

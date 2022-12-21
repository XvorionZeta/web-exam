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
        Schema::create('user_tests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('test_id');
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->float('grade');
            $table->integer('is_cleared')->nullable();
            $table->timestamps();


            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');

            $table->foreign('test_id')
                  ->references('id')
                  ->on('tests');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_tests');
    }
};

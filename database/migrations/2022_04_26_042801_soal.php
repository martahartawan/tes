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
        Schema::create('data_soal1s', function (Blueprint $table) {
            $table->id();
            $table->integer('no_soal')->unique();
            $table->string('soal');
            $table->string('a');
            $table->string('b');
            $table->string('c');
            $table->string('d');
            $table->string('e');
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
        //
    }
};

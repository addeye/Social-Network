<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenempatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penempatan', function($table) {
            $table->increments('penempatan_id');
            $table->integer('mahasiswa_id')->length(10)->unsigned();
            $table->integer('kamar_id')->length(10)->unsigned();
            $table->timestamps();

            $table->foreign('kamar_id')
                ->references('kamar_id')->on('kamar');
            $table->foreign('mahasiswa_id')
                ->references('mahasiswa_id')->on('mahasiswa');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('penempatan');
    }
}

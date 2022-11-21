<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSemprosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sempros', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // $table->string('nama_mhs');
            // $table->string('nim',50);
            // $table->string('niph',250);
            $table->string('proposal')->nullable();
            $table->string('slide')->nullable();
            $table->string('validasi_dospem1')->nullable();
            $table->string('validasi_dospem2')->nullable();
            $table->unsignedBigInteger('users_id');
            $table->foreign ('users_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            // $table->unsignedBigInteger('ta_id');
            // $table->foreign ('ta_id')->references('id')->on('regis_t_a_s')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamp('time')->default(now());
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sempros');
    }
}

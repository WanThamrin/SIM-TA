<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSemhasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semhas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // $table->string('nama_mhs');
            // $table->string('nim',50);
            // $table->string('niph',250);
            $table->unsignedBigInteger('users_id');
            $table->foreign ('users_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('laporan')->nullable();
            $table->string('bimbingan')->nullable();
            $table->string('validasi_sidang1')->nullable();
            $table->string('validasi_sidang2')->nullable();
            $table->string('validasi_sempro')->nullable();
            $table->string('bukti')->nullable();
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
        Schema::dropIfExists('semhas');
    }
}

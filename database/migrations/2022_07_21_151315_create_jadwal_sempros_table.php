<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalSemprosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_sempros', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_mhs');
            $table->string('nim',50);
            $table->string('niph',250);
            $table->string("hari",50) ->nullable();
            $table->string("jam_mulai",50) ->nullable();
            $table->string("jam_akhir",50) ->nullable();
            $table->string('dospeng1');
            $table->string('dospeng2');
            $table->enum('type',['daring','luring']);
            $table->string('ruangan') ->nullable();
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
        Schema::dropIfExists('jadwal_sempros');
    }
}

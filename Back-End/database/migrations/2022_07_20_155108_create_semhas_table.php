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
            $table->string('nama_mhs');
            $table->string('nim',50);
            $table->string('niph',250);
            $table->string('proposal');
            $table->string('slide');
            $table->string('validasi_dospem1');
            $table->string('validasi_dospem2');
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

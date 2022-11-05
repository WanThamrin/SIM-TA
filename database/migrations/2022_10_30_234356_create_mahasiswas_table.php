<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nim',50) ->nullable();
            $table->string('status',250) ->nullable();
            $table->string('waktu') ->nullable();     
            $table->string('judul',250)->nullable();
            $table->string('keyword',50) ->nullable();     
            $table->string('abstrak',250) ->nullable();     
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
        Schema::dropIfExists('mahasiswas');
    }
}

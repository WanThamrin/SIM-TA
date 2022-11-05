<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisTASTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regis_t_a_s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_mhs');
            $table->string('nim',50);
            $table->string('niph',250);
            $table->string('judul',50) ->nullable();
            $table->string('abstrak',250)->nullable();
            $table->string('keyword',50) ->nullable();
            // $table->string('dospem1') ->nullable();
            // $table->string('dospem2',50) ->nullable();
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
        Schema::dropIfExists('regis_t_a_s');
    }
}

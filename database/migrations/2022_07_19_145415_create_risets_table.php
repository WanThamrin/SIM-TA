<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRisetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('risets', function (Blueprint $table) {
            $table->id();
            $table->string('nama_riset',250) ->nullable();
            $table->string('bidang_riset',250)->nullable();
            $table->string('keyword',250) ->nullable();
            $table->string('note',250) ->nullable();
            $table->timestamp('time')->default(now());
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
        Schema::dropIfExists('risets');
    }
}

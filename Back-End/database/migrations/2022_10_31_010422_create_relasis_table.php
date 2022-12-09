<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relasis', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // $table->string('nim',50) ->nullable();
            // $table->string('niph',250) ->nullable();
            $table->unsignedBigInteger('users_id');
            $table->foreign ('users_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('posisi') ->nullable();
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
        Schema::dropIfExists('relasis');
    }
}

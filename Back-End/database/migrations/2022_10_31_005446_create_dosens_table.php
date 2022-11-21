<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosens', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // $table->string('niph',50) ->nullable();
            $table->string('note',250) ->nullable();
            $table->string('sertif') ->nullable();
            $table->unsignedBigInteger('users_id');
            $table->foreign ('users_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            // $table->timestamp('time')->default(now());
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dosens');
    }
}

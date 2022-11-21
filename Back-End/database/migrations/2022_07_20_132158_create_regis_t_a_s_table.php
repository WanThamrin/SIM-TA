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
            $table->unsignedBigInteger('users_id');
            $table->foreign ('users_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('judul',50) ->nullable();
            $table->string('abstrak',250)->nullable();
            $table->string('keyword',50) ->nullable();
            $table->string('status1') ->default(0);
            $table->string('status2') ->default(0);
            $table->bigInteger('dospem1') ->nullable();
            $table->bigInteger('dospem2') ->nullable();
            $table->bigInteger('dospeng1') ->nullable();
            $table->bigInteger('dospeng2') ->nullable();
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('judul',250) ->nullable();
            $table->string('keyword',250) ->nullable();
            $table->string('file');     #import&export
            $table->string('note',250)->nullable();
            $table->enum('status',['publish','not']);
            $table->string("hari",50) ->nullable();
            $table->string("jam",50) ->nullable();
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
        Schema::dropIfExists('infos');
    }
}

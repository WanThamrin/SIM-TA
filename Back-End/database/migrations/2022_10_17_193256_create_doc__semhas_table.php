<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocSemhasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc__semhas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('judul',250) ->nullable();
            $table->string('keyword',250) ->nullable();
            $table->string('file');     #import&exporT
            // $table->enum('status',['publish','not']);
            // $table->string("hari",50) ->nullable();
            // $table->string("jam",50) ->nullable();
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
        Schema::dropIfExists('doc__semhas');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiSemhasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_semhas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('semhas_id');
            $table->foreign ('semhas_id')->references('id')->on('semhas')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nilai1')->nullable();
            $table->string('nilai2')->nullable();
            $table->string('nilai3')->nullable();
            $table->string('nilai4')->nullable();
            $table->string('nilai5')->nullable();
            $table->string('note')->nullable();
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
        Schema::dropIfExists('nilai_semhas');
    }
}

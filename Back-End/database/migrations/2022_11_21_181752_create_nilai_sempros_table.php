<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiSemprosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_sempros', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('sempros_id');
            $table->foreign ('sempros_id')->references('id')->on('sempros')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('dosen_id') ->nullable();
            $table->string('nilai1')->nullable();
            $table->string('nilai2')->nullable();
            $table->string('nilai3')->nullable();
            $table->string('nilai4')->nullable();
            $table->string('nilai5')->nullable();
            $table->string('nilai_presentasi')->nullable();
            $table->string('nilai_laporan')->nullable();
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
        Schema::dropIfExists('nilai_sempros');
    }
}

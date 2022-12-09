<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNilaiToNilaiSemprosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nilai_sempros', function (Blueprint $table) {
            $table->integer('nilai_presentasi') ->nullable();
            $table->integer('nilai_laporan') ->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nilai_sempros', function (Blueprint $table) {
            $table->dropColumn('nilai_presentasi');
            $table->dropColumn('nilai_laporan');

        });
    }
}

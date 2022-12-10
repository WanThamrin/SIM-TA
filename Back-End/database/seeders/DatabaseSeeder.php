<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\StatusPendaftaran::create([
            'type'=>'semhas'
        ]);
        \App\Models\StatusPendaftaran::create([
            'type'=>'sempro'
        ]);
    }
}

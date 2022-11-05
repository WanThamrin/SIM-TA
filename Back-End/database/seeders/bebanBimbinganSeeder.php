<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class bebanBimbinganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bebanBimbingan')->insert([
            'nama_matkul' => Str::random(10),
            'catatan' => Str::random(10),
            'password' => Hash::make('password'),
        ]);
    }
}

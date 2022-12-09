<?php

namespace Tests\Feature\Http\Controllers;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use Illuminate\Http\UploadedFile;

use App\Models\User;
use Tests\TestCase;

class iterasi3Test extends TestCase
{

    use WithFaker;

    public function testCreatesemhas()
    {
        $user = User::where('role', 'user')->first();
            $response = $this->actingAs($user)
                ->post(url('api/semhas'), [
                    'laporan'=> UploadedFile::fake()->create('test1.pdf', 1024) ,
                    'bimbingan'=> UploadedFile::fake()->create('test2.pdf', 1024) ,
                    'validasi_sidang1'=> UploadedFile::fake()->create('test3.pdf', 1024),
                    'validasi_sidang2' => UploadedFile::fake()->create('test4.pdf', 1024),
                    'validasi_sempro' => UploadedFile::fake()->create('test5.pdf', 1024),
                    'bukti' => UploadedFile::fake()->create('test6.pdf', 1024),

                    // 'nama_warga' => $this->faker->name(),
                    // 'tgl_lahir' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
                    // 'alamat' => $this->faker->address(),
                    // 'foto' => UploadedFile::fake()->create('test4.jpg', 1024)
                ]);
            $response->assertStatus(201);
    }

    public function testLihatsemhas()
    {
        $this->withExceptionHandling();
        $user = User::where('role','user')->first();
            $response = $this->actingAs($user)
                ->get(url('api/semhas'));
            $response->assertStatus(200);
    }

    public function testEditsemhas()
    {
        $user = User::where('role', 'user')->first();
            $response = $this->actingAs($user)
                ->post(url('api/semhas'), [
                    'laporan'=> UploadedFile::fake()->create('test1.pdf', 1024) ,
                    'bimbingan'=> UploadedFile::fake()->create('test2.pdf', 1024) ,
                    'validasi_sidang1'=> UploadedFile::fake()->create('test3.pdf', 1024),
                    'validasi_sidang2' => UploadedFile::fake()->create('test4.pdf', 1024),
                    'validasi_sempro' => UploadedFile::fake()->create('test5.pdf', 1024),
                    'bukti' => UploadedFile::fake()->create('test6.pdf', 1024),
                ]);
            $response->assertStatus(200);
    }

    public function testDeletesemhas()
    {
        $user = User::where('role','user')->first();
        $response = $this->actingAs($user)->get(url('api/semhas'));
        $response->assertStatus(200);
    }

}

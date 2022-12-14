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
                ]);
            $response->assertStatus(500);
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
        $user = User::where('role', 'dosen')->first();
            $response = $this->actingAs($user)
                ->post(url('api/semhas'), [
                    'laporan'=> UploadedFile::fake()->create('test1.pdf', 1024) ,
                    'bimbingan'=> UploadedFile::fake()->create('test2.pdf', 1024) ,
                    'validasi_sidang1'=> UploadedFile::fake()->create('test3.pdf', 1024),
                    'validasi_sidang2' => UploadedFile::fake()->create('test4.pdf', 1024),
                    'validasi_sempro' => UploadedFile::fake()->create('test5.pdf', 1024),
                    'bukti' => UploadedFile::fake()->create('test6.pdf', 1024),
                ]);
            $response->assertStatus(500);
    }

    public function testDeletesemhas()
    {
        $user = User::where('role','user')->first();
        $response = $this->actingAs($user)->get(url('api/semhas'));
        $response->assertStatus(200);
    }
    public function testCreateJadwalsemhas()
    {
        $user = User::where('role', 'dosen')->first();
            $response = $this->actingAs($user)
                ->post(url('api/jadwal-semhas'), [
                    'hari' => '20/12/2022',
                    'jam_mulai' => '06:00',
                    'jam_akhir' => '08:00',
                    'type' => 'luring',
                    'ruangan' => 'B.302',
                ]);
            $response->assertStatus(500);
    }

    public function testLihatJadwalSemhas()
    {
        $this->withExceptionHandling();
        $user = User::where('role','dosen')->first();
            $response = $this->actingAs($user)
                ->get(url('api/jadwal-semhas'));
            $response->assertStatus(200);
    }

    public function testEditJadwalSemhas()
    {
        $user = User::where('role', 'dosen')->first();
            $response = $this->actingAs($user)
                ->post(url('api/jadwal-semhas'), [
                    'hari' => '20/12/2022',
                    'jam_mulai' => '06:00',
                    'jam_akhir' => '08:00',
                    'type' => 'luring',
                    'ruangan' => 'B.302',
                ]);
            $response->assertStatus(500);
    }
}

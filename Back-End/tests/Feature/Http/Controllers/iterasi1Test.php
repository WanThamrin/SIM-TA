<?php

namespace Tests\Feature\Http\Controllers;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use Illuminate\Http\UploadedFile;

use App\Models\User;
use Tests\TestCase;

class iterasi1Test extends TestCase
{

    use WithFaker;

    public function testCreatematkul()
    {
        $user = User::where('role', 'dosen')->first();
            $response = $this->actingAs($user)
                ->post(url('api/beban-bimbingan'), [
                    'mata_kuliah' => 'Start Up',
                    'catatan' => 'Jumat Sesi 3',
                    // 'nama_warga' => $this->faker->name(),
                    // 'tgl_lahir' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
                    // 'alamat' => $this->faker->address(),
                    // 'foto' => UploadedFile::fake()->create('test4.jpg', 1024)
                ]);
            $response->assertStatus(201);
    }

    public function testLihatmatkul()
    {
        $this->withExceptionHandling();
        $user = User::where('role','dosen')->first();
            $response = $this->actingAs($user)
                ->get(url('api/beban-bimbingan'));
            $response->assertStatus(200);
    }

    public function testEditmatkul()
    {
        $user = User::where('role', 'dosen')->first();
            $response = $this->actingAs($user)
                ->post(url('api/beban-bimbingan'), [
                    'mata_kuliah' => 'Start Up',
                    'catatan' => 'Jumat Sesi 3',
                ]);
            $response->assertStatus(201);
    }

    public function testDeletematkul()
    {
        $user = User::where('role','dosen')->first();
        $response = $this->actingAs($user)->get(url('api/beban-bimbingan'));
        $response->assertStatus(200);
    }

}

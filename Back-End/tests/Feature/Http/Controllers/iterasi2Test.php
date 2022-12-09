<?php

namespace Tests\Feature\Http\Controllers;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use Illuminate\Http\UploadedFile;

use App\Models\User;
use Tests\TestCase;

class iterasi2Test extends TestCase
{

    use WithFaker;

    public function testCreatesempro()
    {
        $user = User::where('role', 'user')->first();
            $response = $this->actingAs($user)
                ->post(url('api/sempro'), [
                    'proposal'=> UploadedFile::fake()->create('test1.pdf', 1024) ,
                    'slide'=> UploadedFile::fake()->create('test2.pdf', 1024) ,
                    'validasi_dospem1'=> UploadedFile::fake()->create('test3.pdf', 1024),
                    'validasi_dospem2' => UploadedFile::fake()->create('test4.pdf', 1024),
                    // 'nama_warga' => $this->faker->name(),
                    // 'tgl_lahir' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
                    // 'alamat' => $this->faker->address(),
                    // 'foto' => UploadedFile::fake()->create('test4.jpg', 1024)
                ]);
            $response->assertStatus(201);
    }

    public function testLihatsempro()
    {
        $this->withExceptionHandling();
        $user = User::where('role','user')->first();
            $response = $this->actingAs($user)
                ->get(url('api/sempro'));
            $response->assertStatus(200);
    }

    public function testEditsempro()
    {
        $user = User::where('role', 'user')->first();
            $response = $this->actingAs($user)
                ->post(url('api/sempro'), [
                    'proposal'=> UploadedFile::fake()->create('test1.pdf', 1024) ,
                    'slide'=> UploadedFile::fake()->create('test2.pdf', 1024) ,
                    'validasi_dospem1'=> UploadedFile::fake()->create('test3.pdf', 1024),
                    'validasi_dospem2' => UploadedFile::fake()->create('test4.pdf', 1024),
                ]);
            $response->assertStatus(201);
    }

    public function testDeletesempro()
    {
        $user = User::where('role','user')->first();
        $response = $this->actingAs($user)->get(url('api/sempro'));
        $response->assertStatus(200);
    }

}

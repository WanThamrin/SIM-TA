<?php

namespace Tests\Feature\Http\Controllers;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use Illuminate\Http\UploadedFile;

use App\Models\User;
use Tests\TestCase;

class iterasi7Test extends TestCase
{

    use WithFaker;

    public function testCreateinfo()
    {
        $user = User::where('role', 'dosen')->first();
            $response = $this->actingAs($user)
                ->post(url('api/info'), [
                    'judul' => 'Bab 1 di revisi',
                    'keyword' => 'Bab 1 di revisi',
                    'note' => 'Bab 1 di revisi',
                    'time' => 'Bab 1 di revisi',
                    'file'=> UploadedFile::fake()->create('info.pdf', 1024) ,


                ]);
            $response->assertStatus(201);
    }

    public function testLihatinfo()
    {
        $this->withExceptionHandling();
        $user = User::where('role','dosen')->first();
            $response = $this->actingAs($user)
                ->get(url('api/info'));
            $response->assertStatus(200);
    }

    public function testEditinfo()
    {
        $user = User::where('role', 'dosen')->first();
            $response = $this->actingAs($user)
                ->put(url('api/info'), [
                    'judul' => 'Bab 1 di revisi',
                    'keyword' => 'Bab 1 di revisi',
                    'note' => 'Bab 1 di revisi',
                    'time' => 'Bab 1 di revisi',
                    'file'=> UploadedFile::fake()->create('info.pdf', 1024) ,
                ]);
            $response->assertStatus(405);
    }

    public function testDeleteinfo()
    {
        $user = User::where('role','dosen')->first();
        $response = $this->actingAs($user)->get(url('api/info'));
        $response->assertStatus(200);
    }

}

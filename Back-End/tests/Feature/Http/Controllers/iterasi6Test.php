<?php

namespace Tests\Feature\Http\Controllers;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use Illuminate\Http\UploadedFile;

use App\Models\User;
use Tests\TestCase;

class iterasi6Test extends TestCase
{

    use WithFaker;

    public function testCreatelaporan()
    {
        $user = User::where('role', 'user')->first();
            $response = $this->actingAs($user)
                ->post(url('api/rev-proposal'), [
                    'note' => 'Bab 1 di revisi',
                    'file'=> UploadedFile::fake()->create('laporan.pdf', 1024) ,


                ]);
            $response->assertStatus(200);
    }

    public function testLihatlaporan()
    {
        $this->withExceptionHandling();
        $user = User::where('role','user')->first();
            $response = $this->actingAs($user)
                ->get(url('api/rev-proposal'));
            $response->assertStatus(200);
    }

    public function testEditlaporan()
    {
        $user = User::where('role', 'user')->first();
            $response = $this->actingAs($user)
                ->put(url('api/rev-proposal'), [
                    'note' => 'Bab 1 di revisi',
                    'file'=> UploadedFile::fake()->create('laporan.pdf', 1024) ,
                ]);
            $response->assertStatus(200);
    }

    public function testDeletelaporan()
    {
        $user = User::where('role','user')->first();
        $response = $this->actingAs($user)->get(url('api/rev-proposal'));
        $response->assertStatus(200);
    }

}

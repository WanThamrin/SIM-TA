<?php

namespace Tests\Feature\Http\Controllers;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use Illuminate\Http\UploadedFile;

use App\Models\User;
use Tests\TestCase;

class iterasi4Test extends TestCase
{

    use WithFaker;

    public function testCreateriset()
    {
        $user = User::where('role', 'dosen')->first();
            $response = $this->actingAs($user)
                ->post(url('api/riset'), [
                    'nama_riset' => 'Pengembangan SIM-TA',
                    'bidang_riset' => 'Software',
                    'note' => 'SIM-TA',
                    'keyword' => 'SIM-TA',
                ]);
            $response->assertStatus(201);
    }

    public function testLihatriset()
    {
        $this->withExceptionHandling();
        $user = User::where('role','dosen')->first();
            $response = $this->actingAs($user)
                ->get(url('api/riset'));
            $response->assertStatus(200);
    }

    public function testEditriset()
    {
        $user = User::where('role', 'dosen')->first();
            $response = $this->actingAs($user)
                ->post(url('api/riset'), [
                    'nama_riset' => 'Pengembangan SIM-TA',
                    'bidang_riset' => 'Software',
                    'note' => 'SIM-TA',
                    'keyword' => 'SIM-TA',
                ]);
            $response->assertStatus(200);
    }

    public function testDeleteriset()
    {
        $user = User::where('role','dosen')->first();
        $response = $this->actingAs($user)->get(url('api/riset'));
        $response->assertStatus(200);
    }

}

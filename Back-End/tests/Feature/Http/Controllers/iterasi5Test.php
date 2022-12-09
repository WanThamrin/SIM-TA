<?php

namespace Tests\Feature\Http\Controllers;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use Illuminate\Http\UploadedFile;

use App\Models\User;
use Tests\TestCase;

class iterasi5Test extends TestCase
{

    use WithFaker;

    public function testCreatenilai()
    {
        $user = User::where('role', 'dosen')->first();
            $response = $this->actingAs($user)
                ->post(url('api/nilai-sempro'), [
                    'nilai1' => '8',
                    'nilai2' => '8',
                    'nilai3' => '8',
                    'nilai4' => '8',
                    'nilai5' => '8',
                    'note' => 'Perfect',

                ]);
            $response->assertStatus(200);
    }

    public function testLihatnilai()
    {
        $this->withExceptionHandling();
        $user = User::where('role','dosen')->first();
            $response = $this->actingAs($user)
                ->get(url('api/nilai-sempro'));
            $response->assertStatus(200);
    }

    public function testEditnilai()
    {
        $user = User::where('role', 'dosen')->first();
            $response = $this->actingAs($user)
                ->post(url('api/nilai-sempro'), [
                    'nilai1' => '8',
                    'nilai2' => '8',
                    'nilai3' => '8',
                    'nilai4' => '8',
                    'nilai5' => '8',
                    'note' => 'Perfect',
                ]);
            $response->assertStatus(200);
    }

    public function testDeletenilai()
    {
        $user = User::where('role','dosen')->first();
        $response = $this->actingAs($user)->get(url('api/nilai-sempro'));
        $response->assertStatus(200);
    }

}

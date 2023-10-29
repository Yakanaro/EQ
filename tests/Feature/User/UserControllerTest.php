<?php

namespace Tests\Feature\User;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    public function testIndex(): void
    {
        $user = User::factory()->create([
            'password' => Hash::make('password'),
        ]);
        
        $this->actingAs($user);
        
        $response = $this->withHeaders([
            'Accept' => 'application/json',
        ])->get(route('users.index'));

        $response->assertStatus(200);
        $response->assertViewIs('user.index');
    }
}

<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Bride;
use App\Models\Groom;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateWeddingHallTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function users_can_create_groom()
    {
        $this->withoutExceptionHandling();
        $response = $this->json('POST', '/api/grooms', [
            'name' => 'Testing Name',
            'phone_number' => '010-1234-5678',
            'bank_name' => '카카오뱅크',
            'account_number' => '3333025641396',
        ]);

        $groom = Groom::first();

        $this->assertCount(1, Groom::all());
        $this->assertEquals('Testing Name', $groom->name);
        $this->assertEquals('010-1234-5678', $groom->phone_number);
        $this->assertEquals('카카오뱅크', $groom->bank_name);
        $this->assertEquals('3333025641396', $groom->account_number);
        $response->assertStatus(201)
            ->assertJson([
                'data' => [
                    'type' => 'grooms',
                    'name' => 'Testing Name',
                    'phone_number' => '010-1234-5678',
                    'bank_name' => '카카오뱅크',
                    'account_number' => '3333025641396',
                ],
                'links' => [
                    'self' => url('/grooms/'.$groom->id),
                ]
            ]);
    }

    /** @test */
    function users_can_create_bride()
    {
        $this->withoutExceptionHandling();
        $response = $this->json('POST', '/api/brides', [
            'name' => 'Testing Name',
            'phone_number' => '010-1234-5678',
            'bank_name' => '카카오뱅크',
            'account_number' => '3333025641396',
        ]);

        $bride = Bride::first();

        $this->assertCount(1, Bride::all());
        $this->assertEquals('Testing Name', $bride->name);
        $this->assertEquals('010-1234-5678', $bride->phone_number);
        $this->assertEquals('카카오뱅크', $bride->bank_name);
        $this->assertEquals('3333025641396', $bride->account_number);
        $response->assertStatus(201)
            ->assertJson([
                'data' => [
                    'type' => 'brides',
                    'name' => 'Testing Name',
                    'phone_number' => '010-1234-5678',
                    'bank_name' => '카카오뱅크',
                    'account_number' => '3333025641396',
                ],
                'links' => [
                    'self' => url('/brides/'.$bride->id),
                ]
            ]);
    }

    /** @test */
    function users_can_create_wedding_hall()
    {
        $response = $this->post('/api/wedding-hall', [
            'title' => 'Testing Title',
            'subtitle' => 'Testing Subtitle',
            'location' => '부산 동구 조방로 14',
            'start_time' => '2021-06-20 12:30',
            'live_Time' => '90',
            'greetings' => '평생을 같이하고 싶은 사람을 만났습니다',
        ]);
        $response->assertStatus(200);
    }
}
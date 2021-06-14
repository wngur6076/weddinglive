<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Bride;
use App\Models\Groom;
use App\Models\WeddingHall;
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
                    'groom_id' => $groom->id,
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
                    'bride_id' => $bride->id,
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
        $this->withoutExceptionHandling();
        $groom = Groom::factory()->create();
        $bride = Bride::factory()->create();

        $response = $this->post('/api/wedding-halls', [
            'title' => 'Testing Title',
            'subtitle' => 'Testing Subtitle',
            'location' => '부산 동구 조방로 14',
            'start_time' => '2021-06-20 12:30',
            'live_time' => 60,
            'greetings' => '평생을 같이하고 싶은 사람을 만났습니다',
            'groom_id' => $groom->id,
            'bride_id' => $bride->id,
        ]);

        $wedding_hall = WeddingHall::first();

        $this->assertCount(1, WeddingHall::all());
        $this->assertEquals('Testing Title', $wedding_hall->title);
        $this->assertEquals('Testing Subtitle', $wedding_hall->subtitle);
        $this->assertEquals('부산 동구 조방로 14', $wedding_hall->location);
        $this->assertEquals('2021-06-20 12:30:00', $wedding_hall->start_time);
        $this->assertEquals(60, $wedding_hall->live_time);
        $this->assertEquals('평생을 같이하고 싶은 사람을 만났습니다', $wedding_hall->greetings);
        $response->assertStatus(201)
            ->assertJson([
                'data' => [
                    'type' => 'wedding-halls',
                    'wedding_hall_id' => $wedding_hall->id,
                    'title' => 'Testing Title',
                    'subtitle' => 'Testing Subtitle',
                    'location' => '부산 동구 조방로 14',
                    'date' => '2021년 06월 20일 일요일',
                    'start_time' => 'PM 12시 30분',
                    'end_time' => 'PM 13시 30분',
                    'greetings' => '평생을 같이하고 싶은 사람을 만났습니다',
                    'groom_by' => [
                        'data' => [
                            'groom_id' => $groom->id,
                            'name' => $groom->name,
                            'phone_number' => $groom->phone_number,
                            'bank_name' => $groom->bank_name,
                            'account_number' => $groom->account_number,
                        ],
                    ],
                    'bride_by' => [
                        'data' => [
                            'bride_id' => $bride->id,
                            'name' => $bride->name,
                            'phone_number' => $bride->phone_number,
                            'bank_name' => $bride->bank_name,
                            'account_number' => $bride->account_number,
                        ],
                    ],
                ],
                'links' => [
                    'self' => url('/wedding-halls/'.$wedding_hall->id),
                ]
            ]);
    }
}
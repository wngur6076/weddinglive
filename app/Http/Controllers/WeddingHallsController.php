<?php

namespace App\Http\Controllers;

use App\Http\Resources\WeddingHallResource;
use Carbon\Carbon;
use App\Models\WeddingHall;
use Illuminate\Http\Request;

class WeddingHallsController extends Controller
{
    public function store()
    {
        $wedding_hall = WeddingHall::create([
            'title' => request('title'),
            'subtitle' => request('subtitle'),
            'location' => request('location'),
            'start_time' => request('start_time'),
            'live_time' => request('live_time'),
            'greetings' => request('greetings'),
            'groom_id' => request('groom_id'),
            'bride_id' => request('bride_id'),
        ]);

        return new WeddingHallResource($wedding_hall);
    }
}
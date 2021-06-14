<?php

namespace App\Http\Resources;

use App\Http\Resources\BrideResource;
use App\Http\Resources\GroomResource;
use Illuminate\Http\Resources\Json\JsonResource;

class WeddingHallResource extends JsonResource
{
    public function toArray($request)
    {
        $week = array("일요일" , "월요일"  , "화요일" , "수요일" , "목요일" , "금요일" ,"토요일") ;

        return [
            'data' => [
                'type' => 'wedding-halls',
                'wedding_hall_id' => $this->id,
                'title' => $this->title,
                'subtitle' =>  $this->subtitle,
                'location' => $this->location,
                'date' => $this->start_time->format('Y년 m월 d일 ').$week[$this->start_time->dayOfWeek],
                'start_time' => $this->start_time->format('A H시 i분'),
                'end_time' => $this->start_time->addMinute($this->live_time)->format('A H시 i분'),
                'greetings' => $this->greetings,
                'groom_by' => new GroomResource($this->groom),
                'bride_by' => new BrideResource($this->bride),
            ],
            'links' => [
                'self' => url('/wedding-halls/'.$this->id),
            ]
        ];
    }
}
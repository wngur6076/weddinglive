<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GroomResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'data' => [
                'type' => 'grooms',
                'groom_id' => $this->id,
                'name' => $this->name,
                'phone_number' => $this->phone_number,
                'bank_name' => $this->bank_name,
                'account_number' => $this->account_number,
            ],
            'links' => [
                'self' => url('/grooms/'.$this->id),
            ]
        ];
    }
}
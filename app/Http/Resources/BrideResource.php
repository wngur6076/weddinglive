<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BrideResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'data' => [
                'type' => 'brides',
                'bride_id' => $this->id,
                'name' => $this->name,
                'phone_number' => $this->phone_number,
                'bank_name' => $this->bank_name,
                'account_number' => $this->account_number,
            ],
            'links' => [
                'self' => url('/brides/'.$this->id),
            ]
        ];
    }
}
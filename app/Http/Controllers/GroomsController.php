<?php

namespace App\Http\Controllers;

use App\Models\Groom;
use App\Http\Resources\GroomResource;

class GroomsController extends Controller
{
    public function store()
    {
        $groom = Groom::create([
            'name' => request('name'),
            'phone_number' => request('phone_number'),
            'bank_name' => request('bank_name'),
            'account_number' => request('account_number'),
        ]);

        return new GroomResource($groom);
    }
}
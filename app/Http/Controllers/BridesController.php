<?php

namespace App\Http\Controllers;

use App\Models\Bride;
use App\Http\Resources\BrideResource;

class BridesController extends Controller
{
    public function store()
    {
        $bride = Bride::create([
            'name' => request('name'),
            'phone_number' => request('phone_number'),
            'bank_name' => request('bank_name'),
            'account_number' => request('account_number'),
        ]);

        return new BrideResource($bride);
    }
}
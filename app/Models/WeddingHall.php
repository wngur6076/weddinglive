<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeddingHall extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $dates = ['start_time'];

    public function groom()
    {
        return $this->hasOne(Groom::class , 'id', 'groom_id');
    }

    public function bride()
    {
        return $this->hasOne(Bride::class, 'id', 'bride_id');
    }
}
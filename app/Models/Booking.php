<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    protected $filleable = [
        'guest',
        'picture',
        'order_date',
        'check_in',
        'check_out',
        'discount',
        'notes',
        'room_id',
        'status'
    ];

    public function rooms() :BelongsTo{
        return $this->belongsTo(Room::class);
    }
}

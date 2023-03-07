<?php

namespace App\Domains\Reservations\ValueObjects;

use App\Domains\Hotels\Models\Hotel;
use App\Domains\Hotels\Models\Room;

class ReservationData
{
    public function __construct(Hotel $hotel, Room $room, DateRange $dateRange)
    {

    }
}

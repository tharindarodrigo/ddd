<?php

namespace App\Domains\Hotels\Actions;

use App\Domains\Reservations\Reservation;
use App\Domains\Reservations\ValueObjects\ReservationData;

class ReserveHotel
{
    public static function execute(ReservationData $reservationData): Reservation
    {
        return Reservation::create($reservationData);
    }
}

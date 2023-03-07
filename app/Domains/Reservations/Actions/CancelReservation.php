<?php

namespace App\Domains\Reservations\Actions;

use App\Domains\Reservations\Reservation;

class CancelReservation
{
    public static function execute(Reservation $reservation): Reservation
    {
        $reservation->cancel();

        return $reservation;
    }
}

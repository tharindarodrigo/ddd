<?php

namespace App\Domains\Reservations\States;

class CancelledReservationStatus extends ReservationStatus
{
    public function canBeChanged(): bool
    {
        return false;
    }
}

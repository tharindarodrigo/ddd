<?php

namespace App\Domains\Reservations\States;

class ReservedReservationStatus extends ReservationStatus
{
    public function canBeChanged(): bool
    {
        return true;
    }
}

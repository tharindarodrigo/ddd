<?php

namespace App\Domains\Reservations\States;

class PendingReservationStatus extends ReservationStatus
{
    public function canBeChanged(): bool
    {
        return true;
    }
}

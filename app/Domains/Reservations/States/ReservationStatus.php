<?php

namespace App\Domains\Reservations\States;

use App\Domains\Reservations\Reservation;

abstract class ReservationStatus
{

    public function __construct(protected Reservation $reservation)
    {
    }

    abstract public function canBeChanged(): bool;

}

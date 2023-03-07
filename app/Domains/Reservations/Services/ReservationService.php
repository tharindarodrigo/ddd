<?php

namespace App\Domains\Reservations\Services;

use App\Domains\Reservations\Reservation;
use App\Domains\Reservations\ValueObjects\ReservationData;

class ReservationService
{
    public function create(ReservationData $data): Reservation
    {
        $reservation = Reservation::create($data);
        $this->makePayment($reservation);

        return $reservation;
    }

    public function makePayment(Reservation $reservation): void
    {

    }
}

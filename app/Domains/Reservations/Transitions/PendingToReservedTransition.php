<?php

namespace App\Domains\Reservations\Transitions;

use App\Domains\Reservations\Reservation;
use App\Domains\Reservations\States\PendingReservationStatus;
use App\Domains\Reservations\States\ReservedReservationStatus;
use App\Domains\Shared\Transitions\Transition;
use Exception;

class PendingToReservedTransition implements Transition
{

    public function execute(Reservation $reservation): Reservation
    {
        if ($reservation->state::class !== PendingReservationStatus::class) {
            throw new Exception('Transition not allowed');
        }

        $reservation->status = ReservedReservationStatus::class;
        $reservation->save();

        return $reservation;
    }
}

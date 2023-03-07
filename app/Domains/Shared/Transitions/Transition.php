<?php

namespace App\Domains\Shared\Transitions;

use App\Domains\Reservations\Reservation;
use Exception;

interface Transition
{
    /**
     * @throws Exception
     */
    public function execute(Reservation $reservation): Reservation;
}

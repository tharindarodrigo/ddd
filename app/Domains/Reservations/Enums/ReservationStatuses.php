<?php

namespace App\Domains\Reservations\Enums;

use App\Domains\Reservations\Reservation;
use App\Domains\Reservations\States\CancelledReservationStatus;
use App\Domains\Reservations\States\PendingReservationStatus;
use App\Domains\Reservations\States\ReservationStatus;
use App\Domains\Reservations\States\ReservedReservationStatus;

enum ReservationStatuses: string
{
    case RESERVED = 'reserved';
    case PENDING = 'pending';
    case CANCELLED = 'cancelled';

    public function createReservationStatus(Reservation $reservation): CancelledReservationStatus|PendingReservationStatus|ReservedReservationStatus
    {
        return match ($this) {
            ReservationStatuses::PENDING => new PendingReservationStatus($reservation),
            ReservationStatuses::RESERVED => new ReservedReservationStatus($reservation),
            ReservationStatuses::CANCELLED => new CancelledReservationStatus($reservation)
        };
    }
}

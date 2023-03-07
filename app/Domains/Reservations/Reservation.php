<?php

namespace App\Domains\Reservations;

use App\Domains\Hotels\Models\Hotel;
use App\Domains\Hotels\Models\Room;
use App\Domains\Reservations\Enums\ReservationStatuses;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reservation extends Model
{

    public function status(): Attribute
    {
        return new Attribute(
            get: fn(string $value) =>
                ReservationStatuses::from($value)->createOrderStatus($this),
        );
    }

    public function hotel(): BelongsTo
    {
        return $this->belongsTo(Hotel::class);
    }

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }
}

<?php

namespace App\Domains\Reservations\ValueObjects;

use Illuminate\Support\Carbon;

class DateRange
{
    public function __construct(
        public readonly Carbon $from,
        public readonly Carbon $to
    ) {}

    public static function from(Carbon $from, Carbon $to): DateRange
    {
        return new self($from, $to);
    }
}

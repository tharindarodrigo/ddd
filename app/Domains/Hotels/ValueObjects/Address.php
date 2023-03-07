<?php

namespace App\Domains\Hotels\ValueObjects;
class Address
{
    public function __construct(
        public readonly string $number,
        public readonly string $address,
        public readonly string $city,
        public readonly string $postalCode,
    ) {}

    public static function from($number, $address, $city, $postalCode): Address
    {
        return new self(
            $number,
            $address,
            $city,
            $postalCode,
        );
    }
}

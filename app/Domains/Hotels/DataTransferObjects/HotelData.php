<?php

namespace App\Domains\Hotels\DataTransferObjects;

use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class HotelData
{
    public function __construct(
        public readonly ?int       $id,
        public readonly string     $name,
        public readonly string     $number,
        public readonly string     $address,
        /** @var Collection<RoomData> */
        public readonly Collection $rooms,
        /** @var Collection<int> */
        public readonly Collection $amenity_ids
    )
    {
    }

    public static function fromArray(array $data): self
    {
        $rooms = collect($data['rooms'])
            ->map(fn(array $room) => RoomData::fromArray($room));

        return new self(
            Arr::get($data, 'id'),
            $data['name'],
            $data['number'],
            $data['address'],
            $rooms,
            collect($data['amenity_ids'])
        );
    }
}

<?php

namespace App\Domains\Hotels\Services;

use App\Domains\Hotels\DataTransferObjects\HotelData;
use App\Domains\Hotels\Models\Hotel;
use Illuminate\Database\Eloquent\Collection;

class HotelService
{
    public function create(HotelData $data): Hotel
    {
        $hotel = Hotel::create($data->all());
        $this->createRooms($hotel, $data->rooms);

        return $hotel;
    }

    public function createRooms(Hotel $hotel, Collection $rooms): void
    {
        foreach ($rooms as $room) {
            $hotel->rooms()->create($room);
        }
    }
}

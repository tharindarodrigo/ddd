<?php

namespace App\Domains\Hotels\Actions;

use App\Domains\Hotels\DataTransferObjects\HotelData;
use App\Domains\Hotels\Models\Hotel;

class CreateHotelAction
{
    public static function execute(HotelData $hotelData): Hotel
    {
        return $hotelData = Hotel::create($hotelData->all());
    }
}

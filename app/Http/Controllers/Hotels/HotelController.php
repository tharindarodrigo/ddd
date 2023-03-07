<?php

namespace App\Http\Controllers\Hotels;

use App\Domains\Hotels\DataTransferObjects\HotelData;
use App\Domains\Hotels\Models\Hotel;
use App\Domains\Hotels\Services\HotelService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HotelController extends Controller
{
//    public function store(Request $request)
//    {
//        $hotel = Hotel::create($request->except('rooms', 'amenity_ids'));
//
//        foreach ($request->get('rooms') as $room) {
//            $hotel->rooms()->create($room);
//        }
//
//        foreach ($request->get('amenity_ids') as $amenity_id) {
//            $hotel->amenities()->attach($amenity_id);
//        }
//
//        return $hotel;
//    }

    public function store(Request $request, HotelService $hotelService): Hotel
    {
        return $hotelService->create(HotelData::fromArray($request->all()));
    }
}

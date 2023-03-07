<?php

namespace App\Domains\Hotels;

use App\Domains\Hotels\DataTransferObjects\HotelData;
use App\Domains\Hotels\Models\Hotel;
use Illuminate\Database\Eloquent\Collection;

class HotelRepository
{
    public function create(HotelData $data): Hotel
    {
        return Hotel::create($data::all());
    }

    public function search(string $searchTerm): Collection
    {
        return Hotel::query()
            ->where('name', 'like', "%{$searchTerm}%")
            ->limit(10)
            ->get();
    }
}

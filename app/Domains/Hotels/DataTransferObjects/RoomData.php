<?php

namespace App\Domains\Hotels\DataTransferObjects;

use Illuminate\Support\Arr;

class RoomData
{
    public function __construct(
        public readonly ?int         $id,
        public readonly string       $title,
        public readonly string       $description,
    )
    {
    }

    public static function fromArray(array $data): self
    {
        return new self(
            Arr::get($data, 'id'),
            $data['title'],
            $data['description'],
        );
    }
}

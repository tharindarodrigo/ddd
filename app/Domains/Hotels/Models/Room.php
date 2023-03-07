<?php

namespace App\Domains\Hotels\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Room extends Model
{
    public function hotel(): BelongsTo
    {
        return $this->belongsTo(Hotel::class);
    }
}

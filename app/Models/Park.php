<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Storage;

class Park extends Model
{
    protected $guarded = [];

    public function getImageAttribute($value): ?string
    {
        if($value)
            // return asset('storage/'.$value);
            return Storage::disk('s3')->url($value);
        return null;
    }

    public function divisions(): BelongsToMany
    {
        return $this->belongsToMany(Division::class);
    }
}

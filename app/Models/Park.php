<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Park extends Model
{
    protected $guarded = [];

    public function divisions(): BelongsToMany
    {
        return $this->belongsToMany(Division::class);
    }
}

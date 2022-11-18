<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Division extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function districts():HasMany
    {
        return $this->hasMany(District::class);
    }
    public function thanas():HasOne
    {
        return $this->hasOne(Thana::class);
    }

}

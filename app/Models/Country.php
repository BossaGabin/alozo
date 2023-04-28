<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{
    public function artisan(): HasMany
    {
        return $this->hasMany(Artisan::class);
    }
    use HasFactory;
}

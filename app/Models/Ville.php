<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ville extends Model
{
    use HasFactory;
    
    public function artisan(): HasMany
    {
        return $this->hasMany(Artisan::class);
    }
    public function annonce(): HasMany
    {
        return $this->hasMany(Annonce::class);
    }
    public function ville(): HasMany
    {
        return $this->hasMany(Ville::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categorie extends Model
{
    use HasFactory;
    protected  $fillable = ['name'];

    public function artisan(): HasMany
    {
        return $this->hasMany(Artisan::class);
    }
}

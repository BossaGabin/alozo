<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ArtisanHasFile extends Model
{
    use HasFactory;
    protected $fillable = ['path', 'artisan_id'];

    public function artisan(): BelongsTo
    {
        return $this->belongsTo(Artisan::class);
    }
}

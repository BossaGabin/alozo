<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AnnonceHasFile extends Model
{
    use HasFactory;
    protected $fillable = ['path', 'annonce_id'];


    public function annonce(): BelongsTo
    {
        return $this->belongsTo(Annonce::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Categorie;

class Annonce extends Model
{
    use HasFactory;
    protected $fillable = ['title','budget','deadline','categorie_id','content'];

    public function categorie(): BelongsTo
    {
        return $this->belongsTo(Categorie::class);
    }
}

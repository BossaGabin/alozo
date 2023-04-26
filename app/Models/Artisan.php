<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Artisan extends Model
{
    use HasFactory;
    protected $fillable = ['name','phone','email','ID_number','certificate','categorie_id','ville_id','adresse',''];
    
    
    public function categorie(): BelongsTo
    {
        return $this->belongsTo(Categorie::class);
    }
    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}

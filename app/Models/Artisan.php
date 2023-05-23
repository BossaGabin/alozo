<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artisan extends Model
{
    use HasFactory;
    protected $fillable = ['name','phone','email','ID_number','certificate','categorie_id','ville_id','adresse','user_id','role_id'];
    
    
    public function categorie(): BelongsTo
    {
        return $this->belongsTo(Categorie::class);
    }

    public function ville(): BelongsTo
    {
        return $this->belongsTo(Ville::class);
    }
    
    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }

    public function ratings(): HasMany
    {
        return $this->hasMany(Ratings::class, 'artisan_id');
    }

    public function devis(): HasMany
    {
        return $this->hasMany(Devis::class, 'artisans_id');
    }
    public function artisanHasFile(): HasMany
    {
        return $this->hasMany(artisanHasFile::class);
    } 

   
}

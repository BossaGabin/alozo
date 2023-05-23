<?php

namespace App\Models;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Annonce extends Model
{
    use HasFactory;
    protected $fillable = ['title','budget','deadline','categorie_id','content','ville_id','user_id'];

    public function categorie(): BelongsTo
    {
        return $this->belongsTo(Categorie::class);
    } 
    

    public function annonceHasFile(): HasMany
    {
        return $this->hasMany(AnnonceHasFile::class);
    } 
    
    
    public function ville(): BelongsTo
    {
        return $this->belongsTo(Ville::class);
    }


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    } 


    public function devis(): HasMany
    {
        return $this->hasMany(Devis::class, 'annonces_id');
    }
   
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Devis extends Model
{
    use HasFactory;
    protected $fillable = ['price','delivery_date','content','artisans_id','annonces_id'];

    public function annonce(): BelongsTo
    {
        return $this->belongsTo(Annonce::class, 'annonces_id');
    } 
    public function artisan(): BelongsTo
    {
        return $this->belongsTo(Artisan::class, 'annonces_id');
    } 

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Annonce extends Model
{
    use HasFactory;
    protected $fillable = ['title','budget','deadline','categories_id','content'];

    public function user() : BelongsTo
    {        
        return $this->belongsTo(User::class);
    }
}

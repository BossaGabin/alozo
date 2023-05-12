<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DevisHasFile extends Model
{
    use HasFactory;

    protected $fillable = ['path', 'devis_id'];
}

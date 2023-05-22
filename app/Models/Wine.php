<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'annata', 'cantina', 'colore', 'tipologia', 'gradazione', 'estratto', 'acidita'];
}

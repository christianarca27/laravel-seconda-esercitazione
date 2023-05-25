<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'cantina_id', 'annata', 'colore', 'tipologia', 'gradazione', 'estratto', 'acidita'];

    public function winery()
    {
        return $this->belongsTo(Winery::class, 'cantina_id');
    }

    public function vines()
    {
        return $this->belongsToMany(Vine::class);
    }
}

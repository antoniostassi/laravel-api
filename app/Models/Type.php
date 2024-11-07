<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'color'
    ];

    public function pokemons() {
        return $this->belongsToMany(Pokemon::class); // Many to Many
    }
}

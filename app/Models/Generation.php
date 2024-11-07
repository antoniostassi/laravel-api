<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Generation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'year'
    ];

    public function pokemons() {
        return $this->hasMany(Pokemon::class); // Many to One
    }
}

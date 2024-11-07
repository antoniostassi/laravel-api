<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'picture',
        'weight',
        'height',
        'sex',
        'generation_id'
    ];

    public function generation() {
        return $this->belongsTo(Generation::class); // One to Many
    }

    public function types() {
        return $this->belongsToMany(Type::class); // Many to Many
    }
}

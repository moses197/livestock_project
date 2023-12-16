<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    protected $fillable = [
        'name',
    ];

    public function animal()
    {
        return $this->belongsTo(Animal::class);
    }
    // use HasFactory;
}

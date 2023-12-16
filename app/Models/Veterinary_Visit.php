<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veterinary_Visit extends Model
{
    protected $fillable = [
        'animal_id', 'visit_date', 'diagnosis',
    ];

    public function animal() {
        return $this->belongsTo(Animal::class);
    }
    // use HasFactory;
}

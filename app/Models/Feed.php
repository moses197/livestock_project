<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    protected $fillable = [
        'animal_id', 'feeding_date', 'amount_consumed',
    ];

    public function animal()
    {
        return $this->belongsTo(Animal::class);
    }
    // use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'animal_id', 'event_type', 'event_date', 'details',
    ];

    public function animal()
    {
        return $this->belongsTo(Animal::class);
    }
    // use HasFactory;
}
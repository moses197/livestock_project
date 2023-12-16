<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = [
        'breed', 'gender', 'birth_date', 'birth_weight', 'dam_id', 'photo_url',
    ];

    public function events()
    {
        return $this->hasMany(Event::class);
    }
    // use HasFactory;
}

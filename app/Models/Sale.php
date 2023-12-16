<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        'animal_id', 'sale_date', 'sale_price',
    ];

    public function animal() {
        return $this->belongsTo(Animal::class);
    }
    // use HasFactory;
}

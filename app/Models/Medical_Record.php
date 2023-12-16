<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medical_Record extends Model
{
    protected $fillable = [
        'animal_id', 'record_date', 'description',
    ];

    public function animal() {
        return $this->belongsTo(Animal::class);
    }
    // use HasFactory;
}

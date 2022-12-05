<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'pet_id', 'type', 'place', 'date', 'time', 'active',
    ];

    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }
}

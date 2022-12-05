<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'alias', 'type', 'male', 'dateBirthdDay', 'race',
        'published_at', 'published',
    ];

    public function aplications()
    {
      return $this->hasMany(Aplication::class);
    }
}

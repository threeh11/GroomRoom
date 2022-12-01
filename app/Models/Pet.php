<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'alias', 'type', 'male', 'dateBirthdDay', 'race',
        'published_at', 'published', 'category_id',
    ];

    public function category()
    {
      return $this->belongsTo(Category::class);
    }
}

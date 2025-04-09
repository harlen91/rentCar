<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motorcycle extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'location_id',
        'description',
        'price_per_day',
        'image',
        'is_available'
    ];

    // Relasi dengan Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relasi dengan Rentals
    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
}

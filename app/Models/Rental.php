<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'motorcycle_id',
        'start_date',
        'end_date',
        'total_price',
        'status'
    ];

    // Relasi dengan User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi dengan Motorcycle
    public function motorcycle()
    {
        return $this->belongsTo(Motorcycle::class);
    }

    // Relasi dengan Payments
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}

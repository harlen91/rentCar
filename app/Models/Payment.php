<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'rental_id',
        'amount',
        'payment_method',
        'transaction_id',
        'payment_date'
    ];

    // Relasi dengan Rental
    public function rental()
    {
        return $this->belongsTo(Rental::class);
    }
}

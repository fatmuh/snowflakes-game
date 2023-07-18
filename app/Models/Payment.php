<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payment';
    protected $fillable = [
        'product_id',
        'user_id',
        'user_game',
        'payment_type',
        'proof_of_payment',
        'customer_name',
        'account_number',
        'phone',
        'email',
        'status',
        'price',
    ];

    protected $hidden;

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}

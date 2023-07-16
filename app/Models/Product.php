<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $fillable = [
        'game_id',
        'name',
        'price',
    ];

    protected $hidden;

    public function game()
    {
        return $this->belongsTo(Game::class, 'game_id', 'id');
    }

    public function payment()
    {
        return $this->hasOne(Payment::class, 'product_id');
    }
}

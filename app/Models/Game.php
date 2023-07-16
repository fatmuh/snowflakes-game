<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $table = 'game';
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
    ];

    protected $hidden;

    public function product()
    {
        return $this->hasOne(Product::class, 'game_id');
    }
}

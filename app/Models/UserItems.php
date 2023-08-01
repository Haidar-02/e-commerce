<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserItems extends Model
{
    use HasFactory;
    protected $table = 'user_items';

    protected $fillable = [
        'user_id',
        'item_id',
        'is_favorite',
        'is_in_cart',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
    public function items()
    {
        return $this->belongsToMany(Item::class, 'cart_items', 'user_id', 'item_id')
            ->withPivot('is_favorite', 'is_in_cart');
    }
}

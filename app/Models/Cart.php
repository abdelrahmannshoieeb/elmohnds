<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function cartitems()
    {
        return $this->hasMany(CartItem::class);
    }

    public function order ()
    {
        return $this->hasOne(Order::class);
    }
}

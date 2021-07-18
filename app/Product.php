<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'ingredients',
        'description',
        'type',
        'price',
        'availability',
        'restaurant_id',
    ];

    public function orders() {

        return $this-> belongsToMany(Product::class);
    }

    public function restaurant() {

        return $this-> belongsTo(Restaurant::class);
    }
}

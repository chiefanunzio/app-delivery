<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
            'name',
            'lastname',
            'address',
            'email',
            'amount',
        ];
            

    public function products() {

        return $this->belongsToMany(Product::class);
    }
}

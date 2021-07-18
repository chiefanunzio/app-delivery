<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = [
        'name',
        'address',
        'city',
        'telephone',
        'pIva',
        'img',
        'deleted',
        'user_id',
    ];

    public function categories() {

        return $this->belongsToMany(Category::class);
    }

    public function products() {

        return $this-> hasMany(Product::class);
    }

    public function user() {

        return $this-> belongsTo(User::class);
    }
}

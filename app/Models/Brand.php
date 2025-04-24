<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Brand extends Model
{
    protected $table = 'brands';
    protected $fillable = ['brandname', 'description', 'show'];
    protected $attributes = [
        'description' => '',
        'show' => 1
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'brandid');
    }
}
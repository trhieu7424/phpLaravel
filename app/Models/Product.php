<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['proname', 'price', 'description', 'cateld', 'brandid'];

    protected $attributes = [
        'description' => 'Chưa có mô tả',
        'price' => 0,
    ];
    
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brandid');
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class, 'cateld');
    }
}
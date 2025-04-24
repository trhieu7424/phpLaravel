<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $primaryKey = 'cateid';
    public $timestamps = true;
    protected $fillable = ['catename', 'description'];
    
    public function products()
    {
        return $this->hasMany(Product::class, 'cateid');
    }
}
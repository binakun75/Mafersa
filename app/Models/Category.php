<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Product;

class Category extends Model
{
    use HasFactory;

    //relacion de uno a muchos 
    public function product(){
        return $this->hasMany(Product::class);
    }
}

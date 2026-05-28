<?php

/*
 * Modelo Product.
 * Representa un producto del inventario y su relación con una categoría.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    protected $fillable = ['description', 'stock', 'price', 'category_id'];
    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}

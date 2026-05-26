<?php

/*
 * Modelo Category.
 * Representa una categoría y permite acceder a todos sus productos.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {
    protected $fillable = ['name'];
    public function products() {
        return $this->hasMany(Product::class);
    }
}
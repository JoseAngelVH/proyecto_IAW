<?php

/*
 * Modelo Sale.
 * Registra cada venta realizada de un producto.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model {
    protected $fillable = ['product_id', 'quantity', 'unit_price', 'total_price'];

    public function product() {
        return $this->belongsTo(Product::class);
    }
}

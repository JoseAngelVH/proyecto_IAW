<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Product;

class SaleController extends Controller
{
    public function index()
    {
        $sales = Sale::with('product')->orderBy('created_at', 'desc')->get();
        $products = Product::orderBy('description')->get();
        return view('sales.index', compact('sales', 'products'));
    }
}

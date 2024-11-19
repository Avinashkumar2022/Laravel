<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        DB::table('products')->insert([
            'name' => $request->name,
            'price' => $request->price
        ]);
        
        return redirect('/add-product');
    }
    public function totalPrice()
    {
        $total = DB::table('products')->sum('price');
        return view('total-price', compact('total'));
    }
}

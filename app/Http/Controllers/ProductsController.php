<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function show()
    {
      $products = Product::paginate(8);
      return view('products', ['products' => $products]);
    }

    public function create() {
      return view('create');
    }

    public function store(Request $request) {
    $rules = [
        "name" => "required|unique:products",
        "cost" => "required|numeric",
        "profit_margin" => "required|numeric",
        "category_id" => "required|numeric|between:1,3"
    ];

    $messages = [
        "required" => "El :attribute es requerido!",
        "unique" => "El :attribute ya esta siendo utilizado!",
        "numeric" => "El :attribute debe ser un número!",
        "between" => "El :attribute tiene que estar entre :min y :max."
    ];

    $request->validate($rules, $messages);

    $extensionImagen = $request->file('product')->getClientOriginalExtension();

    $products = $request->file('product')->storeAs('products', uniqid() . "." . $extensionImagen, 'public');

    $product = \App\Product::create([
        'name' => $request->input('name'),
        'cost' => $request->input('cost'),
        'profit_margin' => $request->input('profit_margin'),
        'product' => $products
    ]);

    $category = \App\Category::find($request->input('category_id'));

    $product->properties()->sync($request->input('properties'));
    $product->category()->associate($category);
    $product->save();

    return redirect('/products');
}
}

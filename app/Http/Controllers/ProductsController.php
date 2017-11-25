<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function show()
    {
      $products = \App\Product::All();
      return view('products', [
        'products' => $products,
    ]);
    }

    public function add()
    {
      return view('addproduct');
    }

    public function store(Request $request) {
        $rules = [
            "name" => "required",
            "description" => "required"
        ];

        $messages = [
            "required" => "El :attribute es requerido!"
        ];

        $request->validate($rules, $messages);

        $extensionImagen = $request->file('imgpath')->getClientOriginalExtension();

        $fotoPath = $request->file('imgpath')->storeAs('products', uniqid() . "." . $extensionImagen, 'public');

        $product = \App\Product::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'imgpath' => $fotoPath
        ]);

        return redirect('/products');
    }

    public function edit($id) {
        $product = \App\Product::find($id);


        $variables = [
            'product' => $product,
        ];

        return view('editproduct', $variables);
    }

    public function update(Request $request, $id) {
        $product = \App\Product::find($id);

        $extensionImagen = $request->file('imgpath')->getClientOriginalExtension();

        $fotoPath = $request->file('imgpath')->storeAs('products', uniqid() . "." . $extensionImagen, 'public');

        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->imgpath = $fotoPath;
        $product->save();

        return redirect('/product/' . $id);
    }

    public function destroy($id) {
    $product = \App\Product::find($id);

    $product->delete();

    return redirect('/products');
    }

    public function info($id){
      $product = \App\Product::find($id);
      return view('/product', [
        'product' => $product
      ]);
    }
}

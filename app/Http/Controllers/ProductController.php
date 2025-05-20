<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
      $products = Product::all();
      return view('products.index',['products' => $products]);
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
      $data = $request->validate([
        'name'=>'required',
        'gender'=>'required',
        'department'=>'required',
        'title' => 'nullable'
      ]);
      
      $newproduct = product::create($data);
      return redirect(route('products.index'));
    }

    public function edit(Product $product){
      return view('products.edit',['product'=>$product]);
    }

    public function update(Product $product, Request $request){
      $data = $request->validate([
        'name'=>'string|required',
        'gender'=>'required',
        'department'=>'string|required',
        'title' => 'nullable'
      ]);

      $product->update($data);
      return redirect(route('products.index'))->with('success', 'customer update successfully');
     }

     public function gone(Product $product){
      $product->delete();
      return redirect(route('products.index'))->with('success', 'customer delete successfully');
    }

    public function show(Product $product){
    return view('products.show', ['product' => $product]);
    }
}


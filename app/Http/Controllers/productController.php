<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product; 

class productController extends Controller
{
    public function index()
    {
        $data['products'] = Product::all();
        return view('products', $data);
    }

    public function submit(Request $request)
    {
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ];
        Product::insert($data);
        return redirect()->route('products.table');
    }

    public function delete($id)
    {
        Product::where('id', $id)->delete();
        return redirect()->route('products.table');
    }
    public function edit($id)
    {
        $data['product'] = Product::find($id);
        return view('product_edit', $data);
    }
    public function update(Request $request, $id)
    {
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ];
        Product::where('id', $id)->update($data);
        return redirect()->route('products.table');
}
}

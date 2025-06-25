<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\category;   

class CategoryController extends Controller
{
    public function index()
    {
        $data['categories'] = category::all();
        return view('categories', $data);
    }

    public function submit(Request $request)
    {
        $data = [
            'name' => $request->name,
            'description' => $request->description,
        ];
        \App\Category::insert($data);
        return redirect()->route('categories.table');

    }
    public function delete($id)
    {
        $category = category::find($id);
        if ($category) {
            $category->delete();
        }
        return redirect()->route('categories.table');
    }
    public function edit($id)
    {
        $category = category::find($id);
        if ($category) {
            return view('categories_edit', ['category' => $category]);
        }
        return redirect()->route('categories.table');
    }
    public function update(Request $request, $id)
    {
        $category = category::find($id);
        if ($category) {
            $category->name = $request->name;
            $category->description = $request->description;
            $category->save();
        }
        return redirect()->route('categories.table');
    }

}
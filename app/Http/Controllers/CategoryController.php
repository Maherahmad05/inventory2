<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categorys = Category::all();
        return view('category.index', compact('categorys'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        Category::create($request->all());
        return redirect()->back();
    }
    
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        
        $category->update($request->all());
        return redirect()->back();

    }

    public function delete(Request $request,$id)
    {
        $category = Category::findOrFail($id);

        $category->delete($request->all());
        return redirect()->back();
    }

}

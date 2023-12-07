<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('brand.index', compact('brands'));
    }

    public function create()
    {
        return view('brand.create');
    }

    public function store(Request $request)
    {
        Brand::create($request->all());
        return redirect()->back();
    }
    
    public function edit($id)
    {
        $brand = Brand::findOrFail($id);
        return view('brand.edit', compact('brand'));
    }

    public function update(Request $request, $id)
    {
        $brand = Brand::findOrFail($id);
        
        $brand->update($request->all());
        return redirect()->back();

    }

    public function delete(Request $request,$id)
    {
        $brand = Brand::findOrFail($id);

        $brand->delete($request->all());
        return redirect()->back();
    }

}


<?php

namespace App\Http\Controllers;

use App\Models\Uom;
use Illuminate\Http\Request;

class UomController extends Controller
{
    public function index()
    {
        $uoms =Uom::all();
        return view('uom.index', compact('uoms'));
    }

    public function create()
    {
        return view('uom.create');
    }

    public function store(Request $request)
    {
        Uom::create($request->all());
        return redirect()->back();
    }
    
    public function edit($id)
    {
        $uom = Uom::findOrFail($id);
        return view('uom.edit', compact('uom'));
    }

    public function update(Request $request, $id)
    {
        $uom = Uom::findOrFail($id);
        
        $uom->update($request->all());
        return redirect()->back();

    }

    public function delete(Request $request,$id)
    {
        $uom = Uom::findOrFail($id);

        $uom->delete($request->all());
        return redirect()->back();
    }

}


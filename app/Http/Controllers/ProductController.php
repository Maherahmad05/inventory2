<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Uom;
use App\Models\Brand;
use App\Models\Product;
use Image;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $product;

    public function __construct()
    {
       $this->product = new Product;
    }
    public function index()
    {
$products = Product::with('category','brand','uom')->get();
        return view('product.index', compact('products'));

        return view('product.index');
    }
    public function create()
    {
        $data = [
            'categorys' => Category::all(),
            'brands' => Brand::all(),
            'uoms' => Uom::all(),
        ];

        return view('product.create',$data);
    }
    public function store()
    {
        $product = Product::create($this->validateRequest());

        $this->storeImage($product);

        return redirect()->back();
    }
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('product.edit', compact('product'));
    }
    public function update(Request $request,Product $product)
    {
       $request->validate([
             'category_id'   => 'required',
             'brand_id'      => 'required',
             'uom_id'        => 'required',
             'name'          => 'required',
             'part_number'   => 'required',
             'descriptions'  => 'required',
             'move_type'     => 'required',
             'price'         => 'required',
             'currency'      => 'required',
             'image'         => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
             'remarks'       => 'required',
        ]);
        $input = $request->all();

        if($image = $request->file('image')){
            $destinationPath = 'images/';

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);

            $input['image'] = $profileImage;
        }else{
            unset($input['image']);
        }

        Product::update($input);

        return redirect()->route('product')->with('success','Product created successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        if(\File::exists(public_path('storage/'. $product->image)))
        {
            \File::delete(public_path('storage/'. $product->image));
        }

        return redirect()->back()->with(['success' => 'product berhasil di hapus']);
    }
    private function validateRequest(){
        return tap(request()->validate([
            'category_id'  => 'required',
            'brand_id'     => 'required',
            'uom'          => 'required',
            'part_number'  => 'required',
            'descriptions' =>  'required',
            'move_type'    =>  'required',
            'price'        =>  'required',
            'currency'     =>  'required',
            'remarks'      =>  'required',
            'images'       => 'required|image|max:5000',
        ]), function(){
            if(request()->hasFile('images')){
                request()->validate([
                    'images'    => 'required|image|max:5000',
                ]);
            }
        });
    }

    private function storeImage($product){
        if(request()->has('images')){
            $product->update([
                'images'  => request()->images->store('uploads','public'),
            ]);

            $image = Image::make(public_path('storage/'. $product->images))->fit(300,300, null, 'top-left');
            $image->save();
        }
    }
}
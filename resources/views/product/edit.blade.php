@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('product.update', $product->id )}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="">Product Name</label>
                <input type="text" name="name" id="" value="{{$product->name}}" class="form-control"> 
            </div>
            <div class="form-group">
                <label for="">Part Number</label>
                    <input type="text" name="part_number" id="" value="{{$product->part_number}}" class="form-control">
             </div>
             <div class="form-group">
                <label for="">Category</label>
                    <select name="category_id" id="" class="form-control">
                @foreach ($categorys as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Brand</label>
            <select name="brand_id" id="" class="form-control">
                @foreach ($brands as $brand)
                <option value="{{$brand->id}} ">{{$brand->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Uom</label>
            <select name="uom_id" id="" class="form-control">
                @foreach ($uoms as $uom)
                <option value="{{$uom->id}} ">{{$uom->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Move Type</label>
            <select name="move_type" id="" class="form-control">
                <option value="Fast">Fast</option>
                <option value="Slow">Slow</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Price</label>
            <div class="row">
                <div class="col-md-6">
                    <input type="text" name="currency" id="" value="{{$product->currency}}" class="form-control" placeholder="currentcy.....">
                </div>
                <div class="col-md-6">
                    <input type="text" name="price" id="" value="{{$product->price}}" class="form-control" placeholder="price">
                </div>
            </div>

        </div>
        <div class="form-group">
            <label for="">Image</label>
            <input type="file" name="image" id="" class="form-control">
            <img src="/images/{{ $product->image }}" width="300px">
        </div>
        <div class="form-group">
            <label for="">Remarks</label>
            <input type="text" name="remarks" id="" value="{{$product->remarks}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Descriptions</label>
            <input type="text" name="descriptions" id="" value="{{$product->descriptions}}" class="form-control">
        </div>
        <div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{route('category')}}" class="btn btn-primary">cancel</a>
        </div>
    </form>
</div>

@endsection
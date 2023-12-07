@extends('layouts.app')

@section('content')


<div class="container">
    <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Part Number</label>
            <input type="text" name="part_number" id="" class="form-control">
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
                <option value="{{$brand->id}}">{{$brand->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Uom</label>
            <select name="uom_id" id="" class="form-control">
                @foreach ($uoms as $uom)
                <option value="{{$uom->id}}">{{$uom->name}}</option>
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
                    <input type="text" name="currency" id="" class="form-control" placeholder="currency.....">
                </div>
                <div class="col-md-6">
                    <input type="text" name="price" id="" class="form-control" placeholder="price">
                </div>
            </div>

        </div>
        <div class="form-group">
            <label for="">Image</label>
            <input type="file" name="images" id="" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Remarks</label>
            <input type="text" name="remarks" id="" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Descriptions</label>
            <input type="text" name="descriptions" id="" class="form-control">
        </div>
        <div>
            <button type="submit" class="btn btn-success mt-3">Simpan</button>
            <a href="{{route('category')}}" class="btn btn-primary mt-3">cancel</a>
        </div>
    </form>
</div>



@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <a href="{{route('product.create')}}" class="btn btn-primary">Add Product</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Category</th>
                <th>Brand</th>
                <th>UOM</th>
                <th>Part Number</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>

                @forelse ($products as $product)
                <tr>
                    <td>{{$product->name}}</td>
                    <td>{{$product->category->name}}</td>
                    <td>{{$product->brand->name}}</td>
                    <td>{{$product->uom->name}}</td>
                    <td>{{$product->part_number}}</td>
                    <td>
                        <form action="" method="post">
                            <a href="{{route('product.edit', $product->id)}}" class="btn btn-sm btn-warning">Edit product</a>
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                    </tr>
                @empty

                @endforelse

        </tbody>
    </table>
</div>
@endsection

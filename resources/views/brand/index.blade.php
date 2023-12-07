@extends('layouts.app')

@section('content')

<div class="container">
    <table class="table table-striped">
    <a href="{{route('brands.create')}}" class="btn btn-primary bm-3">Add new brand</a>
        <thead>
            <tr>
                <th>Name</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            @foreach ($brands as $brand )
                <tr>
                    <td>{{$brand->name}}</td>
                    <td>
                    <form action="{{route('brand.delete', $brand->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('brand.edit', $brand->id)}}" class="btn btn-warning btn-sm">Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
               
               
            @endforeach
            </tr>
        </tbody>
    </table>
</div>

@endsection
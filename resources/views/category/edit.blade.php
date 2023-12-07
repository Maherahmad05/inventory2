@extends('layouts.app')

@section('content')

    <div class="container">
    <form action="{{route('category.update', $category->id)}}" method="post">
            @csrf  
            @method('PATCH')
            <div class="form-group">
                <label for="">Nama Category</label>
                <input type="text" name="name" id="" value="{{$category->name}}" class="form-control">
            </div>
            <div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{route('category')}}" class="btn btn-primary">Cancel</a>
            </div>
        </form>
    </div>

@endsection
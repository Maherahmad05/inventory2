@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="{{route('category.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Nama Category</label>
                <input type="text" name="name" id="" class="form-control">
            </div>
            <div>
                <button type="submit" class="btn btn-success mt-3">Simpan</button>
                <a href="{{route('category')}}" class="btn btn-primary mt-3">Cancel</a>
            </div>
        </form>
    </div>

@endsection
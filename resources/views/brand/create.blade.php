@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="{{route('brands.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Nama Brand</label>
                <input type="text" name="name" id="" class="form-control">
            </div>
            <div>
                <button type="submit" class="btn btn-success mt-3">Simpan</button>
                <a href="{{route('brands')}}" class="btn btn-primary mt-3">Cancel</a>
            </div>
        </form>
    </div>

@endsection